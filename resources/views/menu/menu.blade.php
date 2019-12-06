@extends("layout")

@section("page-content")
<form>
	<a href="/menu/create">Add</a>
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
@endsection