<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Group;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;
class GroupController extends Controller
{
    
    public function index()
    {
        $groups = Group::all();
        return view('backend.layouts.groups.index',compact('groups'));
    }


    public function create()
    {
        return view('backend.layouts.groups.create');
    }


    public function store(Request $request)
    {
        //dd($request->all());

        $groups = Group::create($request->all());
        $groups->save();
        return redirect()->route('groups.index')->withMessage('Successfully Created!');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $groups = Group::find($id);
        return view('backend.layouts.groups.edit' ,compact('groups'));
    }


    public function update(Request $request, $id)
    {
        try {

            Group::where('id', $id)->update([
                'name' => $request->name ?? null,

            ]);


            return redirect()->route('groups.index')->withMessage('Successfully Updated!');
        } catch (QueryException $e) {
            return redirect()->back()->withInput()->withErrors($e->getMessage());
        }
    }


    public function destroy($id)
    {
       
        $groups = Group::find($id);
        $groups->delete();
        return redirect()->route('groups.index')->withMessage('Successfully Deleted!');
    }
}
