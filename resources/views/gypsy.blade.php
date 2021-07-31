<div>
    {{-- @for($i = 0; $i <6; $i ++)
    <p>the value of i is {{  $i }}</p>
    @endfor --}}

    {{-- @for($i = 0; $i < count($gypsies); $i ++)
        <p>{{ $gypsies[$i]['base'] }}</p>
    @endfor --}}

    @foreach($gypsies as $gypsy)
        <div>
            {{ $loop->index }} {{ $gypsy['type'] }} -- {{ $gypsy['base'] }}
            @if($loop->last)
            <span>--Last in the loop</span>
            @endif
        </div>
    @endforeach
</div>