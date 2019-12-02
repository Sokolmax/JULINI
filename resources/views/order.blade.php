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
            <a href="#" class="nav-link">MENU</a>
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
   	<section class="map-bg-order">
    		<div class="container">
          <div class="first-row">
          <a data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1"">Home delivery</a>
          <a data-toggle="collapse" href="#multiCollapseExample2" role="button" aria-expanded="false" aria-controls="multiCollapseExample2">In a restaurant</a>
        </div>
        <div class="row d-flex justify-content-center">
          <div class="col-12">
        <div class="collapse" id="multiCollapseExample1">
            <div class="card card-body home_delivery">
              asfffffffffff
              аыфафыафыа
              ыфаааааааааааааа
              фыафыафыа
              аыфафыафыафыа
            </div>
          </div>
          </div>
           <div class="col-12">
           <div class="collapse" id="multiCollapseExample2">
            <div class="card card-body d-flex in_restaurant">
             <div class="row in_restaurant-block">
               <div class="col-12">dsdasd</div>
               <div class="col-12">asdasda</div>
               <div class="col-12">asdasdasd</div>
             </div>
            </div>
          </div>
          </div>
        <div class="break">
            
        </div>
          <div class="second-row">
          
          </div>
        </div>
    </section>
@endsection