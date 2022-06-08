@extends('layouts.app')

@section('content')
    <div class="text-center">
        <h1>Signup</h1>
    </div>
    
    <div class="row">
        <div class="col-sm-6 offset-sm-3">
            {!! Form::open(['route'=>'signup.post'])!!}
                <div class="form-group">
                    {!!Form::label('name','Name')!!}
                    {!!Form::text('name',null,['class'=>'form-controll'])!!}
                </div>
                <div class="form-group">
                    {!!Form::label('email','Email')!!}
                    {!!Form::text('email',null,['class'=>'form-controll'])!!}
                </div>
                <div class="form-group">
                    {!!Form::label('password','Password')!!}
                    {!!Form::password('password',null,['class'=>'form-controll'])!!}
                </div>
                <div class="form-group">
                    {!!Form::label('password_confirmation','Confirmation')!!}
                    {!!Form::password('password_confirmation',null,['class'=>'form-controll'])!!}
                </div>
                
                {!!Form::submit('Sign up',['class'=>'btn btn-primary btn-block'])!!}
            {!!Form::close()!!}
        </div>
    </div>

@endsection