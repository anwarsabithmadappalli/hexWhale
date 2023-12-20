<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\task;
use App\Models\Registration;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function taskCreate(){
        $categories = category::all();
        return view('Task.create',compact('categories'));
    }

    public function taskSave(request $request){

        request()->validate([
            'taskName' => 'required|string',
            'taskDescription' => 'required|string',
            'taskDate' => 'required|date',
            'category' => 'required',

        ]);
        $user = session('user');

        $user_id = $user['id'];

        $task = task::create([
            'user_id' => $user_id,
            'taskName' => $request->taskName,
            'taskDescription' => $request->taskDescription,
            'taskDate' => $request->taskDate,
            'category_id' => $request->category,
        ]);

        return redirect()->route('task.list')->with('message','Task Created Successfully!');

    }

    public function taskList(){


        $tasks = task::all();
        
        return view('Task.list', compact('tasks'));

    }

    public function taskView($id){

        $task = task::find($id);
        return view('Task.view',compact('task'));

    }

    public function taskEdit($id){

        $categories = category::all();
        $task = task::find($id);
        return view('Task.edit',compact('task','categories'));

    }

    public function taskUpdate(request $request, $id){

        $user = session('user');

        $user_id = $user['id'];

        $task = task::find($id);

        if($user_id == $task->user_id){
        request()->validate([
            'taskName' => 'required|string',
            'taskDescription' => 'required|string',
            'taskDate' => 'required|date',
            'category' => 'required',

        ]);


            $task->taskName = request('taskName');
            $task->taskDescription = request('taskDescription');
            $task->taskDate = request('taskDate');
            $task->category_id = request('category');
            
            $task->save();

        return redirect()->route('task.list')->with('message','Task Updated Successfully!');
    }
    else{
        return redirect()->route('task.list')->with('message','You Are Not The User');

    }

    }

    public function categoryCreate(){
        return view('Category.create');
    }
    public function categorySave(request $request){
        request()->validate([
            'Category' => 'required|string'
        ]);

        $data = [
            'category' => $request->Category
        ];

        $user = category::create($data);
        return redirect()->route('category.list')->with('message','category created successfully!');
    }
    public function categoryList(){

        $categories = category::all();
        //dd($categories);
        return view ('Category.list',compact('categories'));

    }
    public function categoryEdit($id){

        $category = category::find($id);

        return view('Category.edit',compact('category'));
    
    }
    public function categoryUpdate(request $request, $id){

    request()->validate([
        'Category' => 'required|string'
    ]);
    $category = category::find($id);

    $category->Category = request('Category');
    $category->save();
    return redirect()->route('category.list')->with('message','Category Updated Successfully!');
    }


    public function categoryDelete($id){

        $category = category::find($id);
        $category->delete();
        return redirect()->route('category.list');


    }
}
