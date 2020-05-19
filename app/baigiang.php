<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class baigiang extends Model
{
    protected $tabel = "baigiangs";
    public $timestamps = false;

	  public function khoahoc()
    {
        return $this->belongsTo('App\khoahoc', 'khoaHoc_id', 'binhLuan_id');
    }

	  public function binhluan()
    {
        return $this->hasMany('App\binhluan', 'baiGiang_id', 'baiGiang_id');
    }

	  public function hv_bg()
    {
        return $this->hasMany('App\hv_bg', 'baiGiang_id', 'baiGiang_id');
    }
}
