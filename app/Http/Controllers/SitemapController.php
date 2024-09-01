<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Sitemap\SitemapGenerator;

class SitemapController extends Controller
{
    public function update_dev()
    {
        SitemapGenerator::create(config('app.url'))->writeToFile(public_path('sitemap.xml'));

        return redirect()->route('admin')->with('success', 'Карта сайта успешно обновлена');
    }
}
