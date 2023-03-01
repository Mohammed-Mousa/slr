<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Section;
use App\Models\WhatsApp;
use App\Models\ClientsNum;
use App\Models\ClientsReview;

class YoutubePremiumController extends Controller
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

				$productsYoutube = Product::where('section_id', 2)->where('value_status',1)->get();
				// return $productsYoutube;
    

        return view('frontend.youtube', compact('sections','whatsAppNumber', 'section1Name', 'section2Name', 'productsYoutube'));
    }
}
