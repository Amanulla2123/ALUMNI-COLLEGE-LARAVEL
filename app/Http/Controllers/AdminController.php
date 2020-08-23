<?php

namespace App\Http\Controllers;
use App\Addevent;
use App\Addnews;
use Illuminate\Http\Request;

class AdminController extends Controller
{
 public function index()
 {
    $data =  array();
    $data['addevents']  =  Addevent::orderBy('created_at', 'desc')->paginate(1);
    $data['addnews']     =   Addnews::orderBy('created_at', 'desc')->paginate(1);
    
    return view('admin.admin',compact("data"));


     
 }
}
