<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model{
    use HasFactory;

    public $fillable = [
        'name',
        'slug',
        'icon',
        'category_id'
    ];

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function levels(){
        return $this->hasMany(Level::class);
    }

    public function getRouteKeyName(){
        return 'slug';
    }

}
