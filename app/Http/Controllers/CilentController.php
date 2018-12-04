<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\Message;
class CilentController extends Controller
{
    public function index()
    {
        $projects = DB::table('projects')->get();
        $images= DB::table('project_images')->get();
        $services= DB::table('services')->get();
        $profiles= DB::table('profiles')->get();


        return view('welcome', ['projects' => $projects,'images'=>$images,'services'=>$services,'profiles'=>$profiles]);
        //return view('welcome');
    }

    public function message(Request $request)
    {
        
        $this->validate($request,[
            'name'=>'required',
            'email'=>'required',
            'message'=>'required'
        ],[
            'name.required'=>'මුදල අැතුලත් කිරීම අනිවාර්යයි.',
            
            
            'email.required'=>'සටහනක් අැතුලත් කිරීම අනිවාර්යයි.',
            'message.required'=>'සටහනක් අැතුලත් කිරීම අනිවාර්යයි.'
            

        ]
        
    );

       $message = new Message;
       //$transaction->account_no= 1; 
       
       $message->name = $request->input('name');
       $message->email = $request->input('email');
       $message->msg = $request->input('message');
       
      
       $message->save();
       //return redirect('/dipost');
       return redirect('/');
    }
}
