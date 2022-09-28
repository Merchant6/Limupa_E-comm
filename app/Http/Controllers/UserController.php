<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
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

    public function customUserRegistration(Request $request)
    {  
        
        
        $requestData = $request->except(['_token']);

        $val =  Validator::make($requestData,
            [
            'email' => 'required|unique:users',
            'username' => 'required|min:5|max:20',
            'fname' => 'required|max:50',
            'lname' => 'required|max:50',
            'pnum' => ['required','regex:/^((\+92)|(0092))-{0,1}\d{3}-{0,1}\d{7}$|^\d{11}$|^\d{4}-\d{7}$/'],
            'password' => 'required|min:8',
            'confirm_password' => 'required|same:password'
            ]
            
        );

        
       
        
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

}
