<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

use Illuminate\Support\Facades\DB;
class homeController extends Controller
{
    public function index(Request $request)
    {
    	         $users=User::all();
    	
    	    
    		  // $users=DB::table('users')
    			//->join('userType','users.typeId','=','userType.id')
    			//->where('users.typeId','=',1)
    			//->select('users.*','userType.typeName')
    			//->get();
    		return view('home.index')->with('users',$users);
    	

    	//return redirect()->route('login.index');
    	
    }
    
}
