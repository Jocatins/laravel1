<h1>New User</h1>

 {{-- @if ($titan == 'joca')
 <h3>Hello {{ $titan }}</h3>
 @elseif($titan == 'jenny')
 <h2>Hello {{ $titan }}</h2>
 @else
     <h2>Unknown User</h2>
 
 @endif --}}

 {{-- For Loop --}}

 {{-- @for($k = 0; $k < 10 ; $k ++ )
 <h3>{{ $k }}</h3>
 @endfor --}}

 @foreach ($titans as $titan)
     <h2>{{ $titan }}</h2>
 @endforeach