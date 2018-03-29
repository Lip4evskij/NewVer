@extends('default')

@section('content')

    @foreach($posts as $p)
 <div class="post_section"><span class="bottom"></span>
    <h2><a href="{{route('articleShow',['title'=>$p->slug])}}">{{$p->title}}</a></h2>
    <strong>Дата: </strong>{{$p->updated_at}}<strong>| Категория: </strong> {{$p->categories}}
     <?php
     $img=explode('/',$p->image);
     if ($img[2]==null)
     {?>
     <img src="{{asset('uploads/news.png')}}" style=" width: 450px; height: 350px;" alt="image 1" />
     <?php }
     else
     { ?>
     <img src="{{$p->image}}" style=" width: 450px; height: 350px;" alt="image 1" />
     <?php }
     ?>
     <p>  {{substr($p->content,0,200).'...'}}</p>
    <div class="cleaner"></div>
    <div class="category">Tags: <a href="{{route('ShowTags',['tag_en_name'=>$p->tag_en_name])}}">{{$p->tags}}</a></div> <div class="button float_r"><a href="{{route('articleShow',['title'=>$p->slug])}}" class="more">Read more</a></div>
    <div class="cleaner"></div>
    </div>

@endforeach
<style>
    ul.hr {
        margin: 0; /* Обнуляем значение отступов */
        padding: 4px; /* Значение полей */
    }
    ul.hr li {
        display: inline; /* Отображать как строчный элемент */
        margin-right: 5px; /* Отступ слева */

    }
</style>
<ul class="hr">
    <li>{{$posts->links()}}</li>
</ul>

@endsection
