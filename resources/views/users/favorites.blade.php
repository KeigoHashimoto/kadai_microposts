@extends('layouts.app')

@section('content')
    <div class="row">
        <aside class=col-sm-4>
            @include('users.card')
        </aside>
        <div class="col-sm-8">
            @include('users.navtabs')
            
            @if(count($microposts)>0)
            <ul class="list-unstyled">
                @foreach($microposts as $micropost)
                    <li class="media mb-3">
                        <img class="mr-2 rounded" src="{{ Gravatar::get($user->email,['size'=>50]) }}" alt="">
                        <div class="media-body">
                            <div>
                                {{$user->name}}
                            </div>
                            <div>
                                {{$micropost->content}}
                            </div>
                            <div class="row mt-2 mb-3">
                            @include('favorite_btn.favorite_btn')
                            <div class="ml-3">
                                @if(Auth::id()===$micropost->user_id)
                                    {{--投稿削除ボタン--}}
                                    {!! Form::open(['route'=>['microposts.destroy',$micropost->id],'method'=>'delete']) !!}
                                        {!!Form::submit('Delete',['class'=>'btn btn-danger btn-sm']) !!}
                                    {!! Form::close() !!}
                                @endif
                            </div>
                        </div>
                        </div>
                    </li>
                        
                    
                @endforeach
            </ul>
            @endif
        </div>
    </div>
@endsection