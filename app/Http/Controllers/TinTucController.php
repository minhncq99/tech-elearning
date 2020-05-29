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
use Illuminate\Database\Eloquent\Model;

class TinTucController extends Controller
{
    public function getDanhSach()
    {
        //$tintuc = TinTuc::orderBy('tinTuc_id','DESC')->get();
        //return view('admin.tintuc.danhsach',['tintuc'=>$tintuc]);

        $tintuc = DB::table('tintucs')->orderBy('tinTuc_id','ASC')->paginate(5)->onEachSide(1);
        //Cập nhật id tự động sau khi refresh (hay delete) dữ liệu của 1 id nào đó
        $max = DB::table('tintucs')->max('tinTuc_id') + 1;
        DB::statement("ALTER TABLE tintucs AUTO_INCREMENT =  $max");
        //
        return view('admin.tintuc.danhsach', compact('tintuc'), ['tintuc'=>$tintuc]);
    }

    public function getThem()
    {
        return view('admin.tintuc.them');
    }

    public function postThem(Request $request )
    {
        //Test thêm:
        //echo $request->tenTinTuc;
        $this->validate($request,[
           'tenTinTuc'=>'required|min:3|unique:tintucs,tenTinTuc',
           'tomTat'=>'required',
           'noiDung'=>'required',
           'moTa'=>'required',
           'ngayDang'=>'required|date',
           'Hinh' => 'required',
           ],[
           'tenTinTuc.required'=>'Bạn chưa nhập tiêu đề',
           'tenTinTuc.min'=>'Tiêu đề phải có ít nhất 3 ký tự',
           'tenTinTuc.unique'=>'Tiêu đề đã tồn tại',
           'tomTat.required'=>'Bạn chưa nhập tóm tắt',
           'noiDung.required'=>'Bạn chưa nhập nội dung',
           'moTa.required'=>'Bạn chưa nhập mô tả',
           'ngayDang.required'=>'Bạn chưa nhập ngày đăng',
           'ngayDang.date'=>'Bạn chưa nhập đúng định dạng ngày đăng',
           'Hinh.required'=>'Bạn chưa chọn hình ảnh',
           ]);

        try{
          $tintuc = new tintuc;
          $tintuc->tenTinTuc = $request->tenTinTuc;
          $tintuc->tomTat = $request->tomTat;
          $tintuc->noiDung = $request->noiDung;
          $tintuc->moTa = $request->moTa;
          $tintuc->ngayDang = $request->ngayDang;

          if($request->hasFile('Hinh'))
          {
            $file = $request->file('Hinh');
            //Kiểm tra đuôi file ảnh
            $duoi = $file->getClientOriginalExtension();
            if($duoi != 'jpg' && $duoi != 'png' && $duoi != 'jpeg')
            {
                return redirect('admin/tintuc/them')->with('loi','Lỗi định dạng. Bạn chỉ được chọn file ảnh có đuôi là .jpg, .png, .jepg');
            }
            //Kiểm tra hình đã tồn tại chưa
            $name = $file->getClientOriginalName();
            $Hinh = str_random(4)."_".$name;
            //Vòng lặp while để kiểm tra file hình có tồn tại chưa, sau khi đã random tên cho 1 file hình mới
            while(file_exists("upload/tintuc/".$Hinh))
            {
                $Hinh = str_random(4)."_".$name;
            }
            //Lưu file ảnh mới đến đường dẫn mong muốn
            $file->move("upload/tintuc",$Hinh);
            //Truyền hình vào tin tức
            $tintuc->Hinh = $Hinh;
          }
          else
          {
            $tintuc->Hinh = "";
          }
        }catch(QueryException $e){
          printf("Error occurred: %s\n”, $e->getMessage()");
        }
        //Lưu tin
        $tintuc->save();
        //return về đường dẫn đến trang thêm
        return redirect('admin/tintuc/them')->with('thongbao','Thêm tin thành công');
    }

    public function getSua($tinTuc_id)
    {
        $tintuc = tintuc::find($tinTuc_id);
        // $tintuc = DB::table('tintucs')->where('tinTuc_id', $id)->first();
        //Cập nhật id tự động sau khi refresh (hay delete) dữ liệu của 1 id nào đó
        // $max = DB::table('tintucs')->max('tinTuc_id') + 1;
        // DB::statement("ALTER TABLE tintucs AUTO_INCREMENT =  $max");
        return view('admin.tintuc.sua',['tintuc'=>$tintuc]);
    }

    public function postSua(Request $request, $tinTuc_id)
    {
      $tintuc = tintuc::find($tinTuc_id);
      //$tintuc = DB::table('tintucs')->where('tinTuc_id', $id); //->first();
      //Cập nhật id tự động sau khi refresh (hay delete) dữ liệu của 1 id nào đó
      //$max = DB::table('tintucs')->max('tinTuc_id') + 1;
      //DB::statement("ALTER TABLE tintucs AUTO_INCREMENT =  $max");
      //
      $this->validate($request,[
         'tenTinTuc'=>'required|min:3',
         'tomTat'=>'required',
         'noiDung'=>'required',
         'moTa'=>'required',
         'ngayDang'=>'required|date',
         //'Hinh' => 'required',
         ],[
         'tenTinTuc.required'=>'Bạn chưa nhập tiêu đề',
         'tenTinTuc.min'=>'Tiêu đề phải có ít nhất 3 ký tự',
         'tomTat.required'=>'Bạn chưa nhập tóm tắt',
         'noiDung.required'=>'Bạn chưa nhập nội dung',
         'moTa.required'=>'Bạn chưa nhập mô tả',
         'ngayDang.required'=>'Bạn chưa nhập ngày đăng',
         'ngayDang.date'=>'Bạn chưa nhập đúng định dạng ngày đăng',
         //'Hinh.required'=>'Bạn chưa chọn hình ảnh',
         ]);

         if($request->hasFile('Hinh'))
         {
           $file = $request->file('Hinh');
           //Kiểm tra đuôi file ảnh
           $duoi = $file->getClientOriginalExtension();
           if($duoi != 'jpg' && $duoi != 'png' && $duoi != 'jpeg')
           {
               return redirect('admin/tintuc/sua/'.$tinTuc_id)->with('loi','Lỗi định dạng. Bạn chỉ được chọn file ảnh có đuôi là .jpg, .png, .jepg');
           }
           //Kiểm tra hình đã tồn tại chưa
           $name = $file->getClientOriginalName();
           $Hinh = str_random(4)."_".$name;
           //Vòng lặp while để kiểm tra file hình có tồn tại chưa, sau khi đã random tên cho 1 file hình mới
           while(file_exists("upload/tintuc/".$Hinh))
           {
               $Hinh = str_random(4)."_".$name;
           }

           //Lưu file ảnh mới đến đường dẫn mong muốn
           $file->move("upload/tintuc",$Hinh);

           //Xóa file ảnh cũ khi được thay thế (chọn) bằng 1 file ảnh mới (khác)
           //if(file_exists(public_path().'/upload/tintuc/'.$tintuc->Hinh))
           // if($tintuc->Hinh)
           // {
           //      Hinh::delete("upload/tintuc/".$tintuc->Hinh);
           // }

           //Truyền hình vào tin tức  (Hoặc khi được thay thế bởi hình mới thì cũng dùng phương thức bên dưới để sử dụng)
           $tintuc->Hinh = $Hinh;
         }

         //Lưu tin
         // $tintuc->update([
         //    'tenTinTuc'=>$request->input('tenTinTuc'),
         //    'tomTat'=>$request->input('tomTat'),
         //    'noiDung'=>$request->input('noiDung'),
         //    'moTa'=>$request->input('moTa'),
         //    'ngayDang'=>$request->input('ngayDang'),
         //    'Hinh'=>$request->input('Hinh'),
         //  ]);
         $tintuc->tenTinTuc = $request->tenTinTuc;
         $tintuc->tomTat = $request->tomTat;
         $tintuc->noiDung = $request->noiDung;
         $tintuc->moTa = $request->moTa;
         $tintuc->ngayDang = $request->ngayDang;

         $tintuc->save();
         return redirect('admin/tintuc/sua/'.$tinTuc_id)->with('thongbao','Sửa tin thành công');
    }

    public function getXoa($id)
    {
        $tintuc = DB::table('tintucs') -> where('tinTuc_id', $id)->delete();
        //$tintuc->delete();
        //Cập nhật id tự động sau khi refresh (hay delete) dữ liệu của 1 id nào đó
        $max = DB::table('tintucs')->max('tinTuc_id') + 1;
        DB::statement("ALTER TABLE tintucs AUTO_INCREMENT =  $max");
        //
        return redirect('admin/tintuc/danhsach')->with('thongbao','Xóa tin thành công');
    }
}
