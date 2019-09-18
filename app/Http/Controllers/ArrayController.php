<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArrayController extends Controller
{
	public function usingarray(){

    $data1= ['shiv','raj','dhakad'];

    $name ="pninfo";

  // return view('folder.method name',array('data2'=>$data1, 'name2'=>$name));

    // return view('array.usingarray',array('data2'=>$data1, 'name2'=>$name));


    //compact array
    // return view('array.usingarray',compact('data1','name'));


    // with name
    // return view('array.usingarray')->withdata1($data1)->withname($name);
}
}
