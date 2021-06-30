<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Subject;
use App\Assignment;

class MainPageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		Session::flash('alert-class', 'alert-danger'); 
		
		$assignment = Assignment::orderByRaw(' abs( timestampdiff(day, current_timestamp, assignmentDeadline)) asc ')->first();
        return view('mainpage.index',array('assignment' => $assignment));
    }
	
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
		$subjects = Subject::all();
        return view('mainpage.create', [ 'subjects' => $subjects ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // server side validation
        $validatedData = $request->validate([
            'assignmentName' => 'required|max:30',
			'assignmentDesc' => 'required|max:1000',
            'assignmentDeadline' => 'required|date',
			'assignmentLink' => 'required|max:50',
        ]);
		$Assignment = new Assignment();
        $Assignment->assignmentName = $request->assignmentName;
        $Assignment->assignmentSubject = $request->assignmentSubject;
        $Assignment->assignmentDesc = $request->assignmentDesc;
		$Assignment->assignmentDeadline = $request->assignmentDeadline;
		$Assignment->assignmentDiff = $request->assignmentDiff;
		$Assignment->assignmentLink = $request->assignmentLink;
        $Assignment->save();
		
		Session::flash('message', 'This is a message!'); 
		Session::flash('alert-class', 'alert-danger'); 
	
		return redirect()->route('mainpage.index')
        ->with('success','Zadání úspěšně vytvořeno!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $assignment = Assignment::find($id);
		return view('mainpage.index', array('assignment' => $assignment));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $assignment = Assignment::find($id);
		$subjects = Subject::all();
		return view('mainpage.edit', array('assignment' => $assignment), [ 'subjects' => $subjects ]);
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
        $toUpdate = Assignment::findOrFail($id);

		$validatedData = $request->validate([
            'assignmentName' => 'required|max:30',
			'assignmentDesc' => 'required|max:1000',
            'assignmentDeadline' => 'required|date',
			'assignmentLink' => 'required|max:50',
        ]);

		$input = $request->all();

		$toUpdate->fill($input)->save();

		return redirect()->route('mainpage.index')
        ->with('success','Zadání úspěšně změněno!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $assignment = Assignment::findOrFail($id);

		$assignment->delete();

		return redirect()->route('mainpage.index')
        ->with('success','Zadání úspěšně smazáno!');
    }
}
