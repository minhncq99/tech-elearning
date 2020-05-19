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

class CommentController extends Controller
{
     public function getXoa($id, $tinTuc_id)
     {
         $comment = DB::table('binhluans')->where('binhLuan_id', $id)->first();
         $comment->delete();

         return redirect('admin/tintuc/sua/'.$tinTuc_id)->with('thongbao',
         'Xóa bình luận thành công');
     }

     public function postComment($id, Request $request)
     {
       $$tinTuc_id = $id;
       $tintuc = DB::table('tintucs')->where('tinTuc_id', $id)->first();
       $comment = new binhluan;
       $comment->tinTuc_id =  $tinTuc_id;
       $comment->noiDung = $request->noiDung;
       $comment->save();

       return redirect("tintuc/$id/".$tintuc->tenTinTuc.".html")->with('thongbao','Viết bình luận thành công');
    }
}
