<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function get(Request $request)
    {
        if ($request->has('email')) {
            $items=DB::table('users')->where('email', $request->email)->get();
            return response()->json($items);
        } else {
            return response()->json(array('status'=>'not found'), 404);
        }
    }
}
