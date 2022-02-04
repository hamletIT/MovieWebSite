<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\move;
use App\Models\photo;
use App\Models\video;
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
            'name' => 'required|max:22',
            'surname' => 'required|max:255',
            'age' => 'required|before:-13 years',
            'email'  => 'required|unique:users|email',
            'Password' => 'min:6|same:Confirm_Password',
            'Confirm_Password' => 'required|min:6',
        ]);
        if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        }else{
            // User::create($request->all());
                 $user = new User;
                 $user->name = $request->input('name');
                 $user->surname = $request->input('surname');
                 $user->email = $request->input('email');
                 $user->age = $request->input('age');
                 $user->password = Hash::make($request->input('Password'));
                 $user->save();
                dd($user);
                
        }
    }
    public function addmove(){
        
        
         return view('admin');
     }
    public function Add_move(Request $request)
    {
            $validator = Validator::make($request->all(), [
                'Name'          => 'required|max:255',
                'Description'   => 'required|max:2000',
                'Tari'          => 'required',
                'Janr'          => 'required',
                'Rejisor'       => 'required',
                'Tevoxutyun'    => 'required',
               
            ]);
            if ($validator->fails()) {
                return redirect()->back()
                            ->withErrors($validator)
                            ->withInput();
            }else{
                $product = new move;
                     $product->Name = $request->input('Name');
                     $product->Description = $request->input('Description');
                     $product->Tari = $request->input('Tari');
                     $product->Janr = $request->input('Janr');
                     $product->Rejisor = $request->input('Rejisor');
                     $product->Tevoxutyun = $request->input('Tevoxutyun');
                    //  'plain-text');
                     $product->save();
                    
    
                if($request->hasfile('photo'))
                {
                foreach($request->file('photo') as $file)
                {
                    $name = time().'.'.$file->getClientOriginalName();
                    $file->move(public_path().'/files/', $name); 
    
                    $file= new photo();
                    $file->name=$name;
                    $file->films_id = $product->id;
                    $file->save();
           
                }
                
                }
                if($request->hasfile('video'))
                {
                foreach($request->file('video') as $file)
                {
                    $name = time().'.'.$file->getClientOriginalName();
                    $file->move(public_path().'/filesvideo/', $name); 
    
                    $file= new video();
                    $file->name=$name;
                    $file->films_id = $product->id;
                    $file->save();
           
                }
                
                }
           
            print("everething ok");
            }
           
    
       
    }

 


}
