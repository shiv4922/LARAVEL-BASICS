<h1>Else if.....</h1>

{{$name}}

	{{strlen($name)}}

	<br>
	@if(strlen($name)>5)

	string has length > 0

	@elseif(strlen($name)>5 && strlen($name)<10)

	strlen within 5 to 10
	@else

	strlen has length =0

	@endif