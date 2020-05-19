@extends('admin.layout.index')

@section('content')

<!-- Page Content -->
        <div id="page-wrapper" >
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12" style="margin-left:50px">
                        <h1 class="page-header" style="padding-bottom:100px; font-size:32px; font-family: Times New Roman">
                        <i class="fa fa-newspaper-o" style="margin-right:20px; font-size:40px"></i>
                            <strong>TIN CÔNG NGHỆ </strong>
                            <small style="color:gray"><strong>{{$tintuc->tenTinTuc}}</strong></small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:100px; margin-left:325px">
                        @if(count($errors) > 0)
                            <div class ="alert alert-danger">
                                @foreach($errors->all() as $err)
                                    {{$err}}<br>
                                @endforeach
                            </div>
                        @endif

                        @if(session('thongbao'))
                          <div class="alert alert-success">
                              {{session('thongbao')}}
                          </div>
                        @endif

                        <form action="admin/tintuc/sua/{{$tintuc->tinTuc_id}}" method="post" enctype="multipart/form-data">
                          @csrf;
                            <div class="form-group" style="padding-bottom:60px">
                                <h4 style="font-size:22px; font-family: Times New Roman">
                                    <label><strong>TIÊU ĐỀ</strong></label></h4>
                                <input class="form-control" style="height:55px" name="tenTinTuc"
                                placeholder="Vui lòng nhập tiêu đề" value="{{$tintuc->tenTinTuc}}" />
                            </div>
                            <div class="form-group" style="padding-bottom:60px">
                                <h4 style="font-size:22px; font-family: Times New Roman">
                                    <label><strong>TÓM TẮT</strong></label></h4>
                                <!-- <textarea id="demo" name="tomTat" class="form-control" style="height:300px; color:black"
                                placeholder="Vui lòng nhập tóm tắt" value="{{$tintuc->tomTat}}"></textarea> -->
                                <textarea id="demo" name="tomTat" class="form-control ckeditor" rows="3" >
                                    {{$tintuc->tomTat}}
                                </textarea>
                            </div>
                            <div class="form-group" style="padding-bottom:60px">
                                <h4 style="font-size:22px; font-family: Times New Roman">
                                    <label><strong>NỘI DUNG</strong></label></h4>
                                <!-- <textarea id="demo" name="noiDung" class="form-control " rows="20" style="height:400px; color:black"
                                placeholder="Vui lòng nhập nội dung" value="{{$tintuc->noiDung}}"></textarea> -->
                                <textarea id="demo" name="noiDung" class="form-control ckeditor" rows="5">
                                    {{$tintuc->noiDung}}
                                </textarea>
                            </div>
                            <div class="form-group" style="padding-bottom:60px">
                                <h4 style="font-size:22px; font-family: Times New Roman">
                                    <label><strong>HÌNH ẢNH</strong></label></h4>
                                <p><img width="500px" src="upload/tintuc/{{$tintuc->Hinh}}"></p>
                                <input type="file" style="height:55px" name="Hinh" class="form-control"/>
                            </div>
                            <div class="form-group" style="padding-bottom:60px">
                                <h4 style="font-size:22px; font-family: Times New Roman">
                                    <label><strong>LOẠI TIN</strong></label></h4>
                                <input class="form-control" style="height:55px" name="moTa"
                                placeholder="Vui lòng nhập mô tả loại tin" value="{{$tintuc->moTa}}" />
                            </div>
                            <div class="form-group" style="padding-bottom:60px">
                                <h4 style="font-size:22px; font-family: Times New Roman">
                                    <label><strong>NGÀY ĐĂNG</strong></label></h4>
                                <input class="form-control" style="height:55px" name="ngayDang"
                                placeholder="Vui lòng nhập ngày đăng" value="{{$tintuc->ngayDang}}" />
                            </div>
                            <div style="padding-left:60px">
                                <button type="submit" class="btn btn-primary" style="height:55px; width:200px; margin-right:60px; color:white; font-size:22px; font-family: Times New Roman">
                                    <strong>Sửa Tin Tức</strong>
                                </button>
                                <button type="reset" class="btn btn-primary" style="height:55px; width:200px; color:white; font-size:22px; font-family: Times New Roman">
                                    <strong>Làm Mới Tin Tức</strong>
                                </button>
                                <button type="button" class="btn btn-primary" style="height:55px; width:200px; margin-left:60px;  font-size:22px; font-family: Times New Roman">
                                    <a href="admin/tintuc/danhsach"><strong style = "color:white">Quay Về Tin Tức</strong></a>
                                </button>
                          </div>
                        <form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
@endsection
