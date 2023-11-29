<div class="media__content_left human">
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
    <div class="human-filter mt-10">
        <div class="filter-search-media field">
            <form class="form-search">
                <div class="search">
                    <input type="text" wire:model.live.debounce.500ms="search" class="form-control form-control-sm "
                        placeholder="Nhập nội dung cần tìm...">
                </div>
                <select wire:model.live.debounce.500ms="year" class="select-year font18">
                    <option value="">Tất cả</option>
                    @foreach ($data2 as $item)
                        <option value="{{ $item }}">{{ $item }}</option>
                    @endforeach
                </select>
                <select wire:model.live.debounce.500ms="field" class="select-by-field font18">
                    <option value="">Lĩnh vực</option>
                    @foreach ($data3 as $item)
                        <option value="{{ $item->id }}">{{ ucfirst(mb_strtolower($item->name, 'UTF-8')) }}</option>
                    @endforeach
                </select>

            </form>
        </div>
    </div>
    <div class="list-media_wrapper" id="scroll-list-news">
        <div class="list-media mt-10">
            @foreach ($data1 as $item)
                <div class="media-item ">
                    <div class="img-content">
                        <div class="image">
                            <div class="post-thumbnail">
                                <a href="{{ route('clientnews', ['id' => $item->id]) }}"><img
                                        src="{{ Storage::url($item->image) }}" alt=""></a>
                            </div>
                        </div>
                        <div class="content">
                            <a href="{{ route('clientnews', ['id' => $item->id]) }}">
                                <h3 class="name font18">{{ $item->title }}</h3>
                            </a>
                            <p class="time font18">{{ $item->date }}</p>
                            <p class="desc font18">{{ $item->content }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
            {{ $data1->links('vendor.livewire.bootstrap') }}
        </div>
    </div>
</div>
