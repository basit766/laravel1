<script>
    fbq('track', 'ViewContent');
    fbq('track', 'Contact');
    fbq('track', 'Subscribe');
</script>

<div id="home"></div>

<header class="header">
    <div class="wdth">
        <div class="left">
            <a href="/" class="logo"><img src="{{ asset('assets/img/logo.png') }}" alt="" /></a>
        </div>
        <div class="right">
            <ul class="topnavv">
                <li><a href="{{ route('about') }}">About</a></li>
                <li><a href="{{ route('services') }}">Services</a></li>
                <li><a href="{{ route('work') }}">Work</a></li>
                <li><a href="{{ route('pricing') }}">Pricing</a></li>
                <li><a href="{{ route('contact') }}">Contact</a></li>
            </ul>
            <span class="opensidemenu label" onclick="openmenu()">Menu</span>
            <span class="menu-icon opensidemenu" onclick="openmenu()">
                <span class="bar1"></span>
                <span class="bar2"></span>
                <span class="bar3"></span>
            </span>
        </div>
        <div class="clear"></div>
    </div>
</header>

<div class="loader-frame">
    <div class="loader">
        <div class="loader__inner"></div>
    </div>
</div>