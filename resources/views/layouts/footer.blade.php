@inject('helpers', 'App\Helper\Helpers')
@php

    $services=$helpers->get_services();
    $setting=$helpers->get_setting();

@endphp


<div  class="container"
      style="text-align: center;
    justify-content: center;
    height: 185px;
    background: linear-gradient(90deg, #566BAC 22.08%, #4A5D96 35.77%, #44558A 47.9%, #4A5D96 82.44%);
    border-bottom-left-radius: 20px;
    border-bottom-right-radius: 20px;
    position: relative; /* Ensure z-index works */
    z-index: 10; /* Correct z-index value */
    margin-top: 5px;
    margin-bottom: -60px;">
    <div class="row">
        <div class="col-md-8" style="color: white; padding-top: 40px;">
            <h2>Ready to get started ? <br/>
                Talk to us today</h2>
        </div>
        <div class="col-md-4" style="padding-top: 40px;">
            <a href="/contact-us"><button class="btn mt-4" style="background-color: #001242; color: white">Get Started </button></a>
        </div>
    </div>
</div>

<footer id="footer">




    <div class="footer-top" style="background-color: #7e8ea7">
        <div class="container">
            <div class="row mt-5">

                <div class="col-lg-1 col-md-1 col-sm-6 footer-contact">
                    <a href="/">
                        <div class="footer-logo" style="width: 100px;">
                            <img src="{{ asset($setting->site_logo??'/dist/image/newlogo1.jpeg')   }}"
                                 alt="Cyber Logo"
                                 class="img-fluid" width="100px"></div>
                    </a>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-6 footer-contact">


                    <div class="footer-contact-detail">

                        <div id="main">
                            <div class="container">

                                {{--                                <div class="resource_challenges-tabs">--}}
                                {{--                                    <div class="tabs">--}}
                                {{--                                        <input type="radio" name="tabs" id="tab1" checked="checked">--}}
                                {{--                                        <label for="tab1"> HEADQUARTERS <i class="fa fa-caret-up"></i></label>--}}
                                {{--                                        <div class="tab">--}}
                                {{--                                            <p><a style="font-weight:500;font-size:14px;"--}}
                                {{--                                                  href="/">{!! $setting->head_office ?? ''!!}</a></p>--}}

                                {{--                                        </div>--}}
                                {{--                                        <label for="tab1"> {!! $setting->loc_2 ?? ''!!} <i--}}
                                {{--                                                class="fa fa-caret-up"></i></label>--}}
                                {{--                                        <label for="tab1"> {!! $setting->loc_3 ?? ''!!} <i--}}
                                {{--                                                class="fa fa-caret-up"></i></label>--}}

                                {{--                                        --}}{{--                                        <input type="radio" name="tabs" id="tab2">--}}
                                {{--                                        --}}{{--                                        <label for="tab2"> North America <i class="fa fa-caret-up"></i></label>--}}
                                {{--                                        --}}{{--                                        <div class="tab">--}}
                                {{--                                        --}}{{--                                            <!--<p>301 W Main St Marshall, WI  53559 United States</p><br>-->--}}
                                {{--                                        --}}{{--                                            <p>106 Linkletter Avenue, Central Bedeque, Prince Edward Island, C0B 1G0</p>--}}
                                {{--                                        --}}{{--                                        </div>--}}

                                {{--                                        --}}{{--                                        <input type="radio" name="tabs" id="tab3">--}}
                                {{--                                        --}}{{--                                        <label for="tab3">ASIA <i class="fa fa-caret-up"></i></label>--}}
                                {{--                                        --}}{{--                                        <div class="tab">--}}
                                {{--                                        --}}{{--                                            <p>Quark City, Phase-VIII B , Mohali, Punjab, India</p>--}}
                                {{--                                        --}}{{--                                        </div>--}}


                                {{--                                    </div>--}}
                                {{--                                </div>--}}
                                <p style="margin-top: 5px"><a style="font-weight:500;font-size:14px;"
                                      href="/">About CNS</a></p>


                                <p style="margin-top: 5px"><a style="font-weight:500;font-size:14px;"
                                      href="/">Home</a></p>

                                <p style="margin-top: 5px"><a style="font-weight:500;font-size:14px;"
                                      href="/">Get In Touch</a></p>


                                <p style="margin-top: 5px"><a style="font-weight:500;font-size:14px;"
                                      href="/">FAQS</a></p>
                            </div>
                        </div>

                        {{--                        <p class="footerContact mt-2"><i class="fa fa-envelope" aria-hidden="true"></i>--}}
                        {{--                            <a href="#"--}}
                        {{--                            >--}}
                        {{--                                info@cyber.com</a>--}}
                        {{--                        </p>--}}
                        {{--                        <p class="footerContact mt-1" style="    display: block;"><i--}}
                        {{--                                class="fa fa-phone fa-rotate-180"></i>--}}
                        {{--                            <a href="#">{!! $setting->site_mobile_no ?? ''  !!}</a>--}}
                        {{--                        </p>--}}


                    </div>
                </div>
                <div class="col-lg-5 col-md-5 col-sm-6 footer-links">
                    <span>Our Services</span>
                    <ul>
                        @php
                            $count=0;

                        @endphp
                        @foreach($services as $item)
                            @if($count < 10)
                                <li style="margin-left: 20px">
                                    {{--                                    <i class="fa fa-angle-right" aria-hidden="true"></i>--}}
                                    <a style="margin-left:5px"
                                       href="{!! route('service.details',$item->slug) !!}">{!! $item->name !!}</a></li>
                            @endif
                            @php
                                $count=$count+1;
                            @endphp
                        @endforeach
                        <li style="margin-left: 20px;padding: 2px">    <button  class="btn" style="background-color:#001242;color: white" onclick="all_service()"   class=" btn  ">  Explore All</button> </li>

                    </ul>


                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 footer-newsletter">
                    {{--                    <div class="social-links text-center text-md-left pt-3 pt-md-0">--}}
                    {{--                        <a href="{!! $setting->twitter_icon !!}" target="_blank" class="twitter"--}}
                    {{--                           aria-label="cyber Twitter"><img src="{!! asset('/theme/twitter-icn.png') !!}"--}}
                    {{--                                                           alt="cyber-twitter"></a>--}}
                    {{--                        <a href="{!! $setting->facebook_icon !!}" target="_blank" class="facebook"--}}
                    {{--                           aria-label="Cyber Facebook"><i class="fab fa-facebook-f"></i></a>--}}
                    {{--                        <a href="{!! $setting->insta_icon !!}" target="_blank" class="instagram"--}}
                    {{--                           aria-label="Cyber Instagram"><i class="fab fa-instagram"></i></a>--}}
                    {{--                        <a href="{!! $setting->linkedin_icon !!}" target="_blank" class="linkedin"--}}
                    {{--                           aria-label="Cyber Linkedin"><i class="fab fa-linkedin-in"></i></a>--}}

                    {{--                    </div>--}}


                    <p style="color:#fff;">Subscribe to our Cyber Security Newsletter</p>
                    <form class="container" action="{!! route('subcribe') !!}" method="POST">
                        @csrf
                        <div class="row">
                            <input type="email" class="form-control w-100" name="email" aria-label="Email">
                        </div>
                        <div class="row text-right mt-2" style="justify-content: end">
                            <input type="submit" class="btn" style="background-color:#001242" name="submit" value="Subscribe" aria-label="Button">
                        </div>


                    </form>


                    <div class="copyright copyrightmobile">
                        <strong><span>© 2024 cyber</span></strong> Inc. All Rights Reserved.
                        <div class="bottom-menu-link bottom-menu-mobile">
                            <ul>
                                <li><a href="#sitemap.html">sitemap.html</a></li>
                                <li><a href="#sitemap.xml">sitemap.xml</a></li>
                            </ul>
                        </div>
                    </div>

                </div>

            </div>
            <div class="row">
                <div class="col-md-1 text-right"></div>
                <div class="col-md-2">
                    <h5>Contact Us:</h5>
                </div>
                <div class="col-md-3 mt-1">
                    <div class="row">
                        <div class="col-md-3 text-right">
                            <b>Phone:</b>
                        </div>
                        <div class="col-md-8 text-left" >
                            <p>{!!  @$setting->site_mobile_no !!}</p>
                        </div>

                    </div>
                    <div class="row mt-1">
                        <div class="col-md-3 text-right">
                            <b>Mail:</b>
                        </div>
                        <div class="col-md-8 text-left">
                            <p>info@cybernetshield.com</p>
                        </div>

                    </div>



                </div>
                <div class="col-md-4 offset-2 mt-1 text-left">
{{--                    <p style="margin-top: 5px">HEADQUARTERS  <i class="fa fa-caret-down"></i></p>--}}
{{--                    <p style="margin-top: 5px">North America  <i class="fa fa-caret-down"></i></p>--}}
{{--                    <p style="margin-top: 5px"> ASIA  <i class="fa fa-caret-down"></i></p>--}}
                    <div class="resource_challenges-tabs">
                        <div class="tabs">
                            <input type="radio" name="tabs" id="tab1" checked="checked">
                            <label for="tab1" style="color: #cd772e"> {!!  @$setting->address_one_heading !!} <i class="fa fa-caret-up"></i></label>
                            <div class="tab">
                                <p><a style="font-weight:500;font-size:14px;" href="/">{!!  @$setting->head_office !!}</a></p>
                            </div>

                            <input type="radio" name="tabs" id="tab2">
                            <label for="tab2" style="color: #cd772e"> {!!  @$setting->address_two_heading !!}<i class="fa fa-caret-up"></i></label>
                            <div class="tab">
                                <!--<p>301 W Main St Marshall, WI  53559 United States</p><br>-->
                                <p>{!!  @$setting->loc_2 !!}</p>
                            </div>

                            <input type="radio" name="tabs" id="tab3">

                            @if(isset($setting->address_three_heading))
                            <label for="tab3" style="color: #cd772e">{!!  @$setting->address_three_heading !!} <i class="fa fa-caret-up"></i></label>
                          @endif

                            <div class="tab">
                                <p>{!! @$setting->loc_3 !!}</p>
                            </div>


                        </div>
                    </div>


                </div>





            </div>
        </div>
    </div>

    <div class="" style="    background: linear-gradient(135deg, #F1F5FF, #3751A2, #566BAC, #44558A); height: 70px;">
        <div class="container d-md-flex py-4">

            <div style="text-align:center;margin:0 auto;" class="mr-md-auto text-center">
                <div class="copyright copyrightDesktop">
                    <strong> © 2024 CyberNetShield</strong> Inc. All Rights Reserved.
                </div>
{{--                <div class="bottom-menu-link bottom-menu-desktop">--}}
{{--                    <ul>--}}
{{--                        <li><a href="#sitemap.html">sitemap.html</a></li>--}}
{{--                        <li><a href="#sitemap.xml">sitemap.xml</a></li>--}}
{{--                    </ul>--}}
{{--                </div>--}}

            </div>

        </div>
    </div>
</footer>
