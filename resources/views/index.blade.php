@extends('layout.master') @section('content')
<div class="row d-flex justify-content-between" id="head">
    <div class="col-md-6 mt-5">
        <div class="title" id="left-pa">
            <main class="header-text">
                <p>Hello 👋 I'm</p>
                <section class="animation">
                    <div class="first"><div>Kaung Set Hein</div></div>
                    <div class="second"><div>Web Developer</div></div>
                    <div class="third"><div>Design Engineer</div></div>
                </section>
            </main>
            <span class="info">
                Hello, I'm Kaung Set Hein from Computer University Monywa.
            </span>
            <span class="info">
                I'm also junior Web Developer and studying new technologies &
                web design.I can use github well and work hard.And then, I can
                learn new knowledge from the seniors.
            </span>
        </div>

        <br />

        <div class="btn btn-sm btn-outline-info mt-2 rounded" id="viewall">
            <a href="{{ url('/project') }}"
                >View Projects &nbsp;<i class="fa fa-arrow-right"></i
            ></a>
        </div>
    </div>
    <div class="col-md-6 d-flex justify-content-end mt-5" id="image">
        <img src="/images/bllogo4.png" alt="" />
    </div>
</div>
@endsection()
