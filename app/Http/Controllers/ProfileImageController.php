<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class ProfileImageController extends Controller
{
    public function store(Request $request){
        $request -> validate(['user_image'=>'required']);
        $user_data = User::find(Auth::id());
        $image = $request -> user_image;
        $image_new_name = 'uploads/' . time(). $image->getClientOriginalName();
        $image -> move('uploads',$image_new_name);
        $user_data -> user_image = $image_new_name;
        $user_data -> save();
        return redirect() -> back();
    }
}
