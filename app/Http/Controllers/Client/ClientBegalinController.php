<?php

namespace App\Http\Controllers\Client;

use App\Models\Begalin;
use Illuminate\Http\Request;
use App\Http\Requests\StoreBegalinRequest;
use App\Http\Controllers\Client\Controller;
use App\Http\Requests\UpdateBegalinRequest;

class ClientBegalinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $begalins = Begalin::all();
        return view('client.index', compact('begalins'));
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
     * @param  \App\Http\Requests\StorebegalinRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\begalin  $begalin
     * @return \Illuminate\Http\Response
     */
    public function show(begalin $begalin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\begalin  $begalin
     * @return \Illuminate\Http\Response
     */
    public function edit(begalin $begalin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatebegalinRequest  $request
     * @param  \App\Models\begalin  $begalin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, begalin $begalin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\begalin  $begalin
     * @return \Illuminate\Http\Response
     */
    public function destroy(begalin $begalin)
    {
        //
    }
}
