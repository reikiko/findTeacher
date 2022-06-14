<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'desc',
        'excerpt',
        'image',
        'teacher_id',
        'category_id',
    ];

    public function category(){
        return $this->belongsTo(Category::class);        
    }

    public function teacher(){
        return $this->belongsTo(Teacher::class);        
    }

    public function getRouteKeyName(){
        return 'slug';
    }
}
