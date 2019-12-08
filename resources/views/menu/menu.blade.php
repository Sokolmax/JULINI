@extends("layout")

@section("page-content")
<form>
	<a href="/menu/create" style="color: white;">Add</a>
	<a href="/dateAdmin" style="color: white;">dateAdmin</a>
	<table>
		@foreach($manus as $manu)
		<tr>
			<td>{{ $manu->name }}</td>
			<td>{{ $manu->weight}}</td>
			<td>{{ $manu->cost}}</td>
		</tr>
		@endforeach
	</table>
</form>
<a href="/" style="color: white;">MAIN</a>
@endsection