<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class binhluan extends Model
{
    protected $tabel = "binhluans";
    public $timestamps = false;

    public function giangvien()
    {
        return $this->belongsTo('App\giangvien', 'giangVien_id', 'binhLuan_id');
    }

    public function hocvien()
    {
        return $this->belongsTo('App\hocvien', 'hocVien_id', 'binhLuan_id');
    }

    public function tintuc()
    {
        return $this->belongsTo('App\tintuc', 'tinTuc_id', 'binhLuan_id');
    }
}
