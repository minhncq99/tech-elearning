<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
		//Bang giang vien
        for($i = 0; $i <= 10; $i++) {
            DB::table('giangviens')->insert([
                'hoTen' => $i.'hoTen',
                'tenTK' => $i.'tenTK',
                'matKhau' => $i.'matKhau',
                'ngaySinh' => date("d/m/y"),
            ]);
        }

        //Bang hoc vien
        for($i = 0; $i <= 10; $i++) {
            DB::table('hocviens')->insert([
			    'tenDangNhap' => $i.'tenTK',
				'matKhau' => $i.'matKhau',
                'hoTen' => $i.'hoTen',
                'ngaySinh' => date("d/m/y"),
				'ngayTao' => date("d/m/y")
            ]);
        }

        //Bang khoa hoc
        for($i = 1; $i <= 10; $i++) {
            DB::table('khoahocs')->insert([
                'tenKhoaHoc' => $i.'tenKhoaHoc',
                'moTa' => $i.'moTa',
                'ngayDang' => date("d/m/y"),
                'giangVien_id' => $i
            ]);
        }

        //Bang bai giang
        for($i = 1; $i <= 10; $i++) {
            DB::table('baigiangs')->insert([
                'tenBaiGiang' => $i.'tenBaiGiang',
                'moTa' => $i.'moTa',
                'noiDung' => $i.'noiDung',
                'linkVideo' => $i.'linkVideo',
                'ngayDang' => date("d/m/y"),
                'khoaHoc_id' => $i
                ]);
        }

        //Bang HV-KH
        for($i = 1; $i <= 10; $i++) {
            DB::table('hv_khs')->insert([
                'ngayThamGia' => date("d/m/y"),
                'khoaHoc_id' => $i,
                'hocVien_id' => $i
            ]);
        }

        //Bang HV-BG
        for($i = 1; $i <= 10; $i++) {
            DB::table('hv_bgs')->insert([
                'ngayThamGia' => date("d/m/y"),
                'hocVien_id' => $i,
                'baiGiang_id' => $i
            ]);
        }

        //Bang tin tuc
        for($i = 1; $i <= 10; $i++) {
            DB::table('tintucs')->insert([
                'tenTinTuc' => $i.'tenTinTuc',
                'moTa' => $i.'moTa',
				        'tomTat' => $i.'tomTat',
                'noiDung' => $i.'noiDung',
                'ngayDang' => date("d/m/y"),
                'Hinh' => $i.'Hinh',
                'hocVien_id' => $i,
				        'giangVien_id' => $i
                ]);
            }

        //Bang binh luan
        for($i = 1; $i <= 10; $i++) {
            DB::table('binhluans')->insert([
                'noiDung' => $i.'noiDung',
                'ngayDang' => date("y/m/d"),
                'hocVien_id' => $i,
                'giangVien_id' => $i,
                'tinTuc_id' => $i
                ]);
        }
    }
}
