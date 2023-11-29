<div>
    <form wire:submit.prevent="save">
        @csrf
        <div class="form-group">
            <label for="date">Ngày</label>
            <input wire:model="date" type="date" class="form-control" id="date">
            @error('date')
                <span class="alert text-danger text-sm">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="name">Tên</label>
            <input wire:model="name" type="name" class="form-control" id="name">
            @error('name')
                <span class="alert text-danger text-sm">{{ $message }}</span>
            @enderror
        </div>
        <div x-data="{ uploading: false, progress: 0 }" x-on:livewire-upload-start="uploading = true"
            x-on:livewire-upload-finish="uploading = false" x-on:livewire-upload-error="uploading = false"
            x-on:livewire-upload-progress="progress = $event.detail.progress">
            <label for="">PDF</label>
            <input type="file" wire:model="link" class="form-control form-sm" id="img">
            <div x-show="uploading">
                <progress max="100" x-bind:value="progress"></progress>
            </div>
        </div>
        <div class="form-group">
            <label for="des">Quan hệ cổ đông</label>
            <select wire:model='share_hoder_id' class="form-control" link="" id="">
                <option value="0">...</option>
                @foreach ($dataShareholder as $item)
                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="des">Loại</label>
            <select wire:model='type' class="form-control" link="" id="">
                <option value="0">...</option>
                @foreach ($dataType as $key => $item)
                    <option value="{{ $key }}">{{ $item }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary mb-2">Submit</button>
    </form>
    <div class="card shadow mb-4">
        @if (session()->has('message'))
            <p class="text-bold text-danger alert text-center">{{ session()->get('message') }}</p>
        @endif
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Ngày</th>
                            <th>Tên</th>
                            <th>File</th>
                            <th>Quan hệ cổ đông</th>
                            <th>Loại</th>
                            <th>Sửa</th>
                            <th>Xóa</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (!empty($data))
                            @foreach ($data as $item)
                                <form wire:submit.prevent="update('{{ $item->id }}')">
                                    <tr>
                                        <td>
                                            <input type="date" wire:model='date_update.{{ $item->id }}'>
                                        </td>
                                        <td>
                                            <input type="text" wire:model='name_update.{{ $item->id }}'>
                                        </td>
                                        <td>
                                            <input type="file" wire:model='link_update'>
                                            <a class="text-danger" href="{{ route('view-file-pdfs', $item->id) }}">view
                                                PDF</a>
                                        </td>
                                        <td>
                                            <select wire:model="share_hoder_id_update.{{ $item->id }}">
                                                @foreach ($dataShareholder as $item1)
                                                    @if ($item->share_hoder_id == $item1->id)
                                                        <option selected value="{{ $item1->id }}">
                                                            {{ $item1->name }}
                                                        </option>
                                                    @else
                                                        <option value="{{ $item1->id }}">{{ $item1->name }}
                                                        </option>
                                                    @endif
                                                @endforeach
                                                <option selected value="0">...</option>
                                            </select>
                                        </td>
                                        <td>
                                            <select wire:model="type_update.{{ $item->id }}">
                                                @foreach ($dataType as $key => $item1)
                                                    @if ($item->type == $key)
                                                        <option selected value="{{ $key }}">
                                                            {{ $item1 }}</option>
                                                    @else
                                                        <option value="{{ $key }}">{{ $item1 }}
                                                        </option>
                                                    @endif
                                                @endforeach
                                                <option selected value="0">...</option>
                                            </select>
                                        </td>
                                        <td><button wire:click="update('{{ $item->id }}')"
                                                class="btn btn-primary btn-sm">Sửa</button></td>
                                        <td><button wire:click="delete('{{ $item->id }}')"
                                                class="btn btn-danger btn-sm">Xóa</button></td>
                                    </tr>
                                </form>
                            @endforeach
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
