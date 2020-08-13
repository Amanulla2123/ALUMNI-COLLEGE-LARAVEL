<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use App\Addschool;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
     
    public function showregistrationform()
{
    $schools = Addschool::all();

    return view('auth.register', ['schools' => $schools]);
}
   /*  public function index()
    {
        $schools = Addschool::all();
        
      return view('auth.register')->with('schools',$schools);

    }
 */




    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'gender'=>['required', 'string'],
            'Contactno' => ['required','string'],
            'Nationality' =>['required'],
           // 'Country of residence' => ['required','string'],
        
            'Schoolname' =>['required','string'],
            'Adnumber' =>['required','string'], 
            'Profile'=> ['required'], 
            //'Fromyear' => ['required'],
            //'Toyear' => ['required'],
            'Passoutyear'=> ['required'], 
           
           
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {


        return User::create([   
                'name' => $data['name'],
                'email' => $data['email'],
                'gender'=>$data['gender'],
                'Nationality' => $data['Nationality'],
                'Contactno' => $data['Contactno'], 
            // 'Country of residence' => $data['Country of residence'],
                'City' => $data['City'],
                'password' => Hash::make($data['password']),
                'School name' => $data['Schoolname'],
               
                'Admission number' => $data['Adnumber'],
                //'Fromyear' => $data['Fromyear'],
                //'Toyear' => $data['Toyear'],
                'Passoutyear'=> $data['Passoutyear'], 
                'Profile'=> $data['Profile'], 
          
        ]);
       
        if($request->hasFile('Profile')){
            // Get filename with the extension
            $filenameWithExt = $request->file('Profile')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('Profile')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore= $filename.'_'.time().'.'.$extension;
            // Upload Image
            $path = $request->file('Profile')->storeAs('public/profile', $fileNameToStore);


           $thumbStore = 'thumb.'.$filename.'_'.time().'.'.$extension;
           $thumb = Image::make($request->file('Profile')->getRealPath());
            $thumb->resize(80, 80);
            $thumb->save('storage/profile/'.$thumbStore);
		  

        } else {
            $fileNameToStore = 'noimage.jpg';
        }
       /*  if (request()->hasFile(key:'Profile')){
            $Profile=request()->file(key:'Profile')->getClientOrginalname();
            request()->file(key:'Profile')->storeAs(path:'Profile',name:$user->id.'/'.$Profile,option:'');
            $user->update{['Profile'=>$Profile]};

        }
        return user; */
    }
}
