<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class hocvien extends Model
{
    protected $tabel = "hocviens";
    public $timestamps = false;

    public function tintuc()
    {
        return $this->hasMany('App\tintuc', 'hocVien_id', 'hocVien_id');
    }

    public function binhluan()
    {
        return $this->hasMany('App\binhluan', 'hocVien_id', 'hocVien_id');
	}

	public function hv_kh()
    {
        return $this->hasMany('App\hv_kh', 'hocVien_id', 'hocVien_id');
	}

	public function hv_bg()
    {
        return $this->hasMany('App\hv_bg', 'hocVien_id', 'hocVien_id');
    }
}
