@extends('frontend.template.layout')

@section('çontent')

    <body class="pricing">

        @include('frontend.includes.header')

        <div class="landingimage_pages bgimage" style="background-image: url({{ asset('assets/img/portfoliobg.png') }});">
            <div class="wdth">
                <h1>Pricing</h1>
            </div>
        </div>
    
        <div class="section pricing blacknav" id="pricing">
            <div class="wdth">
    
                <div class="col25 left package">
                    <div class="dv custom">
                        <p>For most clients a package will probably not be suitable as a bespoke quotation may be required
                            but the following packages have been added to suit the majority of requests.</p>
                        <p><a href="{{ route('contact') }}" class="button" style="margin: 10px 0 0;"><button><span>Get a
                                        Quote</span></button></a></p>
                    </div>
                </div>
                <div class="col25 left package">
                    <div class="dv">
                        <h2 class="title">Basic</h2>
                        <h3 class="price">$499</h3>
                        <ul>
                            <li><i class="fa fa-check"></i> 5 pages website</li>
                            <li><i class="fa fa-check"></i> Logo & Graphics included</li>
                            <li><i class="fa fa-check"></i> 1 year domain free</li>
                            <li><i class="fa fa-check"></i> On-Page SEO included</li>
                            <li><i class="fa fa-check"></i> Responsive for Mobile & Tablets</li>
                            <li><i class="fa fa-check"></i> Free 2 revisions (within 2 weeks)</li>
                        </ul>
                    </div>
                </div>
                <div class="col25 left package">
                    <div class="dv">
                        <h2 class="title">WordPress</h2>
                        <h3 class="price">$799</h3>
                        <ul>
                            <li><i class="fa fa-check"></i> 7-10 pages website</li>
                            <li><i class="fa fa-check"></i> Logo & Graphics included</li>
                            <li><i class="fa fa-check"></i> 1 year domain free</li>
                            <li><i class="fa fa-check"></i> On-Page SEO included</li>
                            <li><i class="fa fa-check"></i> Responsive for Mobile & Tablets</li>
                            <li><i class="fa fa-check"></i> Email Accounts Creations</li>
                            <li><i class="fa fa-check"></i> Admin Panel (Add/Edit Pages content)</li>
                            <li><i class="fa fa-check"></i> Free 3 revisions (within 2 weeks)</li>
                        </ul>
                    </div>
                </div>
                <div class="col25 left package">
                    <div class="dv">
                        <h2 class="title">E-Commerce</h2>
                        <h3 class="price">$999</h3>
                        <ul>
                            <li><i class="fa fa-check"></i> 7-10 pages website</li>
                            <li><i class="fa fa-check"></i> Shop & Cart Pages included</li>
                            <li><i class="fa fa-check"></i> Unlimited Products</li>
                            <li><i class="fa fa-check"></i> Payment Gateways (i.e. PayPal)</li>
                            <li><i class="fa fa-check"></i> Logo & Graphics included</li>
                            <li><i class="fa fa-check"></i> 1 year domain free</li>
                            <li><i class="fa fa-check"></i> On-Page SEO included</li>
                            <li><i class="fa fa-check"></i> Responsive for Mobile & Tablets</li>
                            <li><i class="fa fa-check"></i> Admin Panel (Add/Edit Pages content)</li>
                            <li><i class="fa fa-check"></i> Free 5 revisions (within 2 weeks)</li>
                        </ul>
                    </div>
                </div>
                <div class="clear"></div>
    
            </div>
        </div>

        @include('frontend.includes.cta')
    @endsection
