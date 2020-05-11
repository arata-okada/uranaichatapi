<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DivinerlistsController extends Controller
{
    public function get(Request $request)
    {
        $items=DB::table('divinerlists')->get();
        return response()->json($items);
    }
}
