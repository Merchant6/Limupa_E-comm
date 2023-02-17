<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Jobs\DashboardData;
use Exception;
use App\Models\Admin;
use App\Models\Orders;
use App\Models\Products;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Http;



class AdminController extends Controller
{

    
    

    public function dashboard()
    {
        $products = (Products::count('id'));
        $users = User::count('id');
        $orders = Orders::count('id');
        $revenue = Orders::sum('sub_total');
    
        $data = [$products, $users, $orders, $revenue];

        Cache::put('data', $data, 5);

        $arr = Cache::get('data');

        // dump($arr);
        return view('admin.home.dashboard', compact('arr'));
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
