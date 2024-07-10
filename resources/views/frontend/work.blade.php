@extends('frontend.template.layout')

@section('çontent')

    <body class="about">

        @include('frontend.includes.header')

        <div class="landingimage_pages bgimage" style="background-image: url({{ asset('assets/img/portfoliobg.png') }});">
            <div class="wdth">
                <h1>Work</h1>
            </div>
        </div>

        <div class="section textcenter blacknav" id="services">
            <div class="wdth">
                <div class="quote">
                    <p>You can take a look at some of our portfolio.</p>
                </div>

                <ul class="workul">
                    <li>
                        <div class="bgimage" style="background-image: url({{ asset('assets/img/1.png') }});"></div>
                    </li>
                    <li>
                        <div class="bgimage" style="background-image: url({{ asset('assets/img/2.png') }});"></div>
                    </li>
                    <li>
                        <div class="bgimage" style="background-image: url({{ asset('assets/img/3.png') }});"></div>
                    </li>
                </ul>
                <div class="clear"></div>
            </div>
        </div>

        @include('frontend.includes.cta')
    @endsection
