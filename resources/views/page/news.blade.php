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
                <div id="hotnews">
                  <div>
                    <h3 class="pb-2 text-danger" style="display: inline-block;">News</h3>
                    <span class="float-right"><a href="#">Add news</a></span>
                  </div>
                  <ul class="list-group">
                  @foreach($news as $n)
                    <a href="../detailNews/{{$n->news_id}}" style="text-decoration: none;" class="mt-3">
                      <li class="list-group-item justify-content-between align-items-center" style="height:120px; overflow:hidden;">
                        <h4>{{ $n->name }}</h4>
                        <div class="ml-3">{{ $n->describe }}</div>
                      </li>
                    </a>
                  @endforeach    
                </ul>
                <span class="float-right mt-2">
                {{ $news->links() }}                
                </span>
              </div>
            @endguest
            <!--End my code-->
        </div>
    </div>
</div>
@endsection
