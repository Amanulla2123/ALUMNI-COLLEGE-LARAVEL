<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
class AddhodtechController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.addhodtech');
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
            'role'=> 'required',
            'firstname'=> 'required',
            'email'=> 'required',
            'password'=> 'required',
            'Profile'=> ['required'], 
            
           
        ]); 
        if($request->hasFile('Profile')){
       $fileNameToStore = time() . '.' . $request->file('Profile')->getClientOriginalExtension();

        $request->file('Profile')->move(
        base_path() . '/public/upload/',  $fileNameToStore);


        /*  if($request->hasFile('Profile')){
        // Get filename with the extension
        $filenameWithExt = $request->file('Profile')->getClientOriginalName();
        // Get just filename
        $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
        // Get just ext
        $extension = $request->file('Profile')->getClientOriginalExtension();
        // Filename to store
        $fileNameToStore= $filename.'_'.time().'.'.$extension;
        // Upload Image
        $path = $request->file('Profile')->storeAs('/public/upload', $fileNameToStore); */


       //$thumbStore = 'thumb.'.$filename.'_'.time().'.'.$extension;
       // $thumb = Image::make($request->file('Profilepic')->getRealPath());
        //$thumb->resize(80, 80);
        //$thumb->save('storage/profile/'.$thumbStore);
      

    } else {
        $fileNameToStore = 'profileimage.jpg';
    }

       
        $user =new User;
            $user->role = $request-> input('role');
            $user->name = $request-> input('firstname');
            $user->email=$request->input('email');
            $user->Profile= $fileNameToStore;

            $user->password = Hash::make($request->input('password'));

          
     
            //'EmailId'=> $request->get(EmailId),
            //'Password'=> $request->get(Password),
            //'Rpassword'=> $request->get(Rpassword),
        

    $user->save();
      return redirect('addhodtech')->with('success','Inserted Successfully...');




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
