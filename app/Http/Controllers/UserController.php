<?php

namespace App\Http\Controllers;
use App\Addevent;
use App\Addnews;
use App\Createpost;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {


        $data =  array();
        $data['posts']= DB::table('createposts')
        ->join('students','createposts.userId','students.userid')
         ->select('createposts.id','createposts.title','createposts.subtitle','createposts.description','createposts.attachment1','createposts.created_at','students.name')->paginate(5);
        $data['addevents']  =  Addevent::orderBy('created_at', 'desc')->paginate(1);
        $data['addnews']     =   Addnews::orderBy('created_at', 'desc')->paginate(1);
        return view('user.user',compact("data"));
         

       // $addevents =Addevent::all();
       // $addevents = Addevent::orderBy('created_at', 'desc')->paginate(1);
       // $addnews =Addnews::all();
        //$addnews = Addnews::orderBy('created_at', 'desc')->paginate(1);
       // return view('user.user')->with('addevents',$addevents);

    
    }
}
