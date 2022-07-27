<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="2">
        <tr>
        <th class="pb-4 border pt-6 px-6">Name</th>
        <th class="pb-4 border pt-6 px-6">Description</th>
        <th class="pb-4 border pt-6 px-6">Price</th>
        <th class="pb-4 border pt-6 px-6">Quantity</th>
        <th class="pb-4 border pt-6 px-6">Stock_min</th>
        <th class="pb-4 border pt-6 px-6">Reference</th>
        </tr>
        <tr>
        <td>{{$product->name}}</td>
            <td class="border p-3 ">{{$product->description}}</td>
            <td class="border p-3 ">{{$product->price}}</td>
            <td class="border p-3 ">{{$product->quantity}}FcfA</td>
            <td class="border p-3 ">{{$product->stock_min}}</td>
            <td class="border p-3 ">{{$product->reference}}</td>
        </tr>

    </table>
</body>
</html>