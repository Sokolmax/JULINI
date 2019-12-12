@extends("layout")

@section("page-content")
<header class="header">
    <nav class="navbar navbar-expand-lg nav-m sticky-top">
      <button class="navbar-toggler header-but_m" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-expanded="false" aria-controls="navbarSupportedContent">
            |||
      </button>
      <div class="navbar-toggler header-logo_m" data-toggle="collapse" aria-expanded="false" aria-controls="navbarSupportedContent">
            JULINI
      </div>
      <div id="navbarSupportedContent" class="collapse navbar-collapse justify-content-arround">
        <ul class="navbar-nav text-secondary">
          <li class="nav-item header-menu_m">
            <a href="menu" class="nav-link">MENU</a>
          </li>
          <li class="nav-item header-julini_m">
            <a href="/" class="nav-link">JULINI</a>
          </li>
          <li class="nav-item header-about_m">
            <a href="#" class="nav-link">ABOUT US</a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
<section >
    <div class="container">
    	<div class="d-none d-lg-block" ><a href="/mainAdmin" style="text-decoration: none; color: white;">ADMIN</a></div>
		<form method="post" action="/dateAdmin">
			{{ csrf_field() }}
			<input type="text" class="form-control {{ $errors->has('rDate-inp') ? 'is-invalid':''}}" name="rDate-inp" id="rDate-inp" value="{{ old('rDate-inp') }}" placeholder="DATE:">
			<small class="form-text text-danger">
	         <ul>
	        @foreach($errors->get('rDate-inp') as $error)
	            <li>{{ $error }}</li>
	        @endforeach
	        </ul>
	        </small>
			<button style="background-color: white; border: 0;">ADD</button>
		</form>
	</div>
</section>
@endsection