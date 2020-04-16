<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class course extends Model
{
    ///
    protected $table = 'courses';

    protected $fillable = ['course_id', 'name','describe', 'topic_id', 'user_id'];

    public $timestamps = false;

    public function lesson () {
        return $this->hasMany('App\lessson');
    }

    public function topic () {
        return $this->belongsTo('App\topic');
    }

    public function nhanvien () {
        return $this->belongsTo('App\User');
    }
}