<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Str;


class UserController extends Controller
{
    public function settings()
    {
        return view('dashboard.masyarakat.user.settings', [
            'title' => 'Data profil',
            'description' => 'Di halaman ini masyarakat bisa mengubah data profilnya',
        ]);
    }

    public function settings_action(Request $request)
    {
        $user = User::find(auth()->user()->id);
        if($request->submit == "user") {
            $request->validate([
                'name' => 'required',
                'email' => 'required',
                'phone' => 'required',
                'address' => 'required',
                'submit' => 'required',
            ]);

            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $fileName = time() . Str::random(5) . '.' . $file->getClientOriginalExtension();
                $path = 'uploads/profile';
                $file->move($path, $fileName);
                $user->picture = "/" . $path . "/" . $fileName;
            }
    
            $user->name = $request->name;
            $user->email = $request->email;
            $user->phone = $request->phone;
            $user->address = $request->address;
            $user->save();
    
            return redirect()->back()->with('success', 'Data profil berhasil diubah');
        } else if($request->submit == "password") {
            $request->validate([
                'old_password' => 'required',
                'new_password' => 'required',
                'new_password_confirmation' => 'required',
            ]);

            if(!password_verify($request->old_password, $user->password)) {
                return redirect('/masyarakat/settings')->with('error', 'Password lama tidak sesuai');
            } else if($request->new_password != $request->new_password_confirmation) {
                return redirect('/masyarakat/settings')->with('error', 'Password baru tidak sama');
            } else {
                //store password with php hash
                $user->password = password_hash($request->new_password, PASSWORD_DEFAULT);
                $user->save();

                return redirect()->back()->with('success', 'Password berhasil diubah');
            }
        }
    }
}
