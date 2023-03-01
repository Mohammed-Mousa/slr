<?php

namespace App\Http\Controllers;

use App\Models\ClientsReview;
use Illuminate\Http\Request;

class ClientsReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $clients = ClientsReview::all();
        return view('clients.clients_reviews', compact('clients'));

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
        $request->validate([
            'name' => 'required|unique:clients_reviews',
            'review' => 'required',
            'dateR' => 'required',
        ], [
            'name.unique' => 'اسم العميل مسجل مسبقا',
        ]);

        // return $request;
        ClientsReview::create([
            'name' => $request->name,
            'review' => $request->review,
            'dateR' => $request->dateR,

        ]);
        return redirect()->back()->with(['msg' => 'تم اضافه رأي العميل  بنجاح ']);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ClientsReview  $clientsReview
     * @return \Illuminate\Http\Response
     */
    public function show(ClientsReview $clientsReview)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ClientsReview  $clientsReview
     * @return \Illuminate\Http\Response
     */
    public function edit(ClientsReview $clientsReview)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ClientsReview  $clientsReview
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $id = $request->id;

        $request->validate([
            'name' => 'required|unique:clients_reviews',
            'review' => 'required',
            'dateR' => 'required',
        ], [
            'name.unique' => 'اسم العميل مسجل مسبقا',
        ]);

        $ClientsReview = ClientsReview::find($id);

        $ClientsReview->update([
            'name' => $request->name,
            'review' => $request->review,
            'dateR' => $request->dateR,
        ]);

        return redirect()->back()->with(['msg' => 'تم تعديل رأي العميل بنجاج']);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ClientsReview  $clientsReview
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $id = $request->id;
        ClientsReview::find($id)->delete();
        return redirect()->back()->with(['msg' => 'تم حذف رأي العميل  بنجاح ']);

    }
}
