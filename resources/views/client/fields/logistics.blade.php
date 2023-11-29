@extends('layouts.client.app')
@section('content')
    <div class="field-of-activity">
        <section class="banner-page">
            <div class="swiper-container main-slider" style="--swiper-navigation-color:#fff; --swiper-pagination-color:#fff;">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <a class="post_link" href="javascript:;">
                            <img class="" src="{{ asset('img/banner/1 (5).jpg') }}" alt="image">
                        </a>
                    </div>
                    @foreach ($newsListAll as $item)
                        <div class="swiper-slide item-slider-top">

                            <a class="post_link" href="{{ route('clientnews', ['id' => $item->id]) }}">
                                <img src="{{ Storage::url($item->image) }}" alt="">
                            </a>

                            <div class="box-banner-wrapper">
                                <div class="post-banner" data-aos="zoom-in-up" data-aos-duration="1000" data-aos-delay="50"
                                    class="aos-init aos-animate" style="background-color: #00539a; opacity: 72%">
                                </div>


                                <div class="content" data-aos="zoom-in-up" data-aos-duration="1000" data-aos-delay="50"
                                    class="aos-init aos-animate">

                                    <h1 class="font24 title-post">
                                        {{ $item->title }}
                                    </h1>
                                    <div class="date">
                                        <span class="text-light font18">{{ $item->date }}</span>
                                    </div>
                                    <div class="description font18 text-justify">
                                        {{ $item->content }}
                                    </div>
                                    <a href="{{ route('clientnews', ['id' => $item->id]) }}" class="read-more"
                                        title="Xem thêm">Xem
                                        thêm <span><i class="fas fa-arrow-right"></i></span></a>
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
            <div class="container-customize">
                <div class="commercial-field  mt-60 mb-60">
                    <div class="commercial-field__left">
                        <div class="left-top d-flex justify-content-left" data-aos="fade-right" data-aos-duration="700"
                            data-aos-delay="50" class="aos-init aos-animate">

                            <h3 class="text-uppercase font20" style="color: #00539a">{{ $data->field_name }} <br>

                                <span class="text font40"> {{ $title }} </span>
                            </h3>

                        </div>
                        <div class="line" style="background-color: #00539a">
                        </div>

                        <p class="content mt-25 font18" data-aos="flip-left" data-aos-duration="500" data-aos-delay="50"
                            class="aos-init aos-animate">
                        <p style="text-align: justify;">{{ $description }}
                        </p>

                    </div>
                    <div class="commercial-field__right">
                        <div class="swiper-container commercial-field-slider"
                            style="--swiper-navigation-color:#fff; --swiper-pagination-color:#fff;">
                            <div class="swiper-wrapper">

                                <div class="swiper-slide">
                                    <div class="img-field">
                                        <div class="img-thumb">
                                            <img src="{{ Storage::url($data->member_image) }}" alt="slide"
                                                class="img-slider img-mw-100">
                                        </div>

                                    </div>

                                </div>

                                <div class="swiper-slide">
                                    <div class="img-field">
                                        <div class="img-thumb">
                                            <img src="{{ Storage::url($data->field_image) }}" alt="slide"
                                                class="img-slider img-mw-100">
                                        </div>

                                    </div>

                                </div>

                            </div>

                            <div class="swiper-pagination"></div>
                        </div>

                    </div>
                </div>



            </div>
        </section>

        <div class="future-goal-banner-activity mt-60 mb-60 "
            style="background-image:url('{{ asset('img/tamnhinauto-1-1.jpg') }}')">
            <div class="container-customize">
                <div class="future-goal-wrapper ">
                    <div class="future-goal-content twoblock">
                        <div class="future-goal-content__item">
                            <div class="future-goal p-lr-90 " data-aos="fade-up" data-aos-duration="700" data-aos-delay="50"
                                class="aos-init aos-animate">
                                <img src="{{ asset('img/tam-nhinn.png') }}" alt="TẦM NHÌN">
                                <h3 class="title font40 text-light">TẦM NHÌN</h3>

                                <div class="desc font18 scrollbar-custom">
                                    <p style="text-align: justify;">“Tập đoàn đầu tư - Xây dựng hạ tầng giao thông; khu công
                                        nghiệp; khu đô thị và dự án bất động sản có tính tích hợp cao, đáp ứng xu thế
                                        phát triển”.</p>
                                </div>


                            </div>
                        </div>
                        <div class="future-goal-content__item">
                            <div class="future-goal p-lr-90 last" data-aos="fade-up" data-aos-duration="700"
                                data-aos-delay="150" class="aos-init aos-animate">
                                <img src="{{ asset('img/su-menh.png') }}" alt="SỨ MỆNH">
                                <h3 class="title font40 text-light">SỨ MỆNH</h3>

                                <div class="desc font18 scrollbar-custom">
                                    <p style="text-align: justify;">Mang lại giá trị bền vững cho khách hàng, xã hội và có
                                        đóng góp cho nền kinh tế địa phương và đất nước.</p>
                                </div>


                            </div>
                        </div>


                    </div>
                </div>

            </div>

        </div>

        <div class="activity-content-detail-slide">
            <div class="activity-content-detail-slide__detail-content">
                <div class="wrapper mb-40 mt-40 ">
                    <div class="main-content-left">
                        @isset($first_giaothong)
                            <div class="content">
                                <h2 class="text-uppercase title font27" style="color: #00539a">
                                    {{ $first_giaothong->title }}

                                </h2>
                                <p class="text font18 scrollbar-custom">
                                    {{ $first_giaothong->description }}
                                </p>


                                <div class="control-slide d-none ">
                                    <div class="swiper-button-prev"></div>
                                    <div class="swiper-pagination pagination-field" style="background-color: #00539a">
                                    </div>
                                    <div class="swiper-button-next"></div>

                                </div>
                            </div>
                        @endisset

                    </div>
                    <div class="nonslide-wrapper main-content-right  ">
                        <div class="activity-detail">

                            <div class="row item">
                                @foreach ($giaothong_diff as $item)
                                    <div class="col content">
                                        <div class="bg"></div>
                                        <img src="{{ Storage::url($item->image) }}" alt="slide" class="">

                                        <h2 class=" title text-uppercase text-light font27">
                                            {{ $item->title }}
                                        </h2>
                                        <div class="detail-wrap" onmouseover="this.style.background='#00539a'">
                                            <div class="detail">
                                                <h2 class="titlee text-uppercase text-light font27">
                                                    {{ $item->title }}
                                                </h2>
                                                <p class="  text text-light font18 scrollbar-custom ">
                                                    {{ $item->description }}
                                                </p>

                                                <a target="_blank" href="https://thacoauto.vn/nghien-cuu-va-phat-trien"
                                                    class="readmore text-uppercase text-light">Xem thêm<span><i
                                                            class="fas fa-arrow-right"></i></span></a>
                                            </div>
                                        </div>

                                    </div>
                                @endforeach



                            </div>

                        </div>
                    </div>

                </div>
                <div class="wrapper mb-40 mt-40 ">
                    <div class="main-content-left">
                        @isset($first_khucn)
                            <div class="content">
                                <h2 class="text-uppercase title font27" style="color: #00539a">
                                    {{ $first_khucn->title }}
                                </h2>

                                <p class="text font18 scrollbar-custom">
                                    {{ $first_khucn->description }}
                                </p>
                                <div class="control-slide  ">
                                    <div class="swiper-button-prev"></div>
                                    <div class="swiper-pagination pagination-field" style="background-color: #00539a">
                                    </div>
                                    <div class="swiper-button-next"></div>

                                </div>
                            </div>
                        @endisset
                    </div>
                    <div class="slide-wrapper main-content-right ">
                        <div class="swiper-container swiper-content-detail">
                            <div class="swiper-wrapper main-content-right">
                                @foreach ($khucn_diff as $item)
                                    <div class="swiper-slide">
                                        <div class="bg"></div>
                                        <img src="{{ Storage::url($item->image) }}" alt="slide" class="bg-img">
                                        <h2 class="title text-uppercase text-light font27">
                                            {{ $item->title }}
                                        </h2>

                                        <div class="detail-wrap" onmouseover="this.style.background='#00539a'">
                                            <div class="detail">
                                                <h2 class="titlee text-uppercase text-light font27 ">
                                                    {{ $item->title }}
                                                </h2>
                                                <p class="text text-light font18 scrollbar-custom">
                                                    {{ $item->description }}
                                                </p>
                                                <a target="_blank" href="{{ $item->link }}"
                                                    class="readmore text-uppercase text-light">Xem thêm <span><i
                                                            class="fas fa-arrow-right"></i>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach


                            </div>
                        </div>
                    </div>


                </div>
                <div class="wrapper mb-40 mt-40 ">
                    <div class="main-content-left">
                        @isset($first_khudothi)
                            <div class="content">
                                <h2 class="text-uppercase title font27" style="color: #00539a">
                                    {{ $first_khudothi->title }}

                                </h2>
                                <p class="text font18 scrollbar-custom">
                                    {{ $first_khudothi->description }}
                                </p>
                                <div class="control-slide d-none ">
                                    <div class="swiper-button-prev"></div>
                                    <div class="swiper-pagination pagination-field" style="background-color: #00539a">
                                    </div>
                                    <div class="swiper-button-next"></div>

                                </div>
                            </div>
                        @endisset

                    </div>
                    <div class="nonslide-wrapper main-content-right  ">
                        <div class="activity-detail">

                            <div class="row item">
                                @foreach ($khudothi_diff as $item)
                                    <div class="col content">
                                        <div class="bg"></div>
                                        <img src="{{ Storage::url($item->image) }}" alt="slide" class="">

                                        <h2 class=" title text-uppercase text-light font27">
                                            {{ $item->title }}
                                        </h2>
                                        <div class="detail-wrap" onmouseover="this.style.background='#00539a'">
                                            <div class="detail">
                                                <h2 class="titlee text-uppercase text-light font27">
                                                    {{ $item->title }}
                                                </h2>
                                                <p class="  text text-light font18 scrollbar-custom ">
                                                    {{ $item->description }}
                                                </p>

                                                <a target="_blank" href="https://thacoauto.vn/nghien-cuu-va-phat-trien"
                                                    class="readmore text-uppercase text-light">Xem thêm<span><i
                                                            class="fas fa-arrow-right"></i></span></a>
                                            </div>
                                        </div>

                                    </div>
                                @endforeach



                            </div>

                        </div>
                    </div>

                </div>
                <div class="wrapper mb-40 mt-40 ">
                    <div class="main-content-left">
                        @isset($first_batdongsan)
                            <div class="content">
                                <h2 class="text-uppercase title font27" style="color: #00539a">
                                    {{ $first_batdongsan->title }}
                                </h2>

                                <p class="text font18 scrollbar-custom">
                                    {{ $first_batdongsan->description }}
                                </p>
                                <div class="control-slide  ">
                                    <div class="swiper-button-prev"></div>
                                    <div class="swiper-pagination pagination-field" style="background-color: #00539a">
                                    </div>
                                    <div class="swiper-button-next"></div>

                                </div>
                            </div>
                        @endisset
                    </div>
                    <div class="slide-wrapper main-content-right ">
                        <div class="swiper-container swiper-content-detail">
                            <div class="swiper-wrapper main-content-right">
                                @foreach ($batdongsan_diff as $item)
                                    <div class="swiper-slide">
                                        <div class="bg"></div>
                                        <img src="{{ Storage::url($item->image) }}" alt="slide" class="bg-img">
                                        <h2 class="title text-uppercase text-light font27">
                                            {{ $item->title }}
                                        </h2>

                                        <div class="detail-wrap" onmouseover="this.style.background='#00539a'">
                                            <div class="detail">
                                                <h2 class="titlee text-uppercase text-light font27 ">
                                                    {{ $item->title }}
                                                </h2>
                                                <p class="text text-light font18 scrollbar-custom">
                                                    {{ $item->description }}
                                                </p>
                                                <a target="_blank" href="{{ $item->link }}"
                                                    class="readmore text-uppercase text-light">Xem thêm <span><i
                                                            class="fas fa-arrow-right"></i>
                                                    </span>
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
            <div class="activity-content-detail-slide__mb">
                <div class="wrapper mb-40 mt-40 ">
                    <div class="main-content-left">
                        @isset($first_batdongsan)
                            <div class="content">
                                <h2 class="text-uppercase title font27" style="color: #00539a">
                                    {{ $first_batdongsan->title }}

                                </h2>
                                <p class="text font18 scrollbar-custom">
                                    {{ $first_batdongsan->description }}
                                </p>
                                <div class="control-slide">
                                    <div class="swiper-button-prev"></div>
                                    <div class="swiper-pagination pagination-field" style="background-color: #00539a"></div>
                                    <div class="swiper-button-next"></div>

                                </div>
                            </div>
                        @endisset
                    </div>
                    <div class="slide-wrapper main-content-right ">
                        <div class="swiper-container swiper-content-detail">
                            <div class="swiper-wrapper main-content-right">
                                @foreach ($batdongsan_diff as $item)
                                    <div class="swiper-slide">
                                        <div class="bg"></div>
                                        <img src="{{ Storage::url($item->image) }}" alt="slide" class="bg-img">
                                        <h2 class="title text-uppercase text-light font27">
                                            {{ $item->title }}
                                        </h2>
                                        <div class="detail-wrap" onmouseover="this.style.background='#00539a'">
                                            <div class="detail">
                                                <h2 class="titlee text-uppercase text-light font27">
                                                    {{ $item->title }}
                                                </h2>
                                                <p class="text text-light font18 scrollbar-custom">
                                                    {{ $item->description }}
                                                </p>
                                                <a target="_blank" href="{{ $item->link }}"
                                                    class="readmore text-uppercase text-light">Xem thêm<span><i
                                                            class="fas fa-arrow-right"></i>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>


                                    </div>
                                @endforeach


                            </div>
                        </div>
                    </div>
                </div>
                <div class="wrapper mb-40 mt-40 ">
                    <div class="main-content-left">
                        @isset($first_khucn)
                            <div class="content">
                                <h2 class="text-uppercase title font27" style="color: #00539a">
                                    {{ $first_khucn->title }}

                                </h2>
                                <p class="text font18 scrollbar-custom">
                                    {{ $first_khucn->description }}
                                </p>
                                <div class="control-slide">
                                    <div class="swiper-button-prev"></div>
                                    <div class="swiper-pagination pagination-field" style="background-color: #00539a"></div>
                                    <div class="swiper-button-next"></div>

                                </div>
                            </div>
                        @endisset
                    </div>
                    <div class="slide-wrapper main-content-right ">
                        <div class="swiper-container swiper-content-detail">
                            <div class="swiper-wrapper main-content-right">
                                @foreach ($khucn_diff as $item)
                                    <div class="swiper-slide">
                                        <div class="bg"></div>
                                        <img src="{{ Storage::url($item->image) }}" alt="slide" class="bg-img">
                                        <h2 class="title text-uppercase text-light font27">
                                            {{ $item->title }}
                                        </h2>
                                        <div class="detail-wrap" onmouseover="this.style.background='#00539a'">
                                            <div class="detail">
                                                <h2 class="titlee text-uppercase text-light font27">
                                                    {{ $item->title }}
                                                </h2>
                                                <p class="text text-light font18 scrollbar-custom">
                                                    {{ $item->description }}
                                                </p>
                                                <a target="_blank" href=" https://thacoauto.vn/kinh-doanh#xe-du-lich"
                                                    class="readmore text-uppercase text-light">Xem thêm<span><i
                                                            class="fas fa-arrow-right"></i>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="wrapper mb-40 mt-40 ">
                    <div class="main-content-left">
                        @isset($first_batdongsan)
                            <div class="content">
                                <h2 class="text-uppercase title font27" style="color: #00539a">
                                    {{ $first_batdongsan->title }}

                                </h2>
                                <p class="text font18 scrollbar-custom">
                                    {{ $first_batdongsan->description }}
                                </p>
                                <div class="control-slide">
                                    <div class="swiper-button-prev"></div>
                                    <div class="swiper-pagination pagination-field" style="background-color: #00539a"></div>
                                    <div class="swiper-button-next"></div>

                                </div>
                            </div>
                        @endisset
                    </div>
                    <div class="slide-wrapper main-content-right ">
                        <div class="swiper-container swiper-content-detail">
                            <div class="swiper-wrapper main-content-right">
                                @foreach ($batdongsan_diff as $item)
                                    <div class="swiper-slide">
                                        <div class="bg"></div>
                                        <img src="{{ Storage::url($item->image) }}" alt="slide" class="bg-img">
                                        <h2 class="title text-uppercase text-light font27">
                                            {{ $item->title }}
                                        </h2>
                                        <div class="detail-wrap" onmouseover="this.style.background='#00539a'">
                                            <div class="detail">
                                                <h2 class="titlee text-uppercase text-light font27">
                                                    {{ $item->title }}
                                                </h2>
                                                <p class="text text-light font18 scrollbar-custom">
                                                    {{ $item->description }}
                                                </p>
                                                <a target="_blank" href="{{ $item->link }}"
                                                    class="readmore text-uppercase text-light">Xem thêm<span><i
                                                            class="fas fa-arrow-right"></i>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="wrapper mb-40 mt-40 ">
                    <div class="main-content-left">
                        @isset($first_khudothi)
                            <div class="content">
                                <h2 class="text-uppercase title font27" style="color: #00539a">
                                    {{ $first_khudothi->title }}

                                </h2>
                                <p class="text font18 scrollbar-custom">
                                    {{ $first_khudothi->description }}
                                </p>
                                <div class="control-slide">
                                    <div class="swiper-button-prev"></div>
                                    <div class="swiper-pagination pagination-field" style="background-color: #00539a"></div>
                                    <div class="swiper-button-next"></div>

                                </div>
                            </div>
                        @endisset
                    </div>
                    <div class="slide-wrapper main-content-right ">
                        <div class="swiper-container swiper-content-detail">
                            <div class="swiper-wrapper main-content-right">
                                @foreach ($khudothi_diff as $item)
                                    <div class="swiper-slide">
                                        <div class="bg"></div>
                                        <img src="{{ Storage::url($item->image) }}" alt="slide" class="bg-img">
                                        <h2 class="title text-uppercase text-light font27">
                                            {{ $item->title }}
                                        </h2>
                                        <div class="detail-wrap" onmouseover="this.style.background='#00539a'">
                                            <div class="detail">
                                                <h2 class="titlee text-uppercase text-light font27">
                                                    {{ $item->title }}
                                                </h2>
                                                <p class="text text-light font18 scrollbar-custom">
                                                    {{ $item->description }}
                                                </p>
                                                <a target="_blank" href="{{ $item->link }}"
                                                    class="readmore text-uppercase text-light">Xem thêm<span><i
                                                            class="fas fa-arrow-right"></i>
                                                    </span>
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

        <div class="activity-news mt-60 mb-60">
            <div class="activity-news__top container-customize mt-40 mb-40">
                <div class="title ">

                    <h2 class="text-uppercase font40" style="color: #00539a">TIN TỨC</h2>
                    <div class="line" style="background-color: #00539a">
                    </div>

                </div>

                <div class="readmore text-uppercase font-weight-bold">
                    <a href="{{ route('home') }}" style="color: #00539a">Xem thêm
                        <span>
                            <i class="fas fa-arrow-right"></i>
                        </span>
                    </a>
                </div>
            </div>

            <div class="swiper-container slide-news">
                <div class="swiper-wrapper">

                    @foreach ($newsListAll as $item)
                        <div class="swiper-slide">

                            <div class="news-top">
                                <a href="{{ route('clientnews', ['id' => $item->id]) }}"><img
                                        src="{{ Storage::url($item->image) }}" alt="{{ $item->title }}"></a>
                            </div>
                            <div class="news-bottom">
                                <a href="{{ route('clientnews', ['id' => $item->id]) }}" class="text-dark">
                                    <h4 class="title text-uppercase font20">
                                        {{ $item->title }}
                                    </h4>
                                    <div class="date font18">
                                        {{ $item->date }}
                                    </div>
                                    <div class="desc font18">
                                        {{ $item->content }}
                                    </div>
                                </a>
                            </div>


                        </div>
                    @endforeach
                </div>

                <div class="swiper-button-prev" style="background-color: #00539a"></div>
                <div class="swiper-button-next" style="background-color: #00539a"></div>

                <div class="swiper-pagination"></div>
            </div>
            <div class="arrow">
                <a href="https://thacoauto.vn/" target="_blank">
                    <!-- <i class="fad fa-chevron-double-down" style="color: #00539a"></i> -->
                    <span style="border-bottom: 5px solid #00539a;border-right:5px solid #00539a"></span>
                    <span style="border-bottom: 5px solid #00539a;border-right:5px solid #00539a"></span>
                    <span style="border-bottom: 5px solid #00539a;border-right:5px solid #00539a"></span>

                </a>

            </div>

        </div>



    </div>
    </div>
@endsection
