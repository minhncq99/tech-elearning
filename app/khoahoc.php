<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class khoahoc extends Model
{
    protected $tabel = "khoahocs";
    public $timestamps = false;

    public function giangvien()
    {
        return $this->belongsTo('App\giangvien', 'giangVien_id', 'khoaHoc_id');
    }

	public function baigiang()
    {
        return $this->hasMany('App\baigiang', 'khoaHoc_id', 'khoaHoc_id');
    }

	public function hv_kh()
    {
        return $this->hasMany('App\hv_kh', 'khoaHoc_id', 'khoaHoc_id');
    }
}
