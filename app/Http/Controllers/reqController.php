<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;

class reqController extends Controller
{
   public $name ="mina";
     function getdata (){
         return view('requistCollection.requist');
     }
     function recievedata(Request $req){
        // $this -> name = session('name',$req->name);
        // return $req -> path();

    //   return "yas " . $req -> path() . ' ' . $req->name ;

    // echo "<pre>" ;
    // print_r( $req -> header() );
    //  echo "</pre>";

  
    // if($req->hasFile('file')){
    //     $p = $req -> file-> path() ;
    //     $ex =  ' ' . $req -> file -> extension() ;

    //     return $p . '   ' . $ex ;
    // }
       $file = $req->File('file');
       return $file -> getClientOriginalName() ;
    }

    function storing (Request $req){
        return Storage::disk('public_path')->put('text.tx',$req->file);
    }

    function evnt (){
        event(new \App\Events\myevent(1)) ; 
    
    }
}
