<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class giangvien extends Model
{
    protected $tabel = "giangviens";
    public $timestamps = false;

    public function khoahoc()
    {
        return $this->hasMany('App\khoahoc', 'giangVien_id', 'giangVien_id');
    }

    public function tintuc()
    {
        return $this->hasMany('App\tintuc', 'giangVien_id', 'giangVien_id');
    }

    public function binhluan()
    {
        return $this->hasMany('App\binhluan', 'giangVien_id', 'giangVien_id');
    }
}
