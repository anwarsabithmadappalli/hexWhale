<?php

namespace App\Http\Controllers;

use App\Models\Registration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{

    public function register(){
        return view('authentication.register');
    }

    public function doRegister(Request $request){
        $model = new Registration();
        $model->name = $request->name;
        $model->email = $request->email;
        $model->password = Hash::make($request->password);
        $model->save();
        return view('authentication.login');
    }

    public function login(){
        return view('authentication.login');
    }

    public function doLogin(Request $request)
{
    $email = $request->email;
    $password = $request->password;
    $data = Registration::where('email', '=', $email)->first();

    if ($data == null) {
        return redirect()->route('login')->with('info', 'You haven\'t registered');
    } else {
        if (Hash::check($password, $data->password)) {
            session(['user' => [
                'id' => $data->id,
                'email' => $data->email,
                'name' => $data->name,
            ]]);

            return redirect()->route('welcome');
        } else {
            return redirect()->route('login')->with('info', 'Wrong password');
        }
    }
}


    public function welcome(){
 
        return view('welcome');
    }

   
}
