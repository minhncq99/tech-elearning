@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <!--Start my code-->
            @guest
                <!--Code of laravel Auth-->
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <!--
                        You are logged in!
                        -->
                        You are need Login to see more!
                    </div>
                </div>
                <!--End code of Laravel Auth-->
            @else
                
            @endguest
            <!--End my code-->
        </div>
    </div>
</div>
@endsection
