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

class UserController extends Controller
{
    public function index()
    {


          $data =  array();
          $data['posts']= DB::table('createposts')
          ->join('students','createposts.userId','students.userid',)
          ->select('createposts.id','createposts.title','createposts.subtitle','createposts.description','createposts.attachment1','createposts.created_at','students.name','students.Profile') ->where('approve', 1)->orderBy('created_at', 'desc')->paginate(5);
          $data['addevents']  =  Addevent::orderBy('created_at', 'desc')->limit(3)->get();
          $data['addnews']    =   Addnews::orderBy('created_at', 'desc')->paginate(1);
          $data['comment'] = DB::table('comments')
          ->join('students','comments.commenteduserId','students.userid',)
          ->select('comments.*','students.name','students.Profile')->orderBy('created_at', 'desc')->get();
          $data['likes'] = DB::table('likes')
          ->join('students','likes.likeduserId','students.userid',)
          ->select('likes.*','students.name','students.Profile')->orderBy('created_at', 'desc')->get();
         
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

    public function insert(Request $request,$id)
    {                 
                        $uid=Auth::user()->id;
                         $like= DB::table('likes')->select('postId','likeduserId')->where([
                          ['likeduserId', '=', $uid],
                          ['postId', '=', $id],
                          ])->get();
                          
                       if(count($like)==0)
                       {
                         
                        $user=DB::table('createposts')
                        ->select('userId')
                        ->where('id',$id)
                        ->first(); 
                        $like=new Like;
                        $like->postId=$id ;
                        $like->userId=$user->userId ;
                        $like->likeduserId=$uid ;
                        $like->save();
                       }
                       else{
                          DB::table('likes')->where([
                            ['likeduserId', '=', $uid],
                            ['postId', '=', $id],
                            ])->delete();
                          
                       }
                           
                     return redirect('user');
    }
    public function cover(Request $request,$id)
    { 
      return $id;
    }
}
