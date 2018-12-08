<?php

namespace App\Http\Controllers;

use App\Jobs\DrawImageWatermark;
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
        $this->dispatch(new DrawImageWatermark($file));
    }
}
