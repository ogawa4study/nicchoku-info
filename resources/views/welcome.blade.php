@extends('layouts.app', ['header' => false])

@section('content')
    <body id="welcome-body">
        @if (Auth::check())
            @include('users.index')
        @else
        <div id="intro">
            <div class="intro-text">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="brand">
                                <h1>日直info</h1>
                                <div class="line-spacer"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <div id="buttons">
            <div class="container">
                <div class="row">
                    <div class="col-md-2 text-center">
                        {!! link_to_route('login', 'Login', [], ['class' => 'btn login-button btn-block']) !!}
                    </div>
                    <div class="col-md-2 text-center">
                        {!! link_to_route('signup.get', 'Sign up', [], ['class' => 'btn signup-button btn-block']) !!}
                    </div>
                </div>
            </div>
        </div>
        </div>
    @endif
    </div>
    </body>
@endsection