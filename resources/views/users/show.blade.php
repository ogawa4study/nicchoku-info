@extends('layouts.app')

@section('content')
    <section id="news">
        <h2>お知らせ</h2>
        <ul>
            <li>
                <span>2020/05/20</span>
                <a href="#">お知らせ1</a>
            </li>
            <li>
                <span>2020/05/21</span>
                <a href="#">お知らせ2</a>
            </li>
            <li>
                <span>2020/05/22</span>
                <a href="#">お知らせ3</a>
            </li>
        </ul>
    </section>
    
    <ul class="nav nav-tabs">
        <li class="nav-item"><a class="nav-link active">会議室予約</a></li>
        <li class="nav-item"><a class="nav-link">オペマニュ</a></li>
        <li class="nav-item"><a class="nav-link">プロフィール</a></li>
        <li class="nav-item"><a class="nav-link">CI規定</a></li>
    </ul>
    
    <div class="tab-content">
        <div id="tab1" class="tab-pane active">
            <h3>会議室予約は<a href="#">こちら</a></h3>
        </div>
        <div id="tab2" class="tab-pane">
            <ul class="nav nav-tabs">
                <li class="nav-item"><a class="nav-link active">厳守事項</a></li>
                <li class="nav-item"><a class="nav-link">環境</a></li>
            </ul>
        </div>
        <div id="photo3" class="tab-pane">
        <img src="images/photo3.jpg" class="img-fluid" alt="" />
        </div>
        <div id="photo4" class="tab-pane">
        <img src="images/photo4.jpg" class="img-fluid" alt="" />
        </div>
    </div>