<?php

namespace App\Http\Controllers;

use DB;
use App\Datauser;
use App\Imgaccount;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function register(Request $req) {
        $path = 'default.png';
        $status = 'user';
        $user = new Datauser;
        $user->name=$req->name;
        $user->gender=$req->gender;
        $user->province=$req->province;
        $user->email=$req->email;
        $user->username=$req->username;
        $user->password=$req->password;
        $user->pathimg=$path;
        $user->status=$status;
        $user->save();

        return redirect('homeBD')->with('successregister', 'สมัครสมาชิกเรียบร้อย');
        
        
    }
}
