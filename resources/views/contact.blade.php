@extends('layouts.app')

@section('title-block')Контакты@endsection

@section('content')
    <h1>Страница контактов </h1>

    @if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form action="{{ route('contact-form') }}" method="post">
        @csrf 

        <div class="form-inline mb-3">
            <label for="name">Введите имя</label>
            <input type="text" name="name" placeholder="введите имя" id="name" class="form-control">
        </div>

        <div class="form-inline mb-3">
            <label for="email">Email</label>
            <input type="text" name="email" placeholder="введите email" id="email" class="form-control">
        </div>

        <div class="form-inline mb-3">
            <label for="subject">Тема сообщения</label>
            <input type="text" name="subject" placeholder="Тема сообщения" id="subject" class="form-control">
        </div>

        <div class="form-inline mb-3">
            <label for="message">Сообщение</label>
            <textarea name="message" id="message" class="form-control" placeholder="введите сообщение"></textarea>
        </div>

        <button type="submit" class="btn btn-success">Отправить</button>
    </form>
@endsection 