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
          <a data-toggle="collapse" href="#" data-target="#home_delivery" aria-expanded="false" aria-controls="home_delivery">Home Delivery</a>
          <a data-toggle="collapse" href="#" data-target="#in_restaurant" aria-expanded="false" aria-controls="in_restaurant">In a restaurant</a>
        </div>
        <div class="row">
          <div class="col d-flex justify-content-center">
            <div class="collapse multi-collapse home_delivery col-12" id="home_delivery">
              <div class="card card-body">
                <div class="row">
                  <div class="col">
               <div class="d-flex justify-content-center">
                 <form class="w-50">
                  <div class="form-group first-form">
                    <input type="email" class="form-control" id="phone_number" aria-describedby="emailHelp" placeholder="Input number...">
                    <small id="id_Help" class="form-text text-muted">Enter your number phone.</small>
                  </div>
                </form>
                </div>
              </div>
            </div>
            <div class="row">
                  <div class="col">
               <div class="d-flex justify-content-center">
                 <form class="w-50">
                  <div class="form-group first-form">
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Input adress...">
                    <small id="id_Help" class="form-text text-muted">Enter your adress.</small>
                  </div>
                </form>
              </div>
            </div>
          </div>
            <div class="row">
              <div class="col d-flex justify-content-center">
                <span class="choose_dish">CHOOSE A DISH</span>
              </div>
            </div>
            <div class="row">
              <div class="col d-flex justify-content-center">
                <div class="col-8 dish_menu"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
        <div class="row">
          <div class="col d-flex justify-content-center">
            <div class="collapse multi-collapse in_restaurant col-12" id="in_restaurant">
              <div class="card card-body">
                <div class="row">
                  <div class="col">
               <div class="d-flex justify-content-center">
                 <form class="w-50">
                  <div class="form-group first-form">
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Input number...">
                    <small id="id_Help" class="form-text text-muted">Enter the number to which the table is reserved.</small>
                  </div>
                </form>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col d-flex justify-content-center">
                <span>or</span>
              </div>
            </div>
            <div class="row">
              <div class="col d-flex justify-content-center button_reserve">
                <button type="button" class="btn btn-light">Reserve</button>
              </div>
            </div>
            <div class="row">
              <div class="col reservation_number d-flex justify-content-center">
                <span>Choose reservation number.</span>
              </div>
            </div>
            <div class="row">
              <div class="col">
                <div class="form-group row d-flex justify-content-center mt-5">
                     <div class="col-6">
                        <select class="col-11">
                          <option>Time</option>
                      </select>
                     </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col d-flex justify-content-center">
                <span class="choose_dish">CHOOSE A DISH</span>
              </div>
            </div>
            <div class="row">
              <div class="col d-flex justify-content-center">
                <div class="col-8 dish_menu"></div>
              </div>
            </div>
              </div>
    </section>
    <footer id="footer" class="footer">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-sm-1 d-none d-lg-block"><a href="reserve">RESERVE</a></div>
            <div class="col-sm-1 d-none d-lg-block"><a href="#">NEWS</a></div>
            <div class="col-sm-1 d-none d-lg-block"><a href="#">CONTACTS</a></div>
            <div class="col-sm-6 d-flex justify-content-center copyright">©2019 JULINI ITALIAN RESTAURANT
            </div>
            <div class="col-sm-1 d-none d-lg-block"><a href="#"><img src="img/facebook.png" alt="facebook"></a></div>
            <div class="col-sm-1 d-none d-lg-block"><a href="#"><img src="img/instagram.png" alt="instagram"></a></div>
            <div class="col-sm-1 d-none d-lg-block"><a href="#"><img src="img/telegram.png" alt="telegram"></a></div>
        </div>
        </div>
    </footer>
@endsection