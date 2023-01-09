@extends('layouts.app')

@section('title-block')Главная@endsection

@section('content')
    <h1>Главная страница</h1>
@endsection 

@section('aside')
    @parent
    <h4>это работает</h4>
@endsection