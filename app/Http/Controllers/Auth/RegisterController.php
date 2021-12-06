<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index() {
        return view('auth.register');
    }


    public function store(Request $request) {

//        Test we are connected
//        dd('abc');

//        Validation -> Super simple in Laravel -> Request object See Line 6
//        dd($request->email);
          $this->validate($request, [
              'name' => 'required|max:255',
              'username' => 'required|max:255',
              'email' => 'required|email|max:255',
              'password' => 'required|confirmed',
          ]);


//        Store User via the User Model with create method on Eloquent
          User::create([
              'name' => $request->name,
              'username' => $request->username,
              'email' => $request->email,
              'password' => Hash::make($request->password),
          ]);

//        Only method gives us an array of ONLY two attributes
//        Sign the User In
          auth()->attempt($request->only('email', 'password'));

//        Redirect
          return redirect()->route('dashboard');
    }
}
