<?php

namespace App\Http\Controllers;

use App\Models\ClientsNum;
use App\Models\ClientsReview;
use App\Models\Section;
use App\Models\WhatsApp;

class IndexController extends Controller
{
    public function index()
    {

        $sections = Section::all();

        $num = ClientsNum::first();
        $numValue = $num->num;

        $clients = ClientsReview::all();

        $whatsApp = WhatsApp::first();
        $whatsAppNumber = $whatsApp->link;

				$section1 = Section::first();
				$section1Name = $section1->section_name;
				$section2 = Section::where('id', 2)->first();
				$section2Name = $section2->section_name;
        
        return view('frontend.home', compact('sections', 'numValue', 'clients', 'whatsAppNumber','section1Name','section2Name'));
    }

}
