@extends('default')

@section('content')

    {!! Form::open(['url' => 'send-mail']) !!}
    <div class="form-group">
        <div class="col-md-3">
            {{Form::label('Имя')}}
        </div>
        <div class="col-md-9">
            {{Form::text('name')}}

        </div>
    </div>

    <div class="form-group">
        <div class="col-md-3">
            {{Form::label('Телефон +380(XX)-XXXX-XX-XX')}}
        </div>
        <div class="col-md-9">
            {{Form::text('phone')}}

        </div>
    </div>



    <div class="form-group">
        <div class="col-md-3">
            {{Form::label('Email')}}
        </div>
        <div class="col-md-9">
            {{Form::email('email')}}

        </div>
    </div>

    <div class="form-group">
        <div class="col-md-3">
            {{Form::label('Сообщение')}}
        </div>
        <div class="col-md-9">
            {{Form::textarea('msg')}}

        </div>
        <div class="col-md-9">
            <div class="g-recaptcha" data-sitekey="6LeIzUwUAAAAAEhCDy5Hx5uF45_jg9-MBvY4WQig"></div>

        </div>
    </div>


    {{Form::submit('Отправить')}}
    {!! Form::close() !!}

@endsection