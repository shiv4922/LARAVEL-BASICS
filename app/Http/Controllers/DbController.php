<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;  // redirect to database

class DbController extends Controller
{
    public function queryrun()
    {
    

//echo "shivraj";
   
   $data = DB::table('cars')->insert(['model'=>'qwert','price'=>'123','type'=>'sdfgh','average'=>'rghj']);

    	echo $data;
    }



    public function showdata()
    {

    	// echo "show data";

    	$data = DB::table('cars')->get();
    	print_r($data);

    	$data = DB::table('cars')->orderby('id','desc')->get();
    	print_r($data);

    	return view('query.showdata',compact('data'));
    	return view("query.showdata");

    }


    public function updates()
    {
    	 $data=DB::table('cars')->where (['id'=>1])->
    	update(['model'=>'shivraj dhakad']);

    	print_r($data);
    }

    public function delete()
    {
    	 $data=DB::table('cars')->where (['id'=>1])->
    	delete(['model'=>'shivraj dhakad'])->get();

    	echo $data;
    }
}
