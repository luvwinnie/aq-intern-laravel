<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Beacon;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\DB;

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
        

        return response()->json($employees->get('position'));


        
    }

    public function post_position(Request $request,$family_name,$given_name){

        $major = $request->input('major');
        $minor = $request->input('minor');

        if ($major == "" || $minor == ""){
            return response()->json(["error_message" => "error params"]);
        }

        $position_id = Beacon::select('id','position')->where('major','like','%'.$major.'%')->where('minor','like','%'.$minor.'%')->get();

        $id = $position_id[0]->id;
        $position = $position_id[0]->position;

        $employees = Employee::select('employees.*')->where('family_name','like','%'.$family_name.'%')->where('given_name','like','%'.$given_name.'%')->update(['beacon_id' => $id,'position' => $position,'positioned_at' => Carbon::now()]);

        if ($employees == 1){
            return response()->json(["message"=>"Update Successfully"]);
        }

        return response()->json(["message"=>"Update Failed "]);


        
    }

}
