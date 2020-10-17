<?php

namespace App\Http\Controllers;

use App\Practice;
use Illuminate\Http\Request;

class PracticeController extends Controller
{
    public function index(){

    $data=Practice::latest()->get();
     return view('home',compact('data')); }
     
}   
