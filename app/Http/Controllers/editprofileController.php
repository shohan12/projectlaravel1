
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Validator;
use App\Http\Requests\userRequest;


class editprofileController extends Controller
{
    public function us(Request $request)
    {
        return view('us.donate');
    }
}
