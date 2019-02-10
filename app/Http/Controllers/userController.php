<?php 

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use App\donate;
use Validator;
use App\Http\Requests\userRequest;
use App\Http\Requests\editRequest;
use App\Http\Requests\donateRequest;
use Illuminate\Support\Facades\DB;

class userController extends Controller

{
     public function edp(Request $request,$id )
    { 

    //$user=User::all();
        $user=User::find($id);

    //$user = DB::table('users')->select('id','username', 'password','type')->get();
        return view('user.editprofile')->with('user',$user);


    //    $users = DB::table('users')->select('username', 'password','type')->get();
      //  return view('user.editprofile');
       
    }


public function search(Request $request)
    {
        return view('user.user_search');
    }
    public function fsearch(Request $request)
    {
        return view('user.faculty_search');
    }


  public function us(Request $request,$id)
    {
       $user=User::find($id);
        return view('user.donate')->with('user',$user);
    }

    public function donates(donateRequest $request,$id)
    { 
     $user=User::find($id); 
    $donate=new donate();
    $donate->name=$request->name;
    $donate->bloodgroup=$request->bloodgroup;
if($request->bloodgroup=='A+'){
        $donate->donar='1';
   }
   elseif($request->bloodgroup=='A-'){
        $donate->donar='1';
        
   }
  
   elseif($request->bloodgroup=='b+'){
        $donate->donar='1';    
    
   }
   elseif($request->bloodgroup=='b-'){
        $donate->donar='1';    
    
   }
   elseif($request->bloodgroup=='O+'){
        $donate->donar='1';    
    
   }
elseif($request->bloodgroup=='O-'){
        $donate->donar='1';    
    
   }
   elseif($request->bloodgroup=='AB+'){
        $donate->donar='1';    
    
   }
   elseif($request->bloodgroup=='AB-'){
        $donate->donar='1';    
    
   }
   elseif($request->bloodgroup=='B+'){
        $donate->donar='1';    
    
   }
   elseif($request->bloodgroup=='B-'){
        $donate->donar='1';    
    
   }
   elseif($request->bloodgroup=='O+'){
        $donate->donar='1';    
    
   }
elseif($request->bloodgroup=='O-'){
        $donate->donar='1';    
    
   }
   elseif($request->bloodgroup=='AB+'){
        $donate->donar='1';    
    
   }
   elseif($request->bloodgroup=='AB-'){
        $donate->donar='1';    
    
   }

    $donate->date=$request->date;
     $donate->address=$request->address;
     $donate->tel=$request->tel;

        

        $donate->save();
     return redirect()->route('user.user',[$user->id]);

}




     public function user(Request $request,$id)
    {
        $donate = DB::table('donate')
                  ->get();
    
        $user=User::find($id);
        return view('user.user')->with('user',[$user,$donate]);
        //$donate=donate::all(); 
    }
    

     public function showp(Request $request,$id)
    {
        $user=User::find($id);
        return view('user.showprofile')->with('user',$user);
    }



public function upd(editRequest $request,$id)
    {
        $user=User::find($id);
        
        $user->password=$request->password;
        $user->confirmpassword=$request->confirmpassword;
        $user->email=$request->email;
        $user->date=$request->date;

        $user->save();

        return redirect()->route('user.showProfile',[$user->id]);
    }


    public function create(Request $request)
    {
    	return view('user.create');
    }
        public function store(userRequest $request)
    { 
        if($request->hasFile('file')){

      //  $filename=$request->file->getClientOrginalName();  
        //$request->file->storeAS('public/upload',$filename);       
    $user=new User();
    $user->username=$request->username;
    $user->password=$request->password;
    $user->confirmpassword=$request->confirmpassword;
    $user->email=$request->email;
    $user->gender=$request->gender;
    $user->date=$request->date;

    $filename = time().'.'.$request->file->getClientOriginalExtension();
    $request->file->move(public_path('public'), $filename);
        
        

       
        $user->type="user";
        $user->typeid="2";
        $user->tp='1';
       // $user->file=$request->file;

        $user->file=$filename;       
        

        $user->save();
       return redirect()->route('login.index');

}

       

    }


    public function show(Request $request,$id)
    {
    	$user=User::find($id);
    	return view('user.show')->with('user',$user);
    }


    public function edit(Request $request,$id)
    {
    	$user=User::find($id);
    	return view('user.edit')->with('user',$user);
    }

    public function update(editRequest $request,$id)
    {
    	$user=User::find($id);
    	$user->password=$request->password;
        $user->confirmpassword=$request->confirmpassword;
        $user->email=$request->email;
        $user->date=$request->date;

    	$user->save();

    	return redirect()->route('home.index');
    }

    public function delete(Request $request,$id)
    {
    	$user=User::find($id);
    	return view('user.delete')->with('user',$user);
    }
    public function destroy(Request $request)
    {
    	User::destroy($request->uid);

    	return redirect()->route('home.index');
    }
}
