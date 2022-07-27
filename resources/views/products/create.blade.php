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
    <h2  class="text-3xl font-bold underline">Formulaire de creation des produits</h2>
    
    <form action="{{route('products.store')}}" method="POST" name="form_create">
        @csrf
        <span>Name</span><br>
        <input class="border p-3 " type="text" name="name" placeholder="entrer le nom de votre produit"><br>
        @error('name')
            <span>{{$message}}</span>
        @enderror
        <span>Description</span><br>
        <input class="border p-3 " type="text" name="description" placeholder="entrer la description"><br>
        <span>Quantity</span><br>
        <input class="border p-3 " type="number" name="quantity" placeholder="entrer la description"><br>
        @error('quantity')
            <span>{{$message}}</span>
            @enderror
            <span>Stock_min</span><br>
            <input class="border p-3 " class="border p-3 " type="number" name="stock_min" placeholder="entrer le stock"><br>
            <span>Price</span><br>
            <input class="border p-3 " type="number" name="price" placeholder="entrer le stock"><br>
        <span>Reference</span><br>
        <input class="border p-3 " type="text" name="reference" placeholder="entrer votre description"><br>
        <input class="bg-red-400 text-3xl font-bold " type="submit" value="ADD">
    </form>
    
</body>
</html>
@endsection