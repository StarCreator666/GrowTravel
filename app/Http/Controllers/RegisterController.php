<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function post(Request $request)
    {
        $data['name']= $request->name;
        $data['role'] = 0;
        $data['email']= $request->email;
        $data['password']= bcrypt($request->password);
        $data['created_at'] = now();
        $data['updated_at'] = now();
        User::insert($data);
        return response()->json(['success'=>'Pengisian data success']);
    }
}
