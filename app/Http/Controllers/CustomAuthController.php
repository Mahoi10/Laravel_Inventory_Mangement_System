<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use Hash;
use Session;

class CustomAuthController extends Controller
{
   public function login()
   {
return view("auth.login");
   }
   public function registration()
   {
return view("auth.registration");
   }
   public function forgotpassword() {
return view('auth.forgotpassword');
$request->validate([
    'email'=>'required|email|unique:users',
]); 
$user = User::where('email','=',$request->email)->first();
}
    public function recoverpassword() {
return view('auth.recoverpassword');
}
   public function registerUser(Request $request)
   {
    $request->validate([
        'name'=>'required',
        'email'=>'required|email|unique:users',
        'password'=>'required|min:8|max:16'
    ]); 
    $user = new User();
    $user->name = $request->name;
    $user->email = $request->email;
    $user->password = Hash::make($request->password);
    $res = $user->save();
    if($res){
        return back()->with('success','You have registered successfully');
    }else{
        return back()->with('fail','Something wrong');
    }
   }
   public function loginUser(Request $request)
   {
    $request->validate([
        'email'=>'required|email',
        'password'=>'required|min:8|max:16'
    ]); 
    $user = User::where('email','=',$request->email)->first();
    if ($user){
        if(Hash::check($request->password, $user->password)){
            $request->session()->put('loginId',$user->id);
            return redirect('dashboard');
        } else {
        return back()->with('fail','Password not matches'); 
        }
    } else {
        return back()->with('fail','This email is not registered');
    }
   }
   public function dashboard()
   {
       $data = array();
       if(Session::has('loginId')) {
        $data = User::where('id', '=', Session::get('loginId'))->first();
       }
       return view('dashboard', compact('data'));
   }
   public function table() {
        return view('table');
}
    public function form() {
        return view('form');
}
public function users() {
    return view('users');
}
public function contactus() {
    return view('contactus');
}
public function logout() {
    return redirect('login');
}
}