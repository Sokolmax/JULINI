@extends("layout")

@section("page-content")
<form method="post" action="/menu">
	{{ csrf_field() }}
	<input type="text" name="menuName" id="menuName">
	<input type="text" name="menuWeight" id="menuWeight">
	<input type="text" name="menuCost" id="menuCost">
	<button>ADD</button>
</form>
@endsection