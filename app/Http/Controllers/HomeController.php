<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Subscriber;
use App\Models\User;
use App\Models\WhatsApp;
use Rainwater\Active\Active;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $numberOfGuests = Active::guests()->count();

        $availabelProduct = Product::where('value_status', 1)->count();
        $notAvailabelProduct = Product::where('value_status', 2)->count();

        $numOfSub = Subscriber::count();
        $numOfAdmin = User::count();

        $whatsApp = WhatsApp::where('id', 1)->get();

        return view('index', compact(

            "numberOfGuests",
            'availabelProduct',
            'notAvailabelProduct',

            'numOfSub',
            'numOfAdmin',

            'whatsApp',

        ));

    }
}
