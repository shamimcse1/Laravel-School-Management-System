<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Subject;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;

class SubjectController extends Controller
{
    public function index()
    {
        $subjects = Subject::all();
        return view('backend.layouts.subjects.index',compact('subjects'));
    }


    public function create()
    {
        return view('backend.layouts.subjects.create');
    }


    public function store(Request $request)
    {
        //dd($request->all());

        $subjects = Subject::create($request->all());
        $subjects->save();
        return redirect()->route('subjects.index')->withMessage('Successfully Created!');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $subjects = Subject::find($id);
        return view('backend.layouts.subjects.edit' ,compact('subjects'));
    }


    public function update(Request $request, $id)
    {
        try {

            Subject::where('id', $id)->update([
                'name' => $request->name ?? null,

            ]);


            return redirect()->route('subjects.index')->withMessage('Successfully Updated!');
        } catch (QueryException $e) {
            return redirect()->back()->withInput()->withErrors($e->getMessage());
        }
    }


    public function destroy($id)
    {
        //dd($id);
        $subjects = Subject::find($id);
        //dd($class);
        $subjects->delete();
        return redirect()->route('subjects.index')->withMessage('Successfully Deleted!');
    }
}
