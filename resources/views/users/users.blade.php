@if(count($users)>0)
    <ul class="list-unstyled">
        @foreach($users as $user)
            <li class="media">
                {{--ユーザーのメールアドレスをもとにGravatarを取得して表示--}}
                <img class="mr-2 rounded" src="{{ Gravatar::get($user->email,['size'=>50]) }}" alt="">
                <div class="medi-body">
                    <div>
                        {{$user->name}}
                    </div>
                    <div>
                        {{--ユーザー詳細ページへリンク--}}
                        <p>{!! link_to_route('users.index','View profile',['user'=>$user->id]) !!}</p>
                    </div>
                </div>
            </li>
        @endforeach
    </ul>
    {{$users->links()}}
@endif