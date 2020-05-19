<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class hv_bg extends Model
{
    protected $tabel = "hv_bgs";
    public $timestamps = false;

	public function hocvien()
    {
        return $this->belongsTo('App\hocvien', 'hocVien_id', 'hv_bg_id');
    }

	public function baigiang()
    {
        return $this->belongsTo('App\baigiang', 'baiGiang_id', 'hv_bg_id');
    }
}
