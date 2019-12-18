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
      <div>
      <a href="/dateAdmin" style="text-decoration: none; color: white;">ADD DATA</a>
      </div>
      <br>
      <div>
      <a href="/menu/create" style="text-decoration: none; color: white;">ADD MENU</a>
      </div>
      <section class="map-bg" style="height: 100vw;">
        <div class="container">
      <form>
        <table>
          <tr class="menudish" style="color: white; border: 0; background-color: black;">
            <td>TABLE</td>
            <td>NAME</td>
            <td>PHONE NUMBER</td>
            <td>DATE</td>
            <td>TIME</td>
          </tr>
          @foreach($clients as $client)
          <tr class="menudish">
            <td>{{ $client->tNumber }}</td>
            <td>{{ $client->name }}</td>
            <td>{{ $client->pNumber }}</td>
            <td>{{ $client->date }}</td>
            <td>{{ $client->time }}</td>
          </tr>
          @endforeach
        </table>
      </form>
    </div>
  </section>
	</div>
</section>
@endsection