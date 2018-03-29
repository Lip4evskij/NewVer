@extends('admin.admin-index')

@section('title','Редактирование')
@section('content')

    <div class="col-md-7">
        {!! Form::model($post, array('route' => array('comments.update', $post->id), 'method'=>'PUT','files'=>true)) !!}
        <div class="form-group">
            <div class="col-md-3">
                {{Form::label('name', 'Имя')}}
            </div>
            <div class="col-md-9">
                {{Form::text('name', null,['class'=>'form-control'])}}
            </div>
        </div>


        <div class="form-group">
            <div class="col-md-3">
                {{Form::label('text', 'Текст комментария')}}
            </div>
            <div class="col-md-9">
                {{Form::textarea('text', null,['class'=>'form-control'])}}
            </div>
        </div>


        <div class="form-group">
            <div class="col-md-3">

            </div>
            <div class="col-md-9">
                {{Form::text('posts_id', $post->id,['class'=>'form-control','hidden'])}}
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-9 col-md-offset-3">
                {{Form::submit('Опубликовать',['class'=>'btn btn-primary'])}}
            </div>
        </div>
    </div>
    {!! Form::close() !!}
    </div>


@endsection