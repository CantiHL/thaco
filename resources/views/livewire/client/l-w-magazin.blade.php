<div class="shareholder-infomation_left render-html" data-category="4">
    <div class="container-customize">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a wire:navigate href="{{ route('home') }}">Trang chủ</a>
                </li>
                <li class="breadcrumb-item active">{{ $muc }}</li>
            </ol>
        </nav>
    </div>
    <div class="filter-search-sharehoder non-field">
        <form class="form-search ">
            <div class="search">
                <input type="text" wire:model.live.debounce.500ms="search" autocomplete="false"
                    class=" form-control form-control-sm " placeholder="Nhập nội dung cần tìm..." value=""
                    name="keyword">
            </div>
            <select wire:model.live.debounce.500ms="year" class="select-year font18">
                <option value="">Tất cả</option>
                @foreach ($data2 as $item)
                    <option value="{{ $item }}">{{ $item }}</option>
                @endforeach
            </select>
        </form>
    </div>
    <div class="list-info">
        @foreach ($data1 as $item)
            <div class="report-item mt-4">
                <div class="thumb-img report-item-left">
                    <div class="image">
                        <a href="{{ route('view-file-pdfs', ['id' => $item->id]) }}" target="_blank">
                            <img src="{{ asset('img/bctn-2017.jpg') }}" alt="report">
                        </a>
                    </div>

                </div>
                <div class="report-item-right">
                    <span class="date">{{ $item->date }}</span>
                    <a href="{{ route('view-file-pdfs', ['id' => $item->id]) }}" target="_blank">
                        <h4 class="name-file font18 ">{{ $item->name }}</h4>
                    </a>
                    <span class="date-mobile">{{ $item->date }}</span>
                    <div class="download">
                        <a download href="{{ route('downloadFile', ['id' => $item->id]) }}"
                            title="download">DOWNLOAD</a>
                    </div>
                </div>

            </div>
        @endforeach
    </div>
    {{ $data1->links('vendor.livewire.bootstrap') }}
</div>
