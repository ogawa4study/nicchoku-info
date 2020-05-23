<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>日直info</title>
        <meta name="viewport" content="width=device-width, intial-scale=1, maxmum-scale=1, user-scalable=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="{{ asset('css/welcome.css') }}">
    </head>
    <body>
        <?php if (Auth::check()); ?>
        {{ $user->name }}
        else {
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
                        {!! link_to_route('login.get', 'Login', [], ['class' => 'btn login-button btn-block']) !!}
                    </div>
                    <div class="col-md-2 text-center">
                        {!! link_to_route('signup.get', 'Sign up', [], ['class' => 'btn signup-button btn-block']) !!}
                    </div>
                </div>
            </div>
        </div>
        </div>}
        
    </body>
</html>