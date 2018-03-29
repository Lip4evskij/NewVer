@extends('admin.admin-index')

@section('title','Редактирование')
@section('content')

    <div class="col-md-7">
        {!! Form::model($post, array('route' => array('admin-panel.update', $post->id), 'method'=>'PUT','files'=>true)) !!}
        <div class="form-group">
            <div class="col-md-3">
                {{Form::label('title', 'Заголовок')}}
            </div>
            <div class="col-md-9">
                {{Form::text('title', null,['class'=>'form-control'])}}
            </div>
        </div>

            <div class="form-group">
                <div class="col-md-3">

                </div>
                <div class="col-md-9">
                    {{Form::text('slug', null,['class'=>'form-control','hidden'])}}
                </div>
            </div>

                <div class="form-group">
                    <div class="col-md-3">
                        {{Form::label('content', 'Текст поста')}}
                    </div>
                    <div class="col-md-9">
                        {{Form::textarea('content', null,['class'=>'form-control'])}}
                    </div>
                </div>

        <div class="form-group">
            <div class="col-md-3">
                {{Form::label('categories', 'Категория')}}
            </div>
            <div class="col-md-9">
                <div class="input-group kt-input-search">

                    {!! Form::select('categories', ['Выберите... ','culture'=>'Культура',
                   'Policy'=>'Политика', 'Sport'=>'Спорт'],null,
                   ['class' => 'form-control hidden form-control-box','id'=>'cat-input-sell']) !!}

                    {{Form::text('categories', '.',['class'=>'form-control form-control-box','id'=>'cat-input-txt'])}}

                    <span class="input-group-btn mg-0">
                     <span id="cat-sell" class="btn" title="Сменить тип выбора"><i class="fa fa-exchange"></i></span>
                    </span>
                </div>

            </div>
        </div>

        <div class="form-group">
            <div class="col-md-3">
                {{Form::label('tags', 'Теги')}}
            </div>
            <div class="col-md-9">
                {{Form::text('tags', null,['class'=>'form-control'])}}
            </div>
        </div>


        <div class="form-group">
            <div class="col-md-3">
                {{Form::label('image', 'Изображение')}}
            </div>
            <div class="col-md-9">
                {{ Form::file('image', ['class'=>'form-control']) }}
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