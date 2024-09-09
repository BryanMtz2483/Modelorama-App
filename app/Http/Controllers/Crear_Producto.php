<?php

namespace App\Http\Controllers;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\Product;
use Illuminate\Http\Request;

class Crear_Producto extends Controller
{
    public function index(){
        $productos = Product::orderBy('id','desc')-> paginate();
        return view('product.index-producto', compact('productos'));
    }
    public function create(){
        return view('product.create-producto');
    }
    public function show($product){
        $productDetail = Product::find($product);
        return view('product.show-producto', compact('productDetail'));
    }
    public function store (Request $request){
        $product = new Product();

        $product->name = $request->name;
        $product->branch = $request->branch;
        $product->product_number = $request->product_number;
        $product->price = $request->price;
        $product->desc = $request->desc;
        
        $product->save();

        return redirect()->route('producto.index');
    }
    public function update($product){
        $lastProduct = Product::find($product);
        return view('product.update-producto',compact('lastProduct'));
    }
    public function change(Request $request, $id){
        $product = Product::findOrFail($id);

        $product->name = $request->name;
        $product->branch = $request->branch;
        $product->product_number = $request->product_number;
        $product->price = $request->price;
        $product->desc = $request->desc;
        $product->save();
        return redirect()-> route('producto.show', $product)->with('edited','Producto Actualizado');
    }
    public function delete($product){
        
        $eliminar = Product::findOrFail($product);

        $eliminar -> delete();
        
        return redirect()-> route('producto.index')->with('success','Producto Borrado');
    }
    public function getReport(){
        $products = Product::all();
        $pdf = Pdf::loadView('product.report-product', compact('products'));
        return $pdf->stream('reporte-productos.pdf');
    }
}
