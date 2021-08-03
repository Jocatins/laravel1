@extends('layouts.layout')

@section('titans')

<div class="wrapper pizza-index">
  <h1>Pizza Orders</h1>
  @foreach($gypsies as $gypsy)
    <div class="pizza-item">
      <img src="/img/pizza.png" alt="pizza icon">
      <h4><a href="/gypsy/{{ $gypsy->id }}">{{ $gypsy->name }}</a></h4>
    </div>
  @endforeach

</div>

        @endsection
    