<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model{

    use HasFactory;

    public $fillable = [
        'title', 
        'description',
        'answer_1',
        'answer_2',
        'answer_3',
        'answer_4',
        'order_quiz',
        'correct_answer',
        'section_id',
        'quiz_id',
    ]; 

    public function quiz(){
        return $this->belongsTo(Quiz::class);
    }

    public function section(){
        return $this->belongsTo(Section::class);
    }
    
}
