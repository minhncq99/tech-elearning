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
              @if($lesson)
                <div class="py-5 my-5 bg-white rounded shadow-lg">
                  <div class="list-group mx-3">
                    <h3 class="pb-2 text-danger text-center" style="display: inline-block;">{{$lesson->name}}</h3>
                    <span class="m-auto">
                      @php
                        echo ($lesson->link);
                      @endphp
                    </span>
                    <div class="mx-3">{{ $lesson->content }}</>
                  </div>
                </div>
              @else
                <div>Not exit lesson</div>
              @endif
            @endguest
            <!--End my code-->
        </div>
    </div>
</div>
@endsection
