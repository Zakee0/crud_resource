<?php

namespace App\Http\Controllers;

use App\Models\Member;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class MemberController extends Controller
{
    //
    function show(){
        return DB::table('members')->get();
       }
}
