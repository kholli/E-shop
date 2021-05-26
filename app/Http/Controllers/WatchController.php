<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;

class WatchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /*
               $products = DB::table('products')->where('sorting','Apple Watch Nike')
                                        ->orWhere('sorting','Apple Watch SE')
                                        ->orWhere('sorting','Apple Watch 6')
                                        ->orWhere('sorting','Apple Watch 3')
                                        ->get();
        */
        if(request()->category){

            $products = Product::with('categories')->whereHas('categories', function($query){
                $query->where('sorting', request()->category);
            })->get();
            $categories = Category::where('id', '10')
                                            ->orWhere('id', '11')
                                            ->orWhere('id', '12')
                                            ->orWhere('id', '13')
                                            ->get();




        } else{

            $products = Product::where('sorting','Apple Watch Nike')
                                        ->orWhere('sorting','Apple Watch SE')
                                        ->orWhere('sorting','Apple Watch 6')
                                        ->orWhere('sorting','Apple Watch 3')
                                        ->inRandomOrder()
                                        ->get();

            $categories = Category::where('id', '10')
                                    ->orWhere('id', '11')
                                    ->orWhere('id', '12')
                                    ->orWhere('id', '13')
                                    ->get();


        }

        $data = [
            'products'  => $products,
            'categories'   => $categories
        ];


        return view('watch')->with($data);
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
        //
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
