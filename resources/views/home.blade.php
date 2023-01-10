@extends('layouts.app')

@section('title-block')Главная@endsection

@section('content')
    <h1>Главная страница</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque labore esse consequuntur ex accusantium, praesentium incidunt odio ducimus quam doloribus harum accusamus eius voluptates quia est quis laboriosam quisquam. Voluptatum.</p>
@endsection 

@section('aside')
    @parent
    <h4>это работает</h4>
@endsection