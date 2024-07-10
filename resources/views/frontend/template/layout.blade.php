<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>TecHowdy - Website & Mobile Apps Development Company</title>

    <!-- favicon  -->
    <link rel="icon" type="image/jpg" href="{{ asset('assets/img/favicon.jpg') }}" />

    <!-- google fonts  -->
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

    <!-- custom css  -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />

    <!-- jquery  -->
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="js/jquery.validate.min.js"></script>

    <!-- font awesome  -->
    <script src="https://use.fontawesome.com/ddb3c6abae.js"></script>

    <!-- animations css & js -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css"
        type="text/css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>

    <!-- slick css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/slick/slick.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/slick/slick-theme.css') }}">

    <!-- slick js  -->
    <script src="{{ asset('assets/slick/slick.js') }}" type="text/javascript" charset="utf-8"></script>

    <!-- custom js  -->
    <script src="{{ asset('assets/js/custom.js') }}"></script>

</head>


@yield('çontent')


<div class="movetop">
    <a href="#home"><i class="fa fa-chevron-up"></i></a>
</div>

<div class="footer textcenter section" id="letstalk">
    <div class="wdth">

        <h5>Get in Touch</h5>
        <h2><a href="mailto:hello@techowdy.com" style="color: inherit; text-decoration: none;">hello@techowdy.com</a>
        </h2>

        <h4>Call Us <span>+92 33 444 333 11</span></h4>

    </div>
</div>

<footer class="sinfo textcenter">
    <div class="wdth">
        <div class="left">
            &copy; 2024 <a href="{{ route('home') }}" style="text-decoration: none;">TecHowdy</a>. All rights
            reserved.
        </div>
        <div class="right social">
            <ul>
                <li><a href="" target="_blank"><i class="fa fa-facebook"></i></a></li>
                <li><a href="" target="_blank"><i class="fa fa-twitter"></i></a></li>
                <li><a href="" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                <li><a href="" target="_blank"><i class="fa fa-instagram"></i></a>
                </li>
            </ul>
        </div>
        <div class="clear"></div>
    </div>
</footer>

<div class="menudivv">
    <div class="wdth">
        <ul class="menu">
            <li><a href="{{ route('about') }}">About</a></li>
            <li><a href="{{ route('services') }}">Services</a></li>
            <li><a href="{{ route('work') }}">Work</a></li>
            <li><a href="{{ route('pricing') }}">Pricing</a></li>
            <li><a href="{{ route('contact') }}">Contact</a></li>
        </ul>
    </div>
</div>

<script type="text/javascript">
    $(window).load(function() {
        $(".loader-frame").fadeOut();
    });
</script>

<script type="text/javascript">
    var trackcmp_email = '';
    var trackcmp = document.createElement("script");
    trackcmp.async = true;
    trackcmp.type = 'text/javascript';
    trackcmp.src = '//trackcmp.net/visit?actid=25419770&e=' + encodeURIComponent(trackcmp_email) + '&r=' +
        encodeURIComponent(document.referrer) + '&u=' + encodeURIComponent(window.location.href);
    var trackcmp_s = document.getElementsByTagName("script");
    if (trackcmp_s.length) {
        trackcmp_s[0].parentNode.appendChild(trackcmp);
    } else {
        var trackcmp_h = document.getElementsByTagName("head");
        trackcmp_h.length && trackcmp_h[0].appendChild(trackcmp);
    }
</script>

</body>

</html>
