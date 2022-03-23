<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AssignSubject;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;
class AssignSubjectController extends Controller
{
    public function index()
    {
        $assign_subjects = AssignSubject::all();
        return view('backend.layouts.assign_subjects.index',compact('assign_subjects'));
    }


    public function create()
    {
        return view('backend.layouts.assign_subjects.create');
    }


    public function store(Request $request)
    {
        //dd($request->all());

        $assign_subjects = AssignSubject::create($request->all());
        $assign_subjects->save();
        return redirect()->route('assign_subjects.index')->withMessage('Successfully Created!');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $assign_subjects = AssignSubject::find($id);
        return view('backend.layouts.assign_subjects.edit' ,compact('assign_subjects'));
    }


    public function update(Request $request, $id)
    {
        try {

            AssignSubject::where('id', $id)->update([
                'name' => $request->name ?? null,

            ]);


            return redirect()->route('assign_subjects.index')->withMessage('Successfully Updated!');
        } catch (QueryException $e) {
            return redirect()->back()->withInput()->withErrors($e->getMessage());
        }
    }


    public function destroy($id)
    {
       
        $assign_subjects = AssignSubject::find($id);
        $assign_subjects->delete();
        return redirect()->route('assign_subjects.index')->withMessage('Successfully Deleted!');
    }
}
