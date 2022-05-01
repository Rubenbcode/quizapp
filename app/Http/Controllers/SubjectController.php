<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    public function list(Category $category){
        $subjects = $category->subjects;

        return view('subjects.list',compact('category','subjects'));
    }
}
