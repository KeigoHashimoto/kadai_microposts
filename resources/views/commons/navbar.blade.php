<header class="mb-4">
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <a class="navbar-brand" href="/">Microposts</a>
        
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar">
            <span class="navbar-togglar-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbar">
            <ul class="navbar-nav mr-auto"></ul>
            <ul class="navbar-nav">
                @if(Auth::check())
                    {{--ユーザー一覧ページリンク--}}
                    <li class="nav-item">{!!link_to_route('users.index','Users',[],['class'=>'nav-link']) !!}</li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">{{Auth::user()->name}}</a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            {{--ユーザー詳細ページリンク--}}
                            <li class="dropdown-item">{!! link_to_route('users.show','MyProfile',['user'=>Auth::id()]) !!}</li>
                            <!--お気に入りリンク-->
                            <li class="dropdown-item">{!! link_to_route('user.favorites','Favorites',['id'=>auth::id()])!!}</li>
                            <li class="dropdown-divider"></li>
                            {{--ログアウトリンク--}}
                            <li class="dropdown-item">{!!link_to_route('logout.get','Logout')!!}</li>
                        </ul>
                    </li>
                @else
                {{--ユーザー登録ページへのリンク--}}
                <li class="nav-item">{!! link_to_route('signup.get','Signup',[],['class'=>'nav-link']) !!}</li>
                {{--ログインページへのリンク--}}
                <li class="nav-item">{!! link_to_route('login','Login',[],['class'=>'nav-link']) !!}</li>
                @endif
            </ul>
        </div>
    </nav>
</header>