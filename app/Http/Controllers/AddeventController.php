<?php

namespace App\Http\Controllers;
use App\Addevent;
use Illuminate\Support\Facades\Schema;
use Illuminate\Http\Request;

class AddeventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        $addevents =Addevent::all();
        return view('admin.addevent')->with('addevents',$addevents);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.addevent');
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
            $path = $request->file('attachment1')->storeAs('public/attachment1', $fileNameToStore);


           //$thumbStore = 'thumb.'.$filename.'_'.time().'.'.$extension;
           // $thumb = Image::make($request->file('Profilepic')->getRealPath());
            //$thumb->resize(80, 80);
            //$thumb->save('storage/profile/'.$thumbStore);
		  

        } else {
            $fileNameToStore = 'noimage.jpg';
        }



        $addevents=new Addevent;
           
            $addevents->attachment1 = $fileNameToStore;
            $addevents->title=$request->input('title');
            $addevents->subtitle = $request-> input('subtitle');
            $addevents->description=$request-> input('description');
           
        $addevents->save();
        return redirect('addevent')->with('success','Inserted Successfully...');
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
