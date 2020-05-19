@extends('admin.layout.index')

@section('content')

<!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid" style="margin-bottom:20px">
                <div class="row">
                    <div class="col-lg-12" style="margin-left:50px">
                        <h1 class="page-header" style="padding-bottom:80px; font-size:32px; font-family: Times New Roman">
                        <i class="fa fa-newspaper-o" style="margin-right:20px; font-size:40px"></i>
                            <strong>TIN CÔNG NGHỆ </strong>
                            <small style="color:gray"><strong> Danh Sách</strong></small>
                        </h1>
                    </div>

                    <!-- /.col-lg-12 -->
                    <div>

                    @if(session('thongbao'))
                        <div class="alert alert-success">
                            {{session('thongbao')}}
                        </div>
                    @endif

                    <table class="table table-bordered table-hover" id="dataTables-example">
                        <thead class="thead-dark">
                            <tr align="center" style="font-size:22px; font-family: Times New Roman">
                                <th><strong>ID</strong></th>
                                <th><strong>TIÊU ĐỀ</strong></th>
                                <th><strong>TÓM TẮT</strong></th>
                                <th><strong>LOẠI TIN</strong></th>
                                <th><strong>NGÀY ĐĂNG</strong></th>
                                <th><strong>XÓA</strong></th>
                                <th><strong>SỬA</strong></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($tintuc as $tt)
                                <tr class="odd gradeX" align="center" style="font-size:21px; font-family: Times New Roman">
                                  <td><strong>{{$tt->tinTuc_id}}</strong></td>
                                  <td>
                                      <p>{{$tt->tenTinTuc}}</p>
                                      <img width="200px" src="upload/tintuc/{{$tt->Hinh}}"
                                  </td>
                                  <td align="justify">
                                      {!! $tt->tomTat !!}
                                      <div>
                                          <button type="submit" class="btn btn-primary" style="height:40px; width:140px; margin-left:650px; margin-top:30px; margin-bottom:25px; font-size:20px; font-family: Times New Roman">
                                              <a href="tintuc/{{$tt->tinTuc_id}}/{{$tt->tenTinTuc}}.html">
                                                  <strong style="color:white">Đọc Thêm</strong></a>
                                          </button>
                                      </div>
                                  </td>
                                  <td><strong>{{$tt->moTa}}</strong></td>
                                  <td>{{$tt->ngayDang}}</td>
                                  <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/tintuc/xoa/{{$tt->tinTuc_id}}"><strong>Xóa</strong></a></td>
                                  <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/tintuc/sua/{{$tt->tinTuc_id}}"><strong>Sửa</strong></a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                  </div>
                </div>
                <!-- /.row -->
                <div style = "margin-left:1050px; margin-top:35px">
                    {!!$tintuc->links()!!}
                </div>

                <div style="margin-left:570px; margin-bottom:25px; margin-top:80px ">
                    <button type="submit" class="btn btn-primary" style="height:55px; width:400px; margin-right:80px; font-size:24px; font-family: Times New Roman">
                        <a href="admin/tintuc/them">
                        <strong style="color:white">Thêm Tin Mới</strong></a>
                    </button>
                </div>
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

@endsection
