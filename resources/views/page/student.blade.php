<nav class="navbar navbar-expand-sm justify-content-center">
      <ul class="navbar-nav">
            <li class="nav-item px-2">
            <a class="nav-link" href="#hotnews">Hot News</a>
            </li>
            <li class="nav-item px-2">
            <a class="nav-link" href="#newcourses">New Coures</a>
            </li>
            <li class="nav-item px-2">
            <a class="nav-link" href="#">In Progress</a>
            </li>
      </ul>
</nav>
<br/>

<div id="hotnews">
      <div>
            <h3 class="pb-2 text-danger" style="display: inline-block;">Hot news</h3>
            <span class="float-right"><a href="#">Add news</a></span>
      </div>
      <ul class="list-group">
      @for ($i = 0; $i < 5; $i++)
            @php
                  $index = count($news) -$i -1;   
            @endphp
            <a href="../detailnews/{{$news[$index]->news_id}}" style="text-decoration: none;" class="mt-3">
                  <li class="list-group-item justify-content-between align-items-center" style="height:120px; overflow:hidden;">
                        <span class="badge badge-danger badge-pill float-right p-1">Hot news</span>
                        <h4>{{ $news[$index]->name }}</h4>
                        <div class="ml-3">{{ $news[$index]->describe }}</div>
                  </li>
            </a>
            
      @endfor
      </ul>
</div>

<div class="row" style="height: 100px;"></div>

<div id="newcourses">
      <h3 class="pb-2 text-danger">New  Coures</h3>
      <ul class="list-group">
      <div class="row justify-content-between">
            @for ($i = 0; $i < 3; $i++)
                  @php
                        $index = count($courses) -$i -1;   
                  @endphp
                  <div class="col-4">
                        <a href="../detailcourse/{{$courses[$index]->course_id}}" style="text-decoration: none;" class="text-primary">
                              <div class="list-group-item justify-content-between align-items-center m-1" style="height: 400px;">
                                    <span class="badge badge-primary badge-pill float-right p-1">New course</span>
                                    <h4>{{ $courses[$index]->name }}</h4>
                                    <div class="ml-3">{{ $courses[$index]->describe }}</div>
                              </div>
                        </a>
                  </div>
            @endfor
      </div>
</div>
