@extends('layouts.client.app')
@section('content')
    <section class="banner-page">
        <div class="swiper-container main-slider" style="--swiper-navigation-color:#fff; --swiper-pagination-color:#fff;">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <a class="post_link" href="javascript:;">
                        <img src="https://www.thacogroup.vn/storage/quan-he-co-dong/file-dieu-le-quy-che/toa-nha-sofic-1920x-860.jpg"
                            alt="" class="">
                    </a>
                </div>

            </div>
            <div class="swiper-pagination"></div>
            <div class="scroll-down" id="js-scroll-down">
                <img src="https://www.thacogroup.vn/themes/main/images/home/icon-scroll.png" alt="icon">
            </div>
        </div>
    </section>
    <!--breadcrumb-->
    <!---end breadcrumb---->

    <section class="media-newspapers mb-60 scroll-section">
        <div class="media-newspapers-wrapper">
            <div class="container-customize">
                <div class="shareholder-infomation mb-100">
                    <div class="loading d-none">
                        <img src="https://www.thacogroup.vn/themes/main/images/media/loading.gif" alt="Loading">
                    </div>
                    @yield('shareholder')
                    <div class="relationship-sibar">
                        <div class="relationship__content">
                            <div class="list-relationship-menu" data-aos="flip-right" data-aos-duration="500"
                                data-aos-delay="50" class="aos-init aos-animate">
                                <h3 class="font28 font-myria-bold text-uppercase"> QUAN HỆ CỔ ĐÔNG </h3>
                                <a wire:navigate class="item_link_shareholder list-group-item font18 font-myria-bold "
                                    href="{{ route('disclosure') }}">Điều
                                    lệ quy chế </a>
                                <a wire:navigate class="item_link_shareholder list-group-item font18 font-myria-bold "
                                    href="{{ route('regulation') }}">Công
                                    bố thông tin </a>
                                <a wire:navigate class="item_link_shareholder list-group-item font18 font-myria-bold "
                                    href="{{ route('shareholderInfo') }}">Thông tin cổ đông </a>
                                <a wire:navigate class="item_link_shareholder list-group-item font18 font-myria-bold "
                                    href="{{ route('annualReport') }}">Báo
                                    cáo thường niên </a>
                                <a wire:navigate class="item_link_shareholder list-group-item font18 font-myria-bold "
                                    href="{{ route('financial') }}">Báo
                                    cáo tài chính </a>
                            </div>
                        </div>
                        <div class="list-post-new">
                            <div class="wrap">
                                <h2 class="font-mi-bold font25" data-aos="fade-left" data-aos-duration="400"
                                    data-aos-delay="50" class="aos-init aos-animate">Tin tức mới</h2>
                                <ul class="" data-aos="flip-left" data-aos-duration="500" data-aos-delay="50"
                                    class="aos-init aos-animate">
                                    @foreach ($news as $item)
                                        <div class="post-new-item">
                                            <div class="post-thumbnail-wrap">
                                                <div class="post-thumbnail">
                                                    <a href="{{ route('clientnews', ['id' => $item->id]) }}"><img
                                                            src="{{ Storage::url($item->image) }}" alt="{{ $item->title }}"
                                                            alt=""></a>
                                                </div>
                                            </div>
                                            <div class="title font18">
                                                <a
                                                    href="{{ route('clientnews', ['id' => $item->id]) }}">{{ $item->title }}</a>
                                                <p class="time">{{ $item->date }}</p>
                                            </div>
                                        </div>
                                    @endforeach

                                </ul>

                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </section>
@endsection
