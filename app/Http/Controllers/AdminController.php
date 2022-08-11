<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Exception;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;



class AdminController extends Controller
{

    

    public function dashboard()
    {
        return view('admin.home.dashboard');
    }

    

    public function AdminGetLogin()
    {
        return view('admin.auth.login');
    }

    public function CustomLogin(Request $request)
    {

           
            $request->validate([
                'email' => 'required',
                'password' => 'required',
            ]);

            $remember = ( !empty( $request->remember ) ) ? TRUE : FALSE;
            $credentials = $request->only(['email', 'password'], $remember);
            
            //Check Email and Password from Request
            if(Auth::guard('admin')->attempt($credentials, $remember)) 
            {

                //redirect to Dashboard
                return redirect()->intended('dashboard')->with('success', 'Signed in');
                
            }
      
            return redirect()->back()->with('error', "Email or Password not found"); 
            
            
    
    }      
        

            public function create(array $data)
            {
                return Admin::create([
                    'email' => $data['email'],
                    'password' => Hash::make($data['password'])
                ]);
            }

            public function registration()
            {
                return view('admin.auth.registration');
            }
            
            public function customRegistration(Request $request)
            {  
                $request->validate([
                    'email' => 'required|unique:admin_tb',
                    'password' => 'required|min:8',
                    'confirm_password' => 'required|same:password'
                ]);

                
                $data = $request->all();
                $check = $this->create($data);
                
                return redirect("admin/login'")->withSuccess('You have signed-in');
            }

           

            
                
            
            
            
            public function signOut() 
            {
                Session::flush();
                Auth::logout();
        
                return redirect('admin_login');
            }

}
