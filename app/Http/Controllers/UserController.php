<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        $all_user_data = User::all();
        // return $all_user_data;
        return view('backend.user_index')->with('users',$all_user_data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.user_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);
        $new_user = new User;
        $new_user -> name = $request -> name;
        $new_user -> email = $request -> email;
        $new_user -> password = Hash::make($request -> password);
        $new_user -> save();
        return redirect(route('user.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $edit_user = User::find($id);
        return view('backend.user_edit')->with('user',$edit_user);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
    
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:225'],
            'user_phone' => ['required','min:10','max:10'],
            'user_age'=> ['required','min:0','max:3'],
            'user_auth'=> ['required','min:4','max:5'],
            'user_gender'=> ['required','min:4','max:6'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $update_user = User::find($id);
        $update_user -> name = $request -> name;
        $update_user -> last_name = $request -> last_name;
        $update_user -> email = $request -> email;
        $update_user -> user_auth = $request -> user_auth;
        $update_user -> user_age = $request -> user_age;
        $update_user -> user_gender = $request -> user_gender;
        $update_user -> user_phone = $request -> user_phone;
        $update_user -> password = Hash::make($request -> password);
        $update_user -> save();
        return redirect(route('user.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return "we are in destroy";
    }
    // show deleted users
    public function trash(){
        $trashed_user_data = User::onlyTrashed()->get();
        return view('backend.user_delete_trash')->with('users',$trashed_user_data);
    }
    // restore deleted user
    public function restore($id){
        $user_restore = User::withTrashed()->where('id',$id)->restore();
        return redirect()->back();
    }
}
