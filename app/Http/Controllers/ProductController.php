<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Models\Filter;
use App\Models\FilterPrice;
use App\Models\FilterService;
use App\Models\FilterPlatform;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $product = Product::paginate(10);


        return view('admin.product.index', compact('product'));

    }
    public function category(Request $request)
    {
        $category = new Category([
            'name_category' => $request->name_category,
            'desc_category' => $request->desc_category,
            'file' => $request->file,
            'path' => $request->path,
        ]);

        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $img_path = Storage::disk('product')->putFile('categories', $file);

            $category->file = $file->getClientOriginalName();
            $category->path = $img_path;
        }

        $category->save();

        return redirect()->route('product.index');
    }

    public function product(Request $request)
    {
        $category = Category::where('name_category', $request->category)->first();

        $product = new Product([
            'product' => $request->product,
            'image_platform' => $request->image_platform,
            'desc_product' => $request->desc_product,
            'price' => $request->price,
            'product_img' => $request->product_img,
            'product_param' => $request->product_param,
            'info_shop' => $request->info_shop,
            'info_returns' => $request->info_returns,
            'question_product' => $request->question_product,
            'type_service' => $request->type_service,
            'param_calc' => $request->param_calc,
            'path_img_product' => $request->path_img_product,
            'category'=>$request->category,
            'filter_price'=>$request->filter_price,
            'filter_service'=>$request->filter_service,
            'filter_platform'=>$request->filter_platform,
            'category_id' => $category ? $category->id : null,
        ]);

        /* if ($request->hasFile('product_img')) {
            $file = $request->file('product_img');
            $path_img_product = Storage::disk('product')->putFile('products', $file);

            $product->product_img = $file->getClientOriginalName();
            $product->path_img_product = $path_img_product;
        } */

        if($request->hasFile('product_img'))
        {
            $product_img = $request->file('product_img');
            $path_img_product_arr = [];
            $product_img_arr = [];

            foreach ($product_img as $file)
            {
                $path = Storage::disk('product')->putFile('products', $file);
                $fullPath = "https://co19736.tw1.ru/product/" . $path;
                $path_img_product_arr[] = $fullPath;
                $product_img_arr[] = $file->getClientOriginalName();
            }

            $product->path_img_product = implode(",", $path_img_product_arr);
            $product->product_img = implode(",", $product_img_arr);
        }

        $product->save();

        return redirect()->route('product.index');
    }

    public function filter(Request $request)
    {
        $filter = new Filter([
            'filter_price' => $request->filter_price,
            'filter_service' => $request->filter_service,
            'filter_platform' => $request->filter_platform,

        ]);

        $filterprice = new FilterPrice([
            'filter_price' => $request->filter_price,
        ]);

        $filterservice = new FilterService([
            'filter_service' => $request->filter_service,
        ]);

        $filterplatform = new FilterPlatform([
            'filter_platform' => $request->filter_platform,
        ]);



        $filter->save();
        $filterprice->save();
        $filterservice->save();
        $filterplatform->save();

        return redirect()->route('product.index');
    }

    public function destroy($id)
    {
        /* $product = Product::findOrFail($id);

        // Удаление файла из хранилища
        if ($product->path_img_product) {
            Storage::disk('product')->delete($product->path_img_product);
        }

        // Удаление продукта из базы данных
        $product->delete();

        return redirect()->route('product.index')->with('success', 'Продукт успешно удален.'); */

        $product = Product::findOrFail($id);

        // Удаляем файлы из хранилища
        $path_img_product = explode(',', $product->path_img_product);
        $product_img = explode(',', $product->product_img);

        foreach ($path_img_product as $path) {
            Storage::disk('product')->delete(str_replace('https://co19736.tw1.ru/product/', '', $path));
        }

        // Удаляем запись из базы данных
        $product->delete();

        return redirect()->route('product.index')->with('success', 'Продукт успешно удален.');
    }

}



