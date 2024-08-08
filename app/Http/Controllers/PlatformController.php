<?php

namespace App\Http\Controllers;

use App\Models\Platform;
use Illuminate\Http\Request;

class PlatformController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $platform = Platform::all();


        return view('admin.platform.index');

    }

    public function create_platform(Request $request)
    {


        $platform = new Platform([
            'platform' => $request->platform,
        ]);

        $platform->save();


        return redirect()->route('platform.index');
    }


}
