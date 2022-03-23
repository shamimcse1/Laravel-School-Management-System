<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\StudentClass;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;

class StudentClassController extends Controller
{

    public function index()
    {
        $class = StudentClass::all();
        return view('backend.layouts.clases.index',compact('class'));
    }


    public function create()
    {
        return view('backend.layouts.clases.create');
    }


    public function store(Request $request)
    {
        //dd($request->all());

        $class = StudentClass::create($request->all());
        $class->save();
        return redirect()->route('clases.index')->withMessage('Successfully Created!');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $class = StudentClass::find($id);
        return view('backend.layouts.clases.edit' ,compact('class'));
    }


    public function update(Request $request, $id)
    {
        try {

            StudentClass::where('id', $id)->update([
                'name' => $request->name ?? null,

            ]);


            return redirect()->route('clases.index')->withMessage('Successfully Updated!');
        } catch (QueryException $e) {
            return redirect()->back()->withInput()->withErrors($e->getMessage());
        }
    }


    public function destroy($id)
    {
        //dd($id);
        $class = StudentClass::find($id);
        //dd($class);
        $class->delete();
        return redirect()->route('clases.index')->withMessage('Successfully Deleted!');
    }
}
