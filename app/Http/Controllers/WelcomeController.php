<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{

    public function index(){

        $products = Product::inRandomOrder()->take(12)->get();

        return view('welcome')->with('products', $products);

    }


    /**
     * Display the specified resource.
     *
     * @param  int  $slug
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        //slug equal to slug
        $product= Product::where('slug', $slug)->firstOrFail();
        $mightAlsoLike= Product::where('slug', '!=', $slug)->mightAlsoLike()->take(4)->get();

        return view('product')->with([
            'product'=> $product,
            'mightAlsoLike' => $mightAlsoLike,
            ]);
    }


}
