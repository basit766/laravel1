@extends('frontend.template.layout')

@section('çontent')

    <body class="about">

        @include('frontend.includes.header')

        <div class="landingimage_pages bgimage" style="background-image: url({{ asset('assets/img/portfoliobg.png') }});">
            <div class="wdth">
                <h1>Contact Us</h1>
            </div>
        </div>

        <div class="section contact textcenter blacknav" style="padding: 70px 0;" id="contact">
            <div class="wdth">

                <div class="quote">
                    <p>We bring a personal and effective approach to <br>every project we work on.</p>
                </div>

                <div class="form">
                    <form action="contact.php?send=mail" id="contactform" method="post">
                        <p><label>Name</label>
                            <input type="text" onfocus="javascript:jQuery(this).parent('p').addClass('focus');"
                                onblur="javascript:if(jQuery(this).val() == ''){jQuery(this).parent('p').removeClass('focus');}"
                                name="name" id="name">
                        </p>
                        <p><label>Email</label>
                            <input type="email" onfocus="javascript:jQuery(this).parent('p').addClass('focus');"
                                onblur="javascript:if(jQuery(this).val() == ''){jQuery(this).parent('p').removeClass('focus');}"
                                name="email" id="email">
                        </p>
                        <p class="tarea"><label>Message</label>
                            <textarea name="msg" onfocus="javascript:jQuery(this).parent('p').addClass('focus');"
                                onblur="javascript:if(jQuery(this).val() == ''){jQuery(this).parent('p').removeClass('focus');}" id="msg"></textarea>
                        </p>
                        <p class="submit"><button type="submit">Send Message <i
                                    class="fa fa-long-arrow-right"></i></button>
                        </p>
                    </form>
                </div>
            </div>
        </div>
        
    @endsection
