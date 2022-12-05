<?php
  
namespace App\Http\Controllers\Admin;
  
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use App\Models\User;
use App\Models\Post_table;
use Hash;
use Validator;
use DB;

class Profile extends Controller
{
    

    public function edit_profile($id)
    {
        
        $data = User::select("*")
        ->where("id", "=", $id)
        ->get();

        return view('admin/profileedit',['data'=>$data]);
    }
    public function profileupdate(Request $request)
    {
        if (!(Hash::check($request->get('current_password'), Auth::user()->password))) {
            // The passwords matches
            return redirect()->back()->with("error","Your current password does not matches with the password.");
        }

        if(strcmp($request->get('current_password'), $request->get('new_password')) == 0){
            // Current password and new password same
            return redirect()->back()->with("error","New Password cannot be same as your current password.");
        }

        //Change Password
        $user = Auth::user();
        $user->password = bcrypt($request->get('new_password'));
        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();

        return redirect()->back()->with("success","Profile successfully changed!");

    }
}