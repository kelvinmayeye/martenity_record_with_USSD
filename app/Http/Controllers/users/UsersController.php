<?php

namespace App\Http\Controllers\users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use App\Models\specializations\Specialization;
use App\Models\specializations\Specialist;

class UsersController extends Controller
{
    public function getAllUsers(){
        $users = User::where('role','!=',1)->get();
        $specializations = Specialization::all();
        return view('pages.users.all_users',compact('users','specializations'));
    }

    public function store(Request $request){
                $this->validate($request,[
            'firstname'=>'required',
            'lastname'=>'required',
            'sex'=>'required',
            'email'=>'nullable|email',
            'phone_number'=>'required'
        ]);
         $user = new User();
         $user->first_name = $request->firstname;
         $user->middle_name = $request->middlename;
         $user->last_name = $request->lastname;
         $user->sex = $request->sex;
         $user->email = $request->email;
         $user->password = $request->phone_number;
         $user->phone_number = $request->phone_number;
         $user->save();
         Session::flash('success','User added successfully');
         Session::flash('info','user username '.$request->lastname." and default password is phone number advice user to change password after login successfully");
         return back();
    }

    public function addUserSpecialization(Request $request){
        $specialist = new Specialist();
        $specialist->user_id = $request->user_id;
        $specialist->specialization_id = $request->specialization;
        $specialist->save();
        Session::flash('success','Users specialist added');
        return back();
    }
}