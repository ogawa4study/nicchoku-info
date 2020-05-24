@extends('layouts.app', ['header' => false])

@section('content')
    <div class="mypage">
    <div class="text-center">
        <h1>My page</h1>
        
        <ul class="user-profile">
                <li><b>名前</b></li>
                <li>{{ $user->name }}</li>
                <li><b>ふりがな</b></li>
                <li>{{ $user->name_ruby }}</li>
                <li><b>メールアドレス</b></li>
                <li>{{ $user->email }}</li>
                <li><b>部署</b></li>
                <li>{{ $user->department }}</li>
                <li><b>内線番号</b></li>
                <li>{{ $user->tel }}</li>
                <li><b>生年月日</b></li>
                <li>{{ $user->birthday }}</li>
                <li><b>趣味</b></li>
                <li>{{ $user->hobby }}</li>
                <li><b>ひとこと</b></li>
                <li>{{ $user->comment }}</li>
        </ul>
        
       {!! link_to_route('users.edit', '編集', ['user' => $user], ['class' => 'btn edit-button btn-block']) !!}
    </div>
    </div>