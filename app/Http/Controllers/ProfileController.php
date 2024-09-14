<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

}
