@extends('layouts.client.app')
@section('content')
    <section class="banner-page">
        <div class="swiper-container main-slider" style="--swiper-navigation-color:#fff; --swiper-pagination-color:#fff;">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <a class="post_link" href="javascript:;">
                        <img class="" src="{{ asset('img/banner/1 (8).gif') }}" alt="image">
                    </a>
                </div>
            </div>
            <div class="swiper-pagination"></div>
            <div class="scroll-down" id="js-scroll-down">
                <img src="{{ asset('img/icon-scroll.png') }}" alt="icon">
            </div>
        </div>
    </section>
    <div class="breadcrum-intro">
        <div class="container-customize">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{ route('home') }}" title="Trang chủ"> Trang chủ
                        <meta itemprop="name" content="Trang chủ" />
                    </a>
                    <meta itemprop="position" content="1" />
                </li>
                <li class="breadcrumb-item active">Giới thiệu
                    <meta itemprop="name" content="Giới thiệu" />
                    <meta itemprop="position" content="2" />
                </li>
            </ol>

        </div>


    </div>

    <section class="about-us">
        <div class="container-customize scroll-section">
            <div class="about-us__title" data-aos="fade-right" data-aos-duration="700" data-aos-delay="50"
                class="aos-init aos-animate">
                <img src="{{ asset('img/arrow.png') }}" alt="icon">
                <h1 class="font50 big-title">VỀ THACO</h1>
            </div>
            <div class="about-us__content mt-40 text-justify font18" data-aos="fade-right" data-aos-duration="700"
                data-aos-delay="50" class="aos-init aos-animate">
                <p style="text-align: justify;"><strong>{{ $content }}</p>
            </div>
        </div>
        <div class="container-customize ">
            <div class="future-goal-banner mt-40 " style="background-image:url('{{ asset('img/banner/1 (8).gif') }}')">
                <div class="future-goal-wrapper">
                    <div class="future-goal-content ">

                        <div class="future-goal-content__item">
                            <div class="future-goal p-lr-90  " data-aos="fade-up" data-aos-duration="700"
                                data-aos-delay="50" class="aos-init aos-animate">
                                <img src="{{ asset('img/tam-nhinn.png') }}" alt="TẦM NHÌN">
                                <h3 class="title font40">TẦM NHÌN</h3>
                                <div class="desc font18 scrollbar-custom center">
                                    <p style="text-align: justify;">L&agrave; Tập đo&agrave;n c&ocirc;ng nghiệp đa
                                        ng&agrave;nh h&agrave;ng đầu khu vực ASEAN, ph&aacute;t triển bền vững trong bối
                                        cảnh hội nhập khu vực v&agrave; thế giới.</p>
                                </div>
                            </div>
                        </div>

                        <div class="future-goal-content__item">
                            <div class="future-goal p-lr-90  " data-aos="fade-up" data-aos-duration="700"
                                data-aos-delay="150" class="aos-init aos-animate">
                                <img src="{{ asset('img/su-menh.png') }}" alt="SỨ MỆNH">
                                <h3 class="title font40">SỨ MỆNH</h3>
                                <div class="desc font18 scrollbar-custom center">
                                    <p style="text-align: justify;">Mang lại gi&aacute; trị cho kh&aacute;ch h&agrave;ng,
                                        đối t&aacute;c, x&atilde; hội v&agrave; <span lang="VI">ph&aacute;t triển kinh
                                            tế đất nước với tinh thần tận t&acirc;m phục vụ.</span></p>
                                </div>
                            </div>
                        </div>

                        <div class="future-goal-content__item">
                            <div class="future-goal p-lr-90  last" data-aos="fade-up" data-aos-duration="700"
                                data-aos-delay="250" class="aos-init aos-animate">
                                <img src="{{ asset('img/chien-luoc.png') }}" alt="CHIẾN LƯỢC ">
                                <h3 class="title font40">CHIẾN LƯỢC </h3>
                                <div class="desc font18 scrollbar-custom center">
                                    <p style="text-align: justify;">THACO l&agrave; tập đo&agrave;n c&ocirc;ng nghiệp đa
                                        ng&agrave;nh c&oacute; c&aacute;c tập đo&agrave;n th&agrave;nh vi&ecirc;n hoạt động
                                        trong c&aacute;c lĩnh vực: &ocirc; t&ocirc;, n&ocirc;ng nghiệp; cơ kh&iacute; &amp;
                                        CNHT; đầu tư &amp; x&acirc;y dựng; thương mại &amp; dịch vụ v&agrave; logistics
                                        c&oacute; t&iacute;nh bổ trợ v&agrave; t&iacute;ch hợp cao trong từng Tập
                                        đo&agrave;n &amp; giữa c&aacute;c tập đo&agrave;n th&agrave;nh vi&ecirc;n v&agrave;
                                        THACO.</p>
                                    <p style="text-align: justify;">Hoạt động SXKD của c&aacute;c Tập đo&agrave;n
                                        th&agrave;nh vi&ecirc;n với quy m&ocirc; lớn, được tổ chức xuy&ecirc;n suốt chuỗi
                                        gi&aacute; trị theo phương ph&aacute;p quản trị c&ocirc;ng nghiệp <span
                                            lang="VI">tham gia</span><span lang="VI"> chuỗi gi&aacute; trị
                                            to&agrave;n cầu</span> &amp; chuyển đổi số với lộ tr&igrave;nh nhanh v&agrave;
                                        ph&ugrave; hợp.</p>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>

            </div>
        </div>
        <div class="container-customize">
            <div class="field-activity-intro-wrapper">
                <div class="desc-field mt-40" data-aos="fade-right" data-aos-duration="700" data-aos-delay="50"
                    class="aos-init aos-animate">
                    <p class="desc-cotent font18 text-justify">
                        Cấu trúc THACO bao gồm: 6 Tập đoàn thành viên là THACO AUTO - điều hành toàn bộ mảng sản xuất, kinh
                        doanh ô tô của THACO; THACO AGRI - điều hành mảng Nông nghiệp; THACO INDUSTRIES - phụ trách lĩnh vực
                        Cơ khí & Công nghiệp hỗ trợ; THADICO - phụ trách lĩnh vực Đầu tư xây dựng; THILOGI - phụ trách lĩnh
                        vực Giao nhận vận chuyển (Logictics); THISO - phụ trách lĩnh vực Thương mại - Dịch vụ.
                    </p>
                </div>
                <div class="field-activity">
                    <div class="field-activity__content">
                        @foreach ($fieldLimit2 as $item)
                            <div class="field-activity__item">
                                <a href="{{ route($item->link_route) }}" target="_blank">
                                    <div class="img-field">
                                        <div class="img-thumb">
                                            <img class="w-100" src="{{ Storage::url($item->image) }}" alt="">
                                        </div>
                                    </div>
                                    <div class="content-title">
                                        <h4 class="title font40">
                                            {{ $item->name }}
                                        </h4>
                                        <div class="content-none">
                                            <ul class="list-item">
                                                @foreach ($item->detail as $item1)
                                                    <li class="item-activity font18">
                                                        {{ $item1 }}
                                                    </li>
                                                @endforeach
                                            </ul>

                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach


                        <div class="swiper-container field-slider"
                            style="--swiper-navigation-color:#fff; --swiper-pagination-color:#000;">
                            <div class="swiper-wrapper">
                                @foreach ($fieldDiff as $item)
                                    <div class="swiper-slide">
                                        <div class="field-activity__item__slide">
                                            <a href="{{ route($item->link_route) }}" target="_blank">
                                                <div class="img-field">
                                                    <div class="img-thumb">
                                                        <img class="w-100" src="{{ Storage::url($item->image) }}"
                                                            alt="">
                                                    </div>
                                                </div>
                                                <div class="content-title">
                                                    <h4 class="title font40">
                                                        {{ $item->name }}
                                                    </h4>
                                                    <div class="content-none">
                                                        <ul class="list-item">
                                                            @foreach ($item->detail as $item1)
                                                                <li class="item-activity font18">
                                                                    {{ $item1 }}
                                                                </li>
                                                            @endforeach
                                                        </ul>

                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                @endforeach

                            </div>
                            <div class="swiper-pagination"></div>
                            <div class="swiper-button-next drop-shadow-button"> <img
                                    src="{{ asset('img/Icon-right.png') }}" alt="">
                            </div>
                            <div class="swiper-button-prev drop-shadow-button"> <img
                                    src="{{ asset('img/icon-left.png') }}" alt="">
                            </div>

                        </div>
                    </div>
                </div>

            </div>
            <div class="leader-of-us-wrapper mt-40">
                <div class="leader-of-us__title mt-40" data-aos="fade-right" data-aos-duration="700" data-aos-delay="50"
                    class="aos-init aos-animate">
                    <img src="{{ asset('img/arrow.png') }}" alt="">
                    <h2 class="font50 big-title"> BAN LÃNH ĐẠO</h2>
                </div>
                <div class="title-admin-top ">
                    <h3 class="title-admin">HỘI ĐỒNG QUẢN TRỊ THACO</h3>
                </div>
                <div class="admin-content top" data-aos="fade-up" data-aos-duration="700" data-aos-delay="50"
                    class="aos-init aos-animate">
                    @foreach ($leaders as $item)
                        <div class="item-member">
                            <div class="admin-item" data-target="#pocircng-strongtran-baacute-duongstrongp"
                                data-toggle="modal">
                                <img src="{{ Storage::url($item->image) }}"
                                    alt=" <p>&Ocirc;ng <strong>Trần B&aacute; Dương</strong></p>">
                                <div class="name">
                                    <p>
                                        @if ($item->sex == 'Nam')
                                            Ông
                                        @else
                                            Bà
                                        @endif
                                        <strong>{{ $item->name }}</strong>
                                    </p>
                                </div>
                                <div class="postion">
                                    <p><strong>{{ $item->position }}</strong></p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="title-admin-top ">
                    <h3 class="title-admin">Ban kiểm soát</h3>
                </div>
                <div class="admin-content bottom" data-aos="fade-up" data-aos-duration="700" data-aos-delay="50"
                    class="aos-init aos-animate">
                    @foreach ($leadersControl as $item)
                        <div class="item-member">
                            <div class="admin-item"
                                data-target="#p-startfragment-ocircng-strongnguyen-phuacutec-thinhstrong-endfragment-p"
                                data-toggle="modal">
                                <img src="{{ Storage::url($item->image) }}"
                                    alt=" <p><!--StartFragment-->&Ocirc;ng <strong>Nguyễn Ph&uacute;c Thịnh</strong><!--EndFragment--></p>">
                                <div class="name">
                                    <p><!--StartFragment-->
                                        @if ($item->sex == 'Nam')
                                            Ông
                                        @else
                                            Bà
                                        @endif
                                        <strong>{{ $item->name }}</strong><!--EndFragment-->
                                    </p>
                                </div>
                                <div class="postion">
                                    <p>{{ $item->position }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="achievement-wrapper mt-40 mb-60">
                <div class="achievement-tab-title">
                    <div class="achievement__title mt-40 " data-aos="fade-right" data-aos-duration="700"
                        data-aos-delay="50" class="aos-init aos-animate">
                        <img src="{{ asset('img/arrow.png') }}" alt="">
                        <h2 class="font50 big-title"> THÀNH TỰU</h2>
                    </div>
                    <div class="achievement__tabs" data-aos="fade-right" data-aos-duration="700" data-aos-delay="50"
                        class="aos-init aos-animate">

                        <ul class=" nav nav-tabs mb-0" id="tab-achievement" role="tablist">
                            <li class="__tabs__item " role="achievement">
                                <a class="__tabs__link nav-link active" id="achievement-company-0" data-toggle="tab"
                                    role="tab" aria-controls="achievement-0" aria-selected="true"
                                    href="#achievement-0" title="">
                                    Thành tựu của công ty
                                </a>
                            </li>
                            <li class="__tabs__item " role="achievement">
                                <a class="__tabs__link nav-link " id="achievement-company-1" data-toggle="tab"
                                    role="tab" aria-controls="achievement-1" aria-selected="true"
                                    href="#achievement-1" title="">
                                    Thành tựu của Chủ tịch
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="achievement-tabs-mobile">

                    <ul class="nav nav-tabs mb-0" id="tab-achievement" role="tablist">
                        <li class="__tabs__item" role="achievement">
                            <a class="__tabs__link nav-link active" id="achievement-company-0" data-toggle="tab"
                                role="tab" aria-controls="achievement-0" aria-selected="true" href="#achievement-0"
                                title="">
                                Thành tựu của công ty
                            </a>
                        </li>
                        <li class="__tabs__item" role="achievement">
                            <a class="__tabs__link nav-link " id="achievement-company-1" data-toggle="tab"
                                role="tab" aria-controls="achievement-1" aria-selected="true" href="#achievement-1"
                                title="">
                                Thành tựu của Chủ tịch
                            </a>
                        </li>
                    </ul>

                </div>
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade active show" id="achievement-0" role="tabpanel"
                        aria-labelledby="field-1-tab">
                        <div class="content-tab" data-aos="fade-right" data-aos-duration="700" data-aos-delay="50"
                            class="aos-init aos-animate">
                            <div class="content-title font18 mt-40 text-justify">
                                <p style="text-align: justify;">Xuy&ecirc;n suốt 25 năm h&agrave;nh tr&igrave;nh dựng
                                    x&acirc;y v&agrave; "ph&aacute;t triển c&ugrave;ng đất nước", THACO vinh dự nhận
                                    được
                                    nhiều bằng khen, giải thưởng thể hiện cho những đ&oacute;ng g&oacute;p thiết thực
                                    trong
                                    sản xuất kinh doanh, hoạt động cộng đồng v&agrave; sự nghiệp x&acirc;y dựng đất
                                    nước.&nbsp;</p>
                            </div>
                            <div class="bottom">
                                @foreach ($companyAchievement as $item)
                                    <div class="bottom-content" data-aos="fade-up" data-aos-duration="700"
                                        data-aos-delay="50" class="aos-init aos-animate">
                                        <div class="img-content">

                                            <img src="{{ Storage::url($item->image) }}" alt="{{ $item->year }}">
                                            <div class="year font24">
                                                {{ $item->year }}
                                            </div>
                                        </div>
                                        <div class="desc font18 text-justify">
                                            <p>{{ $item->description }}</p>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <div class="bottom-mb">
                                <div class="swiper-container slide-achivement" id="js-swiper-news-0"
                                    style="--swiper-navigation-color:#fff; --swiper-pagination-color:#000;">
                                    <div class="swiper-wrapper">
                                        @foreach ($companyAchievement as $item)
                                            <div class="swiper-slide">
                                                <div class="bottom-content" data-aos="fade-up" data-aos-duration="700"
                                                    data-aos-delay="50" class="aos-init aos-animate">
                                                    <div class="img-content">

                                                        <img src="{{ Storage::url($item->image) }}"
                                                            alt=" {{ $item->year }}">
                                                        <div class="year font24">
                                                            {{ $item->year }}
                                                        </div>
                                                    </div>
                                                    <div class="desc font18 text-justify">
                                                        <p> {{ $item->description }}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach


                                    </div>
                                    <div class="swiper-pagination"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade " id="achievement-1" role="tabpanel" aria-labelledby="field-1-tab">
                        <div class="content-tab" data-aos="fade-right" data-aos-duration="700" data-aos-delay="50"
                            class="aos-init aos-animate">
                            <div class="content-title font18 mt-40 text-justify">
                                <p>Với những đ&oacute;ng g&oacute;p, cống hiến kh&ocirc;ng mệt mỏi trong suốt
                                    h&agrave;nh
                                    tr&igrave;nh x&acirc;y dựng v&agrave; ph&aacute;t triển của THACO 25 năm qua,
                                    &Ocirc;ng
                                    Trần B&aacute; Dương - Chủ tịch HĐQT đ&atilde; vinh dự nhận được nhiều giải thưởng,
                                    danh
                                    hiệu cao qu&yacute;.</p>
                                <p><br /><!--EndFragment--></p>
                            </div>
                            <div class="bottom">
                                @foreach ($leaderAchievement as $item)
                                    <div class="bottom-content" data-aos="fade-up" data-aos-duration="700"
                                        data-aos-delay="50" class="aos-init aos-animate">
                                        <div class="img-content">
                                            <img src="{{ Storage::url($item->image) }}" alt="{{ $item->year }}">
                                            <div class="year font24">
                                                {{ $item->year }}
                                            </div>
                                        </div>
                                        <div class="desc font18 text-justify">
                                            <p>{{ $item->description }}</p>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <div class="bottom-mb">
                                <div class="swiper-container slide-achivement" id="js-swiper-news-1"
                                    style="--swiper-navigation-color:#fff; --swiper-pagination-color:#000;">
                                    <div class="swiper-wrapper">
                                        @foreach ($leaderAchievement as $item)
                                            <div class="swiper-slide">
                                                <div class="bottom-content" data-aos="fade-up" data-aos-duration="700"
                                                    data-aos-delay="50" class="aos-init aos-animate">
                                                    <div class="img-content">

                                                        <img src="{{ Storage::url($item->image) }}"
                                                            alt="{{ $item->year }}">
                                                        <div class="year font24">
                                                            {{ $item->year }}
                                                        </div>
                                                    </div>
                                                    <div class="desc font18 text-justify">
                                                        <p>{{ $item->description }}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach


                                    </div>
                                    <div class="swiper-pagination"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="develop-wrapper">
            <div class="develop__title pb-40" data-aos="fade-right" data-aos-duration="700" data-aos-delay="50"
                class="aos-init aos-animate">
                <div class="title_wrapper container-customize">
                    <img class="img-blue" src="{{ asset('img/arrow.png') }}" alt="icon">
                    <img class="img-white" src="{{ asset('img/icon-arrow-white.png') }}" alt="icon"
                        style="display:none">
                    <h2 class="font50 big-title"> QUÁ TRÌNH HÌNH THÀNH VÀ PHÁT TRIỂN</h2>
                </div>
            </div>
            <div class="develop-banner lazyloaded " style="background-image:url('{{ asset('img/bg-dark-1.png') }}')">
                <div class="develop-content-wrapper">
                    <div class="develop-content__slider">
                        <div class="container-customize">

                            <div class="cycle-list-wrap">
                                <div class="top">
                                    <ul class="slider slider-nav thumb-year">
                                        @foreach ($developmentProcess as $item)
                                            <li class="font30 item-slider">
                                                {{ $item->year }}
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                            <div class="bottom">
                                <div class="thumb-wrapper">
                                    <div class="slider slider-for">
                                        @foreach ($developmentProcess as $item)
                                            <div class="thumbnail-image ">
                                                <div class="content-wrapper">
                                                    <div class="image-slider">
                                                        <div class="img-thumb">
                                                            <div class="image">
                                                                <img class="img-pri"
                                                                    src="{{ Storage::url($item->image) }}"
                                                                    alt="" />

                                                            </div>
                                                        </div>

                                                        <div class="carousel-controls transparent-controls">
                                                            <button class="play active"><img
                                                                    src="{{ asset('img/play-button-1.png') }}"
                                                                    alt="icon"></button>
                                                            <button class="pause"><img
                                                                    src="{{ asset('img/pause-1.png') }}"
                                                                    alt="icon"></button>
                                                        </div>
                                                    </div>
                                                    <div class="content-slider scrollbar-custom">
                                                        <h3 class="title font24">
                                                        </h3>
                                                        <div class="desc__wrapper">
                                                            <div class="desc font18 text-justify">
                                                                <p style="text-align: justify;">{{ $item->description }}
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach

                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
