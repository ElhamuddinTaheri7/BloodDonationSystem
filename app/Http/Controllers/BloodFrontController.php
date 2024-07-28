<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GeneralInfoViewModel;
use App\Models\MessageModel;

class BloodFrontController extends Controller
{
    // all
    public function index(){
        return view('frontend.find_blood')->with('all_data',GeneralInfoViewModel::orderBy('date','desc')->get());
    }
    // orh +
    public function orhpos(){
        return view('frontend.find_blood')->with('all_data',GeneralInfoViewModel::where('blood_group','ORH+')->orderBy('date','desc')->get());
    }
    //orh-
    public function orhneg(){
        return view('frontend.find_blood')->with('all_data',GeneralInfoViewModel::where('blood_group','ORH-')->orderBy('date','desc')->get());
    }
    //arh+
    public function arhpos(){
        return view('frontend.find_blood')->with('all_data',GeneralInfoViewModel::where('blood_group','ARH+')->orderBy('date','desc')->get());
    }
    //arh-
    public function arhneg(){
        return view('frontend.find_blood')->with('all_data',GeneralInfoViewModel::where('blood_group','ARH-')->orderBy('date','desc')->get());
    }
    //brh+
    public function brhpos(){
        return view('frontend.find_blood')->with('all_data',GeneralInfoViewModel::where('blood_group','BRH+')->orderBy('date','desc')->get());
    }
    //brh-
    public function brhneg(){
        return view('frontend.find_blood')->with('all_data',GeneralInfoViewModel::where('blood_group','BRH-')->orderBy('date','desc')->get());
    }

    // contact form controller
    public function contact($id){
        return view('frontend.contact_blood')->with('r_id',$id);
    }

    // contact form submit
    public function contact_submit(Request $request){
        $request->validate(['r_id'=>'required','r_name'=>'required','r_age'=>'required','r_sickness'=>'required','r_email'=>'required','r_gender'=>'required','r_condition'=>'required']);

        $message_data = new MessageModel;
        $message_data -> rid = $request -> r_id;
        $message_data -> name = $request -> r_name;
        $message_data -> age = $request -> r_age;
        $message_data -> sickness = $request -> r_sickness;
        $message_data -> email = $request -> r_email;
        $message_data -> gender = $request -> r_gender;
        $message_data -> condition = $request -> r_condition;
        $message_data -> save();
        return redirect(route('blood_all'));
    }


}
