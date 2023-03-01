<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Section;
use App\Models\WhatsApp;

class PlusController extends Controller
{
    public function index()
    {
        $sections = Section::all();

        $whatsApp = WhatsApp::first();
        $whatsAppNumber = $whatsApp->link;

        $section1 = Section::first();
        $section1Name = $section1->section_name;
        $section2 = Section::where('id', 2)->first();
        $section2Name = $section2->section_name;

        $productPlus = Product::where('section_id', 1)->where('value_status',1)->get();
        // return $productPlus;

        return view('frontend.plus', compact('sections', 'whatsAppNumber', 'section1Name', 'section2Name', 'productPlus'));
    }
}
