<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!--Start my code-->
                <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <div class="navbar-nav">
                    <div class="dropdown">
                        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                          Discover
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="">News</a>
                            <a class="dropdown-item" href="">Course</a>
                            <a class="dropdown-item" href="">Topic</a>
                        </div>
                    </div>
                </div>
            </div>
                <!--End my code-->

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <!--Start my code-->
        <div class="text-center w-100 p-3 m-0 bg-primary" id="header">
            <h1>Learn Codeing With US</h1>
            <div class="input-group col-4 mx-auto row">
                <input type="text" class="form-control" placeholder="Type your course want to find!">
                <div class="input-group-append">
                    <button class="btn btn-success" type="submit">Go</button>
                </div>
            </div>
        </div>
        <!--End my code-->

        <main class="py-4">
            @yield('content')
        </main>

        <!--Start my code-->
        
        <!-- Footer -->
        <footer class="page-footer font-small teal pt-4">

            <!-- Footer Text -->
            <div class="container-fluid text-center text-md-left">

                <!-- Grid row -->
                <div class="row">

                <!-- Grid column -->
                <div class="col-md-6 mt-md-0 mt-3">

                    <!-- Content -->
                    <h5 class="text-uppercase font-weight-bold">Thông tin thành viên</h5>
                    <ul>
                        <li>Nguyễn Công Quang Minh - 1751010086</li>
                        <li>Hoàng Phạm Minh Trí - </li>
                    </ul>
                </div>
                <!-- Grid column -->

                <hr class="clearfix w-100 d-md-none pb-3">

                <!-- Grid column -->
                <div class="col-md-6 mb-md-0 mb-3">

                    <!-- Content -->
                    <h5 class="text-uppercase font-weight-bold">Mô tả Webstite</h5>
                    <li>Là webstite được tạo ra bằng ngôn ngữ PHP thông qua FrameWork Laravel 5.8. 
                        Website với nội dung các bài học giúp các bạn hệ thống lại kiến thức và học thêm các kiến 
                        thức mới về lập trình cũng như cung cấp các bản tin mới về công nghệ lập trình.</li>

                </div>
                <!-- Grid column -->

                </div>
                <!-- Grid row -->

            </div>
            <!-- Footer Text -->

            <!-- Copyright -->
            <div class="footer-copyright text-center py-3">© 2020 Copyright:
                <strong>Sản phẩm của nhóm 7</strong>
            </div>
            <!-- Copyright -->

        </footer>
        <!-- Footer -->

        <!--End my code-->
    </div>
</body>
</html>
