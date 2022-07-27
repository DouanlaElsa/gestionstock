@extends('layouts.app') 
@section("content")
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body>
    <h1 class="text-3xl font-bold underline mb-4 ">listes de mes produits</h1>

    <div>
        @if ($message= Session::get('success'))
        <p class="color-red-100">{{$message}}</p>
        @endif
    </div>
    <!-- pt-4 text-center rounded-full bg-red-500 font-bold text-2xl -->

    <button class="button  bg-red-500 rounded">
    <a href="{{ route( 'products.create' ) }}" class="p-2 font-bold text-white hover:text-black hover:text-xl" >create</a>
    </button>
<div class="pt-6">
    <table border="2" class="w-full whitespace-nowrap ">
        <tr class="text-left font-bold">
            <th class="pb-4 border pt-6 px-6" >Id</th>
        <th class="pb-4 border pt-6 px-6">Name</th>
        <th class="pb-4 border pt-6 px-6">Description</th>
        <th class="pb-4 border pt-6 px-6">Price</th>
        <th class="pb-4 border pt-6 px-6" >Quantity</th>
        <th class="pb-4 border pt-6 px-6">Stock_min</th>
        <th class="pb-4 border pt-6 px-6">Reference</th>
        <th class="pb-4 border pt-6 px-6">Editer</th>
        <th class="pb-4 border pt-6 px-6">Delete</th>
        </tr>
        
        @foreach ($products as $product )
        <tr class="hover:bg-gray-100 focus-whithin:bg-gray-100">
        <td class="border p-3 text-center ">{{$product ['id']}}</td>
            <td class="border p-3 ">{{$product ['name']}}</td>
            <td class="border p-3 ">{{$product ['description']}}</td>
            <td class="border p-3 ">{{$product ['price']}}</td>
            <td class="border p-3 ">{{$product ['quantity']}}FcfA</td>
            <td class="border p-3 ">{{$product ['stock_min']}}</td>
            <td class="border p-3 ">{{$product ['reference']}}</td>
            <td><a href="{{route('products.edit', ['id'=>$product['id']])}}" class="bg-red-200 border p-4 ">edit</a></td>
            <td>
               <form action="{{route('products.destroy', ['id'=>$product['id']])}}" method="POST">
                @method('DELETE')
                @csrf
            <input type="submit" class=" bg-red-200 border p-4" value="delete"></td>
            </form> 
        </tr>
        </div>
            
        @endforeach
        <!-- <input class="bg-indigo-500 p-2 arrondi-md text-white" type="submit" value="create" href=" {{ route ( 'products.create' ) }} "> -->
        <!-- <button class="bg-indigo-500 p-2 arrondi-md text-white" href=" {{ route ( 'products.create' ) }} ">create</button> -->
       

    </table>
    
</body>
</html>
@endsection