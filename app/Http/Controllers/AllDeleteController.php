<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Donations;
use Illuminate\Support\Facades\Auth;

class AllDeleteController extends Controller
{
    public function user_delete($id){
        $deleted_user_data = User::find($id);
        $deleted_user_data -> delete();
        return redirect()->back();
    }

    public function user_force_delete($id){
        $user_force_delete = User::onlyTrashed()->where('id',$id)->forceDelete();
        return redirect(route('user_trash'));
    }

    public function donation_delete($id) {
        $deleted_donation_data = Donations::find($id);
        $deleted_donation_data -> delete();
        return redirect()->back();
    }

    public function donation_force_delete($id) {
        $donation_force_delete_data = Donations::onlyTrashed()->where('id',$id)->forceDelete();
        return redirect()->back();
    }
}
