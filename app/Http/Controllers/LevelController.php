<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use App\Models\Category;

use Illuminate\Http\Request;

class LevelController extends Controller{

    public function list(Category $category,Subject $subject){
        $levels = $subject->levels()->orderBy('level_order','ASC')->get();
        return view('levels.list',compact('category','subject','levels'));
    }

}
