@extends('layout.app')

@section('title', 'Создать новую запись')

@section('content')

<h3 class="pb-4 mb-4 font-italic border-bottom">Создать новую запись</h3>

@include('layout.errors')

<form method="POST" action="/">
  @csrf
  <div class="form-group">
    <label for="slug">Уникальное имя</label>
    <input type="text" class="form-control" name="slug" id="slug" aria-describedby="slugHelp" value={{ old('slug') }}>
    <small id="slugHelp" class="form-text text-muted">Уникальное поле, должно состоять только из латинских символов, цифр и символов тире <code>-</code> и подчеркивания <code>_</code></small>
  </div>
  <div class="form-group">
    <label for="title">Заголовок</label>
    <input type="text" class="form-control" name="title" id="title" value={{ old('title') }}>
  </div>
  <div class="form-group">
    <label for="short_text">Краткое описание</label>
    <textarea class="form-control" name="short_text" id="short_text" rows="3">{{ old('short_text') }}</textarea>
  </div>
  <div class="form-group">
    <label for="content">Запись</label>
    <textarea class="form-control" name="content" id="content" rows="7">{{ old('content') }}</textarea>
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" name="published" value="1" id="published" @if(old('published')) checked @endif>
    <label class="form-check-label" for="published">Опубликовать?</label>
  </div>
  <button type="submit" class="btn btn-primary">Сохранить</button>
</form>

@endsection
