@extends('default')

@section('content')


    @if($posts)


        <div class="post_section"><span class="bottom"></span>

{{$posts->id}}

            <h2>{{$posts->title}}</h2>

            <strong>Дата: </strong>{{$posts->created_at}}<strong>| Категория: </strong> {{$posts->categories}}

            {{--<img src="{{$posts->image}} " style=" width: 450px; height: 350px;" alt="image 1" />--}}

            <?php

            $img=explode('/',$posts->image);
            if ($img[2]==null)
            {?>
            <img src="{{asset('uploads/news.png')}}" style=" width: 450px; height: 350px;" alt="image 1" />
            <?php }
            else
            { ?>
            <img src="{{$posts->image}}" style=" width: 450px; height: 350px;" alt="image 1" />
            <?php }
            ?>


            <p> {{$posts->content}}</p>

            <div class="cleaner"></div>
            <div class="category">Tags: <a href="{{route('ShowTags',['tag_en_name'=>$posts->tag_en_name])}}">{{$posts->tags}}</a></div>
            <div class="cleaner"></div>

        </div>

    @endif


    @foreach($posts->comments as $comment )



            <div id="comment_section">
            <ol class="comments first_level">
            <li>
            <div class="comment_box commentbox1">


            <div class="comment_text">
            <div class="comment_author">{{$comment->name}}<span class="date">{{$comment->created_at->diffForHumans()}}</span></div>
            <p>{{$comment->text}}</p>

            </div>
            <div class="cleaner"></div>
            </div>

            </li>
            </ol>
            </div>

@endforeach

    <hr>


    <div id="comment_form">
        <h3>Оставить Комментарий</h3>

        <div class="col-md-7">
            {!! Form::open(['route' => 'comments.store']) !!}

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

            </div>
            <div class="col-md-9">
                {{Form::text('posts_id', $posts->id,['class'=>'form-control','hidden'])}}
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
            <div class="col-md-9 col-md-offset-3">
                {{Form::submit('Опубликовать',['class'=>'btn btn-primary'])}}
            </div>
        </div>

            {!! Form::close() !!}
        </div>

    </div>

@endsection
