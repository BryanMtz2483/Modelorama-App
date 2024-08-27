<x-app-layout>

        <!--<p class="text-6xl tex-blue-900 dark:text-white">Numero de producto: </p>
        <p class="text-4xl font-thin text-gray-900 dark:text-white">{{$productDetail->product_number}}</p>
        <hr class="h-px my-8 bg-gray-200 border-0 dark:bg-gray-700">

        <p class="text-6xl text-blue-900 dark:text-white">Nombre: </p>
        <p class="text-4xl font-thin text-gray-900 dark:text-white">{{$productDetail->name}}</p>
        <hr class="h-px my-8 bg-gray-200 border-0 dark:bg-gray-700">
    
        <p class="text-6xl text-blue-900 dark:text-white">Descripcion: </p>
        <p class="text-4xl font-thin text-gray-900 dark:text-white">{{$productDetail->desc}}</p>
        <hr class="h-px my-8 bg-gray-200 border-0 dark:bg-gray-700">
    
        <p class="text-6xl text-blue-900 dark:text-white">Precio: </p>
        <p class="text-4xl font-thin text-gray-900 dark:text-white">{{$productDetail->price}}</p>
        <hr class="h-px my-8 bg-gray-200 border-0 dark:bg-gray-700">-->
        <style>
            img{
                width: 90%;
                margin-left: 6%;
                border-radius: 30px;
            }
            #todoElProducto{
                text-align: center;
                padding-left: 30%;
                padding-right:30% ;
            }
            button{
                width: 30%;
            }
        </style>
        
    
    <div id = "todoElProducto">
        <div class="p-5">
            <a href="#">
                <img class="rounded-t-lg" src="https://ambar.com/wp-content/uploads/2019/05/Cerveza-scaled.jpg" alt="" />
            </a>
            <p href="#">
                <h5 class="text-5xl font-bold tracking-tight text-blue-900 dark:text-white">DETALLES DE PRODUCTO</h5>
            </p>
            <br>
            <p class="text-2xl font-bold text-gray-700 dark:text-gray-400">Id del Producto:</p>

            <p class="text-2xl font-thin text-gray-900 dark:text-white">{{$productDetail->id}}</p>
            <br>
            <p class="text-2xl font-bold text-gray-700 dark:text-gray-400">Número de Producto:</p>

            <p class="text-2xl font-thin text-gray-900 dark:text-white">{{$productDetail->product_number}}</p>
            <br>
            <p class="text-2xl font-bold text-gray-700 dark:text-gray-400">Nombre del Producto:</p>

            <p class="text-2xl font-thin text-gray-900 dark:text-white">{{$productDetail->name}}</p>
            <br>
            <p class="text-2xl font-bold text-gray-700 dark:text-gray-400">Descripción del Producto:</p>
            <br>
            <p class="text-2xl font-thin text-gray-900 dark:text-white">{{$productDetail->desc}}</p>
            <br>
            <p class="text-2xl font-bold text-gray-700 dark:text-gray-400">Precio:</p>

            <p class="text-2xl font-thin text-gray-900 dark:text-white">{{$productDetail->price}}</p>
            <br>
        </div>
        <a href="{{route('producto.update',$productDetail->id)}}" type="d" class="text-white bg-gradient-to-br from-green-400 to-blue-600 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-green-200 dark:focus:ring-green-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">ACTUALIZAR</a>
        <a href="{{route('producto.delete',$productDetail->id)}}" type="button" method="DELETE" class="text-white bg-gradient-to-br from-green-400 to-blue-600 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-green-200 dark:focus:ring-green-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">ELIMINAR</a>
    </div>
</x-app-layout>