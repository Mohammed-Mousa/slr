<?php

namespace App\Http\Controllers;

use App\Models\WhatsApp;
use Illuminate\Http\Request;

class WhatsAppController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
			$whatsApp = WhatsApp::all();
			return view('whatsApp.whatsApp', compact('whatsApp'));
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
     * @param  \App\Models\WhatsApp  $whatsApp
     * @return \Illuminate\Http\Response
     */
    public function show(WhatsApp $whatsApp)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\WhatsApp  $whatsApp
     * @return \Illuminate\Http\Response
     */
    public function edit(WhatsApp $whatsApp)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\WhatsApp  $whatsApp
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
			$id = $request->id;

			$request->validate([
					'link' => 'required'
			], [
					'link.required' => 'يرجي ادخال  لينك محادثة الواتس',
			]);

			$whatsApp = WhatsApp::find($id);

			$whatsApp->update([
					'link' => $request->link,
			]);

			return redirect()->back()->with(['msg' => 'تم تعديل اللينك بنجاج']);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\WhatsApp  $whatsApp
     * @return \Illuminate\Http\Response
     */
    public function destroy(WhatsApp $whatsApp)
    {
        //
    }
}
