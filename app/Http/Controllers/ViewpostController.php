<?php

namespace App\Http\Controllers;
use App\Createpost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ViewpostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

       

       
       return view('admin.viewpost');
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
        $data =  array();
         $data['posts']= DB::table('createposts')
        ->join('students','createposts.userId','students.userid')
         ->select('createposts.id','createposts.title','createposts.subtitle','createposts.description','createposts.attachment1','createposts.created_at','students.name')
         ->where('createposts.id',$id)->get();
        return view('admin.viewpost',compact("data")); 
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
        $post= Createpost::find($id);
        Createpost::where('id', $id)->delete();
        return redirect('postapproval')->with('success','Data deleted');
        


    }
    

        public function approve($id)
        {
       
           
       
            Createpost::where('id',$id)->update(['approve'=>1]);
            return redirect('/postapproval')->with('success', 'role changed');
            
        }
 
     

}
