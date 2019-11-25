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
   	<section class="map-bg">
    		<div class="container">
   		<div class="map">
     			<div class="first-row">
       			<div class="first-row_item">
              <a data-toggle="modal" data-target="#exampleModalScrollable">
                <div class="a_item"></div>
              </a>
            </div>
            <div class="first-row_item">
              <a data-toggle="modal" data-target="#exampleModalScrollable">
                <div class="a_item"></div>
              </a>
            </div>
            <div class="first-row_item">
              <a data-toggle="modal" data-target="#exampleModalScrollable">
                <div class="a_item"></div>
              </a>
            </div>
            <div class="first-row_item">
              <a data-toggle="modal" data-target="#exampleModalScrollable">
                <div class="a_item"></div>
              </a>
            </div>
       			<div class="break"></div>
       		<div class="circle-row_item">
              <a data-toggle="modal" data-target="#exampleModalScrollable">
                <div class="a_item"></div>
              </a>
            </div>
            <div class="circle-row_item" style="margin-top:1vw; margin-bottom: 0;">
              <a data-toggle="modal" data-target="#exampleModalScrollable">
                <div class="a_item"></div>
              </a>
            </div>
       			<div class="break"></div>
       		<div class="third-row_item">
              <a data-toggle="modal" data-target="#exampleModalScrollable">
                <div class="a_item"></div>
              </a>
            </div>
            <div class="third-row_item">
              <a data-toggle="modal" data-target="#exampleModalScrollable">
                <div class="a_item"></div>
              </a>
            </div>
            	<div class="break"></div>
       		<div class="circle-row_item">
              <a data-toggle="modal" data-target="#exampleModalScrollable">
                <div class="a_item"></div>
              </a>
            </div>
            <div class="circle-row_item">
              <a data-toggle="modal" data-target="#exampleModalScrollable">
                <div class="a_item"></div>
              </a>
            </div>
       			<div class="break"></div>
       		<div class="first-row_item">
              <a data-toggle="modal" data-target="#exampleModalScrollable">
                <div class="a_item"></div>
              </a>
            </div>
            <div class="first-row_item">
              <a data-toggle="modal" data-target="#exampleModalScrollable">
                <div class="a_item"></div>
              </a>
            </div>
            <div class="first-row_item">
              <a data-toggle="modal" data-target="#exampleModalScrollable">
                <div class="a_item"></div>
              </a>
            </div>
            <div class="first-row_item">
              <a data-toggle="modal" data-target="#exampleModalScrollable">
                <div class="a_item"></div>
              </a>
            </div>
       	</div>

       			</div> 
     		</div>
        <!-- Modal -->
        <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
          <div class="modal-dialog modal-lg modal-dialog-scrollable modal-dialog-centered " role="document">
            <div class="modal-content map-modal">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalScrollableTitle">1</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <form method="post" action="/reserve" class="form">
                {{ csrf_field() }}
                <div class="modal-body">
                  <div class="form-group row">
                    <label for="example-datetime-local-input" class="col-2 col-form-label">Date and time</label>
                      <div class="col-10">
                        <input class="form-control" type="text" value="2019-11-23T13:45:00" id="example-datetime-local-input" required>
                      </div>
                  </div>
                  <div class="form-group row">
                    <label for="phone-number" class="col-2 col-form-label">Number</label>
                      <div class="col-10">
                        <input class="form-control {{ $errors->has('phone-number') ? 'is-invalid':''}}" type="text" name="phone-number" id="phone-number" value="{{ old('phone-number') }}">
                        <small class="form-text text-danger">
                          <ul>
                            @foreach($errors->get('phone-number') as $error)
                              <li>{{ $error }}</li>
                            @endforeach
                          </ul>
                        </small>
                      </div>
                  </div>
                </div>

                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary" id="add-client">Reserv</button>
                </div>

              </form> 
            </div>
          </div>
        </div>
   		</div>
   		</div>
   		</div>



   	</section>
   	<footer>
        <div class="footer">
          5 fgfdhg hdfhddfh hdfhfdgdfsgdfg ghdfgdfgdfg fdgdfggdf
        </div>
   	</footer>
    @endsection