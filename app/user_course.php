<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class user_course extends Model
{
    //
    protected $table = 'user_course';

    protected $fillable = ['id', 'course_id', 'user_id'];

    public $timestamps = false;

    public function course_lesson() {
        return $this->hasMany('App\course_lesson');
    }

    public function course() {
        return $this->belongsTo('App\course');
    }

    public function User() {
        return $this->belongsTo('App\User');
    }
}
