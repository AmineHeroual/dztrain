<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }

    public function trainer()
    {
        return $this->belongsTo('App\Models\Trainer');
    }

    public function students()
    {
        return $this->belongsToMany('App\Models\Student');
    }
}
