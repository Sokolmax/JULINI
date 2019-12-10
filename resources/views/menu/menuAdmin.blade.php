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
  <section class="map-bg">
        <div class="container">
          <div class="d-none d-lg-block" style="text-decoration: none; color: white;"><a href="/mainAdmin">ADMIN</a></div>
        	<form method="post" action="/menu">
				{{ csrf_field() }}
				<input type="text" class="form-control {{ $errors->has('menuName') ? 'is-invalid':''}}" name="menuName" id="menuName" value="{{ old('menuName') }}" placeholder="NAME:">
				<small class="form-text text-danger">
                    <ul>
                    @foreach($errors->get('menuName') as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                    </ul>
                </small>
				<input type="text" class="form-control {{ $errors->has('menuWeight') ? 'is-invalid':''}}" name="menuWeight" id="menuWeight" value="{{ old('menuWeight') }}" placeholder="WEIGHT:">
				<small class="form-text text-danger">
                    <ul>
                    @foreach($errors->get('menuWeight') as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                    </ul>
                </small>
				<input type="text" class="form-control {{ $errors->has('menuCost') ? 'is-invalid':''}}" name="menuCost" id="menuCost" value="{{ old('menuCost') }}" placeholder="COST:">
				<small class="form-text text-danger">
                    <ul>
                    @foreach($errors->get('menuCost') as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                    </ul>
                </small>
				<button>ADD</button>
			</form>
      </div>
</div>
@endsection