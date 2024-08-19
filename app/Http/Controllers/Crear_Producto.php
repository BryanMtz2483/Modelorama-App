<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class Crear_Producto extends Controller
{
    public function index(){
        $productos = Product::all();
        return view('product.index-producto', compact('productos'));
    }
    public function create(){
        return view('product.create-producto');
    }
    public function show(){
        return view('product.show-producto');
    }
}
