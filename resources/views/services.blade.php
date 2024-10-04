@inject('helpers', 'App\Helper\Helpers')
@extends('layouts.main')



@section('meta_tags')

{{--    <meta name="title" content="{!! @$s->meta_title !!}"/>--}}
{{--    <meta name="description" content="{!! @$s->meta_description  !!}"/>--}}
@endsection
@section('css')

    <style>
        .main_div {
            min-height: 768px !important;
            padding-top: 70px !important;
            margin-top: 40px;
        }

    </style>


    <style type="text/css">
        @font-face {
            font-weight: 400;
            font-style: normal;
            font-family: circular;

            src: url('chrome-extension://liecbddmkiiihnedobmlmillhodjkdmb/fonts/CircularXXWeb-Book.woff2') format('woff2');
        }

        @font-face {
            font-weight: 700;
            font-style: normal;
            font-family: circular;

            src: url('chrome-extension://liecbddmkiiihnedobmlmillhodjkdmb/fonts/CircularXXWeb-Bold.woff2') format('woff2');
        }</style>
    <style type="text/css">
        .drift-conductor-item iframe,
        .drift-frame-controller {
            display: block;
            min-width: 0;
            max-width: none;
            min-height: 0;
            max-height: none;
        }

        .drift-conductor-item iframe {
            color-scheme: light only;
            border: none !important;
            background: transparent !important;
            width: 100% !important;
            height: 100% !important;
            max-width: 100% !important;
        }

        .drift-conductor-item.with-transition {
            -webkit-transition: opacity .5s ease, -webkit-transform .5s ease;
            transition: opacity .5s ease, -webkit-transform .5s ease;
            -o-transition: opacity .5s ease, -o-transform .5s ease;
            -moz-transition: opacity .5s ease, transform .5s ease, -moz-transform .5s ease;
            transition: opacity .5s ease, transform .5s ease;
            transition: opacity .5s ease, transform .5s ease, -webkit-transform .5s ease, -moz-transform .5s ease, -o-transform .5s ease;
        }

        .drift-frame-chat.with-transition.drift-frame-chat__takeover {
            -webkit-transition: opacity .5s ease;
            -o-transition: opacity .5s ease;
            -moz-transition: opacity .5s ease;
            transition: opacity .5s ease;
        }

        .drift-conductor-item.with-height-transition {
            -webkit-transition: max-height .5s ease, opacity .5s ease, -webkit-transform .5s ease;
            transition: max-height .5s ease, opacity .5s ease, -webkit-transform .5s ease;
            -o-transition: max-height .5s ease, opacity .5s ease, -o-transform .5s ease;
            -moz-transition: max-height .5s ease, opacity .5s ease, transform .5s ease, -moz-transform .5s ease;
            transition: max-height .5s ease, opacity .5s ease, transform .5s ease;
            transition: max-height .5s ease, opacity .5s ease, transform .5s ease, -webkit-transform .5s ease, -moz-transform .5s ease, -o-transform .5s ease;
        }

        .drift-conductor-item {
            -webkit-transform: translateZ(0);
            -moz-transform: translateZ(0);
            transform: translateZ(0);
        }

        .drift-frame-controller {
            bottom: 24px;
        }

        .drift-frame-controller-align-left {
            left: 24px;
        }

        .drift-frame-controller-align-right {
            right: 24px;
        }

        .drift-frame-chat:not(iframe) {
            bottom: -webkit-calc(12px + 52px + 24px);
            bottom: -moz-calc(12px + 52px + 24px);
            bottom: calc(12px + 52px + 24px); /* vertical margin x 2 + widget icon size*/
            width: 100%;
            height: 100%;
            min-width: 320px;
            opacity: 0;
            visibility: hidden;

            -webkit-transform: translateY(88px);

            -moz-transform: translateY(88px);

            -ms-transform: translateY(88px);

            -o-transform: translateY(88px);

            transform: translateY(88px);
        }

        .drift-frame-chat:not(iframe).drift-chat-open {
            opacity: 1;
            visibility: visible;
            -webkit-transform: translateY(0px);
            -moz-transform: translateY(0px);
            -ms-transform: translateY(0px);
            -o-transform: translateY(0px);
            transform: translateY(0px);
        }

        .drift-frame-chat.drift-frame-chat__takeover:not(iframe):not(.drift-frame--mobile) {
            min-width: 600px;
        }

        .drift-frame-chat-align-left {
            left: 12px;
        }

        .drift-frame-chat-align-right {
            right: 12px;
        }

        .drift-frame-takeover,
        .drift-frame-landingPage,
        .drift-frame-chat__takeover {
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            min-height: 100%;
            min-width: 100%;
        }

        .drift-frame-chat__takeover.hide-frame {
            visibility: hidden;
        }

        .drift-frame-emailCapture {
            bottom: 0;
            height: -webkit-calc(100% + 30px);
            height: -moz-calc(100% + 30px);
            height: calc(100% + 30px);
        }

        .drift-frame-emailCapture-align-left {
            left: 0;
        }

        .drift-frame-emailCapture-align-right {
            right: 0;
        }

        .drift-frame-slider {
            bottom: 18px;
            height: -webkit-calc(100% + 20px);
            height: -moz-calc(100% + 20px);
            height: calc(100% + 20px);
        }

        .drift-frame-slider-align-left {
            left: 96px;
        }

        .drift-frame-slider-align-right {
            right: 96px;
        }

        .drift-frame--mobile.drift-frame-slider-align-left {
            left: 68px;
        }

        .drift-frame--mobile.drift-frame-slider-align-right {
            right: 68px;
        }

        .drift-widget-content-box {
            background: rgba(0, 0, 0, .5);
            width: 100%;
            height: 100%;

            position: fixed;
            z-index: 2147483647;
            top: 0;
            left: 0;
        }

        .drift-widget-content-box > * {
            margin: 0 auto;
            position: relative;
            left: 50%;
            top: 50%;
            -webkit-transform: translate(-50%, -50%);
            -moz-transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            -o-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
            max-height: 80%;

        }

        /* Site Concierge Classes */
        .drift-frame-chat__sc-loaded:not(.drift-chat-open),
        .drift-frame-controller__sc-loaded {
            max-height: 0px !important;
            visibility: hidden !important;
        }

        .drift-frame-chat__sc-loaded {
            bottom: 0px !important;
        }

        @media (max-height: 685px),
        (min-width: 369px) and (max-width: 380px),
        (max-width: 367px),

        (min-device-width: 320px)
        and (max-device-width: 480px)
        and (-webkit-min-device-pixel-ratio: 2)
        and (orientation: portrait) {
            .drift-frame--mobile.drift-frame-chat.drift-chat-open {
                bottom: 0 !important;
                right: 0;
                left: 0;
                z-index: 2147483647 !important;
            }

            .drift-frame--mobile.drift-frame-controller {
                bottom: 0;
            }

            .drift-frame--mobile.drift-frame-controller.drift-frame-controller-align-left {
                left: 0;
            }

            .drift-frame--mobile.drift-frame-controller.drift-frame-controller-align-right {
                right: 0;
            }


            .drift-frame--mobile.drift-frame-controller.drift-chat-open {
                display: none;
            }

            .drift-frame--mobile.drift-frame-slider {
                bottom: 0;
                max-width: 320px;
            }

            .drift-frame--mobile iframe.drift-frame-chat {
                width: 1px !important;
                min-width: 100%;

                height: 1px !important;
                min-height: 100%;
            }

            html.drift-widget-parent--chat-open,
            html.drift-widget-parent--chat-open > body {
                height: 100vh !important;
                margin: 0 !important;
                min-height: 0 !important;
                overflow: hidden !important;
                position: static !important;
            }
        }

        @media only screen and (orientation: landscape) {
            .drift-frame--mobile.drift-frame-controller.drift-chat-open {
                display: none;
            }

            .drift-frame--mobile.drift-frame-controller {
                bottom: 0;
            }

            .drift-frame--mobile.drift-frame-controller-align-right {
                right: 0;
            }

            .drift-frame--mobile.drift-frame-controller-align-left {
                left: 0;
            }
        }

        .drift-frame-chat.widget--xs.drift-chat-open {
            bottom: 0 !important;
            right: 0 !important;
            left: 0 !important;
        }

        .drift-frame-controller.widget--xs.drift-chat-open {
            display: none;
        }

    </style>

@endsection
@section('content')

    {!! $s->section_1 !!}
    <main id="main" class="MDR_Page">


        {!! $s->section_2 !!}

        {!! $s->section_3 !!}

        {!! $s->section_4 !!}

        {!! $s->section_5 !!}



        {!! $s->section_6 !!}
        {!! $s->section_7 !!}


        {!! $s->section_8 !!}

        {!! $s->section_9 !!}


    </main><!-- End #main -->

@endsection


