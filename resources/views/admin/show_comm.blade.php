@extends('admin.admin-index')
@section('title','Все комментарии')

@section('content')

    <table class="table table-bordered">
        <thead>
        <tr>
            <th>ID</th>
            <th>Имя</th>
            <th>ID_Поста</th>
            <th>Комментарий</th>
            <th>Дата добавления</th>
            <th style="width: 260px">Управление</th>
        </tr>
        </thead>
        <tbody>

        @foreach($post as $c)

            <tr>
                <th scope="row">{{$c->id}}</th>
                <td>{{$c->name}}</td>
                <td>{{$c->posts_id}}</td>
                <td>{!! $c->text !!}</td>
                <td>{{$c->created_at}}</td>
                <td>
                <a href="{{URL::to('comments/'. $c->id).'/edit'}}"
                class="btn btn-default" style="float: left; margin-right:15px " >Редактировать</a>

                {!! Form::open(['method' => 'DELETE','route' => ['comments.destroy', $c->id]]) !!}
                {!! Form::submit('Удалить',['class'=> 'btn btn-danger']) !!}
                {!! Form::close() !!}
                </td>
            </tr>
        @endforeach

        </tbody>
    </table>
    {{$post->links()}}

@endsection()