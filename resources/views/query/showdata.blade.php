<h1>hello shiv</h1>
{{$data}}


@php 
print_r($data);

@endphp

	@foreach($data as $key=>$value)

</br>	{{$value->model}} and {{$value->price}}</br>

	@endforeach

