<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model{

    use HasFactory;

    public $fillable = [
        'name',
        'slug',
        'icon'
    ];

    public function subjects(){
        return $this->hasMany(Subject::class);
    }

    public function quizzes(){
        return $this->hasManyThrough(Quiz::class,Level::class);
    }

    public function getRouteKeyName(){
        return 'slug';
    }
    
}
