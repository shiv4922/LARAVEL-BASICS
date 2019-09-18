<h1>using loop index</h1>

{{-- shiv --}}

@foreach($names as $name)

{{$loop-> index}} . {{$name}}</br>

@endforeach