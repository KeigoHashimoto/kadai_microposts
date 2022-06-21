@if(count($microposts)>0)
    <ul class="list-unstyled">
        @foreach($microposts as $micropost)
            <li class="media mb-5">
                <img class="mr-2 rounded" src="{{ Gravatar::get($micropost->user->email,['size'=>50]) }}" alt="">
                <div class="media-body">
                    <div>
                        <!--投稿者のユーザー詳細ページのリンク-->
                        {!! link_to_route('users.show',$micropost->user->name,['user'=>$micropost->user->id]) !!}
                        <span class="text-muted">posted at</span>
                    </div>
                    <div>
                        <!--投稿内容-->
                        <p class="mb=0">{!! nl2br(e($micropost->content)) !!}</p>
                    </div>
                    <div class=row>
                        @if(Auth::id()===$micropost->user_id)
                            {{--投稿削除ボタン--}}
                            {!! Form::open(['route'=>['microposts.destroy',$micropost->id],'method'=>'delete']) !!}
                                {!!Form::submit('Delete',['class'=>'btn btn-danger btn-sm']) !!}
                            {!! Form::close() !!}
                        @endif
                        <div class="ml-3">
                            @include('favorite_btn.favorite_btn')
                        </div>
                    </div>
                    
                </div>
            </li>
        @endforeach
    </ul>
    <!--ページネーションリンク-->
    {{ $microposts->links() }}
@endif    