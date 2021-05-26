<?php

namespace App\Http\Controllers;

use App\Models\Opravy;
use Illuminate\Http\Request;
use Illuminate\Http\Error;
use Illuminate\Support\Facades\DB;

class ServisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $opravies = DB::table('opravies')->get();



        $data = [
            'opravies'  => $opravies

        ];

        return view('servis')->with($data);
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

    public function payProcess(Request $request)
    {
        //header('Content-Type: application/json');
        //require 'vendor/autoload.php';

        \Stripe\Stripe::setApiKey('sk_test_51IeJyqGqxTFkMeeJPuIbfHcw6hhrNUqcyzji3x0QRmwY9pOYNMrOXi2srQ3NQxVzfWv0ul0KiakGJTHCA9nwbKVl00GOjudUIR');

        try {


            // retrieve JSON from POST body

            $json_str = $request->getContent();
            $json_obj = json_decode($json_str);
           // dump($json_str);
           // die();


            $paymentIntent = \Stripe\PaymentIntent::create([
              'amount' => $json_obj->amount,
              'currency' => 'czk',
              "metadata" => ["Servis" => "6735"]

            ]);



            $output = [
              'clientSecret' => $paymentIntent->client_secret,
            ];

            return response()->json($output);

          } catch (\Error $e) {
            http_response_code(500);

            return response()->json(['error' => $e->getMessage()]);
          }

    }
    public function calculateOrderAmount(array $items): int {

        $repairprice = 4000*100;

        return $repairprice;
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
