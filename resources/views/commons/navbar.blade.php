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