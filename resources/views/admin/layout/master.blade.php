<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Admin</title>
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
        <link rel="stylesheet" href="{{ asset('admin.css') }}" />
    </head>
    <body>
        <div class="container-fluid">
            <div class="row d-flex justify-content-between mt-3 mb-4">
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-header">
                            <h3>Admin Panel</h3>
                        </div>
                        <div class="card-body">
                            <ul class="list-style-type" id="adminli">
                                <li>
                                    <a href="{{ route('admin.dashboard') }}"
                                        >Dashboard</a
                                    >
                                </li>
                                <li>
                                    <a href="{{ url('/admin/show') }}">All Blogs</a>
                                </li>
                                <li>
                                    <a href="{{ url('/admin/create') }}"
                                        >Write Blog</a
                                    >
                                </li>
                                <!-- <li>
                                    <a href="{{ url('/admin/recommend') }}"
                                        >Recommend Letter</a
                                    >
                                </li> -->
                                <li>
                                    <a href="{{ url('/admin/contact') }}"
                                        >Inbox SMS 
                                </li>
                                <li>
                                    <a href="{{ url('/admin/logout') }}"
                                        >Logout</a
                                    >
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                 @yield('content')
            </div>

            <!-- <div class="row mt-3">
                <div class="footer">
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Quibusdam accusantium enim expedita quod deserunt error
                        facilis corrupti! Quidem dicta quam necessitatibus
                        earum. In optio libero quas suscipit, dicta sint
                        excepturi?
                    </p>
                </div>
            </div> -->
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
        <script type="text/javascript">
            document.getElementById(
                "alert"
            ).innerHTML = `@include('admin.inc.error')`;
            setTimeout(function () {
                document.getElementById("alert").innerHTML = "";
            }, 3000);
        </script>
    </body>
</html>
