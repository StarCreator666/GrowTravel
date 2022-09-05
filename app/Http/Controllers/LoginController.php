<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\{Auth};
use Illuminate\Http\Response;

class LoginController extends Controller
{
    public function index(){
        return view('login');
    }

    public function post(Request $request)
    {
        $authAdmin = Auth::attempt(['email' => $request->email, 'role' => 1, 'password' => $request->password],$request->remember);
        $authSuccess = Auth::attempt(['email' => $request->email, 'role' => 0, 'password' => $request->password],$request->remember);
        if($authSuccess){
            $request->session()->regenerate();
            return response(['success' => true], Response::HTTP_OK);
        }elseif($authAdmin){
            $request->session()->regenerate();
            return response(['status' => true], Response::HTTP_OK);
        }

        return response(['success' => false],Response::HTTP_FORBIDDEN);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
