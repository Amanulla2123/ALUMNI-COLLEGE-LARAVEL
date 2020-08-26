<?php

namespace App\Http\Controllers;

use Auth;
use App\Createpost;
use App\User;
use Illuminate\Http\Request;


class CreatepostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        
        $addposts=Createpost::orderBy('created_at', 'desc')->paginate(1);
        return view('user.createpost')->with('addposts',$addposts);
     

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
        $this->validate($request,[
            'title'=> 'required',
            'subtitle'=> 'required',
            'attachment1'=> 'required',
            'description'=> 'required',
            
           
        ]);
        if($request->hasFile('attachment1')){
            // Get filename with the extension
            $filenameWithExt = $request->file('attachment1')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('attachment1')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore= $filename.'_'.time().'.'.$extension;
            // Upload Image
            $path = $request->file('attachment1')->storeAs('public/students/posts', $fileNameToStore);


           //$thumbStore = 'thumb.'.$filename.'_'.time().'.'.$extension;
           // $thumb = Image::make($request->file('Profilepic')->getRealPath());
            //$thumb->resize(80, 80);
            //$thumb->save('storage/profile/'.$thumbStore);
		  

        } else {
            $fileNameToStore = 'noimage.jpg';
        }

      

      
        $uid=Auth::user()->id;
       
        /* $stud=DB::table('students')
        ->select('id')
        ->where('userid', $uid)
        ->get();
 */

        $addpost=new Createpost;
         
            $addpost->userId=$uid ;
            $addpost->attachment1 = $fileNameToStore;
            $addpost->title=$request->input('title');
            $addpost->subtitle = $request-> input('subtitle');
            $addpost->description=$request-> input('description');
           
        $addpost->save();
      
        return redirect('createpost')->with('success','Inserted Successfully...');
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
        
    }
}
