<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class hv_kh extends Model
{
    protected $tabel = "hv_khs";
    public $timestamps = false;

	public function hocvien()
    {
        return $this->belongsTo('App\hocvien', 'hocVien_id', 'hv_kh_id');
    }

	public function khoahoc()
    {
        return $this->belongsTo('App\khoahoc', 'khoaHoc_id', 'hv_kh_id');
    }
}
