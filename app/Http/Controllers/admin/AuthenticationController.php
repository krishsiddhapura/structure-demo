<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Traits\ResponseTrait;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthenticationController extends Controller
{
    use ResponseTrait;

    // Login page
    public function login(Request $request)
    {
        return view('admin.pages.login');
    }

    // Login Action
    public function loginAction(Request $request){
        try {
            $validator = Validator::make($request->all(),[
                'email' => 'required|string|email|exists:admins,email',
                'password' => 'required|string'
            ]);
            if($validator->fails()){
                return $this->sendValidationError($validator->errors());
            }

            $login = Auth::guard('admin')->attempt(['email' => $request->get('email'), 'password' => $request->get('password')]);
            if($login){
                return $this->sendSuccess("Logged in successfully.");
            }else{
                return $this->sendError("Invalid email or password !");
            }
        }catch (Exception $exception){
            return $this->sendError("Internal Server Error !",500);
        }
    }

}
