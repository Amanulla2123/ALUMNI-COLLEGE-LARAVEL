<?php

namespace App\Http\Controllers\Auth;
use Intervention\Image\ImageManagerStatic as Image;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use App\Students;
use App\Addschool;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
     
    public function showregistrationform()
{
    $data = [1];

    if (property_exists($this, 'registerView')) {
        return view($this->registerView, compact('data'));
    }


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
            'Countryofresidence' => ['required','string'],
            'Schoolname' =>['required','string'],
            'Adnumber' =>['required','string'], 
            'Profile'=> ['required'], 
            'Fromyear' => ['required'],
            'Toyear' => ['required'],
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
       

        $imageName = time() . '.' . $data['Profile']->getClientOriginalExtension();

        $data['Profile']->move(
        base_path() . '/public/upload/', $imageName
        );
        

   
                $user = User::create([
                    'name' => $data['name'],
                    'email' => $data['email'],
                    'password' => Hash::make($data['password']),
                
                
            ]);
            
      
        $user->student = Students::create([
                'userid' => $user->id,
                'email' => $data['email'],
                'name' => $data['name'],
                'gender'=>$data['gender'],
                'Nationality' => $data['Nationality'],
                'Contactno' => $data['Contactno'], 
                'Countryofresidence' => $data['Countryofresidence'],
                'City' => $data['City'],
                'password' => Hash::make($data['password']),
                'Schoolname' => $data['Schoolname'],
                'Admissionnumber' => $data['Adnumber'],
                'Fromyear' => $data['Fromyear'],
                'Toyear' => $data['Toyear'],
                'Passoutyear'=> $data['Passoutyear'], 
                'Profile'=> $imageName,

         ]); 
        
        return $user;
    }
}
