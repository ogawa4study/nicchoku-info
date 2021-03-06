
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
    
    <div class="information border-left border-right border-bottom">
        <div class="info-contents">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#reservation">会議室予約</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#manual">オペマニュ</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#profile">プロフィール</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#ci">CI規定</a>
            </li>
        </ul>
        
    
        <div class="tab-content border-left border-right border-bottom">
            <div class="tab-pane fade show active" id="reservation">
                <h3 class="text-center">会議室予約は<a href="https://nicchoku-info2/images_nicchoku-info2/DSC_1998.JPG">こちら</a></h3>
            </div>
            <div class="tab-pane fade" id="manual">
                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#strictly-rules">厳守事項</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#environment">環境</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#tools">ツール</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#application">申請</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#labor">労務</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#study">学習</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#benefits">福利厚生</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#organaization">組織図</a>
                    </li>
                </ul>
            
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="strictly-rules">
                        <table class="table table-striped table-borderd">
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
                            </thead>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="environment">
                        <table class="table table-striped table-borderd">
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
                            </thead>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="tools">
                        <table class="table table-striped table-borderd">
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
                            </thead>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="application">
                        <table class="table table-striped table-borderd">
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
                            </thead>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="labor">
                        <table class="table table-striped table-borderd">
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
                            </thead>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="study">
                        <table class="table table-striped table-borderd">
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
                            </thead>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="benefits">
                        <table class="table table-striped table-borderd">
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
                            </thead>
                        </table>
                    </div>
                    <div class="tab-pane fade" id="organaization">
                        <img src="images_nicchoku-info2/DSC_1998.JPG">
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="profile">
                <h3>プロフィール</h3>
                
                
            </div>
            <div class="tab-pane fade" id="ci">
                <h3 class="text-center">CI規定は<a href="#">こちら</a></h3>
            </div>
        </div>
        </div>
    </div>
    

</div>
    
