<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Http\Requests\ProductRequest;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products=Product::all();
        return view ('products.index',['products'=>$products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Product $product)
    {
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
      $data=$request->all();
      $data['establishment_id']=\Auth::user()->establishment_id;
      // Product::create([
      //   'name' => $data['name'],
      //   'description' => $data['description'],
      //   'price_cents'=>(int)($data['price_cents']*100),
      //   'is_available'=>$data['is_available'],
      //   'establishment_id'=>$data['establishment_id']
      //     ]);

$product=Product::create([
  'name' => $data['name'],
  'description' => $data['description'],
  'price_cents'=>(int)($data['price_cents']*100),
  'is_available'=>$data['is_available'],
  'establishment_id'=>$data['establishment_id']
    ]);

        if ($request->hasFile('image')){
          $imageFile = $request->file('image');

          $imagePath = $imageFile->storeAs(
            "images/products/$product->id",
            "image.jpg",
            "public"
          );

          $product->update(['image_path'=> $imagePath]);
        }


      return redirect ()->route('product.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view ('products.show',['product'=>$product]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
          return view('products.edit',['product'=> $product]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductRequest $request, Product $product)
    {
        $data = $request->validated();
      $product->update($data);

      return redirect ()->route('product.show',$product->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
      $product-> delete();
      return redirect()->route('product.index');
    }
}
