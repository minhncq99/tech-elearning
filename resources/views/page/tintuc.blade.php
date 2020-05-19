@extends('admin.layout.index')

@section('content')

<!-- Page Content -->

<div style="color: black; margin-left:210px"><i class="fa fa-newspaper-o" style="margin-right:30px; font-size:40px"></i>
      <strong style="font-size:38px; font-family: Times New Roman">
          <b>TIN TỨC CẬP NHẬT</i></b></strong>
</div>
<div id="overviews" class="section wb">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 blog-post-single" style="margin-top:15px; margin-bottom:100px">
                    <div class="blog-item">
                      <!-- Blog Post -->
                          <!-- Title -->
                          <h1><p>
                              <strong style="font-size:30px; color:black; font-family: Times New Roman; text-align:justify; padding-bottom:50px; line-height:1.5">
                                      {{$tintuc->tenTinTuc}}
                              </strong></p></h1>
                         <!-- Preview Image -->
						             <div class="image-blog">
							                <img src="upload/tintuc/{{$tintuc->Hinh}}" width="750px" style="margin-bottom:25px; margin-top:50px; height:440px" alt="" class="img-fluid">
						             </div>
						             <div class="post-content">
							                <div class="meta-info-blog" style="font-size:18px; font-family: Times New Roman">
								                   <span style="color: black; margin-right:175px"><i class="fa fa-tag" style="margin-right:10px"></i>
                                         <strong><b><i>{{$tintuc->moTa}}</i></b></strong></span>
								                   <span style="color: black"><i class="fa fa-calendar" style="margin-right:10px"></i>
                                         <strong><b><i>Đăng ngày: {{$tintuc->ngayDang}}</i></b></strong></span>
							                </div>
							                <div class="blog-desc">
								                   <p style="margin-top: 35px; font-size:22px; font-family: Times New Roman; line-height:2; text-align:justify">
                                      {!! $tintuc->noiDung !!}</p>
							                </div>
                              <div style="margin-top:30px; margin-bottom:30px; font-size:23px; font-family: Times New Roman; color: black; text-align:right">
                                    <strong><b><i>Source:   {{$tintuc->moTa}}</i></b></strong>
                              </div>
						              </div>
					           </div>

					           <div class="blog-comments">
						              <hr style="border: 2px solid DarkOrange"><h4 style="font-family:Times New Roman; font-size:28px; margin-top:50px; margin-bottom:70px">
                              <strong>Bình Luận</strong></h4></hr>
						              <div id="comment-blog">
							                 <ul class="comment-list">
                                   @foreach($binhluan1 as $bl1)
								                   <li class="comment">
									                     <div class="comment-container">
                                            @foreach($hocvien1 as $hv1)
										                        <h5 class="comment-author" style="font-family:Times New Roman; font-size:23px; padding-bottom:10px">
                                                <strong>{{$hv1->hoTen}}</strong></h5>
                                            @endforeach
										                        <div class="comment-meta">
											                           <span class="comment-date link-style1" style="color:gray; font-family:Times New Roman; font-size:17px">
                                                     <strong><i>{{$bl1->ngayDang}}</strong></i></span>
										                        </div>
										                        <div class="comment-body">
											                            <p style="color:black; font-family:Times New Roman; font-size:21px; padding-top:10px">
                                                      {{$bl1->noiDung}}</p>
										                        </div>
								                       </div>
						                       </li>
                                   @endforeach

                                   @foreach($binhluan2 as $bl2)
								                   <li class="comment">
									                     <div class="comment-container">
                                            @foreach($giangvien1 as $gv1)
										                        <h5 class="comment-author" style="font-family:Times New Roman; font-size:23px; padding-bottom:10px">
                                                <strong>{{$gv1->hoTen}}</strong></h5>
                                            @endforeach
										                        <div class="comment-meta">
											                           <span class="comment-date link-style1" style="color:gray; font-family:Times New Roman; font-size:17px">
                                                    <strong><i>{{$bl2->ngayDang}}</strong></i></span>
										                        </div>
										                        <div class="comment-body">
											                            <p style="color:black; font-family:Times New Roman; font-size:21px; padding-top:10px">
                                                      {{$bl2->noiDung}}</p>
										                        </div>
								                       </div>
						                       </li>
                                   @endforeach

                                   @foreach($binhluan3 as $bl3)
								                   <li class="comment">
									                     <div class="comment-container">
                                            @foreach($hocvien2 as $hv2)
										                        <h5 class="comment-author" style="font-family:Times New Roman; font-size:23px; padding-bottom:10px">
                                                <strong>{{$hv2->hoTen}}</strong></h5>
                                            @endforeach
										                        <div class="comment-meta">
											                           <span class="comment-date link-style1" style="color:gray; font-family:Times New Roman; font-size:17px">
                                                    <strong><i>{{$bl3->ngayDang}}</strong></i></span>
										                        </div>
										                        <div class="comment-body">
											                            <p style="color:black; font-family:Times New Roman; font-size:21px; padding-top:10px">
                                                       {{$bl3->noiDung}}</p>
										                        </div>
								                       </div>
						                       </li>
                                   @endforeach

                                   @foreach($binhluan4 as $bl4)
								                   <li class="comment">
									                     <div class="comment-container">
                                            @foreach($giangvien2 as $gv2)
										                        <h5 class="comment-author" style="font-family:Times New Roman; font-size:23px; padding-bottom:10px">
                                                <strong>{{$gv2->hoTen}}</strong></h5>
                                            @endforeach
										                        <div class="comment-meta">
											                           <span class="comment-date link-style1" style="color:gray; font-family:Times New Roman; font-size:17px">
                                                    <strong><i>{{$bl4->ngayDang}}</strong></i></span>
										                        </div>
										                        <div class="comment-body">
											                            <p style="color:black; font-family:Times New Roman; font-size:21px; padding-top:10px">
                                                      {{$bl4->noiDung}}</p>
										                        </div>
								                       </div>
						                       </li>
                                   @endforeach
							                 </ul>
						              </div>
					           </div>

                     <!-- Write comments form -->
                     <div class="comments-form">
						              <hr style="border: 2px solid DarkOrange"><h4 style="font-family:Times New Roman; font-size:28px; margin-top:60px; margin-bottom:60px">
                              <strong>Viết Bình Luận</strong></h4>
						              <div class="comment-form-main">
							            <form action="#">
								                <div class="row">
                                     <div class="col-md-4">
										                      <div class="form-group" style="width:500px">
											                        <input class="form-control" name="commenter-name" placeholder="Vui lòng nhập họ tên  . . . . . . . . . . . . " id="commenter-name"
                                              type="text" style="font-family:Times New Roman; font-size:23px">
										                      </div>
									                   </div>
									                   <div class="col-md-12">
										                      <div class="form-group" style="margin-top:40px">
										  	                       <textarea class="form-control" name="commenter-message"
                                               placeholder="Vui lòng nhập nội dung bình luận  . . . . . . . . . . . . " style="font-family:Times New Roman; font-size:23px"
                                               id="commenter-message" cols="30" rows="6"></textarea>
										                      </div>
									                   </div>
									                   <div class="col-md-12 post-btn">
										                      <button class="hover-btn-new orange" style="cursor: pointer; height:55px; width:220px; margin-top:40px; margin-left:550px; font-family: Times New Roman">
                                                 <span style="font-size:20px"><strong>Gửi bình luận</strong></span></button>
									                   </div>
								                </div>
							            </form>
						         </div>
					      </div>

          </div><!-- end col -->

          <div class="col-lg-3 col-12 right-single">
					     <div class="widget-categories" style="background-color:black; width:300px">
						        <hr><h1 class="widget-title" style="background-color:black; color:white; text-align:center; font-family: Times New Roman">
                        <strong>Tin Liên Quan</strong></h1></hr>
                    <ul style="background-color:#F0F0F0">
                      @foreach($tinlienquan as $tt)
                      <hr><li>
                          <!-- item -->
                          <div class="row" style="margin-top: 10px">
                               <div class="col-md-5">
                                    <a href="smartedu/blog-single.html">
                                       <img style="width:100px; height:100px; margin-top:12px; margin-left:5px; margin-right:5px" class="img-responsive" src="upload/tintuc/{{$tt->Hinh}}" alt="">
                                    </a>
                               </div>
                               <div class="col-md-7">
                                    <a href="#"><b style="line-height:2; font-size:15px; color:black; text-align:justify; font-family: Times New Roman; margin-top:8px">
                                        {{$tt->tenTinTuc}}</b></a>
                               </div>
                               <p style="line-height:2; font-size:19px; color:black; text-align:justify; margin-top:20px; margin-left:15px; margin-right:20px; margin-bottom:25px; font-family: Times New Roman">
                                    {!! $tt->tomTat !!}</p>
                               <span>
                                    <button type="submit" class="btn btn-primary" style="margin-bottom:30px; margin-left:170px; height:40px; width:110px; font-family: Times New Roman">
                                          <a href="tintuc/{$tt->tinTuc_id}/{tenTinTuc}.html">
                                              <strong style="color:white; text-align:center; font-size:18px">Đọc Thêm</strong></a>
                                    </button>
                               </span>
                               <div class="break"></div>
                          </div>
                          <!-- end item -->
                      </li></hr>
                      @endforeach
						       </ul>
					   </div>

             <div class="widget-categories" style="background-color:black; width:300px; margin-top:100px">
                  <hr><h1 class="widget-title" style="background-color:black; color:white; text-align:center; font-family: Times New Roman">
                      <strong>Tin Nổi Bật</strong></h1></hr>
                  <ul style="background-color:#F0F0F0">
                    @foreach($tinnoibat as $tt)
                    <hr><li>
                        <!-- item -->
                        <div class="row" style="margin-top:10px">
                             <div class="col-md-5">
                                  <a href="smartedu/blog-single.html">
                                     <img style="width:100px; height:100px; margin-top:12px; margin-left:5px; margin-right:5px" class="img-responsive" src="upload/tintuc/{{$tt->Hinh}}" alt="">
                                  </a>
                             </div>
                             <div class="col-md-7">
                                  <a href="#"><b style="line-height:2; font-size:15px; color:black; text-align:justify; font-family: Times New Roman; margin-top:8px">
                                      {{$tt->tenTinTuc}}</b></a>
                             </div>
                             <p style="line-height:2; font-size:19px; color:black; text-align:justify; margin-top:20px; margin-left:15px; margin-right:20px; margin-bottom:25px; font-family: Times New Roman">
                                  {!! $tt->tomTat !!}</p>
                             <span>
                                  <button type="submit" class="btn btn-primary" style="margin-bottom:30px; margin-left:170px; height:40px; width:110px; font-family: Times New Roman">
                                        <a href="tintuc/{$tt->tinTuc_id}/{tenTinTuc}.html">
                                            <strong style="color:white; text-align:center; font-size:18px">Đọc Thêm</strong></a>
                                  </button>
                             </span>
                             <div class="break"></div>
                        </div>
                        <!-- end item -->
                    </li></hr>
                    @endforeach
                 </ul>
            </div>

             <div class="widget-categories" style="background-color:black; width:300px; margin-top:100px">
                  <hr><h1 class="widget-title" style="background-color:black; color:white; text-align:center; font-family: Times New Roman">
                      <strong>Tin Khác</strong></h1></hr>
                  <ul style="background-color:#F0F0F0">
                    @foreach($tinkhac as $tt)
                    <hr><li>
                        <!-- item -->
                        <div class="row" style="margin-top:10px">
                             <div class="col-md-5">
                                  <a href="smartedu/blog-single.html">
                                     <img style="width:100px; height:100px; margin-top:12px; margin-left:5px; margin-right:5px" class="img-responsive" src="upload/tintuc/{{$tt->Hinh}}" alt="">
                                  </a>
                             </div>
                             <div class="col-md-7">
                                  <a href="#"><b style="line-height:2; font-size:15px; color:black; text-align:justify; font-family: Times New Roman; margin-top:8px">
                                      {{$tt->tenTinTuc}}</b></a>
                             </div>
                             <p style="line-height:2; font-size:19px; color:black; text-align:justify; margin-top:20px; margin-left:15px; margin-right:20px; margin-bottom:25px; font-family: Times New Roman">
                                  {!! $tt->tomTat !!}</p>
                             <span>
                                  <button type="submit" class="btn btn-primary" style="margin-bottom:30px; margin-left:170px; height:40px; width:110px; font-family: Times New Roman">
                                        <a href="tintuc/{$tt->tinTuc_id}/{tenTinTuc}.html">
                                            <strong style="color:white; text-align:center; font-size:18px">Đọc Thêm</strong></a>
                                  </button>
                             </span>
                             <div class="break"></div>
                        </div>
                        <!-- end item -->
                    </li></hr>
                    @endforeach
                 </ul>
            </div>

					   <div class="widget-tags" style="background-color:black; width:300px; margin-top:100px">
						      <hr><h1 class="widget-title" style="color:white;text-align:center; font-family: Times New Roman">
                      <strong>Tags</strong></h1></hr>
						      <hr><ul class="tags" align="justify">
							        <li><a style="cursor:pointer" class="disabled"><b>technology</b></a></li>
							        <li><a style="cursor:pointer" class="disabled"><b>SQL</b></a></li>
							        <li><a style="cursor:pointer" class="disabled">Ruby</a></li>
							        <li><a style="cursor:pointer" class="disabled">news</a></li>
							        <li><a style="cursor:pointer" class="disabled">CSS3</a></li>
							        <li><a style="cursor:pointer" class="disabled"><b>laravel</b></a></li>
							        <li><a style="cursor:pointer" class="disabled"><b>HTML5</b></a></li>
							        <li><a style="cursor:pointer" class="disabled"><b>MySQL</b></a></li>
							        <li><a style="cursor:pointer" class="disabled">PHP</a></li>
							        <li><a style="cursor:pointer" class="disabled">C/C++</a></li>
							        <li><a style="cursor:pointer" class="disabled">forum</a></li>
							        <li><a style="cursor:pointer" class="disabled">JavaScript</a></li>
							        <li><a style="cursor:pointer" class="disabled"><b>jQuery</b></a></li>
                      <li><a style="cursor:pointer" class="disabled"><b>Android</b></a></li>

                      <li><a style="cursor:pointer" class="disabled"><b>ASP.NET</b></a></li>
							        <li><a style="cursor:pointer" class="disabled"><b>python</b></a></li>
							        <li><a style="cursor:pointer" class="disabled">java</a></li>
							        <li><a style="cursor:pointer" class="disabled">angular 8</a></li>
							        <li><a style="cursor:pointer" class="disabled">CodeIgniter</a></li>
							        <li><a style="cursor:pointer" class="disabled"><b>C#</b></a></li>
							        <li><a style="cursor:pointer" class="disabled"><b>MVC</b></a></li>
							        <li><a style="cursor:pointer" class="disabled"><b>jupyter</b></a></li>
							        <li><a style="cursor:pointer" class="disabled">GO</a></li>
							        <li><a style="cursor:pointer" class="disabled">Objective-C</a></li>
                      <li><a style="cursor:pointer" class="disabled"><b>TypeScript</b></a></li>
							        <li><a style="cursor:pointer" class="disabled">Swift</a></li>
							        <li><a style="cursor:pointer" class="disabled">Scala</a></li>
							        <li><a style="cursor:pointer" class="disabled"><b>Spyder</b></a></li>
                      <li><a style="cursor:pointer" class="disabled"><b>IOS</b></a></li>
                      <li><a style="cursor:pointer" class="disabled">Shell</a></li>
						      </ul></hr>
					   </div>
				</div>
    </div><!-- end row -->
  </div><!-- end container -->
</div><!-- end section -->
<!-- /#page-wrapper -->
@endsection
