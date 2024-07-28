<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Donations;


class DonationsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('backend.donate_index')->with('donations',Donations::where('user_id',Auth::id())->get());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.donate_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    
        $request -> validate(['blood_group'=>'required','blood_cost'=>'required','blood_amount'=>'required']);
        $new_donation = new Donations;
        $new_donation -> user_id = Auth::user() -> id;
        $new_donation -> blood_group = $request -> blood_group; 
        $new_donation -> blood_cost = $request -> blood_cost;
        $new_donation -> blood_amount = $request -> blood_amount;
        $new_donation -> save();
        return redirect(route('donations.index'));
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
        
        $edit_data = Donations::where('id',$id)->first();
    
        return view('backend.donate_edit')->with('donation_data',$edit_data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request -> validate(['blood_group'=>'required','blood_cost'=>'required','blood_amount'=>'required']);
        $donation_update_data = Donations::find($id);
        $donation_update_data -> blood_group = $request -> blood_group;
        $donation_update_data -> blood_cost = $request -> blood_cost;
        $donation_update_data -> blood_amount = $request -> blood_amount;
        $donation_update_data -> save();
        return redirect(route('donations.index'));
    }

    // show deleted donations
    public function trash() {
        return view('backend.donate_delete_trash')->with('trashes',Donations::onlyTrashed()->where('user_id',Auth::id())->get());
    }

    //restore deleted donations
    public function restore($id) {
        $restored_data = Donations::withTrashed() -> where('id',$id) -> where('user_id',Auth::id()) -> restore();
        return redirect(route('donations.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // I do not use destroy
    }
}
