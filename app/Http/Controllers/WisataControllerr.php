<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Wisata;
class WisataControllerr extends Controller
{
    public function index()
    {
        return view('wisata', [
            "title" => "wisata",
            "wisatas" => Wisata::all()
        ]);
    }

    public function show($id)
    {
        return view('wisatas', [
            "title" => "wisatas",
            "wisata" => Wisata::find($id)
        ]);
    }
}
