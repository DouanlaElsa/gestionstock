
@vite('resources/css/app.css')


<div class="flex flex-col">
    <div class="p-2 px-10">
     <!-- <a href="">home</a> -->
     <a href="{{route('dashboard')}}">Home</a>

    </div>
    <div class="p-2 px-10">
        <!-- <a href="">products</a> -->
        <a href="{{route('products.index')}}">Products</a>

    </div>
    <form action="{{route('logout')}}" method="POST" class="p-2 px-10">
        @csrf
        <button type="submit">logout</button>
    </form>

</div>