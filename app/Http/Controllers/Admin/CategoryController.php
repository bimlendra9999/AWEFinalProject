<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

//Import models
use App\Models\Category;

class CategoryController extends Controller
{
    //Function to get all the list of category
    public function index(){
        $categories = Category::all();
        return view('admin.category.list',compact('categories'));
    }

    //Function to delete Category
    public function deleteCategory($id)
    {
        Category::findOrFail($id)->delete();
        return redirect()->route('admin.category');
        session()->flash('message','Category has been deleted successfully');
    }


    //Function to get form
    public function create(){
        return view('admin.category.create');
    }
}
