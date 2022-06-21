    <!--ログインユーザーのお気に入りの中にない場合-->
    @if(Auth::user()->is_favorite($micropost->id))
        {!! Form::open(['route'=>['favorites.unfavorite',$micropost->id],'method'=>'delete']) !!}
            {!! Form::submit('Unfavorite',['class'=>"btn btn-warning btn-sm"]) !!}
        {!! Form::close() !!}
    @else
        {!! Form::open(['route'=>['favorites.favorite',$micropost->id]]) !!}
            {!! Form::submit('Favorite',['class'=>"btn btn-primary btn-sm"]) !!}
        {!! Form::close() !!}
    @endif
