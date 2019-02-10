<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\presetRequest;
//to use the User Model Class
use App\User;
//for Query Builder
use Illuminate\Support\Facades\DB;


class loginController extends Controller
{

    public function forgetp(Request $request)
    {
        return view('login.forgetp');

    }
     public function preset(Request $request)
    {
       $un=$request->username;
       $user=DB::table('users')
                ->where('username',$un)
                ->first();

        if($user!=null)
        {
           // $request->put('user',$user);
            return redirect()->route('login.preset',[$user->id]);
 // "{{route('user.edit',[$user->id])}}"

        }
        else
        {
           
            return redirect()->route('login.forgetp')->with('message','you are not a register user please do regestration');
          // $request->with('message','Invalid username or password');
        } 
         

    }
    public function pas(Request $request,$id)
    {
        $user=User::find($id);
        return view('login.preset')->with('user',[$user]);
    }
    public function uppass(presetRequest $request,$id)
    {
        $user=User::find($id);
        
        $user->password=$request->password;
        $user->confirmpassword=$request->confirmpassword;
        
        $user->save();

        return redirect()->route('login.index');
    }




    public function index(Request $request)
    {
    	return view('login.index');
    }
    public function verify(Request $request)
    {
    	$un=$request->username;
    	//$pw=$request->input('password');
    	$pw=$request->password;


    	//Query Builder
    	$user=DB::table('users')
				->where('username',$un)
				->where('password',$pw)
				->first();
				
    	if($user!=null)
    	{
    		$request->session()->put('user',$user);
    		return redirect()->route('user.user',[$user->id]);
 // "{{route('user.edit',[$user->id])}}"

    	}
    	else
    	{
    		$request->session()->flash('message','Invalid username or password');
    		return redirect()->route('login.index');
    	}

    }
}
