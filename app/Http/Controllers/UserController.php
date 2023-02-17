<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{

    public function viewUsers()
    {
        $latest = User::query()->select(['id','username','fname','lname','email','pnum'])->latest()->limit(1)->get();
        return view('admin.users.viewUsers',['latest' => $latest]);
    }

    public function UserLogin()
    {
        return view('store.auth.signIn');
    }

    public function create(array $data)
    {
        return User::create([
            'email' => $data['email'],
            'username' => $data['username'],
            'fname' => $data['fname'],
            'lname' => $data['lname'],
            'pnum' => $data['pnum'],
            'password' => Hash::make($data['password'])
        ]);
    }

    public function validation(Request $request)
    {
        $requestData = $request->except(['_token']);

        Validator::make($requestData,
        [
        'email' => 'required|unique:users|regex:/^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$',
        'username' => 'required|min:5|max:20',
        'fname' => 'required|max:50',
        'lname' => 'required|max:50',
        'pnum' => ['required','regex:/^((\+92)|(0092))-{0,1}\d{3}-{0,1}\d{7}$|^\d{11}$|^\d{4}-\d{7}$/'],
        'password' => 'required|min:8',
        'confirm_password' => 'required|same:password'
        ]
        );
        return (object)$requestData;
    }

    public function customUserRegistration(Request $request)
    {  
        
        $val = $this->validation($request);
        // return redirect()->back();

                    if($val->fails())
                    {
                        return response()->json([
                            'status' => 'error',
                            'error' => 'Something went wrong, make sure to fill up all fields or enter the right values, thanks.'
                        ],421);    
                        
                    }
                    
                    else
                    {
                        $data = $request->all();
                        $this->create($data);
                    
                        return response()->json([
                            'status' => 'success',
                            'data' => 'You signed up successfully, login to buy products.'
                        ],200);
                    }
       
       
    }


    public function UserCustomLogin(Request $request)
    {
        $requestData = $request->except(['_token']);
        
         Validator::make($requestData,
        [
        
        'username' => 'string|required|min:5|max:20',
        'password' => 'string|required|min:8',
        
        ]
        
        );

            $remember = ( !empty( $request->remember ) ) ? TRUE : FALSE;
            $credentials = $request->only(['username', 'password'], $remember);
            
            //Check Email and Password from Request
            if(Auth::guard('web')->attempt($credentials, $remember)) 
            {

                //redirect to Dashboard
                return redirect()->intended('store')->with('success', 'Signed in');
                
            }
      
            return redirect()->back();
            
            
    
    }

    public function profile()
    {
        $user_order = $this->getDetails();
        return view('store.storeHome.profile', compact('user_order'));
        // dump($user_order->toArray());
    }
    
    public function getDetails()
    {
        $user_id = Auth::user()->id;

        $user_order =  (User::query()
        ->where('id', $user_id)
        ->with(['orders' => function($q)
        {
            $q->select('id', 'user_id', 'order_id', 'quantity', 'sub_total');
        }])
        ->with(['payments' => function($q)
        {
            $q->select('id', 'user_id', 'payer_id', 'payment_id', 'amount' ,'payment_status');
        }])
        ->limit(10)->get(['id', 'fname', 'lname']));

        return $user_order;
    }

    public function UserSignOut() 
    {

        
        Session::flush();
        Auth::logout();
        
        return redirect('store');
        

    }

    public function update(Request $request, $id)
    {
        $val = $this->validation($request);

        if(!$val)
        {
            dump("error");
        }

        User::whereId($id)->update((array)$val);
        return redirect()->back();
        // return 'Hello';
        
    }



}
