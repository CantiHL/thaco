<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=5, user-scalable=1"
        name="viewport" />

    <!-- Fonts-->
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet" type="text/css">
    <!-- CSS Library-->



    <link rel="shortcut icon" href="https://www.thacogroup.vn/storage/favicon-16x16.png">

    <title>{{ $title }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-202274235-1"></script>
    <script>
        "use strict";
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-202274235-1');
    </script>
    <meta property="og:site_name" content="{{ $site_name }}">
    <meta property="og:image" content="{{ $site_image }}">
    <meta property="og:title" content="{{ $title }}">
    <meta property="og:description" content="{{ $description }}">
    <meta property="og:url" content="{{ $site_url }}">
    <meta property="og:type" content="article">
    <meta name="twitter:title" content="{{ $title }}">
    <meta name="twitter:description" content="{{ $description }}">

    <link media="all" type="text/css" rel="stylesheet"
        href="https://www.thacogroup.vn/vendor/core/plugins/language/css/language-public.css?v=1.0.0">
    <link media="all" type="text/css" rel="stylesheet"
        href="//cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <link media="all" type="text/css" rel="stylesheet" href="//unpkg.com/element-ui/lib/theme-chalk/index.css">
    <link media="all" type="text/css" rel="stylesheet"
        href="//cdn.jsdelivr.net/npm/@fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css">
    <link media="all" type="text/css" rel="stylesheet"
        href="//cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css">
    <link media="all" type="text/css" rel="stylesheet"
        href="//cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.min.css">
    <link media="all" type="text/css" rel="stylesheet" href="//unpkg.com/aos@2.3.1/dist/aos.css">
    <link media="all" type="text/css" rel="stylesheet" href="//pro.fontawesome.com/releases/v5.11.0/css/all.css">
    <link media="all" type="text/css" rel="stylesheet"
        href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link media="all" type="text/css" rel="stylesheet"
        href="//cdn.jsdelivr.net/npm/pretty-checkbox@3.0/dist/pretty-checkbox.min.css">
    <link media="all" type="text/css" rel="stylesheet"
        href="//cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link media="all" type="text/css" rel="stylesheet"
        href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.css">
    <link media="all" type="text/css" rel="stylesheet"
        href="//cdnjs.cloudflare.com/ajax/libs/Swiper/6.8.4/swiper-bundle.min.css">
    <link media="all" type="text/css" rel="stylesheet"
        href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
    <link media="all" type="text/css" rel="stylesheet"
        href="//cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
    <link media="all" type="text/css" rel="stylesheet"
        href="//cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    {{-- <link media="all" type="text/css" rel="stylesheet" href="{{ asset('css/main.css') }}"> --}}
    <link media="all" type="text/css" rel="stylesheet" href="https://www.thacogroup.vn/themes/main/css/common.css">

    <link media="all" type="text/css" rel="stylesheet" href="{{ asset('css/responsive.css') }}">

    <script src="//code.jquery.com/jquery-3.5.1.min.js"></script>


    <script>
        $('#cms-plugins-gallery').addClass('d-none')
    </script>
    <style>
        .post-detail-wrapper .post-content .h1,
        .post-detail-wrapper .post-content .h2,
        .post-detail-wrapper .post-content .h3,
        .post-detail-wrapper .post-content .h4,
        .post-detail-wrapper .post-content .h5,
        .post-detail-wrapper .post-content .h6,
        .post-detail-wrapper .post-content h1,
        .post-detail-wrapper .post-content h2,
        .post-detail-wrapper .post-content h3,
        .post-detail-wrapper .post-content h4,
        .post-detail-wrapper .post-content h5,
        .post-detail-wrapper .post-content h6 {
            font-family: 'MyriadPro-Bold';
        }

        .post-detail-wrapper .post-content ul {
            list-style: disc;
        }

        .post-detail-wrapper .post-content ol {
            list-style: decimal;
        }

        .post-detail-wrapper .post-content blockquote {
            display: block;
            margin-block-start: 1em;
            margin-block-end: 1em;
            margin-inline-start: 40px;
            margin-inline-end: 40px;
            border-left: 2px solid #ccc;
            margin-left: 1.5rem;
            padding-left: 1rem;
        }

        .post-detail-wrapper .post-content a {
            color: #007bff;
            text-decoration: underline;
        }

        .post-detail-wrapper .post-content table {
            margin-bottom: 1rem;
        }

        .post-detail-wrapper .post-content table,
        .post-detail-wrapper .post-content table tbody,
        .post-detail-wrapper .post-content table tbody tr,
        .post-detail-wrapper .post-content table tbody td {
            height: max-content !important;
        }

        .post-detail-wrapper .post-content figcaption {
            color: #999;
            display: block;
            margin-top: 0.5rem;
            text-align: center;
        }

        .post-detail-wrapper .post-content figure img {
            margin-bottom: unset;
        }
    </style>
    <link rel="alternate" href="https://www.thacogroup.vn/en/lien-he" hreflang="en" />
    <link rel="alternate" href="https://www.thacogroup.vn/lien-he" hreflang="vi" />
    @livewireStyles
    @livewireScripts

    <script>
        window.__trans =
            '{\"Home\":\"Trang ch\\u1ee7\",\"TH\\u00d4NG TIN KH\\u00c1C\":\"TH\\u00d4NG TIN KH\\u00c1C\",\"Xem th\\u00eam\":\"Xem th\\u00eam\",\"Xem t\\u1ea5t c\\u1ea3\":\"Xem t\\u1ea5t c\\u1ea3\",\"C\\u00c1C B\\u00c0I VI\\u1ebeT LI\\u00caN QUAN\":\"C\\u00c1C B\\u00c0I VI\\u1ebeT LI\\u00caN QUAN\",\"B\\u1ea2N TIN N\\u1ed8I B\\u1ed8\":\"B\\u1ea2N TIN N\\u1ed8I B\\u1ed8\",\"T\\u1ea3i xu\\u1ed1ng\":\"T\\u1ea3i xu\\u1ed1ng\",\"T\\u1ea5t c\\u1ea3\":\"T\\u1ea5t c\\u1ea3\",\"\\u0110\\u1ecba ch\\u1ec9\":\"\\u0110\\u1ecba ch\\u1ec9\",\"S\\u0110T\":\"S\\u0110T\",\"S\\u1ed1 \\u0111i\\u1ec7n tho\\u1ea1i\":\"S\\u1ed1 \\u0111i\\u1ec7n tho\\u1ea1i\",\"N\\u1ed9i dung\":\"N\\u1ed9i dung\",\"G\\u1eedi ngay\":\"G\\u1eedi ngay\",\"Th\\u01b0 \\u0111i\\u1ec7n t\\u1eed\":\"Th\\u01b0 \\u0111i\\u1ec7n t\\u1eed\",\"H\\u1ecd v\\u00e0 t\\u00ean \\/ T\\u00ean c\\u00f4ng ty\":\"H\\u1ecd v\\u00e0 t\\u00ean \\/ T\\u00ean c\\u00f4ng ty\",\"T\\u00ecm ki\\u1ebfm...\":\"T\\u00ecm ki\\u1ebfm...\",\"\\u1ee8ng tuy\\u1ec3n ngay\":\"\\u1ee8ng tuy\\u1ec3n ngay\",\"V\\u1ecb tr\\u00ed\":\"V\\u1ecb tr\\u00ed\",\"T\\u1ed5 ch\\u1ee9c\":\"T\\u1ed5 ch\\u1ee9c\",\"Th\\u1eddi gian b\\u1ed5 nhi\\u1ec7m\":\"Th\\u1eddi gian b\\u1ed5 nhi\\u1ec7m\",\"B\\u00e0i vi\\u1ebft\":\"B\\u00e0i vi\\u1ebft\",\"Nh\\u1eadp n\\u1ed9i dung c\\u1ea7n t\\u00ecm...\":\"Nh\\u1eadp n\\u1ed9i dung c\\u1ea7n t\\u00ecm...\",\"Quan h\\u1ec7 c\\u1ed5 \\u0111\\u00f4ng\":\"Quan h\\u1ec7 c\\u1ed5 \\u0111\\u00f4ng\",\"TH\\u00d4NG \\u0110I\\u1ec6P N\\u0102M\":\"TH\\u00d4NG \\u0110I\\u1ec6P N\\u0102M\",\"TIN T\\u1ee8C\":\"TIN T\\u1ee8C\",\"Truy\\u1ec1n th\\u00f4ng\":\"Truy\\u1ec1n th\\u00f4ng\",\"K\\u1ebft n\\u1ed1i v\\u1edbi ch\\u00fang t\\u00f4i\":\"K\\u1ebft n\\u1ed1i v\\u1edbi ch\\u00fang t\\u00f4i\",\"Share\":\"Chia s\\u1ebb\",\"L\\u0129nh v\\u1ef1c\":\"L\\u0129nh v\\u1ef1c\",\"H\\u00ecnh \\u1ea3nh\":\"H\\u00ecnh \\u1ea3nh\",\"\\u0110ang \\u0111\\u01b0\\u1ee3c c\\u1eadp nh\\u1eadt\":\"\\u0110ang \\u0111\\u01b0\\u1ee3c c\\u1eadp nh\\u1eadt\",\"Th\\u1eddi gian m\\u1edbi nh\\u1ea5t\":\"Th\\u1eddi gian m\\u1edbi nh\\u1ea5t\",\"Th\\u1eddi gian c\\u0169 nh\\u1ea5t\":\"Th\\u1eddi gian c\\u0169 nh\\u1ea5t\",\"T\\u1eeb A-Z\":\"T\\u1eeb A-Z\",\"T\\u1eeb Z-A\":\"T\\u1eeb Z-A\",\"T\\u00ecm ki\\u1ebfm\":\"T\\u00ecm ki\\u1ebfm\",\"L\\u1ecdc\":\"L\\u1ecdc\",\"Th\\u1eddi gian\":\"Th\\u1eddi gian\",\"S\\u1eafp x\\u1ebfp\":\"S\\u1eafp x\\u1ebfp\",\"H\\u00ccNH \\u1ea2NH\":\"H\\u00ccNH \\u1ea2NH\",\"L\\u1eddi\":\"L\\u1eddi\",\"k\\u1ebft qu\\u1ea3 \\u0111\\u01b0\\u1ee3c t\\u00ecm th\\u1ea5y v\\u1edbi t\\u1eeb kh\\u00f3a\":\"k\\u1ebft qu\\u1ea3 \\u0111\\u01b0\\u1ee3c t\\u00ecm th\\u1ea5y v\\u1edbi t\\u1eeb kh\\u00f3a\",\"\\u0110ang l\\u1ecdc theo Tag\":\"\\u0110ang l\\u1ecdc theo Tag\",\"Tin t\\u1ee9c m\\u1edbi\":\"Tin t\\u1ee9c m\\u1edbi\",\"K\\u1ebeT QU\\u1ea2 T\\u00ccM KI\\u1ebeM\":\"K\\u1ebeT QU\\u1ea2 T\\u00ccM KI\\u1ebeM\",\"\\u0110\\u1ebfn\":\"\\u0110\\u1ebfn\",\"Th\\u00e1ng\":\"Th\\u00e1ng\",\"N\\u0103m\":\"N\\u0103m\",\"\\u00d4i, h\\u1ecfng! \\u0110\\u00e3 x\\u1ea3y ra l\\u1ed7i | 404\":\"\\u00d4i, h\\u1ecfng! \\u0110\\u00e3 x\\u1ea3y ra l\\u1ed7i | 404\",\"C\\u00f3 th\\u1ec3 trang b\\u1ea1n y\\u00eau c\\u1ea7u kh\\u00f4ng t\\u1ed3n t\\u1ea1i ho\\u1eb7c li\\u00ean k\\u1ebft b\\u1ea1n nh\\u1ea5p v\\u00e0o kh\\u00f4ng c\\u00f2n n\\u1eefa.\":\"C\\u00f3 th\\u1ec3 trang b\\u1ea1n y\\u00eau c\\u1ea7u kh\\u00f4ng t\\u1ed3n t\\u1ea1i ho\\u1eb7c li\\u00ean k\\u1ebft b\\u1ea1n nh\\u1ea5p v\\u00e0o kh\\u00f4ng c\\u00f2n n\\u1eefa.\",\"Xem th\\u00eam video kh\\u00e1c\":\"Xem th\\u00eam video kh\\u00e1c\",\"THACO\":\"THACO\",\"G\\u1eecI TH\\u00c0NH C\\u00d4NG\":\"Send successfully\"}'
        try {
            window.trans = JSON.parse(window.__trans)
        } catch (error) {
            window.trans = {}
        }
    </script>
</head>

<body>
    @include('client.header.header')
    <div class="list-social-sidebar">
        <ul>
            <li class="social-item">
                <a href="https://www.facebook.com/TapdoanTruongHai.THACO" target="_blank">
                    <img class="drop-shadow" src="https://www.thacogroup.vn/storage/trang-chu/icon-mang-xa-hoi/fb.png"
                        alt="https://www.facebook.com/TapdoanTruongHai.THACO">
                </a>
            </li>
            <li class="social-item">
                <a href="https://www.linkedin.com/company/thacogroup/" target="_blank">
                    <img class="drop-shadow" src="https://www.thacogroup.vn/storage/trang-chu/icon-mang-xa-hoi/in.png"
                        alt="https://www.linkedin.com/company/thacogroup/">
                </a>
            </li>
            <li class="social-item">
                <a href="https://www.youtube.com/channel/UCI4u7-NwfRhxhsSl3ps6NfQ" target="_blank">
                    <img class="drop-shadow"
                        src="https://www.thacogroup.vn/storage/trang-chu/icon-mang-xa-hoi/ytb.png"
                        alt="https://www.youtube.com/channel/UCI4u7-NwfRhxhsSl3ps6NfQ">
                </a>
            </li>
            <li class="social-item">
                <a href=" mailto:vanhoatruyenthong@thaco.com.vn">
                    <img class="drop-shadow"
                        src="https://www.thacogroup.vn/storage/trang-chu/icon-mang-xa-hoi/email.png" alt="">
                </a>
            </li>
            <li class="social-item">
                <a href="tel:(028) 39977824">
                    <img class="drop-shadow"
                        src="https://www.thacogroup.vn/storage/trang-chu/icon-mang-xa-hoi/call.png"
                        alt="(028) 39977824">
                </a>
            </li>
        </ul>
    </div><a id="button-top" class=""></a>

    <div class="page-content">
        @yield('content')
    </div>

    @include('client.footer.footer')

    <script src="//cdnjs.cloudflare.com/ajax/libs/Swiper/6.8.4/swiper-bundle.min.js"></script>
    <script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/@fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.all.min.js"></script>
    <script src="//unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/owl.carousel2.thumbs@0.1.8/dist/owl.carousel2.thumbs.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <script src="//unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    {{-- <script src="https://www.thacogroup.vn/themes/main/js/common.js?v=1700535495"></script> --}}
    <script src="{{ asset('js/common.js') }}"></script>
    <script src="https://www.thacogroup.vn/vendor/core/plugins/language/js/language-public.js?v=1.0.0"></script>
    <script>
        AOS.init({
            easing: 'ease-in-out-sine'
        });
        // $(function() {
        //     AOS.init({
        //         easing: 'ease-in-out-sine'
        //     });
        // });
    </script>
    <script data-navigate-once>
        document.addEventListener('livewire:navigated', () => {
            // slide develop introduce page

            let slide_achivement_tab1 = new Swiper('#js-swiper-news-0', {
                centeredSlides: true,
                speed: 1500,
                observer: true,
                observeParents: true,

                autoplay: {
                    delay: 7000,
                    disableOnInteraction: true,
                },


                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
                navigation: {
                    nextEl: '.slide-achivement .swiper-button-next',
                    prevEl: '.slide-achivement .swiper-button-prev',
                },


            })
            let slide_achivement_tab2 = new Swiper('#js-swiper-news-1', {
                centeredSlides: true,
                speed: 1500,
                observer: true,
                observeParents: true,

                autoplay: {
                    delay: 7000,
                    disableOnInteraction: true,
                },


                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
                navigation: {
                    nextEl: '.slide-achivement .swiper-button-next',
                    prevEl: '.slide-achivement .swiper-button-prev',
                },


            })
            $(document).ready(function() {
                $('.__tabs__item').children("#achievement-company-0").click(function() {
                    var activeSlideCompanyAchievement = $('#js-swiper-news-0');
                    activeSlideCompanyAchievement.swiper.autoplay.start().delay(3000);
                })
                $('.__tabs__item').children("#achievement-company-1").click(function() {

                    var activeSlidePresidentAchievement = $('#js-swiper-news-1')
                    activeSlidePresidentAchievement.swiper.autoplay.start().delay(3000);
                })
            })
            $('.slider-for').slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: false,
                fade: true,
                // speed: 1500,
                asNavFor: '.slider-nav',
            })
            $('.slider-nav').slick({
                slidesToShow: 5,
                slidesToScroll: 1,
                centerMode: true,
                centerPadding: 'auto',
                arrows: true,
                vertical: false,
                autoplay: true,
                autoplaySpeed: 5000,
                // speed: 1000,
                infinite: true,
                loop: true,
                asNavFor: '.slider-for',
                dots: false,
                focusOnSelect: true,
                verticalSwiping: true,
                pauseOnHover: false,
                // variableWidth: true,
                responsive: [{
                        breakpoint: 1080,
                        settings: {
                            slidesToShow: 3,


                        },
                    },

                ],
            })
            const pause = $('.pause').on('click', function() {
                $(this).toggleClass('active')
                const pause1 = $('.play.active')
                if (pause1) {
                    pause1.toggleClass('active')
                }
                $('.slider').slick('slickPause').slick('slickSetOption', 'pauseOnDotsHover', false)
            })

            const play = $('.play').on('click', function() {
                $(this).toggleClass('active')
                const play1 = $('.pause.active')
                if (play1) {
                    play1.toggleClass('active')
                }
                $('.slider').slick('slickPlay').slick('slickSetOption', 'pauseOnDotsHover', true)
            })
            // end slide develop introduce page
            //sroll top
            if ($('#button-top').length > 0) {
                var btnTop = $('#button-top')
                $(window).scroll(function() {
                    if ($(window).scrollTop() > 300) {
                        btnTop.addClass('show-button-top')
                    } else {
                        btnTop.removeClass('show-button-top')
                    }
                })
                btnTop.on('click', function(e) {
                    e.preventDefault()
                    $('html, body').animate({
                        scrollTop: 0
                    }, '300')
                })
            }
            // main slider

            if ($('.main-slider').length > 0) {
                let main_slider = new Swiper('.main-slider', {
                    // autoplay: {
                    //     delay: 5000,
                    //     disableOnInteraction: false,
                    // },
                    effect: 'fade',
                    loop: true,
                    speed: 1000,
                    pagination: {
                        el: '.main-slider .swiper-pagination',
                        clickable: true,
                    },
                    navigation: {
                        nextEl: '.main-slider .swiper-button-next',
                        prevEl: '.main-slider .swiper-button-prev',
                    },
                })

                // handle playvideo
                function myHandler(e) {
                    main_slider.slideNext();
                    main_slider.effect = 'fade';

                }
                const autoplay = 15000
                if ($('.main-slider .swiper-slide-active .__video').length) {
                    $('.main-slider .swiper-slide-active .__video')[0].play()
                    $('.main-slider .swiper-slide-active .__video')[0].addEventListener('ended', myHandler, false)

                } else {
                    setTimeout(() => {
                        myHandler()
                    }, autoplay)
                }
                /**
                 * https://stackoverflow.com/questions/2741493/detect-when-an-html5-video-finishes
                 */
                main_slider.on('slideChange', function() {
                    if ($('.main-slider .swiper-slide-active .__video').length) {
                        $('.main-slider .swiper-slide-active .__video')[0].paused

                    }
                })
                main_slider.on('slideChangeTransitionEnd', function() {
                    if ($('.main-slider .swiper-slide-active .__video').length) {
                        $('.main-slider .swiper-slide-active .__video')[0].play()
                        $('.main-slider .swiper-slide-active .__video')[0].addEventListener('ended',
                            myHandler, false)

                    } else {
                        setTimeout(() => {
                            myHandler()
                        }, autoplay)
                    }
                })

            }
            $(document).ready(function($) {
                //js-scroll
                const elementBanner = $('.banner-page');
                if (!!elementBanner) {
                    $(".scroll-down").click(function(event) {
                        event.preventDefault();

                        $('html,body').animate({
                            scrollTop: $('.scroll-section').offset().top
                        }, 800);
                    });
                } else {
                    return;
                }

            });

            let field_slider = new Swiper('.field-slider', {
                speed: 800,
                loop: true,
                slidesPerView: 3,
                spaceBetween: 30,
                autoplay: {
                    delay: 7000,
                    disableOnInteraction: false,
                },
                pagination: {
                    el: '.field-slider .swiper-pagination',
                    clickable: true,
                },
                navigation: {
                    nextEl: '.field-slider .swiper-button-next',
                    prevEl: '.field-slider .swiper-button-prev',
                },
                breakpoints: {
                    1200: {
                        slidesPerView: 3,
                        spaceBetween: 30,
                        navigation: {
                            nextEl: '.field-slider .swiper-button-next',
                            prevEl: '.field-slider .swiper-button-prev',
                        },
                    },
                    576: {
                        slidesPerView: 2,
                        spaceBetween: 20,
                        navigation: {
                            nextEl: '.field-slider .swiper-button-next',
                            prevEl: '.field-slider .swiper-button-prev',
                        },
                    },
                    320: {

                        slidesPerView: 1,
                        centeredSlides: false,

                        navigation: {
                            nextEl: '.field-slider .swiper-button-next',
                            prevEl: '.field-slider .swiper-button-prev',
                        },
                    },
                    0: {

                        slidesPerView: 1,


                        navigation: {
                            nextEl: '.field-slider .swiper-button-next',
                            prevEl: '.field-slider .swiper-button-prev',
                        },
                    },
                },

            })

            let logo_company = new Swiper('.logo-company', {
                slidesPerView: 4,
                loop: true,
                autoplay: {
                    delay: 7000,
                    disableOnInteraction: false,
                    speed: 1000,
                },

                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
                navigation: {
                    nextEl: '.logo-company .swiper-button-next',
                    prevEl: '.logo-company .swiper-button-prev',
                },
                breakpoints: {
                    1024: {
                        slidesPerView: 4,

                    },
                    600: {
                        slidesPerView: 3,

                    },

                    0: {
                        slidesPerView: 2,

                    },
                },
            })

            // slider post home

            let newPostSlide = new Swiper('.new-post-slide', {
                spaceBetween: 30,
                effect: "fade",
                speed: 1500,
                loop: true,
                autoplay: {
                    delay: 7000,
                    disableOnInteraction: false,
                },
                pagination: {
                    el: '.new-post-slide .swiper-pagination',
                    clickable: true,
                },
                navigation: {
                    nextEl: '.new-post-slide .swiper-button-next',
                    prevEl: '.new-post-slide .swiper-button-prev',
                },
                breakpoints: {
                    1024: {
                        slidesPerView: 1,
                        // centeredSlides: true,
                        spaceBetween: 30,
                        navigation: {
                            nextEl: '.new-post-slide .swiper-button-next',
                            prevEl: '.new-post-slide .swiper-button-prev',
                        },
                    },
                    480: {
                        slidesPerView: 2,
                        centeredSlides: false,
                        spaceBetween: 40,
                        navigation: {
                            nextEl: '.new-post-slide .swiper-button-next',
                            prevEl: '.new-post-slide .swiper-button-prev',
                        },
                    },
                    320: {
                        slidesPerView: 1,
                        centeredSlides: false,
                        spaceBetween: 40,
                        navigation: {
                            nextEl: '.new-post-slide .swiper-button-next',
                            prevEl: '.new-post-slide .swiper-button-prev',
                        },
                    },
                },
            })
            let newPostSlide_home_mb = new Swiper('.post-home-slide-mb', {
                spaceBetween: 30,
                // effect: "fade",
                // speed: 1500,
                // loop: true,
                // autoplay: {
                //     delay: 6000,
                //     disableOnInteraction: false,
                // },
                pagination: {
                    el: '.post-home-slide-mb .swiper-pagination',
                    clickable: true,
                },
                navigation: {
                    nextEl: '.post-home-slide-mb .swiper-button-next',
                    prevEl: '.post-home-slide-mb .swiper-button-prev',
                },
                breakpoints: {
                    1024: {
                        slidesPerView: 1,
                        // centeredSlides: true,
                        spaceBetween: 30,
                        navigation: {
                            nextEl: '.post-home-slide-mb .swiper-button-next',
                            prevEl: '.post-home-slide-mb .swiper-button-prev',
                        },
                    },
                    480: {
                        slidesPerView: 1,
                        centeredSlides: false,
                        // spaceBetween: 40,
                        navigation: {
                            nextEl: '.post-home-slide-mb .swiper-button-next',
                            prevEl: '.post-home-slide-mb .swiper-button-prev',
                        },
                    },
                    320: {
                        slidesPerView: 1,
                        centeredSlides: false,
                        // spaceBetween: 40,
                        navigation: {
                            nextEl: '.post-home-slide-mb .swiper-button-next',
                            prevEl: '.post-home-slide-mb .swiper-button-prev',
                        },
                    },
                },
            })
            let post_news_mobile = new Swiper('.post-news-mobile', {
                spaceBetween: 30,
                // effect: "fade",
                speed: 1500,
                loop: true,
                autoplay: {
                    delay: 7000,
                    disableOnInteraction: false,
                },
                pagination: {
                    el: '.post-news-mobile .swiper-pagination',
                    clickable: true,
                    type: "fraction",
                },
                navigation: {
                    nextEl: '.post-news-mobile .swiper-button-next',
                    prevEl: '.post-news-mobile .swiper-button-prev',
                },
                breakpoints: {
                    1024: {
                        slidesPerView: 1,
                        // centeredSlides: true,
                        spaceBetween: 30,
                        navigation: {
                            nextEl: '.post-news-mobile .swiper-button-next',
                            prevEl: '.post-news-mobile.swiper-button-prev',
                        },
                    },
                    480: {
                        slidesPerView: 1,
                        centeredSlides: false,
                        // spaceBetween: 40,
                        navigation: {
                            nextEl: '.post-news-mobile .swiper-button-next',
                            prevEl: '.post-news-mobile .swiper-button-prev',
                        },
                    },
                    320: {
                        slidesPerView: 1,
                        centeredSlides: false,
                        // spaceBetween: 40,
                        navigation: {
                            nextEl: '.post-news-mobile .swiper-button-next',
                            prevEl: '.post-news-mobile .swiper-button-prev',
                        },
                    },
                },
            });
            let newPostSlide_bottom = new Swiper('.post-slide-bottom', {
                keyboard: {
                    enabled: true,
                    onlyInViewport: false,
                },
                speed: 800,
                loop: true,
                slidesPerView: 3,
                spaceBetween: 30,
                pagination: {
                    el: '.post-slide-bottom .swiper-pagination',
                    clickable: true,
                },
                navigation: {
                    nextEl: '.post-slide-bottom .swiper-button-next',
                    prevEl: '.post-slide-bottom .swiper-button-prev',
                },
            })
            var newPostSlide_relate = new Swiper('.post-slide-relate', {
                spaceBetween: 20,
                slidesPerView: 3,
                loop: true,
                autoplay: {
                    delay: 7000,
                    disableOnInteraction: false,
                },
                speed: 1000,
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev'
                },
                pagination: {
                    el: '.swiper-pagination',
                    type: 'bullets',
                    clickable: true
                },
                breakpoints: {
                    // 1024: {
                    //     slidesPerView: 3,
                    //     // centeredSlides: true,
                    //     spaceBetween: 20,

                    // },
                    768: {
                        slidesPerView: 3,
                        // centeredSlides: true,
                        spaceBetween: 10,

                    },
                    480: {
                        slidesPerView: 2,
                        // centeredSlides: true,
                        spaceBetween: 10,

                    },
                    0: {
                        slidesPerView: 1,
                        // centeredSlides: true,
                        spaceBetween: 10,

                    },

                },
            });

            // tuyen dung slider
            var recruitment_slider = new Swiper('.recruitment-slider', {
                direction: 'vertical',
                loop: true,
                autoplay: {
                    delay: 4000,
                    disableOnInteraction: false,
                },
                slidesPerView: 1,
                spaceBetween: 0,
                speed: 2000,

                pagination: {
                    el: '.recruitment-slider .swiper-pagination',
                    clickable: true,
                },
                navigation: {
                    nextEl: '.recruitment-slider .swiper-button-next',
                    prevEl: '.recruitment-slider .swiper-button-prev',
                },
            })

            var media_sider = new Swiper('.media-slider', {


                loop: true,
                autoplay: {
                    delay: 6000,
                    disableOnInteraction: false,
                },
                speed: 2000,

                pagination: {
                    el: '.media-slider .swiper-pagination',
                    clickable: true,
                },
                navigation: {
                    nextEl: '.media-slider .swiper-button-next',
                    prevEl: '.media-slider .swiper-button-prev',
                },
            })


            if ($('.field-activity-slide-top').length > 0) {
                var Media_home = new Swiper('.field-activity-slide-top', {
                    slidesPerView: 1,
                    pagination: {
                        el: '.swiper-pagination',
                        clickable: true,
                    },

                    slideToClickedSlide: true,
                    spaceBetween: 0,
                    speed: 1000,
                    loop: true,
                })

                function myHandler(e) {
                    Media_home.slideNext()
                }
                const autoplay = 15000
                if ($('.field-activity-slide-top .swiper-slide-active .__video').length && $(
                        '.field-activity-slide-top .swiper-slide-active .__video.video-full').length) {
                    $('.field-activity-slide-top .swiper-slide-active .__video')[0].play()
                    $('.field-activity-slide-top .swiper-slide-active .__video.video-full')[0].play()
                    $('.field-activity-slide-top .swiper-slide-active .__video')[0].addEventListener('ended',
                        myHandler, false)
                    $('.field-activity-slide-top .swiper-slide-active .__video.video-full')[0].addEventListener(
                        'ended', myHandler, false)
                } else {
                    setTimeout(() => {
                        myHandler()
                    }, autoplay)
                }
                /**
                 * https://stackoverflow.com/questions/2741493/detect-when-an-html5-video-finishes
                 */
                Media_home.on('slideChange', function() {
                    if ($('.field-activity-slide-top .swiper-slide-active .__video').length && $(
                            '.field-activity-slide-top .swiper-slide-active .__video.video-full').length) {
                        $('.field-activity-slide-top .swiper-slide-active .__video')[0].paused
                        $('.field-activity-slide-top .swiper-slide-active .__video.video-full')[0].paused
                    }
                })
                Media_home.on('slideChangeTransitionEnd', function() {
                    if ($('.field-activity-slide-top .swiper-slide-active .__video').length && $(
                            '.field-activity-slide-top .swiper-slide-active .__video.video-full').length) {
                        $('.field-activity-slide-top .swiper-slide-active .__video')[0].play()
                        $('.field-activity-slide-top .swiper-slide-active .__video.video-full')[0].play()
                        $('.field-activity-slide-top .swiper-slide-active .__video')[0].addEventListener(
                            'ended', myHandler, false)
                        $('.field-activity-slide-top .swiper-slide-active .__video.video-full')[0]
                            .addEventListener('ended', myHandler, false)
                    } else {
                        setTimeout(() => {
                            myHandler()
                        }, autoplay)
                    }
                })
            }

            // change color header
            // if ($('#header').length > 0) {
            //     var header = $('#header');
            //     var headerTop = $('#header-top');
            //     var logoblue = $('.logo_link-blue');
            //     var logowhite = $('.logo_link-white');
            //     var colorText = $('.nav-item .item__link,.item-top__link');
            //     var icontongger = $('.navbar-toggler');
            //     var colorActive = $('.color-active');
            //     var textShadow = $('.nav-item .item__link.first');
            //     var textShadowTop = $('.item-top__link.first')
            //     const id = $('#app');
            //     const id_security = $('#security')

            //     $(window).scroll(function() {
            //         if (!(id.length > 0) && !(id_security.length) > 0) {
            //             if (window.scrollY > 0) {
            //                 header.addClass('add-bg-color')
            //                 headerTop.addClass('add-bg-top')
            //                 logoblue.css('display', 'block')
            //                 logowhite.css('display', 'none')
            //                 colorText.css('color', '#262626')
            //                 icontongger.css('color', '#000')
            //                 colorActive.css('color', '#0F4685')
            //                 textShadow.css('text-shadow', 'unset')
            //                 textShadowTop.css('text-shadow', 'unset')
            //             } else {
            //                 header.removeClass('add-bg-color')
            //                 headerTop.removeClass('add-bg-top')
            //                 logoblue.css('display', 'none')
            //                 logowhite.css('display', 'block')
            //                 colorText.css('color', '#fff')
            //                 icontongger.css('color', '#fff')
            //                 colorActive.css('color', '#fff')
            //                 textShadow.css('text-shadow', '0 0 3px #0000004d')
            //                 textShadowTop.css('text-shadow', '0 0 3px #0000008c')
            //             }
            //         }

            //     })
            // }
            //scroll 
            // Hide Header  on scroll down

            $(document).mousemove(function(d) {
                var st = $(this).scrollTop();
                if (d.pageY <= (st + 20)) {
                    if ($('.nav-up')) {
                        $('.post-sidebar-content').css('top', 100);
                        $('.shareholder-infomation_right').css('top', 100);
                        $('header').removeClass('nav-up');

                    }

                }
            });
            var didScroll;
            var lastScrollTop = 0;
            var delta = 5;
            var navbarHeight = $('header').outerHeight();

            $(window).scroll(function(event) {
                didScroll = true;
            });

            setInterval(function() {
                if (didScroll) {
                    hasScrolled();
                    didScroll = false;
                }
            }, 150);



            function hasScrolled() {
                if (window.scrollY >= 150) {
                    var st = $(this).scrollTop();

                    // Make sure they scroll more than delta
                    if (Math.abs(lastScrollTop - st) <= delta)
                        return;

                    // If they scrolled down and are past the navbar, add class .nav-up.
                    // This is necessary so you never see what is "behind" the navbar.
                    if (st > lastScrollTop && st > navbarHeight) {
                        // Scroll Down

                        $('header').removeClass('nav-down').addClass('nav-up');
                        $('.post-sidebar-content').css('top', 5);
                        $('.relationship-sibar').css('top', 5);
                    } else {
                        // Scroll Up

                        if (st + $(window).height() < $(document).height()) {
                            $('header').removeClass('nav-up').addClass('nav-down');
                            $('.post-sidebar-content').css('top', 100);
                            $('.relationship-sibar').css('top', 100);

                        }
                    }

                    lastScrollTop = st;
                } else {
                    $('header').removeClass('nav-up');
                }

            }
            // change bg introduce page
            $(window).on("scroll touchmove", function() {
                var element = $(".develop-wrapper");

                if (element.length > 0) {
                    if ($(document).scrollTop() >= $(".develop-wrapper").position().top) {
                        $('.develop__title').addClass('active');
                        $('.img-white').addClass('d-block');
                        $('.img-blue').addClass('d-none');
                        $('.big-title').addClass('text-white');

                    } else {
                        $('.develop__title').removeClass('active');
                        $('.img-white').removeClass('d-block');
                        $('.img-blue').removeClass('d-none');
                        $('.big-title').removeClass('text-white');

                    };
                }

            });
            var gallery_top = new Swiper(".gallery-top", {
                slidesPerView: 1,
                speed: 400,
                scrollbar: {
                    el: ".swiper-scrollbar",

                },
                navigation: {
                    nextEl: '.gallery-top .swiper-button-next',
                    prevEl: '.gallery-top .swiper-button-prev',
                },

            });

            if ($('.image-item__back').length > 0) {
                $('.image-item__back').click(function(e) {
                    $('#album_modal-detail').css('display', 'none');
                    $('#album_modal').modal('show');


                });

            }
            if ($('.img-click').length > 0) {
                $('.img-click').click(function() {

                    $('#album_modal-detail').modal('show');
                });

            }
            if ($('.icon-sort').length > 0) {
                $('.icon-sort').click(function() {

                    $('.sort-list').toggleClass('d-block');
                });

            }
            $(document).ready(function() {
                $('.js-example-basic-single').select2();
            });



            if ($('.itemdown-show').length > 0) {
                $('.itemdown-show').click(function() {
                    $(this).parents('.info-right').find('.downcontent').slideToggle();
                    return false;
                });
            }
            $('#support-tab>div').click(function(event) {
                $('.contact-fo').parent().css('display', '');
                var posTop = $('#support-tab').offset().top + $('#support-tab').outerHeight();
                if ($('.anchor-link').length) {
                    $('html, body').animate({
                        scrollTop: posTop - 70
                    }, 500);
                } else {
                    $('html, body').animate({
                        scrollTop: posTop - 20
                    }, 500);
                }
            });
            $(document).ready(function() {
                const info_contact = $('.office-contact-wrapper');
                const email_us = $('.contact-fo-container');
                const chat_online = $('.chat-online');
                // info_contact.css('display', 'none');
                email_us.css('display', 'none');
                chat_online.css('display', 'none');


                if (info_contact && email_us && chat_online) {
                    $('#support-tab').find('.contact-box__item:nth-child(1)').click(function() {

                        info_contact.css('display', 'none');
                        email_us.css('display', 'block');
                        chat_online.css('display', 'none');
                    });
                    $('#support-tab').find('.contact-box__item:nth-child(2)').click(function() {
                        info_contact.css('display', 'block');
                        email_us.css('display', 'none');
                        chat_online.css('display', 'none');

                    });
                    $('#support-tab').find('.contact-box__item:nth-child(3)').click(function() {
                        info_contact.css('display', 'none');
                        email_us.css('display', 'none');
                        chat_online.css('display', 'block');

                    });
                } else return;
            });

            // popup 
            var id = '#dialog';

            //transition effect		
            $('#mask').fadeIn(500);
            $('#mask').fadeTo("slow");

            //transition effect
            $(id).fadeIn(1000);

            //if close button is clicked
            $('.window .close').click(function(e) {
                //Cancel the link behavior
                e.preventDefault();

                $('#mask').hide();
                $('.window').hide();
            });

            //if mask is clicked
            $('#mask').click(function() {
                $(this).hide();
                $('.window').hide();
            });
            //end popup


            //slide feild of activity

            let commercialFieldSlider = new Swiper('.commercial-field-slider', {
                loop: true,
                spaceBetween: 0,
                slidesPerView: 1,
                spaceBetween: 0,
                autoplay: {
                    delay: 6000,
                    disableOnInteraction: false,
                },
                speed: 800,
                pagination: {
                    el: '.commercial-field-slider .swiper-pagination',
                    clickable: true,
                },


            })

            $(document).ready(function() {
                var $swiper = $(".slide-news");
                var $bottomSlide = null;
                var $bottomSlideContent = null;
                var mySwiper = new Swiper(".slide-news", {
                    slidesPerView: 3,
                    centeredSlides: true,
                    roundLengths: true,
                    loop: true,
                    loopAdditionalSlides: 30,
                    autoplay: {
                        delay: 6000,
                        disableOnInteraction: false,
                    },
                    speed: 700,
                    navigation: {
                        nextEl: ".swiper-button-next",
                        prevEl: ".swiper-button-prev"
                    },
                    pagination: {
                        el: '.slide-news .swiper-pagination',
                        clickable: true,
                    },
                    breakpoints: {

                        1081: {
                            slidesPerView: 3,
                            spaceBetween: 0,
                            centeredSlides: true,
                            navigation: {
                                nextEl: '.slide-news .swiper-button-next',
                                prevEl: '.slide-news .swiper-button-prev',
                            },
                        },
                        1080: {
                            slidesPerView: 1.5,
                            spaceBetween: 0,
                            spaceBetween: 30,
                            centeredSlides: true,
                            navigation: {
                                nextEl: '.slide-news .swiper-button-next',
                                prevEl: '.slide-news .swiper-button-prev',
                            },
                        },
                        380: {

                            slidesPerView: 1.5,
                            centeredSlides: true,

                            navigation: {
                                nextEl: '.slide-news .swiper-button-next',
                                prevEl: '.slide-news .swiper-button-prev',
                            },
                        },
                        0: {

                            slidesPerView: 1,
                            centeredSlides: true,

                            navigation: {
                                nextEl: '.slide-news .swiper-button-next',
                                prevEl: '.slide-news .swiper-button-prev',
                            },
                        },

                    },

                });
            });


            //btn scroll activity
            if ($('#button-activity').length > 0) {
                const btnTop1 = $('#button-activity');
                var element = $('.activity-news');
                var element2 = $('.commercial-field');
                $(window).scroll(function() {
                    if (element2.length > 0) {
                        if ($(document).scrollTop() >= element2.position().top - 250) {
                            btnTop1.addClass('show-btn-activity')
                        } else {
                            btnTop1.removeClass('show-btn-activity')
                        }

                    }

                    if (element.length > 0) {
                        if ($(document).scrollTop() >= element.position().top - 250) {
                            btnTop1.addClass('d-none')

                        } else {
                            btnTop1.removeClass('d-none')

                        };
                    }

                })

            }


            (function($) {
                $(function() {
                    $('.menu-mobile .nav-list .nav-item a:not(:only-child)').click(function(e) {
                        $(this).siblings('.nav-dropdown').toggle();
                        e.stopPropagation();
                    });
                    $('html').click(function() {
                        $('.nav-dropdown').hide();
                    });
                    $('#nav-toggle').click(function() {
                        $('.menu-mobile').slideToggle();
                    });
                    $('#nav-toggle').on('click', function() {
                        this.classList.toggle('active');
                    });
                });
            })(jQuery);


            var Ajax = {
                getShareholder: () => {
                    $(document).on('click', '.item_link_shareholder', function() {
                        $(this).addClass('active').siblings().removeClass('active')

                        const category = $(this).data('category')

                        Ajax.ajaxCallData({
                            category_id: category.id
                        })
                    })
                },
                ajaxCallData: (params = {}, currentUrl = false) => {
                    $(window).scrollTop($('.render-html').offset().top - 100);
                    $.ajax({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        url: getShareholderUrl,
                        data: {
                            ...params
                        },
                        method: "GET",
                        dataType: 'json',
                        beforeSend: function() {
                            $('.render-html').hide()
                            $('.loading').removeClass('d-none')
                        },
                        success: function({
                            data
                        }) {
                            if ($('.render-html').length) {
                                $('.render-html').show()
                                $("#breadcrum").load(" #breadcrum1");
                                $('.render-html').html(data.html);
                                if ($('.itemdown-show').length > 0) {
                                    $('.itemdown-show').click(function() {
                                        $(this).parents('.info-right').find(
                                            '.downcontent').slideToggle();
                                        return false;
                                    });
                                }

                                $('.render-html').data('category', params.category_id)

                                delete params['category_id']

                                    !currentUrl ?
                                    window.history.pushState({}, '', data.url) :
                                    history.pushState(null, null,
                                        `${window.location.pathname}?${new URLSearchParams(params).toString()}`
                                    )
                            }
                        },
                        error: function(xhr, thrownError) {
                            $('.loading').addClass('d-none')
                        },
                        complete: function(xhr, status) {
                            $('.loading').addClass('d-none')
                        }
                    })
                },
                getPaginationShareHolder: () => {
                    $(document).on('click', '.render-html .page-link', function(e) {
                        e.preventDefault()
                        const page = $(this).data('page')
                        if (!page) return

                        const category = $('.render-html').data('category')
                        const params = new URLSearchParams(window.location.search)
                        params.set('page', page)
                        params.set('category_id', category)

                        Ajax.ajaxCallData({
                            ...Object.fromEntries(params)
                        }, true)
                    })
                },
                shareHolderSearchYear: () => {
                    $(document).on('change', '.filter-search-sharehoder .select-year', function(e) {
                        e.preventDefault()

                        const year = $(this).val();

                        const category = $('.render-html').data('category')
                        const params = new URLSearchParams(window.location.search);
                        !!year && year != 'all' ? params.set('year', year) : params.delete('year')
                        params.set('category_id', category)
                        params.set('page', 1)

                        Ajax.ajaxCallData({
                            ...Object.fromEntries(params)
                        }, true)
                    })
                },
                shareHolderSearchForm: () => {
                    $(document).on('submit', '.filter-search-sharehoder .form-search', function(e) {
                        e.preventDefault()

                        const keyword = $(this).find('input[name="keyword"]').val() || ""

                        const category = $('.render-html').data('category')
                        const params = new URLSearchParams(window.location.search)
                        params.set('keyword', keyword)
                        params.set('category_id', category)
                        params.set('page', 1)

                        Ajax.ajaxCallData({
                            ...Object.fromEntries(params)
                        }, true)
                    })
                },
                getMedia: () => {
                    $(document).on('click', '.item_link_media', function() {
                        $(this).addClass('active-row').siblings().removeClass('active-row')
                        const category = $(this).data('category')

                        Ajax.ajaxCallDataMedia({
                            category_id: category.id
                        })

                    })
                },
                ajaxCallDataMedia: (params = {}, currentUrl = false, is_render_child = 0) => {
                    is_render_child = is_render_child == 1

                    $(window).scrollTop($(is_render_child ? '#scroll-list-news' : '.render-media').offset()
                        .top - (is_render_child ? 200 : 100));
                    $.ajax({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        url: getMediaUrl,
                        data: {
                            ...params,
                            is_render_child
                        },
                        method: "GET",
                        dataType: 'json',
                        beforeSend: function() {
                            $('.loading').removeClass('d-none');
                            $('.list-media-loading').removeClass('d-none')
                            $('.render-media').hide()
                        },
                        success: function({
                            data
                        }) {
                            // is_render_child = data.isRenderChild
                            if (is_render_child) {
                                const renderElement = $('#scroll-list-news')
                                if (!!renderElement) {
                                    renderElement.show()
                                    $('.render-media').show()
                                    $("#breadcrum").load(" #breadcrum1");
                                    renderElement.html(data.html)
                                }
                            } else {
                                if ($('.render-media').length) {
                                    $('.render-media').show()
                                    $("#breadcrum").load(" #breadcrum1");
                                    $('.render-media').html(data.html)
                                    if ($('.itemdown-show').length > 0) {
                                        $('.itemdown-show').click(function() {
                                            $(this).parents('.info-right').find(
                                                '.downcontent').slideToggle();
                                            return false;
                                        });
                                    }
                                    // init slide after load ajax
                                    let newPostSlide = new Swiper('.new-post-slide', {
                                        spaceBetween: 30,
                                        effect: "fade",
                                        speed: 1500,
                                        loop: true,
                                        autoplay: {
                                            delay: 6000,
                                            disableOnInteraction: false,
                                        },
                                        pagination: {
                                            el: '.new-post-slide .swiper-pagination',
                                            clickable: true,
                                        },
                                        navigation: {
                                            nextEl: '.new-post-slide .swiper-button-next',
                                            prevEl: '.new-post-slide .swiper-button-prev',
                                        },
                                        breakpoints: {
                                            1024: {
                                                slidesPerView: 1,
                                                // centeredSlides: true,
                                                spaceBetween: 30,
                                                navigation: {
                                                    nextEl: '.new-post-slide .swiper-button-next',
                                                    prevEl: '.new-post-slide .swiper-button-prev',
                                                },
                                            },
                                            480: {
                                                slidesPerView: 2,
                                                centeredSlides: false,
                                                spaceBetween: 40,
                                                navigation: {
                                                    nextEl: '.new-post-slide .swiper-button-next',
                                                    prevEl: '.new-post-slide .swiper-button-prev',
                                                },
                                            },
                                            320: {
                                                slidesPerView: 1,
                                                centeredSlides: false,
                                                spaceBetween: 40,
                                                navigation: {
                                                    nextEl: '.new-post-slide .swiper-button-next',
                                                    prevEl: '.new-post-slide .swiper-button-prev',
                                                },
                                            },
                                        },
                                    })
                                    let news_post_mobile = new Swiper('.new-post-slide-mb ', {
                                        effect: "fade",
                                        speed: 1500,
                                        pagination: {
                                            el: ".news-content-mobile .pagination-news",
                                            type: "fraction",
                                            clickable: true,
                                        },
                                        navigation: {
                                            nextEl: '.news-content-mobile .swiper-button-next',
                                            prevEl: '.news-content-mobile .swiper-button-prev',
                                        },
                                    });
                                    let newPostSlide_bottom = new Swiper('.post-slide-bottom', {
                                        keyboard: {
                                            enabled: true,
                                            onlyInViewport: false,
                                        },
                                        speed: 800,
                                        loop: true,
                                        slidesPerView: 3,
                                        spaceBetween: 25,
                                        pagination: {
                                            el: '.post-slide-bottom .swiper-pagination',
                                            clickable: true,
                                        },
                                        navigation: {
                                            nextEl: '.post-slide-bottom .swiper-button-next',
                                            prevEl: '.post-slide-bottom .swiper-button-prev',
                                        },
                                    })
                                }
                            }

                            $('.render-media').data('category', params.category_id)
                                .data('is-render-child', data.isRenderChild)


                            delete params['category_id']

                                !currentUrl ?
                                window.history.pushState({}, '', data.url) :
                                history.pushState(null, null,
                                    `${window.location.pathname}?${new URLSearchParams(params).toString()}`
                                )

                        },
                        error: function(xhr, thrownError) {
                            $('.loading').addClass('d-none')
                            $('.list-media-loading').addClass('d-none')
                        },
                        complete: function(xhr, status) {
                            $('.loading').addClass('d-none')
                            $('.list-media-loading').addClass('d-none')
                        }
                    });

                },

                getPaginationMedia: () => {
                    $(document).on('click', '.render-media .page-link', function(e) {
                        e.preventDefault()
                        const page = $(this).data('page')
                        if (!page) return

                        const category = $('.render-media').data('category')
                        const params = new URLSearchParams(window.location.search)
                        params.set('page', page)
                        params.set('category_id', category)

                        Ajax.ajaxCallDataMedia({
                            ...Object.fromEntries(params),
                        }, true, $('.render-media').data('is-render-child'))
                    })
                },
                mediaSearchYear: () => {
                    $(document).on('change', '.filter-search-media.field .select-year', function(e) {
                        e.preventDefault()
                        const year = $(this).val();

                        const category = $('.render-media').data('category')
                        const params = new URLSearchParams(window.location.search);
                        !!year && year != 'all' ? params.set('year', year) : params.delete('year')
                        params.set('category_id', category)
                        params.set('page', 1)

                        Ajax.ajaxCallDataMedia({
                            ...Object.fromEntries(params)
                        }, true, $('.render-media').data('is-render-child'))
                    })
                },
                mediaSearchField: () => {
                    $(document).on('change', '.filter-search-media.field .select-by-field', function(e) {

                        e.preventDefault()
                        const field = $(this).val();
                        console.log(field);

                        const category = $('.render-media').data('category')
                        const params = new URLSearchParams(window.location.search);
                        !!field && field != 'all' ? params.set('field', field) : params.delete(
                            'field')
                        params.set('category_id', category)
                        params.set('page', 1)

                        Ajax.ajaxCallDataMedia({
                            ...Object.fromEntries(params)
                        }, true, $('.render-media').data('is-render-child'))
                    })
                },

                mediaSearchForm: () => {
                    $(document).on('submit', '.filter-search-media.field .form-search', function(e) {
                        e.preventDefault()
                        const keyword = $(this).find('input[name="keyword"]').val() || ""
                        const category = $('.render-media').data('category')
                        const params = new URLSearchParams(window.location.search)
                        params.set('keyword', keyword)
                        params.set('category_id', category)
                        params.set('page', 1)

                        Ajax.ajaxCallDataMedia({
                            ...Object.fromEntries(params)
                        }, true, $('.render-media').data('is-render-child'))
                    })
                },
                HandleGotoPage: () => {
                    $(document).on('submit', '.go-to-page .pageNumberForm', function(e) {
                        e.preventDefault();
                        const elementMedia = $('.render-media .go-to-page .pageNumberForm');
                        const elementShahoder = $('.render-html .go-to-page .pageNumberForm');
                        const page = $(this).find('input[name="page"]').val() || ""
                        const category_media = $('.render-media').data('category')
                        const category_shahoder = $('.render-html').data('category')
                        if (elementMedia.length > 0) {
                            const params = new URLSearchParams(window.location.search)
                            params.set('category_id', category_media)
                            params.set('page', page)

                            Ajax.ajaxCallDataMedia({
                                ...Object.fromEntries(params)
                            }, true, $('.render-media').data('is-render-child'))

                        }
                        if (elementShahoder.length > 0) {
                            const params = new URLSearchParams(window.location.search)
                            params.set('category_id', category_shahoder)
                            params.set('page', page)

                            Ajax.ajaxCallData({
                                ...Object.fromEntries(params)
                            }, true)
                        }

                    })
                },

            }

            $(document).on('submit', '.dropdown--search form', function(e) {
                keyword = $(this).find('input[name="keyword"]').val()
                if (keyword.length < 1) {
                    e.preventDefault();
                }

            })

            $('.go-to-page .pageNumberForm').submit(function(e) {
                e.preventDefault();
                var pageInput = $(this).children('.pageNumber').first();
                var pageInputValue = pageInput.val();

                if (pageInputValue < pageInput.attr('min-number') || pageInputValue > pageInput.attr(
                        'max-number') || !pageInputValue.match(/\d+/)) {
                    alert('Vui lòng nhập giá trị giữa ' + pageInput.attr('min-number') + ' và ' + pageInput
                        .attr('max-number'));
                    return false;
                }
            })
            $(document).ready(function() {
                Ajax.getShareholder();
                // Ajax.getMedia();
                Ajax.getPaginationShareHolder();
                Ajax.shareHolderSearchYear();
                Ajax.shareHolderSearchForm();
                Ajax.getPaginationMedia();
                Ajax.mediaSearchYear();
                Ajax.mediaSearchField();
                Ajax.mediaSearchForm();
                Ajax.HandleGotoPage();
            })


            //tab active contact

            var selector = '.active-tabs li';

            $(selector).on('click', function() {
                $(selector).removeClass('active');
                $(this).addClass('active');
            });

            // open fancy box

            $('.post-detail-wrapper .content-main .post-content img').each(function() {
                let title = $(this).attr('title') ?? $(this).attr('data-desc');
                const src = $(this).attr('src')
                if (typeof(title) === "undefined") {
                    title = '';

                }
                $(this).removeAttr('data-fancybox')
                $(this).wrap(`<a href="${src}" data-fancybox="gallery" data-caption="${title}">`)
            })



            $('.swiper-container.swiper-content-detail').each(function(index, element) {
                var $this = $(this);
                $this.addClass("instance-" + index);

                $this.parents('.slide-wrapper').siblings('.main-content-left').find('.swiper-button-prev')
                    .addClass("btn-prev-" + index);

                $this.parents('.slide-wrapper').siblings('.main-content-left').find('.swiper-button-next')
                    .addClass("btn-next-" + index);

                $this.parents('.slide-wrapper').siblings('.main-content-left').find('.swiper-pagination')
                    .addClass("pagina" + index);
                var swiper = new Swiper(".instance-" + index, {
                    loop: true,
                    slidesPerView: 3,
                    paginationClickable: true,
                    spaceBetween: 0,
                    pagination: {
                        el: $this.parents('.slide-wrapper').siblings('.main-content-left').find(
                            ".swiper-pagination")[0],
                        type: "fraction",
                        clickable: true,
                    },
                    navigation: {
                        nextEl: $this.parents('.slide-wrapper').siblings('.main-content-left').find(
                            ".swiper-button-next")[0],
                        prevEl: $this.parents('.slide-wrapper').siblings('.main-content-left').find(
                            ".swiper-button-prev")[0]
                    },
                    breakpoints: {
                        1081: {
                            slidesPerView: 3,

                        },
                        1080: {
                            slidesPerView: 1,

                        },


                        0: {
                            slidesPerView: 1,

                        },
                    },

                });
            });


            var cultural_slider = new Swiper('.cultural-slider', {


                loop: true,
                autoplay: {
                    delay: 6000,
                    disableOnInteraction: false,
                },
                speed: 2000,

                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                }

            })

            var cultural_slider2 = new Swiper('.cultural-section7-slider', {
                loop: true,
                slidesPerView: 3,
                spaceBetween: 40,
                autoplay: {
                    delay: 6000,
                    disableOnInteraction: false,
                },
                speed: 2000,

                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
                breakpoints: {
                    1025: {
                        slidesPerView: 3,
                        // centeredSlides: true,
                        spaceBetween: 20,

                    },
                    1024: {
                        slidesPerView: 2,
                        // centeredSlides: true,
                        spaceBetween: 20,

                    },
                    768: {
                        slidesPerView: 2,

                        spaceBetween: 10,

                    },
                    320: {
                        slidesPerView: 1,

                    },
                }

            })

            var swiperbh = new Swiper(".mySwiperbh", {
                spaceBetween: 0,
                slidesPerView: 4,
                freeMode: true,
                watchSlidesProgress: true,
            });
            var swiperbh2 = new Swiper(".mySwiperbh2", {
                spaceBetween: 0,
                slidesPerView: 1,
                thumbs: {
                    swiper: swiperbh,
                },
                on: {
                    slideChange: function(el) {
                        $('.swiper-slide').each(function() {
                            var youtubePlayer = $(this).find('iframe').get(0);
                            if (youtubePlayer) {
                                youtubePlayer.contentWindow.postMessage(
                                    '{"event":"command","func":"pauseVideo","args":""}', '*'
                                );
                            }
                        });
                    },
                },
            });

            $('.mp3').click(function() {
                // $(this).css('color','#00529E');
                $(this).parent().parent().find('.open-mp3').toggle(300);
            })

            //
            $('.copy_link').click(function(e) {
                e.preventDefault();
                var copyLink = $(this).attr('href');

                document.addEventListener('copy', function(e) {
                    e.clipboardData.setData('text/plain', copyLink);
                    e.preventDefault();
                }, true);

                document.execCommand('copy');
                alert('Sao chép liên kết thành công');
            });


            // counter
            if ($('.counter-value').length > 0) {
                var a = 0;
                $(window).scroll(function() {
                    var oTop = $('.counter').offset().top - window.innerHeight;
                    if (a == 0 && $(window).scrollTop() > oTop) {
                        $('.counter-value').each(function() {
                            var $this = $(this),
                                countTo = $this.attr('data-count');
                            $({
                                countNum: $this.text()
                            }).animate({
                                    countNum: countTo
                                },

                                {

                                    duration: 2000,
                                    easing: 'swing',
                                    step: function() {
                                        $this.text(Math.floor(this.countNum));
                                    },
                                    complete: function() {
                                        $this.text($this.data('original'));
                                        // console.log($this.text())
                                    }

                                });
                        });
                        a = 1;
                    }

                });
            }



            $('.filter__title').click(function() {
                $('.font-downn').toggle();
                $('.font-upp').toggle();
                // $('.filler-list').slideToggle(400);
            })

            $('.close-popup').click(function() {
                $('.fixed-bg').hide();
                $('.animated-modal-tk').hide();
                $('.camon').hide();
                $('body').removeClass('active-popup');
            });
            1
        })
    </script>
</body>

</html>
