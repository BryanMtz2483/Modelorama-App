<x-app-layout>
    <p class="text-6xl text-gray-500 dark:text-white">Número de producto:</p>
    <p>{{$productDetail -> product_number}}</p>
    <hr class="w-48 h-1 mx-auto my-4 bg-gray-100 border-0 rounded md:my-10 dark:bg-gray-700">
    <p class="text-6xl text-gray-500 dark:text-white">Nombre:</p>
    <p>{{$productDetail -> name}}</p>
    <hr class="w-48 h-1 mx-auto my-4 bg-gray-100 border-0 rounded md:my-10 dark:bg-gray-700">
    <p class="text-6xl text-gray-500 dark:text-white">Descripción:</p>
    <p>{{$productDetail -> desc}}</p>
    <hr class="w-48 h-1 mx-auto my-4 bg-gray-100 border-0 rounded md:my-10 dark:bg-gray-700">
    <p class="text-6xl text-gray-500 dark:text-white">Precio:</p>
    <p>{{$productDetail -> price}}</p>
    <hr class="w-48 h-1 mx-auto my-4 bg-gray-100 border-0 rounded md:my-10 dark:bg-gray-700">
</x-app-layout>