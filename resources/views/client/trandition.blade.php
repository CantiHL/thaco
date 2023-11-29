@extends('layouts.client.app')
@section('content')
    <section class="banner-page">
        <div class="swiper-container main-slider" style="--swiper-navigation-color:#fff; --swiper-pagination-color:#fff;">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <a class="post_link" href="javascript:;">
                        <img class="" src="{{ asset('img/banner/1 (10).jpg') }}" alt="image">
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
                <li class="breadcrumb-item active">Văn hóa THACO
                    <meta itemprop="name" content="Văn hóa THACO" />
                    <meta itemprop="position" content="2" />
                </li>
            </ol>
        </div>
    </div>
    <section class="about-us cultural-section2 scroll-section">
        <div class="container-customize">
            <div class="about-us__title" data-aos="fade-right" data-aos-duration="700" data-aos-delay="50"
                class="aos-init aos-animate">
                <div class="icon-title">
                    <img src="{{ asset('img/arrow.png') }}" alt="icon">
                </div>

                <h1 class="font50 big-title">VĂN HÓA THACO </h1>
            </div>
            <div class="about-us__content mt-40 text-justify font18" data-aos="fade-right" data-aos-duration="700"
                data-aos-delay="50" class="aos-init aos-animate">
                <p style="text-align: justify;">Với mục ti&ecirc;u trở th&agrave;nh Tập đo&agrave;n c&ocirc;ng nghiệp đa
                    ng&agrave;nh, mang lại gi&aacute; trị cho kh&aacute;ch h&agrave;ng, x&atilde; hội v&agrave;
                    c&oacute; đ&oacute;ng g&oacute;p quan trọng v&agrave;o sự ph&aacute;t triển của nền kinh tế Việt
                    Nam, THACO kh&ocirc;ng ngừng đầu tư ph&aacute;t triển sức mạnh nội lực, đổi mới tư duy v&agrave;
                    h&agrave;nh động, n&acirc;ng chất, n&acirc;ng tầm của đội ngũ nh&acirc;n sự. Để l&agrave;m được
                    những điều n&agrave;y, một trong những yếu tố quan trọng để điều h&agrave;nh, quản trị c&ocirc;ng ty
                    phải kể đến ch&iacute;nh l&agrave; văn h&oacute;a THACO.</p>
                <p style="text-align: justify;">Lu&ocirc;n quan niệm CBNV l&agrave; nguồn lực quan trọng tạo n&ecirc;n
                    sự th&agrave;nh c&ocirc;ng v&agrave; ph&aacute;t triển bền vững, văn h&oacute;a THACO hướng đến việc
                    x&acirc;y dựng một đội ngũ nh&acirc;n sự c&oacute; &yacute; ch&iacute; mạnh mẽ; th&aacute;i độ
                    l&agrave;m việc t&iacute;ch cực; t&iacute;nh s&aacute;ng tạo cao v&agrave; &yacute; thức trau dồi
                    năng lực chuy&ecirc;n m&ocirc;n trong m&ocirc;i trường kỷ luật, đ&oacute;ng g&oacute;p v&agrave;o sự
                    ph&aacute;t triển của c&ocirc;ng ty, qua đ&oacute; trở th&agrave;nh người hữu &iacute;ch của
                    x&atilde; hội, đất nước.</p>
                <p style="text-align: justify;">Với những đặc th&ugrave; của lĩnh vực sản xuất c&ocirc;ng nghiệp,
                    đ&ograve;i hỏi chất lượng v&agrave; tầm nh&igrave;n về sự ph&aacute;t triển bền vững, THACO lấy kỷ
                    luật l&agrave;m nền tảng, định hướng để x&acirc;y dựng văn h&oacute;a. Theo đ&oacute;, c&ocirc;ng ty
                    đề cao v&agrave; tập trung n&acirc;ng cao &yacute; thức kỷ luật, h&agrave;nh động kỷ luật, con người
                    kỷ luật trong đội ngũ nh&acirc;n sự THACO. Để ph&aacute;t triển nguồn nh&acirc;n lực, n&acirc;ng cao
                    &yacute; thức t&aacute;c phong c&ocirc;ng nghiệp, THACO đề ra c&aacute;c chuẩn mực ứng xử thể hiện
                    đặc trưng văn h&oacute;a l&agrave;: <strong>T&ocirc;n trọng - Trung thực - Tr&aacute;ch nhiệm - Tận
                        T&acirc;m - Th&acirc;n thiện</strong>.</p>
                <p style="text-align: justify;">Việc định hướng c&aacute;c ứng xử tại THACO theo t&iacute;nh kỷ luật
                    được hướng dẫn cụ thể bằng c&aacute;c ti&ecirc;u chuẩn của nguy&ecirc;n tắc 8T: <strong>Tận
                        t&acirc;m &ndash; Trung thực - Tr&iacute; tuệ - Tự tin &ndash; T&ocirc;n trọng &ndash; Trung
                        t&iacute;n &ndash; Tận t&igrave;nh &ndash; Thuận tiện</strong>. 8 yếu tố n&agrave;y li&ecirc;n
                    kết, lồng gh&eacute;p v&agrave;o nhau linh hoạt trong mỗi ứng xử v&agrave; mọi hoạt động của THACO,
                    con người THACO.</p>
                <p style="text-align: justify;">B&ecirc;n cạnh t&iacute;nh kỷ luật, văn h&oacute;a THACO c&ograve;n đề
                    cao t&iacute;nh nh&acirc;n văn <strong>&ldquo;đ&oacute;ng g&oacute;p, cống hiến cho x&atilde;
                        hội&rdquo; </strong>th&ocirc;ng qua sản phẩm v&agrave; dịch vụ, lu&ocirc;n thể hiện
                    <strong>&ldquo;tr&aacute;ch nhiệm với x&atilde; hội&rdquo;</strong>. Trong những năm qua,
                    <strong>&ldquo;Ti&ecirc;u ch&iacute; 8 chữ T&rdquo;</strong> đ&oacute;ng vai tr&ograve; cốt
                    l&otilde;i trong Văn h&oacute;a THACO m&agrave; mỗi CBNV hướng đến, g&oacute;p phần tạo n&ecirc;n
                    h&igrave;nh ảnh thương hiệu của THACO, ti&ecirc;u biểu cho nền c&ocirc;ng nghiệp của đất nước.
                </p>
                <p style="text-align: justify;">Đồng thời, c&ocirc;ng ty tạo m&ocirc;i trường l&agrave;m việc đặc
                    th&ugrave; v&agrave; ưu việt để nh&acirc;n sự ph&aacute;t triển to&agrave;n diện đ&aacute;p ứng
                    y&ecirc;u cầu hội nhập, đ&oacute;ng g&oacute;p v&agrave;o qu&aacute; tr&igrave;nh ph&aacute;t triển
                    kinh tế, văn h&oacute;a, x&atilde; hội của quốc gia. Văn h&oacute;a THACO thể hiện t&iacute;nh đại
                    diện của một doanh nghiệp kh&ocirc;ng chỉ ở sản phẩm hay thương hiệu, m&agrave; c&ograve;n thể hiện
                    ở mỗi nh&acirc;n sự th&ocirc;ng qua c&aacute;ch ứng xử của m&igrave;nh trong c&ocirc;ng việc
                    v&agrave; đời sống h&agrave;ng ng&agrave;y, với phương ch&acirc;m &ldquo;mỗi nh&acirc;n sự l&agrave;
                    một đại sứ thương hiệu&rdquo;.</p>
                <p style="text-align: justify;"><!--EndFragment--></p>
            </div>

        </div>
    </section>

    <section class="cultural-section3" style="background-image: url('{{ asset('img/311.jpg') }}')">
        <div class="cultural-section3-fixed"></div>
        <div class="container-customize">
            <div class="content-cultural-section3">
                @foreach ($imprint as $item)
                    <div class="content-cultural-section3--item">

                        <div class="content-cultural-section3--ring counter">
                            <span class="number counter-value" data-count="{{ $item->imprint }}"
                                data-original="{{ $item->imprint }}" data-speed="500"></span>
                            <span class="font25 desc" style="margin-left : 5px"></span>
                        </div>
                        <h3 class="content-cultural-section3--title font24">
                            {{ $item->title }}
                        </h3>
                        <p class="content-cultural-section3--desc font20">
                            {{ $item->des }}
                        </p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <div class="cultural-section4">
        <div class="container-customize">
            <h2 class="font50 cultural-section4-title">
                Giá trị cốt lõi 8T
            </h2>
            <p class="cultural-section4-desc font18">
                Sự nỗ lực vượt khó, tự tin, trí tuệ, kỷ luật và ý chí, nghị lực của người sáng lập cùng với đội ngũ nhân
                sự có thái độ làm việc tích cực, ý thức đóng góp cống hiến đã hình thành nên VĂN HÓA THACO thể hiện qua
                giá trị cốt lõi là:
            </p>
            <div class="cultural-section4-list">
                @foreach ($mainvalue as $item)
                    <div class="cultural-section4-list--item">
                        <a data-fancybox="section9" data-src="#animatedpopup1" href="javascript:;">
                            <img src="{{ Storage::url($item->logo) }}" alt="icon">
                            <h5>{{ $item->title }}</h5>
                        </a>
                        <div style="display: none;" id="animatedpopup1" class="animated-modal-cultural">

                            <div class="popup-wrap-content">
                                <div class="left">
                                    <img src="{{ Storage::url($item->image) }}">
                                </div>
                                <div class="right">
                                    <h4 class="popup-title font-myria-bold font24">
                                        {{ $item->title }}
                                    </h4>
                                    <div class="content font18">
                                        {{ $item->des }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>



    <section class="cultural-section5">
        <div class="container-customize">
        </div>
    </section>

    <section class="cultural-section6">
        <div class="container-customize">

            <div class="cultural-section6-wrap">
                <div class="cultural-section6-left">
                    <h3 class="title font50">
                        Bài hát truyền thống
                    </h3>
                    <div class="desc font18">
                        <p>T&ocirc;̉ng hợp b&agrave;i h&aacute;t truyền thống của tập đo&agrave;n THACO</p>
                    </div>
                    <div thumbsSlider="" class="swiper mySwiperbh">
                        <div class="swiper-wrapper list-songs">
                            @foreach ($music as $item)
                                <div class="swiper-slide list-songs-item">
                                    <div class="control-wrap">
                                        <div class="left">
                                            <h5 class="font18">{{ $item->title }}</h5>
                                            <div class="menu-mp3 font16">
                                                <div class="loi menu-mp3-right">
                                                    <a data-fancybox="loibaihat1" data-animation-duration="700"
                                                        data-src="#animatedpopuploi0" href="javascript:;"
                                                        class="fancybox">
                                                        Lời
                                                    </a>
                                                    <div style="display: none;" id="animatedpopuploi0"
                                                        class="animated-modal-cultural">
                                                        <h5 class="font18">
                                                            <h5 class="font18">{{ $item->title }}</h5>
                                                        </h5>
                                                        <div class="content font16">
                                                            <h5 class="font18">
                                                                {{ $item->lyrics }}
                                                            </h5>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="mp3 menu-mp3-right">
                                                    MP3
                                                </div>
                                                <div class="mp4">
                                                    <a data-fancybox href="https://youtu.be/{{ $item->mp4_name }}">
                                                        MP4
                                                    </a>
                                                </div>
                                            </div>

                                            <div class="open-mp3">

                                                <audio controls>
                                                    <source src="{{ $item->mp3 }}">
                                                </audio>

                                            </div>
                                        </div>
                                        <div class="right">
                                            <div class="share">
                                                <a data-fancybox="" data-src="#animatedpopupshare0" href="javascript:;"
                                                    class="fancybox">
                                                    <img src="{{ asset('img/iconshare.png') }}" alt="icon">
                                                </a>
                                                <div style="display: none;" id="animatedpopupshare0"
                                                    class="animated-modal-cultural">
                                                    <h5 class="font18">
                                                        Chia sẻ
                                                    </h5>
                                                    <div class="content-share-link font16">
                                                        <div class="icon-top-share">
                                                            <a class="link-fb"
                                                                href="https://www.facebook.com/sharer/sharer.php?u={{ $item->mp4 }}"
                                                                target="_blank">
                                                                <img
                                                                    src="https://img.icons8.com/color/48/000000/facebook-circled--v1.png" />
                                                            </a>
                                                            <a class="link-in"
                                                                href="https://www.linkedin.com/shareArticle?mini=true&url=https%3A%2F%2Fwww.youtube.com%2Fwatch%3Fv%3D{{ $item->mp4_name }}&summary={{ $item->mp4 }}&source=Linkedin"
                                                                title="Share on Linkedin" target="_blank">
                                                                <img
                                                                    src="https://img.icons8.com/color/48/000000/linkedin-circled.png" />
                                                            </a>
                                                        </div>
                                                        <div class="link-coppy">
                                                            <div class="link">
                                                                {{ $item->mp4 }}
                                                            </div>
                                                            <div class="icon-link">
                                                                <a class="copy_link" href="{{ $item->mp4 }}">
                                                                    COPY
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                </div>
                <div class="cultural-section6-right">
                    <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff"
                        class="swiper mySwiperbh2">
                        <div class="swiper-wrapper">
                            @foreach ($music as $item)
                                <div class="swiper-slide img-content-tab">
                                    <div class="frame h-100">
                                        <iframe id="iframe" class="w-100 h-100"
                                            src="https://www.youtube.com/embed/{{ $item->mp4_name }}?enablejsapi"
                                            allowfullscreen="true" allowscriptaccess="always" frameborder="0"></iframe>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
