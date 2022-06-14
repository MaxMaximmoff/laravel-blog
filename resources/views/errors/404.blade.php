@extends('layouts.layout', ['title' => "404 ошибка. Вы попали не туда."])

@section('content')
    <a href="/" class="btn btn-outline-primary">Срочно вернуться на главную</a>
    <div class="card">
        <h2 class="card-header">Ты зашел не в тот район, дружище! Ошибка 404</h2>
        <img src="{{ asset('img/pigeons.jpg') }}" alt="pigeon">
    </div>
@endsection
