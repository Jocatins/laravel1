@extends('layouts.app')

@section('content')

<div class="wrapper pizza-details">
    <h1>Order for {{ $gypsy->name }}</h1>
    <p class="type">Type - {{ $gypsy->type }}</p>
    <p class="base">Base - {{ $gypsy->base }}</p>

    <ul>
        @foreach($gypsy->toppings as $topping)
        <li>{{ $topping }}</li>
        @endforeach
    </ul>
    <form action="/gypsy/{{ $gypsy->id }}" method="POST">
        @csrf
        @method('DELETE')
        <button>Complete Order</button>
    </form>
  </div>

        @endsection
    