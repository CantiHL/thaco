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
    <section class="contact-content scroll-section">
        <div class="contact-wrapper">
            <div class="contact-title  mt-40 mb-40" data-aos="fade-right" data-aos-duration="700" data-aos-delay="50"
                class="aos-init aos-animate">
                <h1 class="font50 title text-uppercase"> Hỗ trợ từ chúng tôi </h1>

            </div>
            <div class="contact-box  mt-60 mb-60" id="support-tab">
                <div class="contact-box__item info" data-filter=".data-filter-01" data-aos="flip-up" data-aos-duration="700"
                    data-aos-delay="50" class="aos-init aos-animate">
                    <div class="contact-box_wrapper">
                        <div class="image">

                            <img src="{{ asset('img/mail-1.png') }}" alt="icon">
                        </div>

                        <div class="title">
                            <h3 class=" font28"> Email cho chúng tôi</h3>
                        </div>

                        <div class="content font20"> Hãy gửi email cho chúng tôi để nhận phản hồi & tư vấn.</div>
                        <i class="fas fa-angle-down"></i>
                    </div>


                </div>
                <div class="contact-box__item info" data-filter=".data-filter-01" data-aos="flip-up" data-aos-duration="700"
                    data-aos-delay="50" class="aos-init aos-animate">
                    <div class="contact-box_wrapper">
                        <div class="image">

                            <img src="{{ asset('img/homepage-1.png') }}" alt="icon">
                        </div>

                        <div class="title">
                            <h3 class=" font28"> Thông tin liên hệ</h3>
                        </div>

                        <div class="content font20"> Các thông tin về những trụ sở của THACO.</div>
                        <i class="fas fa-angle-down"></i>
                    </div>


                </div>
                <div class="contact-box__item info" data-filter=".data-filter-01" data-aos="flip-up" data-aos-duration="700"
                    data-aos-delay="50" class="aos-init aos-animate">
                    <div class="contact-box_wrapper">
                        <div class="image">

                            <img src="{{ asset('img/chat-1.png') }}" alt="icon">
                        </div>

                        <div class="title">
                            <h3 class=" font28"> Hỗ trợ trực tuyến</h3>
                        </div>

                        <div class="content font20"> Sẵn sàng tư vấn và giải đáp mọi thắc mắc trực tuyến của bạn.
                        </div>
                        <i class="fas fa-angle-down"></i>
                    </div>
                </div>
            </div>
            <div class="office-contact-wrapper mt-60 data-filter-01">
                <div class="office-tabs">
                    <ul class="nav nav-tabs active-tabs">
                        <li class="font18 office-title my-2 active">
                            <a href="#contact-0" data-toggle="tab">
                                Văn phòng Hà Nội
                            </a>
                        </li>
                        <li class="font18 office-title my-2 ">
                            <a href="#contact-1" data-toggle="tab">
                                Văn phòng TP. Hồ Chí Minh
                            </a>
                        </li>
                        <li class="font18 office-title my-2 ">
                            <a href="#contact-2" data-toggle="tab">
                                Văn phòng THACO Chu Lai
                            </a>
                        </li>
                        <li class="font18 office-title my-2 ">
                            <a href="#contact-3" data-toggle="tab">
                                Văn phòng Gia Lai
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content  office-content">
                        <div class="tab-pane active show" id="contact-0">
                            <div class="map-location">
                                <iframe
                                    src=" https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.5901631625034!2d105.88013071540253!3d21.049078492459167!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135a978b8c50bf5%3A0xd03cf5e7b51921cd!2zNTQxIMSQLiBOZ3V54buFbiBWxINuIEPhu6ssIE5n4buNYyBMw6JtLCBMb25nIEJpw6puLCBIw6AgTuG7mWksIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1650352252138!5m2!1svi!2s"
                                    style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                            </div>
                            <div class="office-address font20">
                                <i class="fas fa-map-marker-alt location"></i>
                                <p class="address">Địa chỉ : 541 Nguyễn Văn Cừ, Phường Gia Thuỵ, Quận Long Biên, Hà
                                    Nội.</p>
                            </div>
                            <div class="office-phone font20">
                                <i class="fas fa-phone-alt"></i>
                                <p class="phone">SĐT: (024) 32202558</p>
                            </div>
                            <div class="office-email font20">
                                <i class="fas fa-envelope"></i>
                                <p class="email">Email: cskh@thaco.com.vn hoặc vanhoatruyenthong@thaco.com.vn</p>
                            </div>
                            <div class="office-desc">
                                <p class="desc font20">

                                </p>
                            </div>
                        </div>
                        <div class="tab-pane " id="contact-1">
                            <div class="map-location">
                                <iframe
                                    src=" https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.5080290085093!2d106.72027741474892!3d10.772347792324274!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752fcdd2041771%3A0xa46e9842e044baf4!2sSOFIC%20Tower!5e0!3m2!1svi!2s!4v1634137150175!5m2!1svi!2s"
                                    style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                            </div>
                            <div class="office-address font20">
                                <i class="fas fa-map-marker-alt location"></i>
                                <p class="address">Địa chỉ : Số 10 Mai Chí Thọ, Phường Thủ Thiêm, TP. Thủ Đức, TP.
                                    Hồ Chí Minh.</p>
                            </div>
                            <div class="office-phone font20">
                                <i class="fas fa-phone-alt"></i>
                                <p class="phone">SĐT: (028) 39.977.824</p>
                            </div>
                            <div class="office-email font20">
                                <i class="fas fa-envelope"></i>
                                <p class="email">Email: cskh@thaco.com.vn hoặc vanhoatruyenthong@thaco.com.vn</p>
                            </div>
                            <div class="office-desc">
                                <p class="desc font20">

                                </p>
                            </div>
                        </div>
                        <div class="tab-pane " id="contact-2">
                            <div class="map-location">
                                <iframe
                                    src=" https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d61532.00580262666!2d108.59792160056062!3d15.444019202968807!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3169cec6600dd205%3A0x510b030725b25e40!2zQ8O0bmcgVHkgVE5ISCBN4buZdCBUaMOgbmggVmnDqm4gVuG6rW4gVOG6o2kgxJDGsOG7nW5nIELhu5kgQ2h1IExhaSAtIFRyxrDhu51uZyBI4bqjaQ!5e0!3m2!1svi!2s!4v1634619476795!5m2!1svi!2s"
                                    style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                            </div>
                            <div class="office-address font20">
                                <i class="fas fa-map-marker-alt location"></i>
                                <p class="address">Địa chỉ : Thôn 4, Xã Tam Hiệp, Huyện Núi Thành, Tỉnh Quảng Nam.
                                </p>
                            </div>
                            <div class="office-phone font20">
                                <i class="fas fa-phone-alt"></i>
                                <p class="phone">SĐT: 0235. 3567.161 -162 -163</p>
                            </div>
                            <div class="office-email font20">
                                <i class="fas fa-envelope"></i>
                                <p class="email">Email: cskh@thaco.com.vn hoặc vanhoatruyenthong@thaco.com.vn</p>
                            </div>
                            <div class="office-desc">
                                <p class="desc font20">

                                </p>
                            </div>
                        </div>
                        <div class="tab-pane " id="contact-3">
                            <div class="map-location">
                                <iframe
                                    src=" https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d406.97291707808324!2d108.01572768521872!3d13.970455391333987!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x316c1f89b113b389%3A0x38463e92c61bc99c!2zMTUgVHLGsOG7nW5nIENoaW5oLCBQaMO5IMSQ4buVbmcsIFRow6BuaCBwaOG7kSBQbGVpa3UsIEdpYSBMYWkgNjAwMDAwLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1648522405873!5m2!1svi!2s"
                                    style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                            </div>
                            <div class="office-address font20">
                                <i class="fas fa-map-marker-alt location"></i>
                                <p class="address">Địa chỉ : 15 Trường Chinh, phường Phù Đổng, thành phố Pleiku,
                                    tỉnh Gia Lai.</p>
                            </div>
                            <div class="office-phone font20">
                                <i class="fas fa-phone-alt"></i>
                                <p class="phone">SĐT: 0269. 2222. 285</p>
                            </div>
                            <div class="office-email font20">
                                <i class="fas fa-envelope"></i>
                                <p class="email">Email: cskh@thaco.com.vn hoặc vanhoatruyenthong@thaco.com.vn</p>
                            </div>
                            <div class="office-desc">
                                <p class="desc font20">

                                </p>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
            @livewire('client.send-info')
        </div>
    </section>

    <div class="camon">
        <div class="close-popup">
            <i class="fas fa-times"></i>
        </div>
        <div class="popup-content">
            <i class="fad fa-check "></i>
            <h2 class="MyriadPro-Bold font40 text-center">Send successfully</h2>
        </div>
    </div>
@endsection
