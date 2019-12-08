@extends("layout")

@section("page-content")

<form method="post" action="/dateAdmin">
	{{ csrf_field() }}
	<label for="rDate-inp" style="color: white;">Date</label>
	<input type="text" name="rDate-inp" id="rDate-inp">
	<label for="rTime-inp" style="color: white;">Time</label>
	<input type="text" name="rTime-inp" id="rTime-inp">
	<button>ADD</button>
</form>
<a href="/menu" style="color: white;">MENU</a>
@endsection