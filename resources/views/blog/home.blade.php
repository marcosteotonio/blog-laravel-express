@extends('template.blog')
@section('conteudo')
    @foreach($blog as $b)
        <h1> {{$b['titulo']}}</h1>
        <p>{{$b['descricao']}}</p>
        <hr/>
    @endforeach
@stop