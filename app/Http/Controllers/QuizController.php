<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Subject;
use App\Models\Level;
use App\Models\Quiz;

use Illuminate\Http\Request;

class QuizController extends Controller
{
    
    public function list(Category $category,Subject $subject, Level $level,Quiz $quiz){
        return view('quizzes.show',[
            'quiz' => $quiz
        ]);
    }
}
