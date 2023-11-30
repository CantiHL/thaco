@extends('layouts.client.app')
@section('content')
    <section class="banner-post-detail">
        <a href="{{ route('clientnews', ['id' => $data->id]) }}">
            <img src="{{ Storage::url($data->image) }}" alt="" />
        </a>
        <div class="scroll-down" id="js-scroll-down">
            <img src="{{ asset('img/icon-scroll.png') }}" alt="icon">
        </div>
    </section>

    <div class="post-detail-wrapper">
        <div class="post-detail-content">

            <div class="container-customize content-middle__is-single">
                <div class="content-middle order-2">
                    <div class="content-main">
                        <div id="print-area-1" class="print-area">
                            <div class="post-name">
                                <h1 class="name font40 font-myria-bold"> {{ $data->title }}
                                </h1>
                            </div>
                            <div class="post-time-share">
                                <div class="left">

                                    <span class="author">{{ $data->name }} </span>
                                    <span class="">{{ $data->date }}</span>

                                </div>
                                <div class="right">


                                    <a href="https://www.facebook.com/sharer/sharer.php?u={{ route('clientnews', ['id' => $data->id]) }}"
                                        target="_blank">
                                        <i class="fab fa-facebook-f"></i>

                                    </a>

                                    <a href="https://www.linkedin.com/shareArticle?mini=true&url={{ route('clientnews', ['id' => $data->id]) }}={{ $data->short_content }}&source=Linkedin"
                                        title="Share on Linkedin" target="_blank">
                                        <i class="fab fa-linkedin-in"></i>
                                    </a>

                                    <a class="copy_link" href="{{ route('clientnews', ['id' => $data->id]) }}">
                                        <i class="fal fa-link"></i>
                                    </a>

                                    <a href="javascript:;" onclick="window.print();" class="print-button">
                                        <i class="fas fa-print"></i>
                                    </a>
                                </div>

                            </div>

                            <div class="post-content">
                                <div class="text-content">
                                    {!! $data->content !!}
                                </div>
                            </div>
                            <textarea id="printing-css" style="display:none;"></textarea>
                            <iframe id="printing-frame" name="print_frame" src="about:blank" style="display:none;"></iframe>
                        </div>
                        <div class="file-tag">

                            <div class="post-tag">
                                <i class="fas fa-tag"></i>
                                @foreach ($data->tag as $item)
                                    <div class="tag-item active">
                                        <a href="#">{{ $item }}</a>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                    </div>

                    <div class="post-related mt-40 mb-60">
                        <div class="post-related__title">
                            <img src="{{ asset('img/icon-title.png') }}" alt="">
                            <h2 class="font30 big-title">CÁC BÀI VIẾT LIÊN QUAN</h2>
                        </div>
                        <div class="post-related__list mt-40 mb-40">
                            <div class="swiper-container post-slide-relate">

                                <div class="swiper-wrapper">
                                    @foreach ($data_relate as $item)
                                        <div class="swiper-slide post_relate_content">
                                            <a href="{{ route('clientnews', ['id' => $item->id]) }}" class="text-dark">
                                                <div class="post-img">
                                                    <div class="post-thumbnail">
                                                        <img src="{{ Storage::url($item->image) }}" alt="">
                                                    </div>
                                                </div>

                                                <div class="post-content-bottom">
                                                    <h4 class="name font18 text-uppercase">{{ $item->title }}</h4>
                                                    <span class="time font18 text-dark">{{ $item->date }}</span>
                                                    <p class="desc font18">
                                                        {{ $item->content }}
                                                    </p>
                                                </div>
                                            </a>

                                        </div>
                                    @endforeach


                                </div>
                                <div class="swiper-button-next drop-shadow-button"> <img
                                        src="{{ asset('img/Icon-right.png') }}" alt="next">
                                </div>
                                <div class="swiper-button-prev drop-shadow-button"> <img
                                        src="{{ asset('img/icon-left.png') }}" alt="prev">
                                </div>

                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
