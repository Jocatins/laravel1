@extends('layouts.layout')

@section('titans')

<div class="wrapper pizza-details">
    <h1>Order for {{ $gypsy->name }}</h1>
    <p class="type">Type - {{ $gypsy->type }}</p>
    <p class="base">Base - {{ $gypsy->base }}</p>
  </div>

        @endsection
    