<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Createdatabase extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Bang giang vien
        Schema::create('giangviens', function (Blueprint $table) {
            $table->increments('giangVien_id');
            $table->string('hoTen');
            $table->string('tenTK');
            $table->string('matKhau');
            $table->date('ngaySinh');

            $table->timestamps();
        });

        //Bang hoc vien
        Schema::create('hocviens', function (Blueprint $table) {
            $table->increments('hocVien_id');
            $table->string('tenDangNhap');
            $table->string('matKhau');
            $table->string('hoTen');
            $table->date('ngaySinh');
            $table->date('ngayTao');

            $table->timestamps();
        });

        //Bang khoa hoc
        Schema::create('khoahocs', function (Blueprint $table) {
            $table->increments('khoaHoc_id');
            $table->string('tenKhoaHoc');
            $table->string('moTa');
            $table->date('ngayDang');
            $table->unsignedInteger('giangVien_id');

            $table->foreign('giangVien_id')->references('giangVien_id')->on('giangvien');

            $table->timestamps();
        });

        //Bang bai giang
        Schema::create('baigiangs', function (Blueprint $table) {
            $table->increments('baiGiang_id');
            $table->string('tenBaiGiang');
            $table->string('moTa');
            $table->text('noiDung');
            $table->string('linkVideo')->nullable();
            $table->date('ngayDang');
            $table->unsignedInteger('khoaHoc_id');

            $table->foreign('khoaHoc_id')->references('khoaHoc_id')->on('khoahoc');

            $table->timestamps();
        });

        //Bang HV-KH
        Schema::create('hv_khs', function (Blueprint $table) {
            $table->increments('hv_kh_id');
            $table->date('ngayThamGia');
            $table->unsignedInteger('khoaHoc_id');
            $table->unsignedInteger('hocVien_id');

            $table->foreign('khoaHoc_id')->references('khoaHoc_id')->on('khoahoc');
            $table->foreign('hocVien_id')->references('hocVien_id')->on('hocvien');

            $table->timestamps();
        });

        //Bang HV-BG
        Schema::create('hv_bgs', function (Blueprint $table) {
            $table->increments('hv_bg_id');
            $table->date('ngayThamGia');
            $table->unsignedInteger('hocVien_id');
            $table->unsignedInteger('baiGiang_id');

            $table->foreign('hocVien_id')->references('hocVien_id')->on('hocvien');
            $table->foreign('baiGiang_id')->references('baiGiang_id')->on('baigiang');

            $table->timestamps();
        });

        //Bang tin tuc
        Schema::create('tintucs', function (Blueprint $table) {
            $table->increments('tinTuc_id');
            $table->string('tenTinTuc');
            $table->string('moTa');
            $table->text('tomTat');
            $table->text('noiDung');
            $table->string('Hinh');
            $table->date('ngayDang');
            $table->unsignedInteger('hocVien_id');
            $table->unsignedInteger('giangVien_id');

            $table->foreign('hocVien_id')->references('hocVien_id')->on('hocvien');
            $table->foreign('giangVien_id')->references('giangVien_id')->on('giangvien');

            $table->timestamps();
        });

        //Bang binh luan
        Schema::create('binhluans', function (Blueprint $table) {
            $table->increments('binhLuan_id');
            $table->text('noiDung');
            $table->date('ngayDang');
            $table->unsignedInteger('hocVien_id');
            $table->unsignedInteger('giangVien_id');
            $table->unsignedInteger('tinTuc_id');

            $table->foreign('hocVien_id')->references('hocVien_id')->on('hocvien');
            $table->foreign('giangVien_id')->references('giangVien_id')->on('giangvien');
            $table->foreign('tinTuc_id')->references('tinTuc_id')->on('tintuc');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('binhluans');
        Schema::dropIfExists('tintucs');
        Schema::dropIfExists('hv_bgs');
        Schema::dropIfExists('hv_khs');
        Schema::dropIfExists('baigiangs');
        Schema::dropIfExists('khoahocs');
        Schema::dropIfExists('giangviens');
        Schema::dropIfExists('hocviens');
    }
}
