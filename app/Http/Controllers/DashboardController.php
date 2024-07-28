<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\MessageModel;
use App\Models\Donations;

class DashboardController extends Controller
{
    public function show(){
        return view('dashboard') -> with('user_info',User::find(Auth::id()))
                                -> with('message_model',MessageModel::where('rid',Auth::id())->count())
                                -> with('blood_active',Donations::where('user_id',Auth::id())->count())
                                -> with('blood_disabled',Donations::onlyTrashed()->where('user_id',Auth::id())->count());
    }
}
