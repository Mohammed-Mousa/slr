<?php

namespace App\Http\Controllers;

use App\Models\ClientsNum;
use Illuminate\Http\Request;

class ClientsNumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
			$num = ClientsNum::all();
			return view('clients.clients', compact('num'));
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
     * @param  \App\Models\ClientsNum  $clientsNum
     * @return \Illuminate\Http\Response
     */
    public function show(ClientsNum $clientsNum)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ClientsNum  $clientsNum
     * @return \Illuminate\Http\Response
     */
    public function edit(ClientsNum $clientsNum)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ClientsNum  $clientsNum
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
			$id = $request->id;

			$request->validate([
					'num' => 'required'
			], [
					'num.required' => 'يرجي ادخال  عدد العملاء',
			]);

			$num = ClientsNum::find($id);

			$num->update([
					'num' => $request->num,
			]);

			return redirect()->back()->with(['msg' => 'تم تعديل عدد العملاء بنجاج']);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ClientsNum  $clientsNum
     * @return \Illuminate\Http\Response
     */
    public function destroy(ClientsNum $clientsNum)
    {
        //
    }
}
