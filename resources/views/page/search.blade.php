@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <!--Start my code-->
            @guest
              <div class="alert alert-danger" role="alert">
                You need login to see more!
              </div>
                @include('page.nologin')
            @else
              @switch(Auth::user()->level)
                @case(0)
                  <div id="newcourses">
                    <h3 class="pb-2 text-danger">List Find Courses</h3>
                    <ul class="list-group">
                    <div class="panel-body">
                            <div class="form-group">
                            </div>
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>ID khóa học</th>
                                        <th>Tên khóa học</th>
                                        <th>Mô tả</th>
                                        <th>ID topic</th>
                                        <th>ID user</th>
                                    </tr>
                                </thead>
                                <tbody>   
                               <?php foreach ($course as $courses): ?>
                               			 <tr>
                                            <td>{{$courses->course_id}}</td>
                                            <td>{{$courses->name}}</td>
                                            <td>{{$courses->describe}}</td>
                                            <td>{{$courses->topic_id}}</td>
                                            <td>{{$courses->user_id}}</td>
                                        </tr>
                               <?php endforeach ?>                              
                                </tbody>
                            </table>
                        </div>
                  </div>
                @default
                  Login fault
              @endswitch
            @endguest
            <!--End my code-->
        </div>
    </div>
</div>
@endsection
