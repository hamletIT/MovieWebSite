<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
class MoveController extends Controller
{
    public function login(Request $request)
    {
        $user = Users::where('email',$request->input('email'))->first();
        $validator = Validator::make($request->all(), [
            'email'  => 'required|email',
            'password' => 'min:6|required|',
        ]);
        $validator->after(function ($validator) use ($user,$request) {
            if (!$user) {
                $validator->errors()->add('email', 'No such email was registered');
            }else if (!Hash::check($request->input('password'),$user->password,)) {
                $validator->errors()->add('password', 'No such password was created');
            }
        });
        if ($validator->fails()) {
            return redirect('/')
                        ->withErrors($validator)
                        ->withInput();
        }else{
            $request->session()->put('user', $user->id);
            return redirect('/index');
        }
    }
    public function registerUser(Request $request){
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'surname' => 'required|max:255',
            'age' => 'required|before:-13 years',
            'email'  => 'required|unique:hamos|email',
            'Password' => 'min:6|required_with:Confirm_Password|same:Confirm_Password',
            'Confirm_Password' => 'required|min:6',
        ]);
        if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        }else{
                 $user = new Users;
                 $user->name = $request->input('name');
                 $user->surname = $request->input('surname');
                 $user->email = $request->input('email');
                 $user->age = $request->input('age');
                 $user->password = Hash::make($request->input('Password'));
                 $user->save();
                return redirect('/login');
        }
    }




}
