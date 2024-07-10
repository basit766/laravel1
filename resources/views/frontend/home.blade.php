@extends('frontend.template.layout')

@section('çontent')

    <body class="home">

        @include('frontend.includes.header')

        <div class="landingimage textcenter bgimage" style="background-image: url({{ asset('assets/img/slide01.jpg') }});">
            <div class="wdth">
                <h1>Website + Mobile APP + Branding + Hosting</h1>
                <h3><a href="pricing.html">Get your own website at as low as $499</a></h3>
            </div>
        </div>

        <div class="section whoweare blacknav textcenter" id="whoweare">
            <div class="wdth">

                <h2 class="title">Let our expertise help <span>bring your ideas to life</span></h2>

                <ul>
                    <li>
                        <span class="digit">01</span>
                        <h3>PHP Web Development</h3>
                        <p>We use organized development techniques to give your website a unique and object oriented look.
                        </p>
                    </li>
                    <li>
                        <span class="digit">02</span>
                        <h3>Responsive Web Design</h3>
                        <p>We make intuitive interfaces for every kind of big and small gadgets.</p>
                    </li>
                    <li>
                        <span class="digit">03</span>
                        <h3>CMS Web Development</h3>
                        <p>We have the experts who work in major CMS systems i.e. WordPress, Joomla and Drupal.</p>
                    </li>
                    <li>
                        <span class="digit">04</span>
                        <h3>E-Commerce Development</h3>
                        <p>Grow your business by selling your products and services online. Secure payment integration and
                            feedback platforms!</p>
                    </li>
                    <li>
                        <span class="digit">05</span>
                        <h3>iOS &amp; Android Apps</h3>
                        <p>An app development services that cover the entire development cycle, from concept to
                            distribution.</p>
                    </li>
                    <li>
                        <span class="digit">06</span>
                        <h3>Web Maintenance</h3>
                        <p>We have customized maintenance services that keep your website fresh, in top-working condition,
                            and ahead of competition.</p>
                    </li>
                </ul>
                <div class="clear"></div>
                <p><a href="{{ route('contact') }}" class="button"><button><span>Get a Quote</span></button></a></p>

            </div>
        </div>

        <div class="ourwork_home section bgimage textcenter"
            style="background-image: url({{ asset('assets/img/img.jpg') }}); background-position: top center;">
            <div class="wdth">
                <div class="col50 whitetext marginauto">
                    <h2 class="title">What we do best?</h2>
                    <p>We build native iOS and Android apps. We design interfaces and experiences. We build modern,
                        responsive websites. We design databases and build custom admins to manage the data and apps and
                        sites that talk to the data. Our apps feature
                        products, videos, social interaction, business logic, and more.</p>
                    <p><a href="{{ route('work') }}" class="button white"><button><span>Learn More</span></button></a></p>
                </div>
                <div class="clear"></div>
            </div>
        </div>

        <div class="logoslider textcenter">
            <ul>
                <li>
                    <div class="div"><img style="margin:10px 0 0;" src="{{ asset('assets/img/logo1.png') }}"
                            alt="" /></div>
                </li>
                <li>
                    <div class="div"><img src="{{ asset('assets/img/logo5.png') }}" alt="" /></div>
                </li>
                <li>
                    <div class="div"><img src="{{ asset('assets/img/logo2.png') }}" alt="" /></div>
                </li>
                <li>
                    <div class="div"><img src="{{ asset('assets/img/logo8.png') }}" alt="" /></div>
                </li>
                <li>
                    <div class="div"><img style="margin:8px 0 0;" src="{{ asset('assets/img/logo6.png') }}"
                            alt="" /></div>
                </li>
                <li>
                    <div class="div" style="padding:40px;"><img src="{{ asset('assets/img/logo7.png') }}"
                            alt="" /></div>
                </li>
                <li>
                    <div class="div"><img style="margin:10px 0 0;" src="{{ asset('assets/img/logo4.PNG') }}"
                            alt="" /></div>
                </li>
                <li>
                    <div class="div"><img src="{{ asset('assets/img/logo3.png') }}" alt="" /></div>
                </li>
            </ul>
            <div class="clear"> </div>
        </div>

        <div class="reviews section bgimage" style="background-image: url({{ asset('assets/img/quotes_bg.jpg') }});">
            <div class="wdth">
                <ul class="reviews_ul">
                    <li class="box">
                        <p>They took time to understand requirements and delivers excellent work. I had lot of small changes
                            along the way based on internal reviews and he always came through with good solutions to the
                            issues identified. I've used their expertize
                            on several projects now and continue to be impressed with skills. Highly recommended!</p>
                        <p class="author">- Khawar Ahmad</p>
                    </li>
                    <li class="box">
                        <p>Jobe done to specification. They accepted job criticism in good faith and made necessary
                            improvements as required. I am not easily satisfied but I will definitely work again.</p>
                        <p class="author">- Ahmed Ogundimu</p>
                    </li>
                    <li class="box">
                        <p>Great work experience with great communication and on time finishing all details and ready to
                            finish all to be as clients need.</p>
                        <p class="author">- Elvir Salcinovic</p>
                    </li>
                </ul>
                <div class="clear"></div>
            </div>
        </div>

        <div class="stats textcenter">
            <div class="wdth">
                <ul>
                    <li>
                        <h2>248 <span>Projects</span></h2>
                    </li>
                    <li>
                        <h2>150+ <span>Clients</span></h2>
                    </li>
                    <li>
                        <h2>32 <span>Award Won</span></h2>
                    </li>
                    <li>
                        <h2>1,500+ <span>Cups of Coffee</span></h2>
                    </li>
                </ul>
                <div class="clear"></div>
            </div>
        </div>

        @include('frontend.includes.cta')
    @endsection
