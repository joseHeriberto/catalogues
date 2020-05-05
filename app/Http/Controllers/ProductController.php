<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Product= Product::all();
        return view('phoneHuawei', ['products'=>$Product]);
    }
    public function motorola()
    {
        $Product= Product::all();
        return view('phoneMotorola', ['products'=>$Product]);
    }

    public function samsung()
    {
        $Product= Product::all();
        return view('phoneSamsung', ['products'=>$Product]);
    }
    public function ios()
    {
        $Product= Product::all();
        return view('phoneIos', ['products'=>$Product]);
    }
    public function xbox()
    {
        $Product= Product::all();
        return view('consoleXbox', ['products'=>$Product]);
    }
    public function ps()
    {
        $Product= Product::all();
        return view('consolePs', ['products'=>$Product]);
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
