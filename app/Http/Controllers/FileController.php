<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\ImageManager;

class FileController extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
        return view('file.index');
    }

    public function store(Request $request)
    {
        $file = $request->file('file')->store('uploads');
//        dd(storage_path('app/' . $file));
        $image = (new ImageManager)->make(storage_path('app/'. $file));
        $image->insert(public_path('image/laravel.png'));
        $image->save();
    }
}
