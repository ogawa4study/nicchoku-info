@extends('layouts.app')

@section('content')
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
                    {!! Form::email('department', old('department'), ['class' => 'form-control']) !!}
                </div>
                
                <div class="form-group">
                    {!! Form::label('tel', '内線番号') !!}
                    {!! Form::email('tel', old('tel'), ['class' => 'form-control']) !!}
                </div>
                
                <div class="form-group">
                    {!! Form::label('birthday', '生年月日') !!}
                    {!! Form::email('birthday', old('birthday'), ['class' => 'form-control']) !!}
                </div>
                
                <div class="form-group">
                    {!! Form::label('hobby', '趣味') !!}
                    {!! Form::email('hobby', old('hobby'), ['class' => 'form-control']) !!}
                </div>
                
                <div class="form-group">
                    {!! Form::label('comment', 'ひとこと') !!}
                    {!! Form::email('comment', old('comment'), ['class' => 'form-control']) !!}
                </div>
                
            <div class="col-md-6">
                <div class="profile picture text-center">
                        <img src="picture/profile-icon.png" alt="プロフィールアイコン">
                </div>
                <!--参考サイトの画像追加フォーム-->
                <div class="card">
                <div class="card-header">画像追加</div>
                <div class="card-body">
                    <form action="/admin/attachment" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <input type="file" name="images[]" multiple="multiple">
                        </div>
                        <div class="form-group">
                            <button class="btn btn-block btn-info">決定</button>
                        </div>
                    </form>
                </div>
            </div>

                {!! Form::submit('Sign up', ['class' => 'btn signup-btn btn-block']) !!}
            {!! Form::close() !!}
        </div>
    </div>
@endsection