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
