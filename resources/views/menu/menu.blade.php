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
  	<section class="map-bg" style="height: 100vw;">
        <div class="container">
			<form>
				<table>
					<tr class="menudish" style="color: white; border: 0; background-color: black;">
						<td>NAME</td>
						<td>WEIGHT(g)</td>
						<td>COST</td>
					</tr>
					@foreach($manus as $manu)
					<tr class="menudish">
						<td>{{ $manu->name }}</td>
						<td>{{ $manu->weight}}</td>
						<td>{{ $manu->cost}}</td>
					</tr>
					@endforeach
				</table>
			</form>
		</div>
	</section>
@endsection