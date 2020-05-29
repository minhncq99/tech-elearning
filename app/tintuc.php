<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tintuc extends Model
{
    protected $tabel = "tintucs";
    public $timestamps = false;
    protected $primaryKey = "tinTuc_id";

    public function giangvien()
    {
        return $this->belongsTo('App\giangvien', 'giangVien_id', 'tinTuc_id');
    }

	  public function hocvien()
    {
        return $this->belongsTo('App\hocvien', 'hocVien_id', 'tinTuc_id');
    }

    public function binhluan()
    {
        return $this->hasMany('App\binhluan', 'tinTuc_id', 'tinTuc_id');
    }
}
