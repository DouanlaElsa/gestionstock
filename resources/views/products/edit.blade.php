@extends('layouts.app')
@section("content")

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>
<body>
    <h2 class="text-3xl font-bold underline">Editer ton produit</h2>
    <form action="{{route('products.update', [ 'id'=> $products['id']] ) }}" method="POST" name="form_update">
    @method('PUT')
        @csrf
        <span  >Name</span><br>
        <input class="border p-3 " type="text" name="name" placeholder="entrer le nom de votre produit" value="{{$products ['name']}}"><br>
        @error('name')
            <span>{{$message}}</span>
        @enderror
        <span >Description</span><br>
        <input class="border p-3 " type="text" name="description" placeholder="entrer la description" value="{{$products ['description']}}"><br>
        <span  >Quantity</span><br>
        <input class="border p-3 " type="number" name="quantity" placeholder="entrer la description" value="{{$products ['quantity']}}"><br>
        @error('quantity')
            <span>{{$message}}</span>
        @enderror
        <span  >Stock_min</span><br>
        <input class="border p-3 " type="number" name="stock_min" placeholder="entrer le stock" value="{{$products ['stock_min']}}"><br>
        <span>Price</span><br>
            <input class="border p-3 " type="number" name="price" placeholder="entrer le prix"><br>
        <span  >Reference</span><br>
        <input class="border p-3 " type="text" name="reference" placeholder="entrer votre referenece" value="{{$products ['reference']}}"><br>
        <input class="bg-red-400 text-3xl font-bold " type="submit" value="edit" >
    </form>
    
</body>
</html>
@endsection