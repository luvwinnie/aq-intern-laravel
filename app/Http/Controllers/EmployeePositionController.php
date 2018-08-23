<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Beacon;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\DB;
use Illuminate\Support\Facades\Log;
use App\Services\GoogleApi;

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
        
        if (! $employees->exists()) {
            return response()->json(["message" => "Record is not exists"],400);
        }

        return response()->json($employees->get('position'),200);


        
    }

    public function getplace_employees(Request $request,$position)
    {
        $employees = Employee::where('position',$position)->get();

        if(!$employees->count())
        {
            return response()->json("No people in ".$position,500);
        }

        return response()->json($employees,200);
    }


    public function post_position(Request $request,$family_name,$given_name)
    {

        Log::info($request->input('major'));
        Log::info($request->input('minor'));
        Log::info($family_name);
        Log::info($given_name);

        $major = $request->input('major');
        $minor = $request->input('minor');

        if ($major == "" || $minor == ""){
            return response()->json("error params",400);
        }

        $beacon = Beacon::where('major', $major)->where('minor', $minor)->first();

        if (!$beacon){
            return response()->json("Beacon not found, Is it exists?",404);
        }


        $isUpdated = Employee::select('employees.*')->where('family_name','like','%'.$family_name.'%')->where('given_name','like','%'.$given_name.'%')->update(['beacon_id' => $beacon->id,'position' => $beacon->position,'positioned_at' => Carbon::now()]);

        if (!$isUpdated){
            return response()->json("Update Failed ",400);

        }
        return response()->json("Update Successfully",200);

    }

}
