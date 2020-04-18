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
              @if($course)
                <div class="py-5 my-5 bg-white rounded shadow-lg">
                  <div class="list-group mx-3">
                    <h3 class="pb-2 text-danger text-center" style="display: inline-block;">{{$course->name}}</h3>
                    <form action="../join" method="post" class="text-right">
                      @csrf
                      <input type="text" name="user_id" class="d-none" value="{{Auth::id()}}">
                      <input type="text" name="course_id" class="d-none" value="{{$course->course_id}}">
                      <button type="submit" class="btn btn-primary">Join</button>
                    </form>
                    @php
                      if(isset($alert))
                        echo 'ss';
                    @endphp@if (session('alert'))
                        <div class="alert alert-success">
                            {{ session('alert') }}
                        </div>
                    @endif
                    <div class="mx-3">{{ $course->describe }}</div>
                    @if($lessons)
                      <ul class="list-group">
                        @foreach($lessons as $ls)
                          <a href="../lesson/{{$ls->lesson_id}}" style="text-decoration: none;" class="mt-3">
                                <li class="list-group-item justify-content-between align-items-center" style="height:120px; overflow:hidden;">
                                      <h4>{{ $ls->name }}</h4>
                                      <div class="ml-3">{{ $ls->content }}</div>
                                </li>
                          </a>
                        @endforeach
                      </ul>
                    @endif
                  </div>
                </div>
              @else
                <div>Not exit news</div>
              @endif
            @endguest
            <!--End my code-->
        </div>
    </div>
</div>
@endsection
