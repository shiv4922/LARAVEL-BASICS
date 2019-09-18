<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

class EmployController extends Controller
{
   public function insert()
   {

   	//echo "shiv";

   	$data = DB::table('employs')->insert(['name'=>'qwert','post'=>'HR','address'=>'sdfgh','email'=>'rghj@gmail.com','salary'=>'4525','company'=>"dfgh"]);

   	echo $data;


   }

   public function show()
    {

    	// echo "show data";

    	$data = DB::table('employs')->get();
    	print_r($data);

    	$data = DB::table('employs')->orderby('id','desc')->get();
    	print_r($data);

    	return view("query.show2",compact('data'));
    	return view("query.show2");




    	

    }
}
