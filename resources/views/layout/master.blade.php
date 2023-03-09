<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>PwL Design</title>
        <link
            href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0- 
     alpha/css/bootstrap.css"
            rel="stylesheet"
        />

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

        <link
            rel="stylesheet"
            type="text/css"
            href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css"
        />

        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
        <!-- Font Awesome -->
        <link
            rel="stylesheet"
            href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
        />
        <!-- Google Fonts -->
        <link
            rel="stylesheet"
            href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
        />
        <!-- Bootstrap core CSS -->
        <link
            href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css"
            rel="stylesheet"
        />
        <!-- Material Design Bootstrap -->
        <link
            href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css"
            rel="stylesheet"
        />
        <link
            rel="stylesheet"
            id="wsl-widget-css"
            href="https://mdbcdn.b-cdn.net/wp-content/plugins/wordpress-social-login/assets/css/style.css?ver=5.6.2"
            type="text/css"
            media="all"
        />
        <link
            rel="stylesheet"
            id="compiled.css-css"
            href="https://mdbcdn.b-cdn.net/wp-content/themes/mdbootstrap4/css/compiled-4.19.2.min.css?ver=4.19.2"
            type="text/css"
            media="all"
        />

        <link
            href="https://fonts.cdnfonts.com/css/handwriting"
            rel="stylesheet"
        />
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css"
        />
        <link rel="stylesheet" href="{{ asset('style.css') }}" />
        <script src="https://unpkg.com/scrollreveal@4"></script>
    </head>
    <body>
        <div class="container">
            <header>
                <div class="row d-flex justify-content-between" id="nav">
                    <div class="col-md-4 py-3">
                        <img src="/images/K.png" alt="" srcset="" />
                    </div>

                    <div class="col-md-6">
                        <nav class="nav navbar-expand-lg navbar-light">
                            <div
                                class="collapse navbar-collapse"
                                id="navbarSupportedContent"
                            >
                                <ul class="navbar-nav topnav" id="mytopnav">
                                    <li class="nav-item active">
                                        <a
                                            class="nav-link active"
                                            href="{{ url('/') }}"
                                            >Home
                                        </a>
                                    </li>

                                    <li class="nav-item dropdown">
                                        <a
                                            class="nav-link dropdown-toggle"
                                            href="#"
                                            id="navbarDropdown"
                                            role="button"
                                            data-toggle="dropdown"
                                            aria-haspopup="true"
                                            aria-expanded="false"
                                        >
                                            Languages
                                        </a>
                                        <div
                                            class="dropdown-menu"
                                            aria-labelledby="navbarDropdown"
                                        >
                                            @foreach($lan as $l)
                                            <a
                                                class="dropdown-item"
                                                href="{{ url('/language/'.$l->slug) }}"
                                                >{{ $l->name


                                                }}</a
                                            >

                                            @endforeach
                                        </div>
                                    </li>

                                    <li class="nav-item">
                                        <a
                                            class="nav-link"
                                            href="{{ url('/contact') }}"
                                            >Contact</a
                                        >
                                    </li>

                                    <li class="nav-item">
                                        <a
                                            class="nav-link"
                                            href="{{ url('/about') }}"
                                            >About</a
                                        >
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </header>

            <main>@include('inc.error') @yield('content')</main>
        </div>

        <!-- JQuery -->
        <script
            type="text/javascript"
            src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"
        ></script>
        <!-- Bootstrap tooltips -->
        <script
            type="text/javascript"
            src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"
        ></script>
        <!-- Bootstrap core JavaScript -->
        <script
            type="text/javascript"
            src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"
        ></script>
        <!-- MDB core JavaScript -->
        <script
            type="text/javascript"
            src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"
        ></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

        <script>
            ScrollReveal().reveal("#nav");
            ScrollReveal().reveal(".title", { delay: 300 });
            ScrollReveal().reveal(".para", { delay: 500 });
            ScrollReveal().reveal("#image", { delay: 600 });
            ScrollReveal().reveal("#viewall", { delay: 700 });
        </script>
        <script>
            ScrollReveal().reveal(".contact", { delay: 500 });
            ScrollReveal().reveal(".nav-item", { interval: 200 });
        </script>
        <script>
            function myFunction() {
                var x = document.getElementById("mytopnav");
                if (x.className === "topnav") {
                    x.className += " responsive";
                } else {
                    x.className = "topnav";
                }
            }
        </script>

        @yield('script')
    </body>
</html>
