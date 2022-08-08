<?php

namespace App\Http\Controllers;

use App\Models\CRUD;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CrudController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $show = CRUD::paginate(5);
        return view('welcome',compact('show'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required|max:20',
            'surname'=>'required|max:20',
            'age'=>'required|max:3',
            'job'=>'required|max:20',
        ]);
        // CRUD::insert([
        //     'name'=>$request->name,
        //     'surname'=>$request->surname,
        //     'age'=>$request->age,
        //     'job'=>$request->job,
        // ]);
        $crud = new CRUD;
        $crud->name=$request->name;
        $crud->surname=$request->surname;
        $crud->age=$request->age;
        $crud->job=$request->job;

        $crud->save();
        return redirect()->back()->with('success','Add Success');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $find = CRUD::find($id);
        return view('edit',compact('find'));
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
        $request->validate([
            'name'=>'required|max:20',
            'surname'=>'required|max:20',
            'age'=>'required|max:3',
            'job'=>'required|max:20',
        ]);
        $fin = CRUD::find($id);
        $fin->name=$request->name;
        $fin->surname=$request->surname;
        $fin->age=$request->age;
        $fin->job=$request->job;
        $fin->save();

        return redirect()->route('home')->with('success','Update sucessfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        dd($id);
        // CRUD::find($id)->delete();
        // return redirect()->route('crud.index')->with('success','Delete sucessfully');
    }
}
