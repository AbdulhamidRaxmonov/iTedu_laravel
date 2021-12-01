<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class HomeController extends Controller
{
    
    public function index()
    {  
        $data['slides']=DB::table('slides')
        ->where('active', 1)
        ->orderBy('sequence')->get();
        return view('index', $data);
    }
}
