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

    public function update_product(Request $request, $id)
    {
        $product = Product::findOrFail($id);

        if ($request->has('product')) {
            $product->product = $request->product;
        }

        if ($request->has('image_platform')) {
            $product->image_platform = $request->image_platform;
        }

        if ($request->has('desc_product')) {
            $product->desc_product = $request->desc_product;
        }

        if ($request->has('price')) {
            $product->price = $request->price;
        }

        if ($request->has('product_param')) {
            $product->product_param = $request->product_param;
        }

        if ($request->has('info_shop')) {
            $product->info_shop = $request->info_shop;
        }

        if ($request->has('info_returns')) {
            $product->info_returns = $request->info_returns;
        }

        if ($request->has('question_product')) {
            $product->question_product = $request->question_product;
        }

        if ($request->has('type_service')) {
            $product->type_service = $request->type_service;
        }

        if ($request->has('param_calc')) {
            $product->param_calc = $request->param_calc;
        }

        if ($request->has('category')) {
            $category = Category::where('name_category', $request->category)->first();
            $product->category = $request->category;
            $product->category_id = $category ? $category->id : null;
        }

        if ($request->has('filter_price')) {
            $product->filter_price = $request->filter_price;
        }

        if ($request->has('filter_service')) {
            $product->filter_service = $request->filter_service;
        }

        if ($request->has('filter_platform')) {
            $product->filter_platform = $request->filter_platform;
        }

        if ($request->hasFile('product_img')) {
            $product_img = $request->file('product_img');
            $path_img_product_arr = explode(',', $product->path_img_product);
            $product_img_arr = explode(',', $product->product_img);

            foreach ($product_img as $file) {
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
        $filter = new Filter();
        $filterprice = new FilterPrice();
        $filterservice = new FilterService();
        $filterplatform = new FilterPlatform();

        if ($request->has('filter_price') && $request->filter_price !== null) {
            $filterprice->filter_price = $request->filter_price;
            $filterprice->save();
        }

        if ($request->has('filter_service') && $request->filter_service !== null) {
            $filterservice->filter_service = $request->filter_service;
            $filterservice->save();
        }

        if ($request->has('filter_platform') && $request->filter_platform !== null) {
            $filterplatform->filter_platform = $request->filter_platform;
            $filterplatform->save();
        }

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



