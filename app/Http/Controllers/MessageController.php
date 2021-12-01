<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class MessageController extends Controller
{
    function index()
    {
        return view('index');
  
     }
     function update(Request $request)
     { 
         ///dd($request->input('name'));
        // $request->validate(
        // [
        //     'name'=> 'required',
        //     'email'=> 'required',
        //     'phone'=> 'required|min:12',
        //     'message'=> 'required',            
        
        // ]
        // );
                   
                    $query=DB::table('messages')->insert([
                        'name'=>$request->input('name'),
                        'email'=>$request->input('email'),
                        'subject'=>$request->input('phone'),
                        'message'=>$request->input('message'),
                    ]);
                    if($query)
                    {
                    return back()
                        ->with('success', config('app.success'));
                    }
                    else 
                    {
                        return  back()
                        ->with('error', config('app.error'));
                    }
      }
}
