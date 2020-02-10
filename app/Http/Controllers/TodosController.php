<?php

namespace App\Http\Controllers;

use App\Todo;
use Illuminate\Http\Request;

class TodosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $todos = Todo::all();
        return view('todos.index')->with('todos', $todos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('todos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Validate Inputs 

        $this->validate($request,[
            'text' => ['required'],
            'body' => ['required'],
            'due'  => ['required']
        ]);

        //Create Inputs 
        $todo = new Todo; //Creating new intance of the class
        //Storing Inputs in variables
        $todo->text = $request->input('text');
        $todo->due = $request->input('due');
        $todo->body = $request->input('body');

        //Save Inputs
        $todo->save();

        return redirect('/')->with('success', 'Todo Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $todo = Todo::find($id);
        return view('todos.show')->with('todo', $todo);
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
        $todo = Todo::find($id);
        return view('todos.edit')->with('todo', $todo);
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
        //Validate Inputs 
        $this->validate($request,[
            'text' => ['required'],
            'body' => ['required'],
            'due'  => ['required']
        ]);

        $todo = Todo::find($id);

        $todo->text = $request->input('text');
        $todo->due = $request->input('due');
        $todo->body = $request->input('body');

        //Save Inputs
        $todo->save();

        return redirect('/')->with('success', 'Todo Updated Successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $todo = Todo::find($id);

        //Deleting Todo
        $todo->delete();

        return redirect('/')->with('success', 'Todo Successfully Deleted');
    }
}
