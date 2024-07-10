@extends('frontend.template.layout')

@section('çontent')

    <body class="about">

        @include('frontend.includes.header')

        <div class="landingimage_pages bgimage" style="background-image: url({{ asset('assets/img/portfoliobg.png') }});">
            <div class="wdth">
                <h1>About Us</h1>
            </div>
        </div>

        <div class="section aboutus blacknav" id="about">
            <div class="wdth">

                <div class="quote">
                    <p>We're strategists, designers, developers, writers, directors and producers united by our pioneering
                        spirit..</p>
                </div>

                <div class="contentt">
                    <div class="left col50">
                        <p>TecHowdy is working in multiple development technologies since our inception; staying at par with
                            the latest trends and demands of the web development industry. Besides being trusted by some
                            multinational business giants, most of our
                            work has been for Entrepreneurs passionate to make their mark in the world. </p>
                        <p>At the moment, we have grown to rapidly working and our developers are picked after a fine
                            recruitment process in which their excellence and ability to excel is measured carefully. </p>
                    </div>
                    <div class="right col50">
                        <p>To keep up-to-minute with the latest I.T. trends, we have a dedicated Training Department to help
                            Developers familiarize themselves with new technologies and frameworks. Due to an intelligent
                            strategy and continuous hard work by our
                            team, tecHowdy is being counted amongst Pakistan's largest software houses and keeping with the
                            current pace, we are on our way to be the Largest. </p>
                        <p><a href="{{ route('contact') }}" class="button" style="margin:30px 0 0;"><button><span>Learn
                                        More</span></button></a></p>
                    </div>
                    <div class="clear"></div>
                </div>

            </div>
        </div>

        @include('frontend.includes.cta')

    @endsection
