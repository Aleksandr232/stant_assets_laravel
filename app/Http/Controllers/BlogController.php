<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.blog.index');
    }

    public function create_blog(Request $request)
    {
        $blog = new Blog([
            'content_blog' => $request->content_blog,
            'name_post' => $request->name_post,
        ]);

        if ($request->hasFile('img_post')) {
            $img_post = $request->file('img_post');
            $path_img_post_arr = [];
            $img_post_arr = [];

            foreach ($img_post as $file) {
                $path = Storage::disk('blog')->putFile('posts', $file);
                $fullPath = "https://co19736.tw1.ru/blog/" . $path;
                $path_img_post_arr[] = $fullPath;
                $img_post_arr[] = $file->getClientOriginalName();
            }

            $blog->path_img_post = implode(",", $path_img_post_arr);
            $blog->img_post = implode(",", $img_post_arr);
        }

        $blog->save();

        return redirect()->route('blog.index');
    }

    public function blog(Request $request, $id, $name){

        $blog = Blog::query()->find($id);

        return view('site.blog.blog', compact('blog', 'name'), ['scrollToBlog' => true]);
    }

}
