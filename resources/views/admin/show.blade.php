@extends('admin.admin-index')
@section('title','Просмотр поста')
@section('content')
    <h1>{{$post->title}}</h1>
    <p>{{ Carbon\Carbon::parse($post->created_at)->format('d-m-Y') }}</p>
    <p>{!! $post->content !!}</p>
    <a href="{{URL::to('admin-panel/'. $post->id).'/edit'}}" class="btn btn-default">Редактировать</a>
    {!! Form::open(['method' => 'DELETE','route' => ['admin-panel.destroy', $post->id]]) !!}
    {!! Form::submit('Удалить',['class'=> 'btn btn-danger']) !!}
    {!! Form::close() !!}
@endsection