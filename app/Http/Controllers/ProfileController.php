<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class ProfileController extends Controller
{
   public function index(){
    return view('deshboard.profile.index');
   }
//    name update
   public function name_update(Request $request){

    $request->validate([
        'name'=>'required|string|max:100',
        'name'=>'regex:/^[a-zA-Z\s\-]+$/u',
    ]);

    User::find(Auth::user()->id)->update([
        'name'=>$request->name,
        'update_at'=>now(),
    ]);
    return back()->with('name_update',"Your updated name is $request->name");
   }

//    email
public function email_update(Request $request){
     $request->validate([
        'email'=> 'required|email'
     ]);
     user::find(auth()->id())->update([
        'email'=>$request->email,
        'updated_at'=>now(),
     ]);
     return redirect()->route('profile.index')->with('email_update',"Your updated email is $request->email");
}

// update password

public function password_update(Request $request){
    $request->validate([
        'c_password' => 'required',
        'password' => 'required|min:8|confirmed'
    ]);

    if(Hash::check($request->c_password, auth()->user()->password)){
        User::find(auth()->user()->id)->update([
            'password' =>$request->password,
            'Update_at' =>now(),
        ]);
        return redirect()->route('profile.index')->with('password_update',"Password change successfully");
    }else{
        return back()->withErrors(['c_password' => "This password doesn't match with our record"])->withInput();

    }
}

// image
public function image_update(Request $request){
    $manager = new ImageManager(new Driver());
        $request->validate([
            'image'=> 'required|image',
        ]);

        if($request->hasFile('image')){
            $newname = auth()->id() . '-' . rand(1111,9999) . '.' . $request->file('image')->getClientOriginalExtension();
            $image = $manager->read($request->file('image'));
            $image->toPng()-> save(base_path('public/uploads/profile/' . $newname));

            User:: find(auth()->id())->update([

                'image' => $newname ,
                'updated_at' => now(),

            ]);
            return redirect()->route('profile.index')->with('image_update',"Image Updated");
        }
}

}



// public function image_update(Request $request){
//     $manager = new ImageManager(new Driver());

//     $request->validate([
//         'image' => 'required|image',
//     ]);


//     if($request->hasFile('image')){
//         $newname = auth()->id() . '-' . rand(1111,9999) . '.' . $request->file('image')->getClientOriginalExtension();
//         $image = $manager->read($request->file('image'));
//         $image->toPng()->save(base_path('public/uploads/profile/'.$newname));

//         User::find(auth()->id())->update([
//             'image' => $newname,
//             'updated_at' => now(),
//         ]);
//     return redirect()->route('profile.index')->with('image_update',"Image Update Successful");
//     }

// }

// }


// public function password_update(Request $request){
//     $request->validate([
//         'c_password' => 'required',
//         'password' => 'required|min:8|confirmed',
//     ]);

//     if(Hash::check($request->c_password, auth()->user()->password)){
//         User::find(Auth::user()->id)->update([
//             'password' => $request->password,
//             'updated_at' => now(),
//         ]);
//     return redirect()->route('profile.index')->with('password_update',"Password Update Successful");

//     }else{
//         return back()->withErrors(['c_password' => "Current password doesn't match with our record"])->withInput();
//     }
// }
