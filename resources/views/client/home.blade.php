@extends('layouts.client.app')
@section('content')
    <section class="banner-page">
        <div class="swiper-container main-slider" style="--swiper-navigation-color:#fff; --swiper-pagination-color:#fff;">
            <div class="swiper-wrapper">

                <div class="swiper-slide">
                    <a class="post_link" href="javascript:;">
                        <img class="" src="{{ asset('img/banner/1 (9).jpg') }}" alt="image">
                    </a>
                </div>
                @foreach ($newsList as $item)
                    <div class="swiper-slide">
                        <a class="post_link" href="{{ route('clientnews', ['id' => $item->id]) }}">
                            <img class="" src="{{ Storage::url($item->image) }}" alt="">
                        </a>


                        <div class="">
                            <div class="bg-box
                        box-left" data-aos="zoom-in-up"
                                data-aos-duration="1000" data-aos-delay="50"
                                style=" background-color:  #00529c; opacity: 70%">

                            </div>
                            <div class="content box-left" data-aos="zoom-in-up" data-aos-duration="1000" data-aos-delay="50"
                                class="aos-init aos-animate">
                                <h1 class="font24 title-post">

                                    {{ $item->title }}
                                </h1>
                                <div class="date font18">
                                    <span class="text-light">{{ $item->date }}</span>
                                </div>
                                <div class="description font18 text-justify">
                                    {{ $item->content }}
                                </div>
                                <a href="{{ route('clientnews', ['id' => $item->id]) }}" class="read-more"
                                    title="Xem thêm">Xem thêm <span><i class="fas fa-arrow-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="swiper-pagination"></div>
            <div class="scroll-down" id="js-scroll-down">
                <img src="{{ asset('img/icon-scroll.png') }}" alt="icon">
            </div>
        </div>
    </section>

    <section class="scroll-section">
        <div class="field-activity-wrapper mt-40">
            <div class="container-customize">
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
                            <div class="swiper-button-prev drop-shadow-button"> <img src="{{ asset('img/icon-left.png') }}"
                                    alt="">
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <div class="partner-wrapper mt-40 
    " style="background-image:url()">
        <h3 class="title__company  font40" data-aos="fade-right" data-aos-duration="700" data-aos-delay="50"
            class="aos-init aos-animate">
            TẬP ĐOÀN THÀNH VIÊN
        </h3>

        <div class="partner-banner parallax-window" data-parallax="scroll">
            <div class="container-customize ">
                <div class="logo-partner">
                    <div class="logo-desktop">
                        <div class="swiper-container logo-company"
                            style="--swiper-navigation-color:#fff; --swiper-pagination-color:#fff;">
                            <div class="swiper-wrapper">
                                @foreach ($members as $item)
                                    <div class="swiper-slide">
                                        <div class="logo-item-slide">
                                            <div class="logo">
                                                <a target="_blank" href="https://thilogi.vn/">
                                                    <img class="" src="{{ Storage::url($item->image) }}"
                                                        alt="logo">
                                                </a>
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
    <div class="news-home-wrapper">
        <div class="container-customize">
            <div class="news-home__content">
                <div class="swiper-container new-post-slide"
                    style="--swiper-navigation-color:#fff; --swiper-pagination-color:#000;">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            @foreach ($lastest as $item)
                                <div class="news-home__top">
                                    <div class="img-post">
                                        <div class="img-thumb">
                                            <a href="{{ route('clientnews', ['id' => $item->id]) }}">
                                                <img class="img-mw-100" src="{{ Storage::url($item->image) }}"
                                                    alt="{{ $item->title }}">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="news-post">
                                        <a href="{{ route('clientnews', ['id' => $item->id]) }}"
                                            title="{{ $item->title }}">
                                            <h4 class="name font20">{{ $item->title }}</h4>
                                        </a>
                                        <span class="time font18">{{ $item->date }}</span>
                                        <p class="description font18 text-justify">{!! $item->content !!}</p>
                                        <a href="{{ route('clientnews', ['id' => $item->id]) }}"
                                            class="read-more text-uppercase" title="Xem thêm">Xem thêm
                                            <span>
                                                <i class="fas fa-arrow-right"></i>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
                <div class="post-slider">
                    <div class="swiper-container post-slide-bottom">
                        <div class="swiper-wrapper">
                            @foreach ($newsList as $item)
                                <div class="swiper-slide d-flex justify-content-center">
                                    <div class="post_content_bottom">
                                        <a class="post-wrapper  h-100"
                                            href="{{ route('clientnews', ['id' => $item->id]) }}"
                                            title="{{ $item->title }}">
                                            <div class="post-img">
                                                <div class="post-thumbnail">
                                                    <img src="{{ Storage::url($item->image) }}"
                                                        alt="{{ $item->title }}">
                                                </div>
                                            </div>
                                            <div class="post-content">
                                                <h4 class="post_name font20">{{ $item->title }}</h4>
                                                <span class="time font18">{{ $item->date }}</span>
                                                <p class="post_description font18">{!! $item->content !!}
                                                </p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="swiper-button-next drop-shadow-button"> <img src="{{ asset('img/Icon-right.png') }}"
                                alt="next">
                        </div>
                        <div class="swiper-button-prev drop-shadow-button"> <img src="{{ asset('img/icon-left.png') }}"
                                alt="prev">
                        </div>

                    </div>

                </div>

            </div>
            <div class="news-home-mobile" style="display: none">
                <div class="post-wrapper">
                    <div class="swiper-container post-news-mobile"
                        style="--swiper-navigation-color:#fff; --swiper-pagination-color:#000;">
                        <div class="swiper-wrapper">
                            @foreach ($newsListAll as $item)
                                <div class="swiper-slide">
                                    <div class="post-item mb-4">
                                        <a class="" href="{{ route('clientnews', ['id' => $item->id]) }}"
                                            title="{{ $item->title }}">
                                            <div class="post-thumbmail">
                                                <div class="post-img">
                                                    <img class="img-mw-100" src="{{ Storage::url($item->image) }}"
                                                        alt="{{ $item->title }}">
                                                </div>
                                            </div>
                                            <div class="post-content">
                                                <h4 class="post_name font20">{{ $item->title }}</h4>
                                                <span class="time font18">{{ $item->date }}</span>
                                                <p class="post_description font18">{{ $item->content }}
                                                </p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            @endforeach


                        </div>

                        <div class="control-slide">
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-pagination pagination-field"></div>
                            <div class="swiper-button-next"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    </div>

    </div>
    <div class="media-home-wrapper ">
        <div class="media-home-banner">
            <div class="swiper-container field-activity-slide-top"
                style="--swiper-navigation-color:#fff; --swiper-pagination-color:#fff;">
                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <img src="{{ asset('img/banner/1 (5).jpg') }}" alt="image">
                    </div>

                </div>
                <div class="swiper-pagination"></div>
                <a href="#" class="read-more" title="Xem thêm">Xem thêm</a>
            </div>
        </div>
    </div>
    <div class="recruitment-wrapper">
        <div class="recruitment-banner " style="background-image:url({{ asset('img/banner/1-2-1.jpg') }})">
            <div class="swiper-content">
                <div class="swiper-content__desc">
                    <h3 class="title font28">TUYỂN DỤNG</h3>
                    <p class="description font24 text-justify">
                        THACO mong muốn tạo nên môi trường làm việc kỷ luật, văn hóa, đề cao tính nhân văn. Tại đây mỗi nhân
                        viên được quan tâm tạo điều kiện để rèn luyện, phát triển bản thân và thăng tiến trong sự nghiệp
                    </p>
                    <div class="link-apply">
                        <a target="_blank" href="https://tuyendung.thaco.com.vn/" class="btn-apply font24"
                            title="https://tuyendung.thaco.com.vn/">Ứng tuyển ngay</a>
                    </div>

                </div>
                <div class="bottom_slider_wrapper">
                    <div class="title_label">
                        <h3 class="title font28 font-myria-bold">Vị trí</h3>
                    </div>

                    <div class="swiper-container recruitment-slider"
                        style="--swiper-navigation-color:#fff; --swiper-pagination-color:#fff;">
                        <div class="swiper-wrapper">
                            @foreach ($recruits as $item)
                                <div class="swiper-slide">
                                    <div class="swiper-content-bottom">
                                        <a target="_blank" href="{{ $item->link_job }}" title="{{ $item->link_job }}">
                                            <p class="postion-apply font28">
                                                {{ $item->name }}
                                            </p>
                                        </a>
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
@endsection
