<header class="mb-4">
    <nav class="navbar navbar-expand-sm"> 
        <a class="navbar-brand" href="/">日直info</a>
         
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#nav-bar">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="nav-bar">
            <ul class="navbar-nav mr-auto"></ul>
            <ul class="navbar-nav">
                <li class="nav-item">{!! link_to_route('users.show', 'My page', [Auth::user()], ['class' => 'nav-link']) !!}</li>
                <li class="nav-item">{!! link_to_route('logout.get', 'Logout', [], ['class' =>'nav-link'])!!}</li>
            </ul>
        </div>
    </nav>
</header>

    <div class="top-body">
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
    
    <div class="information">
    <ul class="nav nav-tabs">
        <li class="nav-item"><a class="nav-link active">会議室予約</a></li>
        <li class="nav-item"><a class="nav-link">オペマニュ</a></li>
        <li class="nav-item"><a class="nav-link">プロフィール</a></li>
        <li class="nav-item"><a class="nav-link">CI規定</a></li>
    </ul>
    
    <div class="tab-content">
        <div id="tab1" class="tab-pane active">
            <h3 class="text-center">会議室予約は<a href="#">こちら</a></h3>
        </div>
        <div id="tab2" class="tab-pane">
            <ul class="nav nav-tabs">
                <li class="nav-item"><a class="nav-link active">厳守事項</a></li>
                <li class="nav-item"><a class="nav-link">環境</a></li>
                <li class="nav-item"><a class="nav-link">ツール</a></li>
                <li class="nav-item"><a class="nav-link">申請</a></li>
                <li class="nav-item"><a class="nav-link">労務</a></li>
                <li class="nav-item"><a class="nav-link">学習</a></li>
                <li class="nav-item"><a class="nav-link">福利厚生</a></li>
                <li class="nav-item"><a class="nav-link">組織図</a></li>
            </ul>
            <div class="tab-content-2">
                <div id="tab2_1" class="tab-pane active">
                    <h3>aaaaaaaa</h3>
                </div>
            </div>
        </div>
        <div id="tab3" class="tab-pane">
            <h3>プロフィール</h3>
        </div>
        <div id="tab4" class="tab-pane">
            <h3 class="text-center">CI規定は<a href="#">こちら</a></h3>
        </div>
    </div>
    </div>
    </div>
    
