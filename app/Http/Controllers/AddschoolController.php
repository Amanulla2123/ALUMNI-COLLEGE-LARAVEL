<?php

namespace App\Http\Controllers;
use App\Addschool;
use Illuminate\Support\Facades\Schema;
use Illuminate\Http\Request;

class AddschoolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {     
       // $addschools = DB::table('add$addschools')->get();
       
       $addschools = Addschool::all();
      // $addschools = Reg::orderBy('created_at', 'desc')->paginate(5);
      return view('admin.addschool')->with('addschools',$addschools);
    
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.addschool');
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
            'Logo'=> 'required',
            'Schoolname'=> 'required',
            'Location'=> 'required',
            'Startingyear'=> 'required',
            
           
        ]);
        if($request->hasFile('Logo')){
            // Get filename with the extension
            $filenameWithExt = $request->file('Logo')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('Logo')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore= $filename.'_'.time().'.'.$extension;
            // Upload Image
            $path = $request->file('Logo')->storeAs('public/Logo', $fileNameToStore);


           //$thumbStore = 'thumb.'.$filename.'_'.time().'.'.$extension;
           // $thumb = Image::make($request->file('Profilepic')->getRealPath());
            //$thumb->resize(80, 80);
            //$thumb->save('storage/profile/'.$thumbStore);
		  

        } else {
            $fileNameToStore = 'noimage.jpg';
        }



        $addschools=new Addschool;
           
            $addschools->Logo = $fileNameToStore;
            $addschools->Schoolname=$request->input('Schoolname');
            $addschools->Location = $request-> input('Location');
            $addschools->Startingyear=$request-> input('Startingyear');
           
        $addschools->save();
        return redirect('addschool')->with('success','Inserted Successfully...');
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
        //
    }
}
