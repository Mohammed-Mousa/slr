<?php

namespace App\Http\Controllers;

use App\Models\Section;
use App\Models\WhatsApp;
use App\Models\Subscriber;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
class CustomersController extends Controller
{
    //

    public function index()
    {
        $sections = Section::all();

        $whatsApp = WhatsApp::first();
        $whatsAppNumber = $whatsApp->link;

        $section1 = Section::first();
        $section1Name = $section1->section_name;
        $section2 = Section::where('id', 2)->first();
        $section2Name = $section2->section_name;

        return view('frontend.customers', compact('sections', 'whatsAppNumber', 'section1Name', 'section2Name'));
    }


		public function store(Request $request)
    {
        $request->validate([
            'phone_number' => 'required|max:20|unique:subscribers',
        ], [
            'phone_number.required' => 'يرجى ادخال الرقم بشكل صحيح وعدم ترك الحقل فارغ',
            'phone_number.unique' => 'الرقم مسجل مسبقا!',
            'phone_number.max' => 'ممنوع إدخال أكتر من 20 رقم',

        ]);

        Subscriber::create([
            'phone_number' => $request->phone_number,

        ]);
        return redirect()->back()->with(['msg' => 'تم اضافه الرقم  بنجاح ']);

    }
}
