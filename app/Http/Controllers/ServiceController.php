<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Service;

class ServiceController extends Controller
{
    function index(){
        return view('pages/service/add_service');
    }
    function add_service(Request $request){
        $service= new Service;

        $service->service_name=$request->input('service');
        $service->description=$request->input('description');

        $service->save();
        return redirect('/service')->with('response','Success');
      

    }
    function view_service(){
        $services= Service::all();

        // echo "<pre>";
        // print_r($services);
        // echo "</pre>";
        return view('pages/service/view-services',compact('services'));
    }
}
