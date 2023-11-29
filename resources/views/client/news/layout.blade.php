@extends('layouts.client.app')
@section('content')
    <section class="banner-page">
        <div class="swiper-container main-slider" style="--swiper-navigation-color:#fff; --swiper-pagination-color:#fff;">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <a class="post_link" href="javascript:;">
                        <img class="" src="{{ asset('img/banner/1 (6).jpg') }}" alt="">
                    </a>
                </div>
                <div class="swiper-pagination"></div>
                <div class="scroll-down" id="js-scroll-down">
                    <img src="{{ asset('img/icon-scroll.png') }}" alt="icon">
                </div>
            </div>
    </section>
    <section class="scroll-section">
        <div class="media_content-wrapper mb-100">
            <div class="container-customize">
                <div class="media-content ">
                    <div class="content-left render-media" data-category="16" data-is-render-child="1">
                        @yield('communication')
                        <script>
                            if ($('.media__content_left.human').length > 0) {
                                $('.media-tab').css('display', 'none');
                            }
                        </script>
                    </div>
                    <div class="post-sidebar-content">
                        <div class="media__content_right">
                            <div class="list-media-menu" data-aos="fade-up" data-aos-duration="100" data-aos-delay="50"
                                class="aos-init aos-animate">
                                <h3 class="font28 font-myria-bold text-uppercase">Truyền thông</h3>
                                <a wire:navigate href="{{ route('newss') }}" target="_self"
                                    class=" item_link_media list-group-item  font18 font-myria-bold">
                                    <i class=''></i> <span>Tin tức</span>
                                </a>
                                <a wire:navigate href="{{ route('magazin') }}" target="_self"
                                    class=" item_link_media list-group-item  font18 font-myria-bold ">
                                    <i class=''></i> <span>Tạp chí</span>
                                </a>
                                <a wire:navigate href="{{ route('event') }}" target="_self"
                                    class=" item_link_media list-group-item  font18 font-myria-bold ">
                                    <i class=''></i> <span>Sự kiện</span>
                                </a>
                                <a wire:navigate href="{{ route('internalActivities') }}" target="_self"
                                    class=" item_link_media list-group-item  font18 font-myria-bold ">
                                    <i class=''></i> <span>Hoạt động nội bộ</span>
                                </a>
                                <a wire:navigate href="{{ route('presidentMessage') }}" target="_self"
                                    class=" item_link_media list-group-item  font18 font-myria-bold ">
                                    <i class=''></i> <span>Thông điệp của chủ tịch</span>
                                </a>
                                <a wire:navigate href="{{ route('happyNewYearLetter') }}" target="_self"
                                    class=" item_link_media list-group-item  font18 font-myria-bold ">
                                    <i class=''></i> <span>Thư chúc Tết Chủ tịch HĐQT </span>
                                </a>
                                <a wire:navigate href="{{ route('pressRelease') }}" target="_self"
                                    class=" item_link_media list-group-item  font18 font-myria-bold ">
                                    <i class=''></i> <span>Thông cáo báo chí</span>
                                </a>
                                <a wire:navigate href="{{ route('pressRelease') }}" target="_self"
                                    class="  list-group-item  font18 font-myria-bold ">
                                    <i class=''></i> <span>Thư viện ảnh và video</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
