<?php

namespace App\Http\Controllers;
use App\Models\MessageModel;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class MessageRecieverController extends Controller
{
    public function show(){
        return view('backend.message_show')->with('data_all',MessageModel::where('rid',Auth::id())->orderBy('updated_at','desc')->get());
    }

    public function remove($id){
        $message_delete = MessageModel::find($id);
        $message_delete -> delete();
        return redirect()->back();
    }
}
