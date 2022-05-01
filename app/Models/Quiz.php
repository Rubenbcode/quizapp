<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quiz extends Model{

    use HasFactory;

    const DISABLED = 0;
    const ENABLED = 1;

    public $fillable = [
        'name',
        'slug',
        'description',
        'status',
        'watch',
        'level_id',
        'user_id'
    ];

    public function level(){
        return $this->belongsTo(Level::class);
    }

    public function questions(){
        return $this->hasMany(Question::class);
    }

    public function created_by(){
        return $this->belongsTo(User::class);
    }

    public function users(){
        return $this->belongsToMany(User::class,'quiz_user')->withPivot('score','percent');
    }

}
