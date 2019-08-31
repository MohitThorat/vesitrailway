<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jobs;
use App\candidates;
class JobsController extends Controller
{
    //
    public function showJobs(Request $request)
    {
        $jobs = Jobs::where('role',$request['job'])->where('location',$request['location'])->get();
      //  return $jobs;
        $count = $jobs->count();
        return view('pages.Jobs')->with('jobs',$jobs)->with('count',$count);
    }
    public function postJobs(Request $request)
    {
        Jobs::create(
            [
                'role'=>$request['job'],
                'location'=>$request['location'],
                'salary'=>$request['sal'],
            ]
        );
        return redirect()->back()->with('sucess','Sucessfully posted job.');
    }
    public function postYourself(Request $request)
    {
        candidates::create(
            [
                'name'=>$request['name'],
                'role'=>$request['job'],
                'location'=>$request['location'],
                'expected_salary'=>$request['sal'],
            ]
        );
        return redirect()->back()->with('sucess','Sucessfully posted job.');
    }
    public function searchEmployee(Request $request)
    {
        $employees = candidates::where('role',$request['role'])->where('location',$request['location'])->get();
          $count = $employees->count();
          return view('pages.showEmployees')->with('employees',$employees)->with('count',$count);
    }
}
