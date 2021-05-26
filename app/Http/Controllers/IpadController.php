<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IpadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        if(request()->category){

            $products = Product::with('categories')->whereHas('categories', function($query){
                $query->where('sorting', request()->category);
            })->get();
            $categories = Category::where('id', '14')
                                            ->orWhere('id', '15')
                                            ->orWhere('id', '16')
                                            ->orWhere('id', '17')
                                            ->get();




        } else{

            $products = Product::where('sorting','iPad 8.Gen')
                                        ->orWhere('sorting','iPad Air')
                                        ->orWhere('sorting','iPad Mini')
                                        ->orWhere('sorting','iPad Pro')
                                        ->inRandomOrder()
                                        ->get();

            $categories = Category::where('id', '14')
                                        ->orWhere('id', '15')
                                        ->orWhere('id', '16')
                                        ->orWhere('id', '17')
                                        ->get();


        }

        $data = [
            'products'  => $products,
            'categories'   => $categories
        ];

        return view('ipad')->with($data);
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
