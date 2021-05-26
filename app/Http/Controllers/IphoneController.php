<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Builder;

class IphoneController extends Controller
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
            $categories = Category::where('id', '1')
                                            ->orWhere('id', '2')
                                            ->orWhere('id', '3')
                                            ->orWhere('id', '4')
                                            ->orWhere('id', '5')
                                            ->orWhere('id', '6')
                                            ->orWhere('id', '7')
                                            ->get();




        } else{

            $products = Product::where('sorting','iPhone 11')
                                            ->orWhere('sorting','iPhone 12')
                                            ->orWhere('sorting','iPhone 12 mini')
                                            ->orWhere('sorting','iPhone 12 Pro')
                                            ->orWhere('sorting','iPhone 12 Pro Max')
                                            ->orWhere('sorting','iPhone iPhone SE')
                                            ->orWhere('sorting','iPhone iPhone XR')
                                            ->inRandomOrder()
                                            ->get();

            $categories = Category::where('id', '1')
                                            ->orWhere('id', '2')
                                            ->orWhere('id', '3')
                                            ->orWhere('id', '4')
                                            ->orWhere('id', '5')
                                            ->orWhere('id', '6')
                                            ->orWhere('id', '7')
                                            ->get();


        }


        $data = [
            'products'  => $products,
            'categories'   => $categories
        ];

        return view('iphone')->with($data);
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
