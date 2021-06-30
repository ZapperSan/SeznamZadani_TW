<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Subject;
use App\Assignment;

class FilterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $subjects = Subject::all();
        return view('filter.create', [ 'subjects' => $subjects ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

		/*
		assignmentName
		assignmentSubject
		assignmentDeadlineFrom
		assignmentDeadlineTo
		assignmentDiff
		*/
		
		$assignmentName = $request->input('assignmentName');
		$assignmentSubject = $request->input('assignmentSubject');
		$assignmentDiff = $request->input('assignmentDiff');
		if(is_null($request->input('assignmentDeadlineFrom')))
		{
			$assignmentDeadlineFrom = Carbon::today();
		} else
		{
			$assignmentDeadlineFrom = $request->input('assignmentDeadlineFrom');
		}
		if(is_null($request->input('assignmentDeadlineTo')))
		{
			$assignmentDeadlineTo = Carbon::today()->addYears(1000);
		} else
		{
			$assignmentDeadlineTo = $request->input('assignmentDeadlineTo');
		}
		$assignments = DB::table('Assignments')
                ->when($assignmentName, function ($query, $assignmentName )
				{
                    return $query->where('assignmentName','like','%'. $assignmentName . '%');
                })
				->when($assignmentSubject, function ($query, $assignmentSubject)
				{
                    return $query->where('assignmentSubject', $assignmentSubject);
                })
				->when($assignmentDiff, function ($query, $assignmentDiff)
				{
                    return $query->where('assignmentDiff', $assignmentDiff);
                })
				->whereBetween('assignmentDeadline', [ $assignmentDeadlineFrom , $assignmentDeadlineTo ])
                ->get();
				
        return view('filter.index', [ 'assignments' => $assignments ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
