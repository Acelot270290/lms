<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; 
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class InstructorController extends Controller
{
    public function InstructorDashboard(){
        $id = Auth::user()->id;
        $profileData = User::find($id);
        return view('instructor.index',compact('profileData'));
    }  

    public function InstructorLogout(Request $request) {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/instructor/login');
    } 


    public function InstructorLogin(){
        return view('instructor.instructor_login');
    } 

    public function InstructorProfile(){

        $id = Auth::user()->id;
        $profileData = User::find($id);
        return view('instructor.instructor_profile_view',compact('profileData'));
    }

    public function InstructorProfileStore(Request $request){

        $id = Auth::user()->id;
        $data = User::find($id);
        $data->name = $request->name;
        $data->username = $request->username;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->andress = $request->address;

        if ($request->file('photo')) {
           $file = $request->file('photo');
           @unlink(public_path('upload/instructor_images/'.$data->photo));
           $filename = date('YmdHi').$file->getClientOriginalName();
           $file->move(public_path('upload/instructor_images'),$filename);
           $data['photo'] = $filename; 
        }

        $data->save();

        $notification = array(
            'message' => 'Instructor Profile Updated Successfully',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);

    }

}
