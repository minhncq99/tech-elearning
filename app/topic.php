<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class topic extends Model
{
    ///
    protected $table = 'topics';

    protected $fillable = ['topic_id', 'name'];

    public $timestamps = false;

    public function course() {
        return $this->hasMany('App\course');
    }
    
    public function news() {
        return $this->hasMany('App\news');
    }
}