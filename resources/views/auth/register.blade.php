@extends('layouts.app')

@section('content')
    <div class="signup-form">
    <div class="text-center">
        <h1>Sign up</h1>
    </div>

    <div class="row">
        <div class="col-md-6">

            {!! Form::open(['route' => 'signup.post']) !!}
                <div class="form-group">
                    {!! Form::label('name', '名前') !!}
                    {!! Form::text('name', old('name'), ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('name_ruby', 'ふりがな') !!}
                    {!! Form::text('name_ruby', old('name_ruby'), ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('email', 'Email') !!}
                    {!! Form::email('email', old('email'), ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('password', 'パスワード') !!}
                    {!! Form::password('password', ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('password_confirmation', 'パスワード確認') !!}
                    {!! Form::password('password_confirmation', ['class' => 'form-control']) !!}
                </div>
                
                <div class="form-group">
                    {!! Form::label('department', '部署') !!}
                    {!! Form::text('department', old('department'), ['class' => 'form-control']) !!}
                </div>
                
                <div class="form-group">
                    {!! Form::label('tel', '内線番号') !!}
                    {!! Form::text('tel', old('tel'), ['class' => 'form-control']) !!}
                </div>
                
                <div class="form-group">
                    {!! Form::label('birthday', '生年月日') !!}
                    {!! Form::text('birthday', old('birthday'), ['class' => 'form-control']) !!}
                </div>
                
                <div class="form-group">
                    {!! Form::label('hobby', '趣味') !!}
                    {!! Form::text('hobby', old('hobby'), ['class' => 'form-control']) !!}
                </div>
                
                <div class="form-group">
                    {!! Form::label('comment', 'ひとこと') !!}
                    {!! Form::text('comment', old('comment'), ['class' => 'form-control']) !!}
                </div>
                
            <div class="col-md-6">
                @include('item.create')
                
            </div>

                {!! Form::submit('Sign up', ['class' => 'btn signup-button btn-block']) !!}
            {!! Form::close() !!}
        </div>
    </div>
    </div>
@endsection