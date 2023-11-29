<div>
    <div>
        <a class="btn btn-sm btn-info" wire:navigate href="{{ route('add-news') }}">Add</a>
    </div>
    <div class="row">
        @foreach ($data as $item)
            <div class="card m-2" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">{{ $item->id }},{{ $item->title }}</h5>
                    {{-- <p class="card-text">{!! $item->content !!}</p> --}}
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">{{ $item->date }}</li>
                    @foreach ($dataField as $item1)
                        @if ($item1->id == $item->field_id)
                            <li class="list-group-item">{{ $item1->name }}</li>
                        @endif
                    @endforeach
                    <li class="list-group-item">{{ $item->belong_to }}</li>
                </ul>
                <div class="card-body">
                    <a wire:navigate class="btn btn-primary" href="{{ route('update-news', ['id' => $item->id]) }}"
                        class="card-link">Update</a>
                    <a class="btn btn-danger" wire:click="delete('{{ $item->id }}')" class="card-link">Delete</a>
                </div>
            </div>
        @endforeach
    </div>
</div>
