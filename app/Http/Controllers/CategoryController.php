<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function createTask(){
        return view('categories.create');
    }

    public function postcreateTask(Request $request){
        $request->validate([
            'name'=>'required|min:5',
            'quantity'=>'required|min:5'
        ]);

        $category = new Category();

        $category->name = $request->name;

        $category->quantity = $request->quantity;


        $category->save();
        return redirect()->route('route-all-task');
    }

    public function allTask()
    {
        $category = Category::all();

        return view('categories.all' , compact('category'));
    }


    

    public function editTask($id)
    {
        $category = Category::find($id);

        return view('categories.edit' , compact('category'));
    }


    public function updateTask(Request $request, $id)
    {
        $request->validate([
            'name'=>'required|min:5',
            'quantity'=>'required|min:5'
        ]);

        $category = Category::find($id);

        
        $category->name = $request->name;

        $category->quantity = $request->quantity;

        $category->save();
        return redirect()->route('route-all-task');



    }
}
