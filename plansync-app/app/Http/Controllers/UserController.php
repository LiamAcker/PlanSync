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

        // dd($request->all());
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
        

        return redirect('/sign-in');

    }

    # login dengan nama, password
    # NOTE: Belum ada password validation
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Attempt to log the user in
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            // If login successful, redirect to their intended location
            
            if (Auth::check()){
                return redirect()->intended('/calendar');
            } else{
                return redirect()
                ->back()
                ->withInput($request->only('email'))->withErrors(['email' => 'Failed to authenticate.']);
            }
        }
        return redirect()
        ->back()
        ->withInput($request->only('email'))->withErrors(['email' => 'These credentials do not match our records.']);
    }

    public function logout()
    {

        return redirect('/sign-in');
    }


    public function destroy(Request $request)
    {
        $id = $request;
        $user = User::find($id);
        $user->delete();

        return redirect(('/sign-in'));
    }





}
