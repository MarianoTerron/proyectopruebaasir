<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class libroscontroller extends Controller
{
    public function index(){
        //return view ('child');  ,['name' => 'Mariano']);
    
        //$libros = DB::select('select * from libros');
        $libros = DB::table('libros')->get();
        //dd($libros);
        return view("child",['books' => $libros]);
    }

 /*   public function show(){
        return view ('bienvenidoprueba');
    } 
  */      
    public function show($id){
        $libro=DB::table('libros')->find($id);
        return view('vistaconsulta',['books' => $libro]);
    }
}