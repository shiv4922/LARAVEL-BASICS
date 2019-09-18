<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConditionController extends Controller
{
    public function if()
    {
    	$name="pn";
    	return view ('condition.usingif',compact('name'));
    }

    public function usingelse()
    {
    	$name="pninfo";
    	return view ('condition.usingelse',compact('name'));
    }

    public function usingelseif()
    {
    	$name="pn";
    	return view ('condition.usingelseif',compact('name'));
    }

    public function usingisset()
    {
    	$name="pn";
    	return view ('condition.usingisset',compact('name'));
    }

    public function usingempty()
    {
    	$name="pn";
    	return view ('condition.usingempty',compact('name'));
    }

    public function usingunless()
    {
    	$name="online web";
    	$names=[];
    	return view ('condition.usingunless',compact('name','names'));
    }

    public function bfor()
    {
    	return view("loop.for");
    }

     public function bforeach()
    {
    	$name="online web";
    	$names=["shiv","raj"];
    	return view("loop.foreach",compact('name','names'));
    }

    public function bforelse()
    {
    	$name="online web";
    	$names=["shiv","raj"];
    	return view("loop.forelse",compact('name','names'));
    }

    public function bwhile()
    {
    	$name="online web";
    	$names=["shiv","raj"];
    	return view("loop.while",compact('name','names'));
    }

    public function loopindex()
    {
    	$name="online web";
    	$names=["shiv","raj"];
    	return view("loop.loopindex",compact('name','names'));
    }
}
