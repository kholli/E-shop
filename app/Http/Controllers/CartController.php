<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Models\Product;
use Illuminate\Http\Request;


class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $mightAlsoLike= Product::mightAlsoLike()->get();
        return view('cart')->with('mightAlsoLike', $mightAlsoLike);;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $duplicates = Cart::search(function($cartItem, $rowId) use ($request){
            return $cartItem->id === $request->id;

        });

        if($duplicates->isNotEmpty()){
            return redirect()->route('cart.shop')->with('success-message', 'Toto zboží už je v košíku');
        }

       Cart::add($request->id, $request->name, 1, $request->price)
       ->associate('App\Models\Product');

       return redirect()->route('cart.shop')->with('success-message', 'Zboží bylo přídano do košíku');

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
        $validator = Validator::make($request->all(),[
            'quantity' => 'required|numeric|between:1,5'
        ]);
       Cart::update($id, $request->quantity);

       if ($validator->fails()){
           session()->flash('errors', collect(['Množství musí být mezi 1 a 5']));
           return response()->json(['success' => false], 400);

       }

       session()->flash('success-message', 'Množství bylo aktualizováno!');
       return response()->json(['success' => true]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Cart::remove($id);

        return back()->with('success-message', 'Zboží bylo odebráno');
    }
}
