@extends('layout.app')

@section('title', 'Список обратной связи')

@section('content')

<h3 class="pb-4 mb-4 font-italic border-bottom">Список обращений</h3>

<table class="table table-sm">
  <thead>
    <tr>
      <th scope="col">Дата</th>
      <th scope="col">Email</th>
      <th scope="col">Сообщение</th>
    </tr>
  </thead>
  <tbody>
    @foreach($feedback as $one)
    <tr>
      <th scope="row">{{ $one->created_at}}</th>
      <td>{{$one->email}}</td>
      <td>{{$one->message}}</td>
    </tr>
    @endforeach
  </tbody>
</table>

@endsection
