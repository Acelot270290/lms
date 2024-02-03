<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function AdminDashboard(){
        $id = Auth::user()->id;
        $profileData = User::find($id);
        return view('admin.index', compact($profileData));
    }

    public function AdminLogout(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/admin/login');
    }

    public function AdminLogin(){
        return view('admin.admin_login');

    }

    public function AdminProfile(){

        $id = Auth::user()->id;
        $profileData = User::find($id);
        return view('admin.admin_profile',compact('profileData'));

    }

    public function AdminProfileStore(Request $request) {

        $id = Auth::user()->id;

        $data = User::find($id);
        $data->name = $request->name;
        $data->username = $request->username;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->andress = $request->andress;

        if($request->file('photo')){
            $file = $request->file('photo');
            @unlink(public_path('upload/admin_images/'.$data->photo));
            $filename = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/admin_images'),$filename );
            $data['photo'] = $filename;

        }

        $data->save();

        $notification = [
            'message' => 'Perfil Atualizado com Sucesso!',
            'alert-type'=> 'success'
        ];
        
        return redirect()->back()->with($notification);
        
    }
}
