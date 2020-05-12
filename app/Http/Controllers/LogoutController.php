<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LogoutController extends Controller
{
    public function post(Request $request)
    {
        return response()->json(['auth'=>false]);
    }
}
