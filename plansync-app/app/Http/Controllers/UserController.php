<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{


    public function showLoginForm(){

        return view('login');
    }

    public function showRegisterForm(){

        return view('register');
    }

    # register dengan nama, email, password
    public function create(Request $request)
    {
        $request->validate([
            'fullname' => 'required',
            'phone' => 'required|max:15',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8',
        ]);

        $user = new User;
        $user->name = $request->fullname;
        $user->phone_number = $request->phone;
        $user->email = $request->email;
        $user->email_verified_at = Carbon::now();
        $user->password = Hash::make($request->password);
        $user->save();
        

        return response()->json($user, 201);

    }

    # login dengan nama, password
    # NOTE: Belum ada password validation
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {

           return response()->json(['message' => 'Login successful', 200]);
        //    return view('');
        } else {
            return redirect('sign-in')
                ->withErrors(['credentials' => "Wrong email or password"])
                ->withInput();
        
            //return response()->json(['message' => 'Invalid credentials'], 401);
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
    
        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
    
        return redirect('/');
    }


    public function destroy(Request $request)
    {
        $id = $request;
        $user = User::find($id);
        $user->delete();

        return redirect(('/'));
    }





}
