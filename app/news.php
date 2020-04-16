<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class news extends Model
{
    //
    protected $table = 'news';

    protected $fillable = ['news_id', 'name','describe', 'content', 'topic_id','user_id'];

    public $timestamps = false;

    public function comment() {
        return $this->hasMany('App\comment');
    }

    public function topic() {
        return $this->belongsTo('App\topic');
    }

    public function User() {
        return $this->hasMany('App\User');
    }
}