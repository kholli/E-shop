<?php

namespace App\Http\Controllers;

use App\Http\Requests\CheckoutRequest;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Http\Error;

class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('checkout');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    public function paymentProcess(Request $request)
    {
        //header('Content-Type: application/json');
        //require 'vendor/autoload.php';
        $contents = Cart::content()->map(function($item){
            return $item->model->slug.'- '.$item->qty;
        })->values()->toJson();

        \Stripe\Stripe::setApiKey('sk_test_51IeJyqGqxTFkMeeJPuIbfHcw6hhrNUqcyzji3x0QRmwY9pOYNMrOXi2srQ3NQxVzfWv0ul0KiakGJTHCA9nwbKVl00GOjudUIR');

        try {


            // retrieve JSON from POST body

            $json_str = $request->getContent();
            $json_obj = json_decode($json_str);



            $paymentIntent = \Stripe\PaymentIntent::create([
              'amount' => $this->calculateOrderAmount($json_obj->items),
              'currency' => 'czk',
              'metadata' => [   'contents'=> $contents,
                                'quantity' => Cart::instance('default')->count(),],


            ]);



            $output = [
              'clientSecret' => $paymentIntent->client_secret,
            ];

            Cart::instance('default')->destroy();
            return response()->json($output);

          } catch (\Error $e) {
            http_response_code(500);

            return response()->json(['error' => $e->getMessage()]);
          }

    }
    public function calculateOrderAmount(array $items): int {

        $myprice = Cart::total()*100;

        return $myprice;
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
        //
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
    }
}
