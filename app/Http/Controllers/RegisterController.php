<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Fecades\DB;
use Illuminate\Support\Fecades\Hash;
use Carbon\Carbon;

class RegisterController extends Controller
{
    public function post(Request $request){
        $now=Carbon::now();
        $hashed_password=Hash::make($request->password);
        $param=[
            "name"=>$request->name,
            "email"=>$request->email,
            "password"=>$hashed_password,
            "created_at"=>$now,
            "updated_at"=>$now,
        ];
        DB::insert('insert into users (name,email,password,created_at,updated_at) values (:name,:email,:password,:created_at,:updated_at)',$param);
        return response()->json(); 
    }
}
