<header class="header nav-down d-none d-lg-block " id="header">
    <div class="header-top" id="header-top">

        <div class="container-customize ">
            <ul class="list-item-top">

                <li class="item-top">
                    <a wire:navigate href="{{ route('contact') }}" class="item-top__link first" target="_self">
                        Liên hệ
                    </a>
                </li>

                <li class="item-top">
                    <a href="https://tuyendung.thaco.com.vn/tieng-viet" class="item-top__link first" target="_blank">
                        Tuyển dụng
                    </a>
                </li>

                <li class="item-top ">
                    <ul class="language">
                        <li class="lang lang-vi text-uppercase">
                            <a class="item-top__link first" rel="alternate" hreflang="vi" wire:navigate
                                href="{{ route('home') }}">
                                <span class="color-active"> vi</span>
                            </a>
                        </li>
                        <li class="lang lang-vi text-uppercase">
                            <a class="item-top__link first" rel="alternate" hreflang="en" wire:navigate
                                href="{{ route('home') }}">
                                <span class=""> en</span>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>

        </div>

    </div>
    <div class="container-customize ">
        <nav class="navbar navbar-expand-lg">
            <a wire:navigate class="logo_link-blue" href="{{ route('home') }}">
                <img src="{{ asset('img/logo-6-3.png') }}">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo"
                aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse " id="navbarTogglerDemo">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item nav-link dropdown dmenu">
                        <a class="item__link first" href="{{ route('about') }}" wire:navigate title="Giới thiệu"
                            target="_self">Giới
                            thiệu</a>
                        <div class="dropdown-menu sm-menu" style="display:none">
                            <div class="cmenu">
                                <a wire:navigate href="{{ route('about') }}" title="Về Thaco" target="_self"
                                    class="dropdown-item">
                                    Về Thaco
                                </a>
                            </div>
                            <div class="cmenu">
                                <a wire:navigate href="{{ route('trandition') }}" title="Văn hóa THACO" target="_self"
                                    class="dropdown-item">
                                    Văn hóa THACO
                                </a>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item nav-link dropdown dmenu">
                        <a wire:navigate class="item__link first" href="{{ route('car') }}" title="Lĩnh vực hoạt động"
                            target="_self">Lĩnh vực hoạt động</a>
                        <div class="dropdown-menu sm-menu" style="display:none">
                            <div class="cmenu">
                                <a wire:navigate href="{{ route('car') }}" title="Ô tô" target="_self"
                                    class="dropdown-item">
                                    Ô tô
                                </a>
                            </div>
                            <div class="cmenu">
                                <a wire:navigate href="{{ route('agriculture') }}" title="Nông nghiệp" target="_self"
                                    class="dropdown-item">
                                    Nông nghiệp
                                </a>
                            </div>
                            <div class="cmenu">
                                <a wire:navigate href="{{ route('industries') }}" title="Cơ khí & Công nghiệp hỗ trợ"
                                    target="_self" class="dropdown-item">
                                    Cơ khí & Công nghiệp hỗ trợ
                                </a>
                            </div>
                            <div class="cmenu">
                                <a wire:navigate href="{{ route('construction') }}" title="Đầu tư - xây dựng"
                                    target="_self" class="dropdown-item">
                                    Đầu tư - xây dựng
                                </a>
                            </div>
                            <div class="cmenu">
                                <a wire:navigate href="{{ route('logistics') }}" title="Logistics" target="_self"
                                    class="dropdown-item">
                                    Logistics
                                </a>
                            </div>
                            <div class="cmenu">
                                <a wire:navigate href="{{ route('service') }}" title="Thương mại - Dịch vụ "
                                    target="_self" class="dropdown-item">
                                    Thương mại - Dịch vụ
                                </a>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item nav-link dropdown dmenu">
                        <a wire:navigate class="item__link first" href="{{ route('disclosure') }}"
                            title="Quan hệ cổ đông" target="_self">Quan hệ cổ đông</a>
                        <div class="dropdown-menu sm-menu" style="display:none">
                            <div class="cmenu">
                                <a wire:navigate href="{{ route('disclosure') }}" title="Điều lệ quy chế"
                                    target="_self" class="dropdown-item">
                                    Điều lệ quy chế
                                </a>
                            </div>
                            <div class="cmenu">
                                <a wire:navigate href="{{ route('regulation') }}" title="Công bố thông tin"
                                    target="_self" class="dropdown-item">
                                    Công bố thông tin
                                </a>
                            </div>
                            <div class="cmenu">
                                <a wire:navigate href="{{ route('shareholderInfo') }}" title="Thông tin cổ đông"
                                    target="_self" class="dropdown-item">
                                    Thông tin cổ đông
                                </a>
                            </div>
                            <div class="cmenu">
                                <a wire:navigate href="{{ route('annualReport') }}" title="Báo cáo thường niên"
                                    target="_self" class="dropdown-item">
                                    Báo cáo thường niên
                                </a>
                            </div>
                            <div class="cmenu">
                                <a wire:navigate href="{{ route('financial') }}" title="Báo cáo tài chính"
                                    target="_self" class="dropdown-item">
                                    Báo cáo tài chính
                                </a>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item nav-link dropdown dmenu">
                        <a wire:navigate class="item__link first" href="{{ route('newss') }}" title="Truyền thông"
                            target="_self">Truyền thông</a>
                        <div class="dropdown-menu sm-menu" style="display:none">
                            <div class="cmenu">
                                <a wire:navigate href="{{ route('newss') }}" title="Tin tức" target="_self"
                                    class="dropdown-item">
                                    Tin tức
                                </a>
                            </div>
                            <div class="cmenu">
                                <a wire:navigate href="{{ route('magazin') }}" title="Bản tin" target="_self"
                                    class="dropdown-item">
                                    Bản tin
                                </a>
                            </div>
                            <div class="cmenu">
                                <a wire:navigate href="{{ route('event') }}" title="Sự kiện" target="_self"
                                    class="dropdown-item">
                                    Sự kiện
                                </a>
                            </div>
                            <div class="cmenu">
                                <a wire:navigate href="{{ route('internalActivities') }}" title="Hoạt động nội bộ "
                                    target="_self" class="dropdown-item">
                                    Hoạt động nội bộ
                                </a>
                            </div>
                            <div class="cmenu">
                                <a wire:navigate href="{{ route('presidentMessage') }}"
                                    title="Thông điệp Chủ tịch HĐQT" target="_self" class="dropdown-item">
                                    Thông điệp Chủ tịch HĐQT
                                </a>
                            </div>
                            <div class="cmenu">
                                <a wire:navigate href="{{ route('happyNewYearLetter') }}"
                                    title="Thư chúc Tết  Chủ tịch HĐQT " target="_self" class="dropdown-item">
                                    Thư chúc Tết Chủ tịch HĐQT
                                </a>
                            </div>
                            <div class="cmenu">
                                <a wire:navigate href="{{ route('pressRelease') }}" title="Thông cáo báo chí"
                                    target="_self" class="dropdown-item">
                                    Thông cáo báo chí
                                </a>
                            </div>
                            <div class="cmenu">
                                <a wire:navigate href="#" title="Thư viện ảnh và video" target="_self"
                                    class="dropdown-item">
                                    Thư viện ảnh và video
                                </a>
                            </div>
                        </div>
                    </li>

                    <li class="nav-item nav-link dropdown dmenu">
                        <a class="item__link first" href="#" id="navbardrop" data-toggle="dropdown">
                            <i class="fas fa-search"></i>
                        </a>
                        <div class="dropdown-menu sm-menu dropdown--search">
                            <div class="row">
                                <div class="col-md-12">
                                    <form action="#">
                                        <div class="search-box input-group">
                                            <input autocomplete="off" type="text" name="keyword" value=""
                                                class="form-control" placeholder="Tìm kiếm... ">
                                            <div class="input-group-append">
                                                <button class="btn btn-secondary" type="submit">
                                                    <i class="fa fa-search"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </li>

                </ul>
            </div>
        </nav>
    </div>

</header>

<div class="nav-bar-mobile">
    <div class="nav-container">
        <nav class="menu-mobile">
            <ul class="nav-list">
                <li class="nav-item">
                    <a href="{{ route('home') }}" target="_self">Trang chủ</a>
                </li>
                <li class="nav-item">
                    <a href="javascript:;">Giới thiệu</a>

                    <ul class="nav-dropdown">
                        <li class="dropdown-item">
                            <a href="{{ route('about') }}" wire:navigate class="" target="_self">Về
                                THACO</a>
                        </li>
                        <li class="dropdown-item">
                            <a href="{{ route('trandition') }}" class="" target="_self">Văn
                                hóa THACO</a>
                        </li>
                    </ul>

                </li>
                <li class="nav-item">
                    <a href="javascript:;">Lĩnh vực hoạt động</a>

                    <ul class="nav-dropdown">
                        <li class="dropdown-item">
                            <a href="{{ route('car') }}" class="" target="_blank">Ô
                                tô</a>
                        </li>
                        <li class="dropdown-item">
                            <a href="{{ route('agriculture') }}" class="" target="_blank">Nông nghiệp</a>
                        </li>
                        <li class="dropdown-item">
                            <a href="{{ route('industries') }}" class="" target="_blank">Cơ khí & Công nghiệp
                                hỗ trợ</a>
                        </li>
                        <li class="dropdown-item">
                            <a href="{{ route('construction') }}" class="" target="_blank">Đầu tư - xây
                                dựng</a>
                        </li>
                        <li class="dropdown-item">
                            <a href="{{ route('logistics') }}" class="" target="_blank">Logistics</a>
                        </li>
                        <li class="dropdown-item">
                            <a href="{{ route('service') }}" class="" target="_blank">Thương mại - Dịch vụ
                            </a>
                        </li>
                    </ul>

                </li>
                <li class="nav-item">
                    <a href="javascript:;">Quan hệ cổ đông</a>

                    <ul class="nav-dropdown">
                        <li class="dropdown-item">
                            <a href="{{ route('disclosure') }}" class="" target="_self">Điều lệ
                                quy chế</a>
                        </li>
                        <li class="dropdown-item">
                            <a href="{{ route('regulation') }}" class="" target="_self">Công
                                bố thông tin</a>
                        </li>
                        <li class="dropdown-item">
                            <a href="{{ route('shareholderInfo') }}" class="" target="_self">Thông
                                tin cổ đông</a>
                        </li>
                        <li class="dropdown-item">
                            <a href="{{ route('annualReport') }}" class="" target="_self">Báo
                                cáo thường niên</a>
                        </li>
                        <li class="dropdown-item">
                            <a href="{{ route('financial') }}" class="" target="_self">Báo
                                cáo tài chính</a>
                        </li>
                    </ul>

                </li>
                <li class="nav-item">
                    <a href="javascript:;">Truyền thông</a>

                    <ul class="nav-dropdown">
                        <li class="dropdown-item">
                            <a href="{{ route('newss') }}" class="" target="_self">Tin tức</a>
                        </li>
                        <li class="dropdown-item">
                            <a href="{{ route('magazin') }}" class="" target="_self">Bản tin</a>
                        </li>
                        <li class="dropdown-item">
                            <a href="{{ route('event') }}" class="" target="_self">Sự kiện</a>
                        </li>
                        <li class="dropdown-item">
                            <a href="{{ route('internalActivities') }}" class="" target="_self">Hoạt
                                động nội bộ</a>
                        </li>
                        <li class="dropdown-item">
                            <a href="{{ route('presidentMessage') }}" class="" target="_self">Thông điệp Chủ
                                tịch HĐQT</a>
                        </li>
                        <li class="dropdown-item">
                            <a href="{{ route('happyNewYearLetter') }}" class="" target="_self">Thư chúc Tết
                                Chủ tịch HĐQT </a>
                        </li>
                        <li class="dropdown-item">
                            <a href="{{ route('pressRelease') }}" class="" target="_self">Thông
                                cáo báo chí</a>
                        </li>
                        <li class="dropdown-item">
                            <a href="#" class="" target="_self">Thư viện ảnh và video</a>
                        </li>
                    </ul>

                </li>
                <li class="nav-item">
                    <a href="{{ route('contact') }}" target="_self">Liên hệ</a>
                </li>
                <li class="nav-item">
                    <a href="https://tuyendung.thaco.com.vn/tieng-viet" target="_blank">Tuyển dụng</a>
                </li>
                <li class="icon-social nav-item">
                    <a href="https://www.facebook.com/TapdoanTruongHai.THACO" target="_blank">
                        <img src="{{ asset('img/fb.png') }}" alt="https://www.facebook.com/TapdoanTruongHai.THACO">
                    </a>
                    <a href="https://www.linkedin.com/company/thacogroup/" target="_blank">
                        <img src="{{ asset('img/in.png') }}" alt="https://www.linkedin.com/company/thacogroup/">
                    </a>
                    <a href="https://www.youtube.com/channel/UCI4u7-NwfRhxhsSl3ps6NfQ" target="_blank">
                        <img src="{{ asset('img/ytb.png') }}"
                            alt="https://www.youtube.com/channel/UCI4u7-NwfRhxhsSl3ps6NfQ">
                    </a>
                    <a href="maito:vanhoatruyenthong@thaco.com.vn">
                        <img src="{{ asset('img/mail-1.png') }}" alt="vanhoatruyenthong@thaco.com.vn">
                    </a>
                    <a href="tel:(028) 39977824">
                        <img src="{{ asset('img/call.png') }}" alt="(028) 39977824">
                    </a>
                </li>
            </ul>
        </nav>
        <div class="nav-mobile">
            <a id="nav-toggle" href="#"><span></span>
            </a>
        </div>
        <div class="brand">
            <a href="{{ route('home') }}" class="logo">
                <img src="{{ asset('img/logo-6-3.png') }}" alt="THACO Group">
            </a>

        </div>

        <ul class="language">
            <div id="wrap">
                <form method="get" action="{{ route('home') }}" autocomplete="on">
                    <i class="fal fa-search"></i>
                    <input id="search" name="keyword" type="text" placeholder="Tìm kiếm..." value="">

                </form>
            </div>

            <li class="text-uppercase">

                <a rel="alternate" hreflang="vi" href="{{ route('home') }}">
                    <span class="active">vi</span>
                </a>
            </li>
            <li class="text-uppercase">

                <a rel="alternate" hreflang="en" href="{{ route('home') }}">
                    <span class="">en</span>
                </a>
            </li>
        </ul>

    </div>
</div>
