<?php

use App\Http\Controllers\Crear_Producto;
use App\Models\Product;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index-productos', function(){
   /*
    //$product = Product::find(2);
    //SELECT * FROM PRODUCTS WHERE ID=NUMERO;
    
    //return "Ruta de productos";
    $product = new Product();
    $product->name = 'Pacífico media';
    $product->product_number = 3234;
    $product->desc = 'Cerveza 355ml, clara';
    $product->branch = 'Pacífico';
    $product->price = '20.00';

    $product->save();
    return $product;*/
    /*
    $product = Product::orderBy('name', 'desc') //ordenamos los registros por nombre de manera descendente
    ->select('name','price') //muestra nada más la columna del nombre y precio
    ->take(2) //Toma los registros en orden de lista, en este caso tomamos los primeros 2
    ->get(); //necesario para pedirle la info a la BD
//pregunta de examen: los nombres en las tablas deben ser en plural y de preferencia en inglés
//los nombres de los modelos deben estar en singular y con la primer letra en mayúscula

    return $product;*/


});

Route::get('/product', [Crear_Producto::class, 'index'])->name('producto.index');

Route::get('/product-create', [Crear_Producto::class, 'create'])->name('producto.create');

Route::post('/product', [Crear_Producto::class, 'store'])->name('producto.store');

Route::get('/product-show/{product}',[Crear_Producto::class, 'show'])->name('producto.show');

Route::get('/product-update/{product}', [Crear_Producto::class, 'update'])->name('producto.update');

Route::put('/product-change/{product}', [Crear_Producto::class, 'change'])->name('producto.change');

Route::get('/product-delete/{product}', [Crear_Producto::class, 'delete'])->name('producto.delete');