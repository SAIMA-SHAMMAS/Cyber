@inject('helpers', 'App\Helper\Helpers')
@php
    $setting=$helpers->get_setting();
        $services=$helpers->get_services();
@endphp

<header id="header" class="fixed-top" style="background: linear-gradient(135deg, #F1F5FF, #3751A2, #566BAC, #44558A);height: 85px !important;

">
    <div class="headerTopBar col-xl-12 d-flex align-items-center" style="background: linear-gradient(135deg, #12192B, #354872, #12192B);font-size: 11px !important; padding: 0px !important;
">

        <div class="container">
            <div class="HeaderText" style="font-size: 14px;color: #FFBB87;">

                <marquee>
                    {!! $setting->markee_tag ?? '' !!}
                </marquee>
            </div>
        </div>
    </div>
    <div class="container-fluid">

        <div class="row justify-content-center">
            <div class="col-xl-12 d-flex align-items-center">
                <a href="/" class="logo mr-auto">
                    <img src="{{ asset($setting->site_logo??'/dist/image/newlogo1.jpeg')   }}"
                         style="width: 45px;margin-top:5px; margin-left: 120px" alt="" class="img-fluid"
                    ></a>

                <nav class="nav-menu d-none d-lg-block">
                    <ul>
                        <li><a href="/">Home</a></li>
                          <li><a href="{!! route('why.cyber') !!}">Why CyberNetShield</a></li>

                                <li class="drop-down"><a href="javascript:void()">Our As-a-Service Platforms <i
                                    class="fa fa-angle-down" aria-hidden="true"></i></a>
                            <ul style="position: ">
                                @php
                                    $s_count=0;
                                @endphp
                                @foreach($services as $item)
                                    @if($s_count<=10)
                                        <li style="height:80px;width: 22% !important;" class="service_coloum col-lg-3 col-sm-3 p-3" >
                                            <a href="{!! route('service.details',$item->slug) !!}" class="serviceTitle"><i
                                                    class="fa fa-caret-right" aria-hidden="true"></i>{!! $item->name !!}</a>
                                            <span
                                                class="sub-menu"
                                                style="color: white;margin-top:5px"> {!! $item->meta_description !!}</span>                                                                                                                                                                                                                                                                                                  </span>
                                        </li>

                                    @endif
                                    @php
                                        $s_count=$s_count+1;
                                    @endphp
                                @endforeach

                                <li style="height:98px;margin-top: 50px" class="service_coloum col-lg-3">
                                    <button onclick="all_service()" class=" btn"
                                            style="background: linear-gradient(135deg, #3751A2, #566BAC, #44558A);color: white">
                                        Explore All
                                    </button>
                                    </span>
                                </li>

                            </ul>
                        </li>


                              <li><a href="{!! route('trust.center') !!}">Trust Center</a></li>
                         <li class="drop-down desktop-show"><a href="#resources/">Resources <i
                                    class="fa fa-angle-down" aria-hidden="true"></i></a>
                            <ul class="dropdown-menu resources_menu">
                                <li><a href="{!! route('blogs.all') !!}">Blog</a></li>

                                <li><a href="{!! route('infographics') !!}">Infographics</a></li>

                                <li><a href="{!! route('events-gallery') !!}">Event Gallery</a></li>
                            </ul>
                        </li>
                           <li class="mobile-show"><a href="#resources/">Resources <i
                                    class="fa fa-angle-down" aria-hidden="true"></i></a></li>
                         <li class="mobile-show"><a href="#blog/">Blog</a></li>

                        <li class="mobile-show"><a
                                href="#resources/infographics/">Infographics</a></li>

                             <li class="mobile-show"><a href="#events-gallery/">Event Gallery</a>
                        </li>
                         <li><a href="/careers">Careers</a></li>
                          <li>&nbsp;</li>    <li>&nbsp;
                            @guest

                            @else

                                <a class="" href="{{ route('logout') }}"
                                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    <i class="bx bx-log-out"></i> Sign Out
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </a>
                            @endguest

                        </li>    <li>&nbsp;</li>
                        <li><a class="btn " style="background-color: #161D6F;padding: 3px" href="/contact-us">
                                &nbsp; Secure Now &nbsp; </a></li>

                        <li>&nbsp;</li>
                        <li>&nbsp;</li>
                        <li>&nbsp;</li>
                        <li>&nbsp;</li>
                        <li>&nbsp;</li>
                        <li>&nbsp;</li>
                        <li>&nbsp;</li>

                    </ul>
                </nav><!-- .nav-menu -->


            </div>
        </div>

    </div>
    <style>
        .nav-menu .drop-down ul.dropdown-menu.resources_menu {
            right: auto;
            left: initial;
        }

        .nav-menu .drop-down .resources_menu li {
            min-width: 180px;
            position: relative;
            float: initial;
            display: list-item;
            padding: 10px 0px;
        }
    </style>


    <script>


        function all_service() {
            window.location.replace("{!! route('services_all') !!}");
        }
    </script>


</header>
<nav class="mobile-nav d-lg-none">
    <ul>
        <li>
            <a href="{!! route('why.cyber') !!}">Why CyberNetShield</a>
        </li>

        <li class="drop-down"><a href="javascript:void()">Our As-a-Service Platforms <i class="fa fa-angle-down" aria-hidden="true"></i></a>
            <ul>
                @php
                    $s_count=0;
                @endphp
                @foreach($services as $item)
                    @if($s_count<=10)
                <li style="height:98px;" class="service_coloum col-lg-3">
                    <a href="{!! route('service.details',$item->slug) !!}" class="serviceTitle"><i
                            class="fa fa-caret-right" aria-hidden="true"></i>{!! $item->name !!}</a>
                    <span
                        class="sub-menu"
                        style="color: white;margin-top: 20px"> {!! $item->meta_description !!}</span>
                </li>
                    @endif
                    @php
                        $s_count=$s_count+1;
                    @endphp
                @endforeach

                <li style="height:98px;margin-top: 50px" class="service_coloum col-lg-3">
                    <button onclick="all_service()" class=" btn"
                            style="background: linear-gradient(135deg, #3751A2, #566BAC, #44558A);color: white">
                        Explore All
                    </button>
                    </span>
                </li>

            </ul>
        </li>
        <li><a href="{!! route('trust.center') !!}">Trust Center</a></li>
        <li class="drop-down desktop-show">
            <a href="#resources/">Resources <i
                    class="fa fa-angle-down" aria-hidden="true"></i></a>
            <ul class="dropdown-menu resources_menu">
                <li><a href="{!! route('blogs.all') !!}">Blog</a></li>
                {{--                                <li><a href="#resources/whitepaper/">Whitepapers</a></li>--}}
                {{--                                <li><a href="#resources/datasheets/">Datasheets</a></li>--}}
                <li><a href="{!! route('infographics') !!}">Infographics</a></li>
                {{--                                <li><a href="#resources/webinars/">Webinars</a></li>--}}
                {{--                                <li><a href="#resources/press-releases/">Press Releases</a></li>--}}
                <li><a href="{!! route('events-gallery') !!}">Event Gallery</a></li>

            </ul>
        </li>
        <li class="mobile-show"><a href="#">Resources <i class="fa fa-angle-down" aria-hidden="true"></i></a></li>

          <li><a href="/careers">Careers</a></li>
        <li><a class="btn " style="background-color: #161D6F;padding: 3px" href="/contact-us">
                &nbsp; Secure Now &nbsp; </a></li>
          </ul>
</nav>
