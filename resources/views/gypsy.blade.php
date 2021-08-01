@extends('layouts.layout')

@section('titans')

        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                    gypsy List
                </div>
                <p>
                  {{ $name }}
                </p>
                <p>
                  {{ $age }}
                </p>
                
                
                <!-- @for($i = 0; $i < 5; $i++)
                  <p>the value of i is {{ $i }}</p>
                @endfor -->

                <!-- @for($i = 0; $i < count($gypsies); $i++)
                  <p>{{ $gypsies[$i]['type'] }}</p>
                @endfor -->

                @foreach($gypsies as $gypsy)
                  <div>
                    {{ $loop->index }} - {{ $gypsy['type'] }} - {{ $gypsy['base'] }}
                    @if($loop->first)
                      <span> - first in the loop</span>
                    @endif
                    @if($loop->last)
                      <span> - last in the loop</span>
                    @endif
                  </div>
                @endforeach

            </div>
        </div>

        @endsection
    