<div>
    <form wire:submit.prevent="save">
        @csrf
        <div class="form-group">
            <label for="name">Tên</label>
            <input wire:model="name" type="text" class="form-control" id="name">
            @error('name')
                <span class="alert text-danger text-sm">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="des">Thuộc về</label>
            <select wire:model='belong_to' class="form-control" name="" id="">
                @foreach ($dataMember as $item)
                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="detail">Lĩnh vực cụ thể</label>
            <input wire:model="detail" type="text" class="form-control" id="detail">
            @error('detail')
                <span class="alert text-danger text-sm">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <div x-data="{ uploading: false, progress: 0 }" x-on:livewire-upload-start="uploading = true"
                x-on:livewire-upload-finish="uploading = false" x-on:livewire-upload-error="uploading = false"
                x-on:livewire-upload-progress="progress = $event.detail.progress">
                <label for="img">Ảnh</label>
                <input type="file" wire:model="image" class="form-control form-sm" id="img">
                <div x-show="uploading">
                    <progress max="100" x-bind:value="progress"></progress>
                </div>
            </div>
            @error('image')
                <span class="alert text-danger text-sm">{{ $message }}</span>
            @enderror
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
                            <th>Tên</th>
                            <th>Thuộc về</th>
                            <th>Lĩnh vực cụ thể</th>
                            <th>Ảnh</th>
                            <th>Sửa</th>
                            <th>Xóa</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (!empty($data))
                            @foreach ($data as $item)
                                <form wire:submit.prevent="update('{{ $item->id }}')">
                                    <tr>
                                        <td> <input wire:model="nameupdate.{{ $item->id }}" class="form-control"
                                                type="text" value="{{ $item->name }}">
                                            @error('nameupdate.{{ $item->id }}')
                                                <span class="alert text-danger text-sm">{{ $message }}</span>
                                            @enderror
                                        </td>
                                        <td>
                                            <select class="form-control"
                                                wire:model="belong_toUpdate.{{ $item->id }}" name=""
                                                id="">
                                                @foreach ($dataMember as $member)
                                                    @if ($belong_toUpdate[$item->id] == $member->id)
                                                        <option selected value="{{ $member->id }}">
                                                            {{ $member->name }}</option>
                                                    @else
                                                        <option value="{{ $member->id }}">{{ $member->name }}
                                                        </option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        </td>
                                        <td> <input wire:model="detailUpdate.{{ $item->id }}" class="form-control"
                                                type="text">
                                            @error('detailUpdate.{{ $item->id }}')
                                                <span class="alert text-danger text-sm">{{ $message }}</span>
                                            @enderror
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <div x-data="{ uploading: false, progress: 0 }"
                                                    x-on:livewire-upload-start="uploading = true"
                                                    x-on:livewire-upload-finish="uploading = false"
                                                    x-on:livewire-upload-error="uploading = false"
                                                    x-on:livewire-upload-progress="progress = $event.detail.progress">
                                                    <label for="img">Ảnh</label>
                                                    <img src="{{ Storage::url($item->image) }}" width="100"
                                                        height="50" alt="" srcset="">
                                                    <input type="file" wire:model="imageupdate"
                                                        class="form-control form-sm" id="img">
                                                    <div x-show="uploading">
                                                        <progress max="100"
                                                            x-bind:value="progress"></progress>
                                                    </div>
                                                </div>
                                                @error('imageupdate')
                                                    <span class="alert text-danger text-sm">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </td>

                                        <td>
                                            <button wire:click="update('{{ $item->id }}')"
                                                class="btn btn-primary btn-sm">Sửa</button>
                                        </td>
                                        <td>
                                            <button wire:click="delete('{{ $item->id }}')"
                                                class="btn btn-danger btn-sm">Xóa</button>
                                        </td>
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
