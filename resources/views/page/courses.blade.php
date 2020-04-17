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
                    <h3 class="pb-2 text-danger">Courses</h3>
                    <ul class="list-group">
                    <div class="row justify-content-between">
                    @foreach($courses as $c)
                      <div class="col-4">
                        <a href="#" style="text-decoration: none;" class="text-primary">
                          <div class="list-group-item justify-content-between align-items-center m-1" style="height: 400px;">
                            <h4>{{ $c->name }}</h4>
                            <div class="ml-3">{{ $c->describe }}</div>
                          </div>
                        </a>
                      </div>
                    @endforeach
                    </div>
                    
                  </div>
                    <span class="float-right mt-2">
                      {{ $courses->links() }}
                    </span>
                    @break
              
                @case(1)
                  <div id="newcourses">
                    <div>
                      <h3 class="pb-2 text-danger" style="display: inline-block;">Course</h3>
                      <span class="float-right"><a href="#">Add Course</a></span>
                    </div>
                    <ul class="list-group">
                    <div class="row justify-content-between">
                    @foreach($courses as $c)
                      <div class="col-4">
                        <a href="#" style="text-decoration: none;" class="text-primary">
                          <div class="list-group-item justify-content-between align-items-center m-1" style="height: 400px;">
                            <h4>{{ $c->name }}</h4>
                            <div class="ml-3">{{ $c->describe }}</div>
                          </div>
                        </a>
                      </div>
                    @endforeach
                    </div>
                    
                  </div>
                  <span class="float-right mt-2">
                    {{ $courses->links() }}
                  </span>
                  @break

                @case(2)
                  <div id="newcourses">
                    <div>
                      <h3 class="pb-2 text-danger" style="display: inline-block;">Course</h3>
                      <span class="float-right"><a href="#">Add Course</a></span>
                    </div>
                    <ul class="list-group">
                    <div class="row justify-content-between">
                    @foreach($courses as $c)
                      <div class="col-4">
                        <a href="#" style="text-decoration: none;" class="text-primary">
                          <div class="list-group-item justify-content-between align-items-center m-1" style="height: 400px;">
                            <h4>{{ $c->name }}</h4>
                            <div class="ml-3">{{ $c->describe }}</div>
                          </div>
                        </a>
                      </div>
                    @endforeach
                    </div>
                    
                  </div>
                  <span class="float-right mt-2">
                    {{ $courses->links() }}
                  </span>
                  @break
                @default
                  Login fault
              @endswitch
            @endguest
            <!--End my code-->
        </div>
    </div>
</div>
@endsection
