<?php

namespace App\Http\Controllers;
use\App\Createposts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class PostapprovalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
       $data = DB::table('createposts')
       ->select('createposts.id','createposts.title','createposts.subtitle','createposts.created_at','createposts.attachment1','createposts.description','students.name','students.Schoolname','students.Profile')
       ->join('students','createposts.userId','students.userid','students.Profile')->orderBy('created_at', 'desc')->paginate(5);
       return view('admin.postapproval',['data'=>$data]); 


        /*  $posts =Createpost::all();
        return view('admin.postapproval')->with('posts',$posts); */
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
