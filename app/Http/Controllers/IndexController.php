<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // dd($request);
        return View::make('home')->with('index', $request->index+1);
    }

    public function getData(){
        $array = array(
            array(
                'name' => 'Ultramilk 500ml',
                'price' => 'Rp 7000',
                'description' => 'Rasa Stoberi'
            ),

            array(
                'name' => 'Indomie Goreng 100gr',
                'price' => 'Rp 3000',
                'description' => 'tanpa telor'
            ),

            array(
                'name' => 'Telor',
                'price' => 'Rp 2000',
                'description' => 'masih mentah'
            ),

            array(
                'name' => 'Mouse',
                'price' => 'Rp 110000',
                'description' => 'kualitas bagus'
            )
       );
    //    dd($array);
       return View::make('product')->with('array', $array);
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
