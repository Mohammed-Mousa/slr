<?php

namespace App\Http\Controllers;

use App\Models\Subscriber;
use Illuminate\Http\Request;

class SubscriberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subscriber = Subscriber::all();
        return view('subscriber.subscriber', compact('subscriber'));
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
            'phone_number' => 'required|max:20|unique:subscribers',
        ], [
            'phone_number.required' => 'يرجي ادخال الرقم بشكل صحيح',
            'phone_number.unique' => 'الرقم مسجل مسبقا',
            'phone_number.max' => 'ممنوع تدخل أكتر من 20 رقم',

        ]);

        Subscriber::create([
            'phone_number' => $request->phone_number,

        ]);
        return redirect()->back()->with(['msg' => 'تم اضافه الرقم  بنجاح ']);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Section  $section
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $id = $request->id;

        $request->validate([
            'phone_number' => 'required|max:20|unique:subscribers',
        ], [
            'phone_number.required' => 'يرجي ادخال الرقم بشكل صحيح',
            'phone_number.unique' => 'الرقم مسجل مسبقا',
            'phone_number.max' => 'ممنوع تدخل أكتر من 20 رقم',

        ]);

        $subscriber = Subscriber::find($id);

        $subscriber->update([
            'phone_number' => $request->phone_number,
        ]);

        return redirect()->back()->with(['msg' => 'تم تعديل الرقم بنجاج']);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Section  $section
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $id = $request->id;
        Subscriber::find($id)->delete();
        return redirect()->back()->with(['msg' => 'تم حذف الرقم  بنجاح ']);
    }
}
