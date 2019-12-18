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
          <div class="logo-reserv">
            <p class="logo-reserv_a">
              RESERVE
            </p>
          </div>
          <div class="map">
              <div class="first-row">
                <div class="first-row_item">
                  <a data-toggle="modal" data-target="#exampleModalScrollable">
                    <div class="a_item" onclick="getTabel(1)"></div>
                  </a>
                </div>
                <div class="first-row_item">
                  <a data-toggle="modal" data-target="#exampleModalScrollable">
                    <div class="a_item" onclick="getTabel(2)"></div>
                  </a>
                </div>
                <div class="first-row_item">
                  <a data-toggle="modal" data-target="#exampleModalScrollable">
                    <div class="a_item" onclick="getTabel(3)"></div>
                  </a>
                </div>
                <div class="first-row_item">
                  <a data-toggle="modal" data-target="#exampleModalScrollable">
                    <div class="a_item" onclick="getTabel(4)"></div>
                  </a>
                </div>
                <div class="break"></div>
              <div class="circle-row_item">
                  <a data-toggle="modal" data-target="#exampleModalScrollable">
                    <div class="a_item" onclick="getTabel(5)"></div>
                  </a>
                </div>
                <div class="circle-row_item" style="margin-top:1vw; margin-bottom: 0;">
                  <a data-toggle="modal" data-target="#exampleModalScrollable">
                    <div class="a_item" onclick="getTabel(6)"></div>
                  </a>
                </div>
                <div class="break"></div>
              <div class="third-row_item">
                  <a data-toggle="modal" data-target="#exampleModalScrollable">
                    <div class="a_item" onclick="getTabel(7)"></div>
                  </a>
                </div>
                <div class="third-row_item">
                  <a data-toggle="modal" data-target="#exampleModalScrollable">
                    <div class="a_item" onclick="getTabel(8)"></div>
                  </a>
                </div>
                  <div class="break"></div>
              <div class="circle-row_item">
                  <a data-toggle="modal" data-target="#exampleModalScrollable">
                    <div class="a_item" onclick="getTabel(9)"></div>
                  </a>
                </div>
                <div class="circle-row_item">
                  <a data-toggle="modal" data-target="#exampleModalScrollable">
                    <div class="a_item" onclick="getTabel(10)"></div>
                  </a>
                </div>
                <div class="break"></div>
              <div class="first-row_item">
                  <a data-toggle="modal" data-target="#exampleModalScrollable">
                    <div class="a_item" onclick="getTabel(11)"></div>
                  </a>
                </div>
                <div class="first-row_item">
                  <a data-toggle="modal" data-target="#exampleModalScrollable">
                    <div class="a_item" onclick="getTabel(12)"></div>
                  </a>
                </div>
                <div class="first-row_item">
                  <a data-toggle="modal" data-target="#exampleModalScrollable">
                    <div class="a_item" onclick="getTabel(13)"></div>
                  </a>
                </div>
                <div class="first-row_item">
                  <a data-toggle="modal" data-target="#exampleModalScrollable">
                    <div class="a_item" onclick="getTabel(14)"></div>
                  </a>
                </div>
            </div>

                </div> 
            </div>
        <!-- Modal -->
        <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
          <div class="modal-dialog modal-lg modal-dialog-scrollable modal-dialog-centered " role="document">
            <div class="modal-content map-modal">
              <form method="post" id="reserveTabelForm" action="/reserve" class="form">

              <div class="modal-header justify-content-center">
                <input type="text" id="reserveNumber" name="reserveNumber" hidden="true">
                <div>Table number -  <span id="reserveNumber-out"></span></div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
                {{ csrf_field() }}
                <div class="modal-body justify-content-center">
                  <div class="form-group row">
                      <div class="col-12">
                        <input class="form-control {{ $errors->has('reserveName') ? 'is-invalid':''}}" type="text" name="reserveName" id="reserveName" value="{{ old('reserveName') }}" placeholder="Name">
                        <small class="form-text text-danger">
                          <ul>
                            @foreach($errors->get('reserveName') as $error)
                              <li>{{ $error }}</li>
                            @endforeach
                          </ul>
                        </small>
                      </div>
                  </div>
                  <div class="form-group row">
                      <div class="col-12">
                        <input class="form-control {{ $errors->has('reservePhone') ? 'is-invalid':''}}" type="text" name="reservePhone" id="reservePhone" value="{{ old('reservePhone') }}" placeholder="Phone Number">
                        <small class="form-text text-danger">
                          <ul>
                            @foreach($errors->get('reservePhone') as $error)
                              <li>{{ $error }}</li>
                            @endforeach
                          </ul>
                        </small>
                      </div>
                  </div>
                  <div class="form-group row justify-content-center">
                      <select class="col-11" id="opt-date" name="opt-date">
                        @foreach($datetimes as $datetime)
                          <option value="{{ $datetime->rDate }}">{{ $datetime->rDate }}</option>
                        @endforeach
                      </select>

                  </div>
                  <div class="form-group row justify-content-center">
                      <select class="col-11" id="opt-time" name="opt-time">
                        @foreach($datetimes as $datetime)
                          <option value="{{ $datetime->rTime }}">{{ $datetime->rTime }}</option>
                        @endforeach
                      </select>
                      
                  </div>
                </div>
                <input type="text" id="access-inp" name="access-inp" hidden="true">
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">Reserv</button>
                </div>

              </form> 
            </div>
          </div>
        </div>
      </div>
      </div>
      </div>

      <script type="text/javascript">
        function getTabel(id){
          document.getElementById('reserveNumber').value = id;
          document.getElementById('reserveNumber-out').innerHTML = id;

        }
      </script>


    </section>
    <footer>
        <div class="footer">
          5 fgfdhg hdfhddfh hdfhfdgdfsgdfg ghdfgdfgdfg fdgdfggdf
        </div>
    </footer>
    @endsection