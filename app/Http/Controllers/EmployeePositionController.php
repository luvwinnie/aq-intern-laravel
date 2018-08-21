<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeePositionController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Show the application dashboard.
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function get_position(Request $request,$family_name,$given_name)
    {
        $employees = Employee::select('employees.position')->where('family_name','like','%'.$family_name.'%')->where('given_name','like','%'.$given_name.'%');
        // $employees = Employee::all/
        if ($request->method() == "GET"){
            
            return response()->json($employees->get('position'));
        }
        
        
    }

    public function post_position(Request $request,$family_name,$given_name){
        
        return response()->json(["message"=>"post request"]);
        
    }

}
