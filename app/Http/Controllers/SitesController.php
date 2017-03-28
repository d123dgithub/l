<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class SitesController extends Controller
{
    //
    public function index($name){
        $data=['a','b','c','d'];
        return view('sites.index',[
            'name'=>$name,
            'data'=>$data,
        ]);
    }

    public  function show(){
        return view('sites.show');
    }

}
