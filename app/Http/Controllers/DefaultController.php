<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Task;

use App\Http\Requests;

class DefaultController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('default.index');
    }

    public function sendAjaxDate(Request $request)
    {
        $params = $request->all();
        return response()->json($params);
    }

    public function getJson()
    {
        $tasks = Task::all();
        return response()->json($tasks);
    }

    public function addPerson(Request $request)
    {

        $task = new Task;

        $task->title= $request->title;

        $task->start = $request->start;

        $task->save();
        
        

        return response()->json($task);
    }

}