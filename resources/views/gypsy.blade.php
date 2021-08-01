@extends('layouts.layout')

@section('titans')

        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                    gypsy List
                </div>                

                @foreach($gypsies as $gypsy)
                  <div>
                    {{  $gypsy->name }} - {{  $gypsy->type }} - {{  $gypsy->base }}
                  </div>
                @endforeach

            </div>
        </div>

        @endsection
    