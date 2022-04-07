<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Service;

class FrontendController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Service::where('status','1')->get();
        return view('frontend.index', compact('services'));
    }

    public function servicelist()
    {       
        $services = Service::where('status','1')->get();
        return view('frontend.servicelist', compact('services'));
    }

    public function servicedetail($slug)
    {
        $services = Service::where('status','1')->get();
        $servicedata = Service::where('service_slug', $slug)->first();
        return view('frontend.servicedetail')->with('servicedata', $servicedata)->
                                               with('services', $services);
    }

}
