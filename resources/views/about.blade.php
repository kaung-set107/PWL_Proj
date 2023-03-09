@extends('layout.master') @section('content')

<div class="card mb-3 about">
    <div class="card-header">
        <h1 class="title mb-1 px-2">
            <b>About</b>
        </h1>
    </div>
    <div class="row d-flex justify-content-between" id="head">
        <div class="col-md-6 d-flex justify-content-start mt-5 px-3" id="image">
            <img src="/images/bllogo5.png" alt="" />
            <br />
        </div>
        <div class="col-md-6 mt-3">
            <div class="row">
                <h3 class="title"><b>Profile</b></h3>

                <i class="para">
                    I'm junior Web Developer and studying new technologies & web
                    design.I can use github well and work hard.And then, I can
                    learn new knowledge from the seniors.
                </i>
            </div>
            <div class="row mt-3">
                <h3 class="title">Experience</h3>

                <i class="para">
                    You can see my projects when this link ,
                    <div
                        class="btn btn-sm btn-outline-info mt-2 rounded"
                        id="viewall"
                    >
                        <a href="{{ url('/project') }}"
                            >View &nbsp;<i class="fa fa-arrow-right"></i
                        ></a>
                    </div>
                </i>
            </div>
            <div class="row mt-3 mb-3">
                <h3 class="title"><b>Education</b></h3>

                <i class="para">
                    Hello, I'm Kaung Set Hein.I was Computer University
                    Monywa(4th year) student.
                </i>
            </div>
            <div class="row mt-3 mb-3">
                <h3 class="title"><b>Programming Skills</b></h3>

                <i class="para mt-2">
                    <p class="skill">
                        <a
                            class="ic"
                            href="https://getbootstrap.com"
                            target="_blank"
                            rel="noreferrer"
                        >
                            <img
                                src="https://raw.githubusercontent.com/devicons/devicon/master/icons/bootstrap/bootstrap-plain-wordmark.svg"
                                alt="bootstrap"
                                width="40"
                                height="40"
                            />
                        </a>
                        &nbsp;
                        <a
                            class="ic"
                            href="https://www.w3schools.com/css/"
                            target="_blank"
                            rel="noreferrer"
                        >
                            <img
                                src="https://raw.githubusercontent.com/devicons/devicon/master/icons/css3/css3-original-wordmark.svg"
                                alt="css3"
                                width="40"
                                height="40"
                            />
                        </a>
                        &nbsp;
                        <a
                            class="ic"
                            href="https://git-scm.com/"
                            target="_blank"
                            rel="noreferrer"
                        >
                            <img
                                src="https://www.vectorlogo.zone/logos/git-scm/git-scm-icon.svg"
                                alt="git"
                                width="40"
                                height="40"
                            />
                        </a>
                        &nbsp;
                        <a
                            class="ic"
                            href="https://www.w3.org/html/"
                            target="_blank"
                            rel="noreferrer"
                        >
                            <img
                                src="https://raw.githubusercontent.com/devicons/devicon/master/icons/html5/html5-original-wordmark.svg"
                                alt="html5"
                                width="40"
                                height="40"
                            /> </a
                        >&nbsp;
                        <a
                            class="ic"
                            href="https://developer.mozilla.org/en-US/docs/Web/JavaScript"
                            target="_blank"
                            rel="noreferrer"
                        >
                            <img
                                src="https://raw.githubusercontent.com/devicons/devicon/master/icons/javascript/javascript-original.svg"
                                alt="javascript"
                                width="40"
                                height="40"
                            /> </a
                        >&nbsp;
                        <a
                            class="ic"
                            href="https://laravel.com/"
                            target="_blank"
                            rel="noreferrer"
                        >
                            <img
                                src="https://raw.githubusercontent.com/devicons/devicon/master/icons/laravel/laravel-plain-wordmark.svg"
                                alt="laravel"
                                width="40"
                                height="40"
                            />
                        </a>
                        &nbsp;
                        <a
                            class="ic"
                            href="https://www.mysql.com/"
                            target="_blank"
                            rel="noreferrer"
                        >
                            <img
                                src="https://raw.githubusercontent.com/devicons/devicon/master/icons/mysql/mysql-original-wordmark.svg"
                                alt="mysql"
                                width="40"
                                height="40"
                            />
                        </a>
                        &nbsp;
                        <a
                            class="ic"
                            href="https://www.php.net"
                            target="_blank"
                            rel="noreferrer"
                        >
                            <img
                                src="https://raw.githubusercontent.com/devicons/devicon/master/icons/php/php-original.svg"
                                alt="php"
                                width="40"
                                height="40"
                            /> </a
                        >&nbsp;
                        <a
                            class="ic"
                            href="https://vuejs.org/"
                            target="_blank"
                            rel="noreferrer"
                        >
                            <img
                                src="https://raw.githubusercontent.com/devicons/devicon/master/icons/vuejs/vuejs-original-wordmark.svg"
                                alt="vuejs"
                                width="40"
                                height="40"
                            />
                        </a>
                        &nbsp;
                    </p>
                </i>
            </div>
        </div>
    </div>
</div>
@endsection()
