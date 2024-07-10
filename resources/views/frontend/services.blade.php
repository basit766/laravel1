@extends('frontend.template.layout')

@section('çontent')

    <body class="about">

        @include('frontend.includes.header')

        <div class="landingimage_pages bgimage" style="background-image: url({{ asset('assets/img/portfoliobg.png') }});">
            <div class="wdth">
                <h1>Services</h1>
            </div>
        </div>
        
        <div class="section services textcenter blacknav" style="padding: 70px 0;" id="services">
            <div class="wdth">
        
                <div class="quote">
                    <p>We are creative communication agency specialized <br>in digital and corporate identity.</p>
                </div>
        
                <div class="r">
                    <div class="left col30">
                        <h2>Creative &amp; <br>Design</h2>
                    </div>
                    <div class="right col70">
                        <ul class="srv">
                            <li>
                                <a href="">
                                    <h4>Design Direction</h4>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <h4>Creative Concepts &amp; Ideas</h4>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <h4>Branding &amp; Identity</h4>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <h4>UI/UX Web Design</h4>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <h4>Animations</h4>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <h4>Responsive Design</h4>
                                </a>
                            </li>
                        </ul>
                        <div class="clear"></div>
                    </div>
                    <div class="clear"></div>
                </div>
        
                <div class="r">
                    <div class="left col30">
                        <h2>Website &amp; APP <br>Development</h2>
                    </div>
                    <div class="right col70">
                        <ul class="srv">
                            <li>
                                <a href="">
                                    <h4>Creative Front &amp; Back End </h4>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <h4>PHP Web Applications </h4>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <h4>CMS <br>(i.e. WordPress)</h4>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <h4>E-Commerce Development</h4>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <h4>Enterprise resource planning (ERP)</h4>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <h4>iOS &amp; Android App Development</h4>
                                </a>
                            </li>
                        </ul>
                        <div class="clear"></div>
                    </div>
                    <div class="clear"></div>
                </div>
        
                <div class="r">
                    <div class="left col30">
                        <h2>Digital <br>Branding</h2>
                    </div>
                    <div class="right col70">
                        <ul class="srv">
                            <li>
                                <a href="">
                                    <h4>Search Engine Optimization (SEO)</h4>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <h4>Social Media Marketing (SMM) </h4>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <h4>E-mail Campaigns</h4>
                                </a>
                            </li>
                        </ul>
                        <div class="clear"></div>
                    </div>
                    <div class="clear"></div>
                </div>
        
                <div class="r">
                    <div class="left col30">
                        <h2>Web <br>Maintenance</h2>
                    </div>
                    <div class="right col70">
                        <ul class="srv">
                            <li>
                                <a href="">
                                    <h4>WP Core Updates</h4>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <h4>WP Plugin Updates</h4>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <h4>Site Backups</h4>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <h4>Link Scan &amp; Trackings</h4>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <h4>SPAM Cleanup</h4>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <h4>Site Performance Reports</h4>
                                </a>
                            </li>
                        </ul>
                        <div class="clear"></div>
                    </div>
                    <div class="clear"></div>
                </div>
        
                <div class="">
                    <h2 style="text-align: center; margin:80px auto 0;">24 hours, 7 days a week customer support</h2>
                </div>
        
            </div>
        </div>

        @include('frontend.includes.cta')

    @endsection
