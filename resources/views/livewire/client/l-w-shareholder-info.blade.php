<div class="shareholder-infomation_left render-html" data-category="1">
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
        <form action="{{ route('disclosure') }}" class="form-search ">
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
            <div wire:key="{{ $item->id }}" class="info-item">
                <div class="info-left">
                    <div class="date">
                        <p>

                            <span class="date-day">{{ $item->month }}</span><sup
                                class="">/{{ $item->year }}</sup>
                        </p>
                        <p class="date-year fon16 text-center">{{ $item->day }}</p>

                    </div>
                </div>
                <div class="info-right">
                    <h3>
                        <a href="{{ route('view-file-pdfs', ['id' => $item->id]) }}" class="font20 text-justify  "
                            target="_blank">
                            {{ $item->name }}
                        </a>
                    </h3>
                    <a href="{{ route('downloadFile', ['id' => $item->id]) }}" class="post download">
                        <i class="fal fa-arrow-to-bottom text-dark font28"></i>
                    </a>

                    <div class="downcontent">
                        <ul class="list-file">
                            <li>
                                <a href="" target="_blank">
                                    <i class="fal fa-file-invoice"></i>
                                </a>
                                <span class="left font-cond color-gray ml-2">36.0 KB</span>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        @endforeach
        {{ $data1->links('vendor.livewire.bootstrap') }}
    </div>
</div>
