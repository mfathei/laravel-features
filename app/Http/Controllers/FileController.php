<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        var_dump($file);
    }
}
