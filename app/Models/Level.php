<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Level extends Model{
    use HasFactory;

    public $fillable = [
        'name',
        'level_order',
        'subject_id'
    ];

    public function subject(){
        return $this->belongsTo(Subject::class);
    }

    public function quizzes(){
        return $this->hasMany(Quiz::class);
    }


    



}
