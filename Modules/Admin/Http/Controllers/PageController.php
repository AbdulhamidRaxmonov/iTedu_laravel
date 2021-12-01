<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use DB;
class PageController extends Controller
{

    public function __construct()
    {    
        $this->middleware('auth');
    }
    
    public function index()
    {  
        $pages = DB::table('pages')->get();
        return view('admin::pages.index', compact('pages'));
    }

    public function edit($id)
    {
        $pages =DB::table('pages')->find($id);
        return view('admin::pages.edit', compact('pages'));
    }

    public function update(Request $request, $id)
    {
        $request->validate(
            [
                'title'=> 'required',
                'slug'=>'required',
                'description'=> 'required',
            ]
            );
            $data = $request->except('_token', '_method');
            $i = DB::table('pages')
            ->where('id', $id)
            ->update($data);
            if($i)
            {
            return redirect()->route('page.index')
                ->with('success', config('app.success'));
            }
            else 
            {
                return redirect()->route('page.index')
                ->with('error', config('app.error'));   
            }
    }
}
