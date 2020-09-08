<?php


namespace App\Http\Controllers;
use App\Addevent;
use App\Addnews;
use App\Like;
use Auth;
use App\Createpost;
use App\Comment;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class AdminController extends Controller
{
 public function index()
 {
   $data =  array();
   $data['posts']= DB::table('createposts')
   ->join('students','createposts.userId','students.userid',)
   ->select('createposts.id','createposts.title','createposts.subtitle','createposts.description','createposts.attachment1','createposts.created_at','students.name','students.Profile')->orderBy('created_at', 'desc')->paginate(5);
   $data['addevents']  =  Addevent::orderBy('created_at', 'desc')->limit(3)->get();
   $data['addnews']    =   Addnews::orderBy('created_at', 'desc')->paginate(1);
   $data['comment'] = DB::table('comments')
   ->join('students','comments.commenteduserId','students.userid',)
   ->select('comments.*','students.name','students.Profile')->orderBy('created_at', 'desc')->get();
   $data['likes'] = DB::table('likes')
   ->join('students','likes.likeduserId','students.userid',)
   ->select('likes.*','students.name','students.Profile')->orderBy('created_at', 'desc')->get();
   
    
    return view('admin.admin',compact("data"));


     
 }
}
