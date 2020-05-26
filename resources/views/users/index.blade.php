<div id="top-body">
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
    <ul class="nav nav-tabs border-left border-right border-bottom" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="reservation-tab" data-toggle="tab" href="#reservation" role="tab" aria-controls="reservation" arisa-selected="true">会議室予約</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="manual-tab" data-toggle="tab" href="#manual" role="tab" aria-controls="manual" aria-selected="false">オペマニュ</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">プロフィール</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="ci-tab" data-toggle="tab" href="#ci" role="tab" aria-controls="ci" aria-selected="false">CI規定</a>
        </li>
    </ul>
    
    <div class="tab-content">
        <div class="tab-pane fade show active" id="reservation" role="tabpanel" aria-labelledby="reservation-tab">
            <h3 class="text-center">会議室予約は<a href="https://nicchoku-info2/images_nicchoku-info2/reservation.png" target="_blank">こちら</a></h3>
        </div>
        <div class="tab-pane fade" id="manual" role="tabpanel" aria-labelledby="manual-tab">
            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="strictly-rules-tab" data-toggle="tab" href="#strictly-rules" role="tab" aria-controls="strictly-rules" aria-selected="true">厳守事項</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="environment-tab" data-toggle="tab" href="#environment" role="tab" aria-controls="environment" aria-selected="false">環境</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="tools-tab" data-toggle="tab" href="#tools" role="tab" aria-controls="tools" aria-selected="false">ツール</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="application-tab" data-toggle="tab" href="#application" role="tab" aria-controls="application" aria-selected="false">申請</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="labor-tab" data-toggle="tab" href="#labor" role="tab" aria-controls="labor" aria-selected="false">労務</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="study-tab" data-toggle="tab" href="#study" role="tab" aria-controls="study" aria-selected="false">学習</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="benefits-tab" data-toggle="tab" href="#benefits" role="tab" aria-controls="benefits" aria-selected="false">福利厚生</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="organaization-tab" deta-toggle="tab" href="#organaization" role="tab" aria-controls="organaization" aria-selected="false">組織図</a>
                </li>
            </ul>
            
            <div class="tab-content">
                <div class="tab-pane fade show active" id="strictly-rules" role="tabpanel" aria-labelledby="strictly-tab">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>項目</th>
                                <th>罰則</th>
                                <th>問い合わせ先</th>
                                <th>更新日</th>
                                <th>関連規定および資料</th>
                                <th>入社時配布(社・契・ア)</th>
                                <th>入社時配布(派・委)</th>
                                <th>退職時に必要</th>
                                <th>申請書</th>
                                <th>承認者</th>
                                <th>発行日</th>
                            </tr>
                            <tr>
                                <td><a href="#">行動規範</a></td>
                                <td>懲戒</td>
                                <td>総務</td>
                                <td>2008.02.27</td>
                                <td>--</td>
                                <td>○</td>
                                <td>○</td>
                                <td>--</td>
                                <td>--</td>
                                <td>--</td>
                                <td>--</td>
                            </tr>
                            <tr>
                                <td><a href="#">個人情報・会社情報の取り扱いについて</a></td>
                                <td>懲戒</td>
                                <td>総務</td>
                                <td>2017.04.11</td>
                                <td>
                                    <a href-"#">個人情報保護法</a><br>
                                    <a href-"#">個人情報保護規程</a><br>
                                    <a href-"#">安全管理規程</a><br>
                                    <a href-"#">特定個人情報取扱規程</a><br>
                                </td>
                                <td>○</td>
                                <td>○</td>
                                <td>--</td>
                                <td><a href="#">会社の情報の取扱いに関する誓約書</a></td>
                                <td>--</td>
                                <td>2011.04.01</td>
                            </tr>
                            <tr>
                                <td><a href="#">PC・情報機器の利用について</a></td>
                                <td>懲戒</td>
                                <td>総務</td>
                                <td>2018.05.18</td>
                                <td>--</td>
                                <td>○</td>
                                <td>○</td>
                                <td>--</td>
                                <td><a href="#">PC・情報機器の社内利用に関する誓約書</a></td>
                                <td>--</td>
                                <td>2018.10.10</td>
                            </tr>
                            <tr>
                                <td><a href="#">インフル、ノロなどの予防と感染時の対応について</a></td>
                            </tr>  
                        </thead>
                    </table>
                    
                    
                    
                    
                    
                </div>
                <div class="tab-pane fade" id="environment" role="tabpanel" aria-labelledby="environment-tab">aaaa</div>
                <div class="tab-pane fade" id="tools" role="tabpanel" aria-labelledby="tools-tab">aaaa</div>
                <div class="tab-pane fade" id="application" role="tabpanel" aria-labelledby="application-tab">aaaa</div>
                <div class="tab-pane fade" id="labor" role="tabpanel" aria-labelledby="labor-tab">aaaa</div>
                <div class="tab-pane fade" id="study" role="tabpanel" aria-labelledby="study-tab">aaaa</div>
                <div class="tab-pane fade" id="benefits" role="tabpanel" aria-labelledby="benefits-tab">aaaa</div>
                <div class="tab-pane fade" id="organaization" role="tabpanel" aria-labelledby="organaization-tab">aaaa</div>
            </div>
            
        </div>
        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
            <h3>プロフィール</h3>
        </div>
        <div class="tab-pane fade" id="ci" role="tabpanel" aria-labelledby="ci-tab">
            <h3 class="text-center">CI規定は<a href="#">こちら</a></h3>
        </div>
    </div>
    </div>
    </div>
    
