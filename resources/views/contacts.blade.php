@extends('layout.app')

@section('title', 'Обратная связь')

@section('content')

<h3 class="pb-4 mb-4 font-italic border-bottom">Обратная связь</h3>
<p>Оставьте ваше обращение и мы обязательно свяжемся.</p>

@include('layout.errors')

<form method="POST" action="{{route('feedback.store')}}">
  @csrf
  <div class="form-group">
    <label for="email">Ваш email</label>
    <input type="email" class="form-control" name="email" id="email" value="{{old('email')}}" aria-describedby="emailHelp">
    <small id="emailHelp" class="form-text text-muted">Обещаем не спамить.</small>
  </div>
  <div class="form-group">
    <label for="message">Сообщение</label>
    <textarea class="form-control" name="message" id="message" rows="3" required="">{{old('message')}}</textarea>
  </div>
  <button type="submit" class="btn btn-primary">Отправить</button>
</form>

@endsection
