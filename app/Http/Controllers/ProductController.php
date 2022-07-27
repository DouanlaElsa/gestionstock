<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

use function GuzzleHttp\Promise\all;

class ProductController extends Controller
{
    //
    public function index(Request $request)
    {
         //
      
        // $products =Product::query()->get();
        $user = $request->user();
        $products =Product::query()->where('user_id', $user->id)->get();

        return view('products.index',['products'=>$products]);
     }

     /**
      * Show the form for creating a new resource.
      *
      * @return \Illuminate\Http\Response
      */
     public function create()
     {
         //
         return view('products.create');
     }

     /**
     * Store a newly created resource in storage.
     *
      * @param  \Illuminate\Http\Request  $request
      * @return \Illuminate\Http\Response
      */
     public function store(Request $request)
     {
        $user = $request->user();
        $this->validate($request, [
            'name'=>['required', 'unique:products,name'],
            'description'=>['required'],
            'quantity'=>['required', 'integer'],
            'price'=>['required'],
        ]);
        // $products= Product::create($request->except('_token'));

        Product::query()-> create(array_merge($request->except(['_token']), ["user_id"=>$user->id]));
        return redirect()->route('products.index');
     }

     /**
      * Display the specified resource.
      *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
     {
        //
        $products=Product::findOrFail($id);
       return view('products.show', compact('products'));
        
     }

     /**
     * Show the form for editing the specified resource.
      *
     * @param  int  $id
      * @return \Illuminate\Http\Response
     */
     public function edit($id)
     {
        //
    //     $products=Product::findOrFail($id);
    //  return view('products.edit', compact('products'));
            $products=Product::find($id);
         return view('products.edit', [
          'products' => $products

      ]);
     }

     /**
      * Update the specified resource in storage.
      *
      * @param  \Illuminate\Http\Request  $request
      * @param  int  $id
      * @return \Illuminate\Http\Response
     */
     public function update(Request $request, $id)
     {
         //

         $this->validate($request, [
             'name'=>['required', 'unique:products,name'],
             'description'=>['required'],
             'quantity'=>['required'],
             'price'=>['required'],

        ]);
      
        
         $products=Product::find($id);
         $products->name=$request->name;
         $products->price=$request->price;
         $products->description=$request->description;
         $products->quantity=$request->quantity;
         $products->reference=$request->reference;
         $products->save();
         return redirect()->route('products.index');
     }

     /**
      * Remove the specified resource from storage.
      *
      * @param  int  $id
      * @return \Illuminate\Http\Response
      */
     public function destroy($id)
     {
         //
         $products = Product::where('id', $id)->delete();
        //  return view('products.index',[
        //      'product'=> $this->products,
        //  ]);
         return redirect()->route('products.index')
         ->with('success', 'Produit supprimer avec succes');
     }
}


