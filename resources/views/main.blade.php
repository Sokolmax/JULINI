@extends("layout")

@section("page-content")
    <!--                                   header                        -->
    <header id="header" class="juil-style">
        <div class="container-fluid">
            <div class="row"> 
                    <div class="col-sm-2 d-none d-lg-block menu-l d-flex justify-content-end">
                        <h2 class="d-none d-lg-block justify-content-center">
                            <a href="#">
                                MENU
                            </a>
                        </h2>
                    </div>
                    <div class="col-sm-8 logo-l">
                        <h1 class="logo d-flex justify-content-center">
                            <a href="/">
                                JULINI
                            </a>
                        </h1>
                        <nav>
                            <ul class="menu d-flex justify-content-center">
                                <li class="menu__item">
                                    <a href="reserve">RESERVE</a>
                                </li>
                                <li class="menu__item">
                                    <a href="#">NEWS</a>
                                </li>
                                <li class="menu__item">
                                    <a href="#">CONTACTS</a>
                                </li>
                            </ul>
                        </nav>
                        <div class="d-flex justify-content-center align-items-center sub">
                            <a href="#subscr" class="icons">SUBSCRIBE NEWSLETTER</a>
                            <p class="icons_Path">|</p>
                            <div>
                                <a href="#">
                                    <img src="img/facebook-1.png" alt="Facebook" class="icons">
                                </a>
                                <a href="#">
                                    <img src="img/instagram-1.png" alt="Instagram" class="icons">
                                </a>
                                <a href="#">
                                    <img src="img/telegram-1.png" alt="Telegram" class="icons">
                                </a>
                            </div>
                        </div> 
                    </div>
                    <div class="col-sm-2 d-none d-lg-block about-l d-flex justify-content-center">
                        <h2 class="d-none d-lg-block justify-content-center">
                            <a href="#">
                                ABOUT US
                            </a>
                        </h2>
                    </div>

            </div>
        </div>
    </header>
    <!--                                  traditional                      -->
    <section id="traditional" class="traditional">
        <div class="container">

        </div>
    </section>
    <!--                                  interior                        -->
    <section id="interior" class="interior">
        <div class="container">

        </div>
    </section>
    <!--                                  chef                        -->
    <section id="chef" class="chef">
        <div class="container">

        </div>
    </section>
    <!--                                  chef                        -->
    <section id="dish" class="dish">
        <div class="container">

        </div>
    </section>

    <!--                                  subscribe                        -->
    <section id="subscr" class="subscribe">
    <div class="container">
        <div class="row">
            <div class="text__information col-sm-12">
                <div class="sub-min col-sm-12 d-flex justify-content-center">
                    SUBSCRIBE
                </div>
                <div class="sub-max col-sm-12 d-flex justify-content-center">
                    JULINI
                </div>
                <div class="sub-min col-sm-12 d-flex justify-content-center">
                    NEWSLETTER
                </div>
                <form class="col-sm-12 d-flex justify-content-center">
                    <div class="form-group">
                        <input type="email" class="form-control sub_input" id="exampleFormControlInput1" placeholder="E-mail">
                    </div>
                </form>
            </div>
        </div>
        </div>
    </section>
    <!--                                  footer                        -->
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