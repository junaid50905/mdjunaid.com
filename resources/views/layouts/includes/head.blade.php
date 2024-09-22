<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="format-detection" content="telephone=no">
    <title>@yield('title')</title>
    <link href="{{ asset('frontend') }}/css/main.css" rel="stylesheet">
    <link href="{{ asset('frontend') }}/css/blog_page.css" rel="stylesheet">
    <!-- <link rel="shortcut icon" href="img/favicon_1.ico" type="image/x-icon"> -->
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/fontawesome.all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <style>
        @keyframes animate-circle {
            from {
                transform: scale(0);
                opacity: 1;
            }
            to {
                transform: scale(1);
                opacity: 0;
            }
        }

        #preloader {
            width: 100%;
            height: 100%;
            position: fixed;
            top: 0;
            left: 0;
            z-index: 999;
            background: #1C1C1C;
            background: linear-gradient(to right, rgba(36, 31, 31, 1) 0%, rgba(36, 31, 31, 1) 32%, rgba(74, 71, 70, 1) 100%);
        }

        .loader {
            position: fixed;
            top: 50%;
            left: 50%;
            height: 10rem;
            width: 10rem;
            transform: translateX(-50%) translateY(-50%);
        }

        .loader>.circle {
            position: absolute;
            height: inherit;
            width: inherit;
            background: #B66449;
            border-radius: 0;
            animation: animate-circle 2s cubic-bezier(.9, .24, .62, .79) infinite;
        }

        .loader>.circle:nth-of-type(1) {
            animation-delay: 0s;
        }

        .loader>.circle:nth-of-type(2) {
            animation-delay: calc(2s / -3);
        }

        .loader>.circle:nth-of-type(3) {
            animation-delay: calc(2s / -6);
        }
    </style>
</head>
