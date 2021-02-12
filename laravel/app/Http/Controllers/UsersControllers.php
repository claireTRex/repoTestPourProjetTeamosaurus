<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsersControllers extends Controller
{
    public function create(){
        return view('createUser');
    }

    public function storeuser(UserRequest $userRequest)
    {
        $register = new User();
        $register->name = $userRequest->name;
        $register->email = $userRequest->email;
        $register->password = Hash::make($userRequest->password);
        $register->save();
        return back()->with('success', 'vous êtes inscrit');
    }

}
