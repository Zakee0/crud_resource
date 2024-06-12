<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    //
    function getdata(){
        return DB::table('employee')
        ->join('company','employee.id', '=' , 'company.employee_id')
        ->get();
    }
}
