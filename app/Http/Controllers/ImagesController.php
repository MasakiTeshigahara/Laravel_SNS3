<?php

namespace App\Http\Controllers;
use App\Models\Image;

use Illuminate\Http\Request;

class ImagesController extends Controller
{
    public function index()
    {
        $images = Image::all();
        return view('index', ['images'=>$images]);
    }
    public function store(Request $request)
    {
        $image = new Image();
        $image->image = base64_encode(file_get_contents($request->image));
        $image->save();
        return redirect('/');
    }
}
