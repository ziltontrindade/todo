<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Task;
use Illuminate\Http\Request;


class TaskController extends Controller
{
    public function index(){

    }

    public function create(Request $r){
        $categories = Category::all();
        $data['categories'] = $categories;

        return view('tasks.create', $data);
    }

    public function create_action(Request $request){
       $task = $request->only(['title','category_id','description','due_date']);
       $task['user_id'] = 1;

       $dbTask = Task::create($task);
       return redirect(route('home'));
    }


    public function edit(Request $r){
        $id = $r->id;
       $task = Task::find($id);
       if(!$task){
        return redirection(route('home'));
       }
        $categories = Category::all();
        $data['categories'] = $categories;

       $data['task'] = $task;

        return view('tasks.edit', $data);
    }

    public function edit_action(Request $r){
        // "_token" => "I9XzWqg4AWbCVO2RSbWorQ1jqj4fSSdZqx0jZ0Hi"
        // "id" => "2"
        // "title" => "testando"
        // "due_date" => "1970-10-28T05:42:38"
        // "category_id" => "30"
        // "description" => "teste"

        $r_data = $r->only(['title','due_date','category_id','description']);

        $task = Task::find($r->id);
        if(!$task){
            return 'Erro de task não existente';
        }
        $task->update($r_data);
        $task->save();
        return redirect(route('home'));
        // dd($task);

    }



    public function delete(Request $r){
       //Deleta e redireciona para a Home
       return redirect('/');
    }
}
