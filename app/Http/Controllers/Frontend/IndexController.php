<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class IndexController extends Controller
{
    public function index(){
        return view('frontend.index');
    }

    public function UserLogout(){
        Auth::logout();
        return redirect()->route('login');
    }

    public function UserProfile(){
        $id = Auth::user()->id;
        $user = User::find($id);
        return view('frontend.profile.user_profile',compact('user'));
    }

    public function UserProfileUpdate(Request $request){
        $data = User::find(Auth::user()->id);
        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone_number = $request->phone_number;

        if($request->file('profile_photo_path')){
            $file = $request->file('profile_photo_path');
            if($data->profile_photo_path){
                @unlink(public_path('upload/user_images/'.$data->profile_photo_path));
            }
            $filename = date("YmdHi").$file->getClientOriginalName();
            $file->move(public_path('upload/user_images'),$filename);
            $data['profile_photo_path'] = $filename;
        }

        $data->save();

        $notification = array(
            'message' => "User Updated Successfully",
            'alert-type' => "success"
        );

        return redirect()->route('dashboard')->with($notification);
    }

    public function UserChangePassword(){
        return view('frontend.profile.change_password');
    }

    public function UserPasswordChange (Request $request){
        $validateData = $request->validate([
            'oldpassword' => 'required',
            'password' => 'required|confirmed',

        ]);

        $hashedPassword = Auth::user()->password;

        if(Hash::check( $request->oldpassword , $hashedPassword)){
            $user = User::find(Auth::user()->id);
            $user->password = Hash::make($request->password);
            $user->save();
            Auth::logout();
            return redirect()->route('user.logout');
        }else{
            dd($request);
            //return redirect()->back();
        }
    }
}
