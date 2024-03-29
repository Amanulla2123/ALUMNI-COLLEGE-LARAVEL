<?php

namespace App\Http\Controllers;
use App\Students;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
class ApproveuserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {      

      
        $approves = Students::orderBy('created_at', 'desc')->paginate(4);
        return view('admin.approveuser')->with('approves',$approves);
      
       
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
        //
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
    public function update($id)
    {      
        
       

     

         
    }
     public function approve($userid)
     {
       
 
       
        Students::where('userid',$userid)->update(['role'=>3]);
        User::where('id',$userid)->update(['role'=>3]);
        return redirect('/approveuser')->with('success', 'role changed');
        
    }
 
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($userid)
    {
        $approves= Students::find($userid);
        Students::where('userid', $userid)->delete();
        return redirect('approveuser')->with('success','Data deleted');
        
    }
}
