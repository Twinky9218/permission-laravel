<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class JoinTableController extends Controller
{
    public function index()
    {
    	
    	$data = DB::table('department')
    	        ->rightjoin('employees','employees.id','=','department.id')
    	        ->select('employees.empname','employees.mobileno','department.deptname')
    	        ->get();

    	return view('join_table',compact('data'));    


    }
}
