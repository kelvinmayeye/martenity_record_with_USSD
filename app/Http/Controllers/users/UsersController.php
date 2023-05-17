<?php

namespace App\Http\Controllers\users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\specializations\Specialization;
use App\Models\specializations\Specialist;
use App\Models\maternitypregnants\MaternityPregnant;
use App\Models\pregnantreports\PregnantReport;

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
         $user->password = bcrypt($request->phone_number);
         $user->phone_number = $request->phone_number;
         $user->save();
         Session::flash('success','User added successfully');
         Session::flash('info','user username '.$request->lastname." and default password is phone number advice user to change password after login successfully");
         return back();
    }

    public function addUserSpecialization(Request $request){
        $user = Specialist::find($request->user_id);
        if($user){
            Session::flash('error','This user has specialization already');
            return back();  
        }
        
        $specialist = new Specialist();
        $specialist->user_id = $request->user_id;
        $specialist->specialization_id = $request->specialization;
        $specialist->save();
        Session::flash('success','Users specialist added');
        return back();
    }

    public function login(Request $request){
        $this->validate($request,[
            "email"=>"required|email",
            "password"=>"required"
        ]);

        $credentials = [
            "email"=>$request->email,
            "password"=>$request->password
        ];

        if(Auth::attempt($credentials)){
            return redirect('home');
        }

        Session::flash("error","username or password is invalid");
        return back();
    }

    public function logout(Request $request){
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }

    public function delete(Request $request){
        $user=User::find($request->user_id);
        if(!$user){
            Session::flash("error","User not found");
            return back();
        }
        if($user->specialist->count() > 0){
            Session::flash("error", "Can't delete this user because has specialization");
            return back();
        }
       // return $user->specialist->reportReplies;
       if ($user->specialist && $user->specialist->reportReplies()->count() > 0) {
        Session::flash("error", "Can't delete this user because they have replied to reports");
            return back();
        } else {
        $user->delete();
        Session::flash("success", "User deleted");
            return back();
        }
        
    }

    public function dashboard(){
        $undeliveredPatients = MaternityPregnant::where('is_delivered', 0)->get();
        $unattendedReports = PregnantReport::where('is_attended', 0)->get();
        return view('pages.dashboard',compact('undeliveredPatients','unattendedReports'));
    } 
}