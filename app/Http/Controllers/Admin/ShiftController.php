<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Shift;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;
class ShiftController extends Controller
{
    public function index()
    {
        $shifts = Shift::all();
        return view('backend.layouts.shifts.index',compact('shifts'));
    }


    public function create()
    {
        return view('backend.layouts.shifts.create');
    }


    public function store(Request $request)
    {
        //dd($request->all());

        $shifts = Shift::create($request->all());
        $shifts->save();
        return redirect()->route('shifts.index')->withMessage('Successfully Created!');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $shifts = Shift::find($id);
        return view('backend.layouts.shifts.edit' ,compact('shifts'));
    }


    public function update(Request $request, $id)
    {
        try {

            Shift::where('id', $id)->update([
                'name' => $request->name ?? null,

            ]);


            return redirect()->route('shifts.index')->withMessage('Successfully Updated!');
        } catch (QueryException $e) {
            return redirect()->back()->withInput()->withErrors($e->getMessage());
        }
    }


    public function destroy($id)
    {
        //dd($id);
        $shifts = Shift::find($id);
        //dd($class);
        $shifts->delete();
        return redirect()->route('shifts.index')->withMessage('Successfully Deleted!');
    }
}
