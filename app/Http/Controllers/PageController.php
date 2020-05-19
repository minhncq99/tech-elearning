<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\tintuc;
use App\binhluan;
use App\hocvien;
use App\giangvien;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class PageController extends Controller
{
    function tintuc($id)
    {
        $tintuc = DB::table('tintucs')->where('tinTuc_id', $id)->first();
        $tinkhac = DB::table('tintucs')->where('tinTuc_id', $id = rand(1,10))->get();
        $tinlienquan = DB::table('tintucs')->where('tinTuc_id', $id = rand(1,10))->get();
        $tinnoibat = DB::table('tintucs')->where('tinTuc_id', $id = rand(1,10))->get();

        $binhluan1 = DB::table('binhluans')->where('binhLuan_id', $id = rand(1,20))->get();
        $binhluan2 = DB::table('binhluans')->where('binhLuan_id', $id = rand(1,20))->get();
        $binhluan3 = DB::table('binhluans')->where('binhLuan_id', $id = rand(1,20))->get();
        $binhluan4 = DB::table('binhluans')->where('binhLuan_id', $id = rand(1,20))->get();

        $hocvien1 = DB::table('hocviens')->where('hocVien_id', $id = rand(1,10))->get();
        $hocvien2 = DB::table('hocviens')->where('hocVien_id', $id = rand(1,10))->get();

        $giangvien1 = DB::table('giangviens')->where('giangVien_id', $id = rand(1,10))->get();
        $giangvien2 = DB::table('giangviens')->where('giangVien_id', $id = rand(1,10))->get();

        return view('page.tintuc',compact('tintuc'), ['tintuc'=>$tintuc, 'tinkhac'=>$tinkhac,
        'tinlienquan'=>$tinlienquan, 'tinnoibat'=>$tinnoibat,
        'binhluan1'=>$binhluan1, 'binhluan2'=>$binhluan2,
        'binhluan3'=>$binhluan3, 'binhluan4'=>$binhluan4,
        'hocvien1'=>$hocvien1, 'hocvien2'=>$hocvien2,
        'giangvien1'=>$giangvien1, 'giangvien2'=>$giangvien2]);
    }
}
