<x-app-layout>
    <style>
        .tabla-productos:hover{
            background-color: lightyellow;
        }
    </style>
<br> <br> <br> <br>

    @if(session('success'))
        <div class="flex items-center p-4 mb-4 text-sm text-red-800 border border-red-300 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400 dark:border-red-800" role="alert">
            <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
            </svg>
            <span class="sr-only">Alerta</span>
            <div>
                <span class="font-medium alert alert-success">Registro eliminado correctamente</span>
            </div>
        </div>
    </div>
@endif 
    <br>
    <div>
    </div>
    <div class=" relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-blue-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Nombre
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Descricpción
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Precio
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Acción
                    </th>
                </tr>
            </thead>
            <tbody>
    @foreach($productos as $product)
        <tr class="tabla-productos border-b dark:bg-gray-800 dark:border-gray-700">
            <th scope="row" class=" px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                <a href="{{route('producto.show',$product->id)}}">{{$product -> name}} </a>
            </th>
            <td class="px-6 py-4">
                {{$product -> desc}}
            </td>
            <td class="px-6 py-4">
                {{$product -> price}}
            </td>
            <td class="px-6 py-4">
                <a href="{{route('producto.update', $product -> id)}}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Editar</a>
            </td>
        </tr>
    @endforeach
</tbody>
</table>
</div>
{{$productos->links()}}

</x-app-layout>