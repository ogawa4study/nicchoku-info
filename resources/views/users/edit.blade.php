@extends('layouts.app')

@section('content')
    <div class="update-form">
    <div class="text-center">
        <h1>My profile</h1>
    </div>
    
    <div class="row">
        <div class="col-md-6">
            {!! Form::open(['route' => ['users.update', '$user->id']]) !!}
                <div class="form-group">
                    {!! Form::label('name', '名前') !!}
                    {!! Form::text('name', $user->name, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('name_ruby', 'ふりがな') !!}
                    {!! Form::text('name_ruby', $user->name_ruby, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('email', 'Email') !!}
                    {!! Form::email('email', $user->email, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('department', '部署') !!}
                    {!! Form::text('department', $user->department, ['class' => 'form-control']) !!}
                </div>
                
                <div class="form-group">
                    {!! Form::label('tel', '内線番号') !!}
                    {!! Form::text('tel', $user->tel, ['class' => 'form-control']) !!}
                </div>
                
                <div class="form-group">
                    {!! Form::label('birthday', '生年月日') !!}
                    {!! Form::text('birthday', $user->birthday, ['class' => 'form-control']) !!}
                </div>
                
                <div class="form-group">
                    {!! Form::label('hobby', '趣味') !!}
                    {!! Form::text('hobby', $user->hobby, ['class' => 'form-control']) !!}
                </div>
                
                <div class="form-group">
                    {!! Form::label('comment', 'ひとこと') !!}
                    {!! Form::text('comment', $user->comment, ['class' => 'form-control']) !!}
                </div>

                {!! Form::submit('users.update','Update', ['id'=> $user->id], ['class' => 'btn update-button btn-block']) !!}
            {!! Form::close() !!}
        </div>
    </div>
    </div>

@endsection