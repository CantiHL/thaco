@if (auth()->user()->level == 1)
    <li class="nav-item active">
        <a wire:navigate class="nav-link" href="{{ route('members') }}">
            <i class="fas fa-fw fa-people-carry"></i>
            <span>Tập đoàn thành viên</span></a>
    </li>
    <li class="nav-item active">
        <a wire:navigate class="nav-link" href="{{ route('fields') }}">
            <i class="fas fa-fw fa-plane-departure"></i>
            <span>Các lĩnh vực</span></a>
    </li>
    <li class="nav-item active">
        <a wire:navigate class="nav-link" href="{{ route('recruits') }}">
            <i class="fas fa-fw fa-sign-out-alt"></i>
            <span>Tuyển dụng</span></a>
    </li>
    <li class="nav-item active">
        <a wire:navigate class="nav-link" href="{{ route('activation-fields') }}">
            <i class="fas fa-fw fa-medal"></i>
            <span>Nội dung lĩnh vực hoạt động</span></a>
    </li>

    <li class="nav-item active">
        <a wire:navigate class="nav-link" href="{{ route('shareholder-files') }}">
            <i class="fas fa-fw fa-magnet"></i>
            <span>Các file pdf</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
            aria-expanded="true" aria-controls="collapsePages">
            <i class="fas fa-fw fa-folder"></i>
            <span>Giới thiệu</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a wire:navigate class="collapse-item" href="{{ route('leaders') }}">Ban lãnh đạo</a>
                <a wire:navigate class="collapse-item" href="{{ route('achievements') }}">Thành tựu</a>
                <a wire:navigate class="collapse-item" href="{{ route('development-processes') }}">Quá trình phát
                    triển</a>
            </div>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages1"
            aria-expanded="true" aria-controls="collapsePages1">
            <i class="fas fa-fw fa-folder"></i>
            <span>Văn hóa</span>
        </a>
        <div id="collapsePages1" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a wire:navigate class="collapse-item" href="#">Mô tả</a>
                <a wire:navigate class="collapse-item" href="{{ route('imprint') }}">Dấu ấn</a>
                <a wire:navigate class="collapse-item" href="{{ route('mainvalue') }}">Giá trị cốt lõi</a>
                <a wire:navigate class="collapse-item" href="{{ route('music') }}">Quản lý bài hát</a>
            </div>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages2"
            aria-expanded="true" aria-controls="collapsePages2">
            <i class="fas fa-fw fa-folder"></i>
            <span>Quan hệ cổ đông</span>
        </a>
        <div id="collapsePages2" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a wire:navigate class="collapse-item" href="{{ route('shareholders') }}">Quan hệ cổ đông</a>
            </div>
        </div>
    </li>
    <li class="nav-item active">
        <a wire:navigate class="nav-link" href="{{ route('writers') }}">
            <i class="fas fa-fw fa-pen-alt"></i>
            <span>Writer</span></a>
    </li>
@endif
<li class="nav-item active">
    <a wire:navigate class="nav-link" href="{{ route('news') }}">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Truyền thông</span></a>
</li>
<li class="nav-item active">
    <a wire:navigate class="nav-link" href="{{ route('contactmn') }}">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Liên hệ</span></a>
</li>
