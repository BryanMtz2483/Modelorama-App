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
            #btnupdate{
                width: 30%;
            }
        </style>
            @if(session('edited'))
            <div class="flex items-center p-4 mb-4 text-sm text-blue-800 border border-blue-300 rounded-lg bg-blue-50 dark:bg-gray-800 dark:text-blue-400 dark:border-blue-800" role="alert">
                    <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                    </svg>
                    <span class="sr-only">Alerta</span>
                    <div>
                        <span class="font-medium alert alert-success">Registro actualizado correctamente</span>
                    </div>
                </div>
            </div>
    @endif
<br> <br> <br> <br> <br>
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
        <form action="{{route('producto.delete',$productDetail->id)}}" method="post" id="eliminate-form">
            @csrf
            @method('DELETE')
            <button onclick="confirmar_eliminar()" type="button" class="text-white bg-gradient-to-br from-green-400 to-blue-600 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-green-200 dark:focus:ring-green-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">ELIMINAR</button>
            </form>
        <a href="{{route('producto.update',$productDetail->id)}}" id="btnupdate" type="button" class="text-white bg-gradient-to-br from-green-400 to-blue-600 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-green-200 dark:focus:ring-green-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">ACTUALIZAR</a>
    </div>
    <script>
    function confirmar_eliminar() {
        Swal.fire({
            title: '¿Estás seguro?',
            text: 'Esta acción no se puede deshacer.',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Delete',
            cancelButtonText: 'Cancel',  
        }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById('eliminate-form').submit();
            }
        });
    }
</script>
</x-app-layout>