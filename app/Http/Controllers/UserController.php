<?php

namespace App\Http\Controllers;
use App\Addevent;
use App\Addnews;
use Auth;
use App\Createpost;
use App\Comment;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {


        $data =  array();
        $data['posts']= DB::table('createposts')
        ->join('students','createposts.userId','students.userid',)
        ->select('createposts.id','createposts.title','createposts.subtitle','createposts.description','createposts.attachment1','createposts.created_at','students.name',)->orderBy('created_at', 'desc')->paginate(5);
        $data['addevents']  =  Addevent::orderBy('created_at', 'desc')->paginate(1);
        $data['addnews']    =   Addnews::orderBy('created_at', 'desc')->paginate(1);
        $data['comment'] = DB::table('comments')
        ->join('students','comments.commenteduserId','students.userid',)
        ->select('comments.*','students.name',)->orderBy('created_at', 'desc')->paginate(3);
       // $data['comment'] = Comment::orderBy('created_at','desc')->get();
        //return $data['comment'];
        return view('user.user',compact("data"));
         
    
    }
    public function store(Request $request,$id)
    {
      


       $this->validate($request, [
           'comment'=> 'required',
            ]);
 
                        $uid=Auth::user()->id;
                         
                         $stud=DB::table('createposts')
                        ->select('userId')
                        ->where('id',$id)
                        ->first(); 

                        $addcomment=new Comment;
                        $addcomment->postId=$id ;
                        $addcomment->userId=$stud->userId ;
                        $addcomment->commenteduserId=$uid ;
                        $addcomment->comment=$request-> input('comment'); 
                        $addcomment->save(); 
                     return redirect('user');
    }
}
