<div>
    <form wire:submit="save">
        <div class="form-group">
            <label for="title">Tiêu đề</label>
            <input wire:model="title" type="text" class="form-control" id="title">
            @error('title')
                <span class="alert text-danger text-sm">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="des">Mô tả</label>
            <input wire:model="des" type="text" class="form-control" id="des">
            @error('des')
                <span class="alert text-danger text-sm">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <div x-data="{ uploading: false, progress: 0 }" x-on:livewire-upload-start="uploading = true"
                x-on:livewire-upload-finish="uploading = false" x-on:livewire-upload-error="uploading = false"
                x-on:livewire-upload-progress="progress = $event.detail.progress">
                <label for="img">Logo</label>
                <input type="file" wire:model="logo" class="form-control form-sm" id="img">
                <div x-show="uploading">
                    <progress max="100" x-bind:value="progress"></progress>
                </div>
            </div>
            @error('logo')
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
                            <th>Tiêu đề</th>
                            <th>Logo</th>
                            <th>Ảnh</th>
                            <th>Mô tả</th>
                            <th>Sửa</th>
                            <th>Xóa</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (!empty($data))
                            @foreach ($data as $item)
                                <form wire:submit="update('{{ $item->id }}')">
                                    <tr>
                                        <td>
                                            <input wire:model="title_update.{{ $item->id }}" class="form-control"
                                                type="text" value="{{ $item->name }}">
                                            @error('title_update.{{ $item->id }}')
                                                <span class="alert text-danger text-sm">{{ $message }}</span>
                                            @enderror
                                        </td>

                                        <td>
                                            <img src="{{ Storage::url($item->logo) }}" width="100px" height="100px"
                                                alt="Member">
                                            <div x-data="{ uploading: false, progress: 0 }" x-on:livewire-upload-start="uploading = true"
                                                x-on:livewire-upload-finish="uploading = false"
                                                x-on:livewire-upload-error="uploading = false"
                                                x-on:livewire-upload-progress="progress = $event.detail.progress">
                                                <input type="file" wire:model="logoupdate"
                                                    class="form-control form-sm" id="img">
                                                <div x-show="uploading">
                                                    <progress max="100" x-bind:value="progress"></progress>
                                                </div>
                                            </div>

                                            @error('image')
                                                <span class="alert text-danger text-sm">{{ $message }}
                                                </span>
                                            @enderror
                                        </td>
                                        <td>
                                            <img src="{{ Storage::url($item->image) }}" width="100px" height="100px"
                                                alt="Member">
                                            <div x-data="{ uploading: false, progress: 0 }" x-on:livewire-upload-start="uploading = true"
                                                x-on:livewire-upload-finish="uploading = false"
                                                x-on:livewire-upload-error="uploading = false"
                                                x-on:livewire-upload-progress="progress = $event.detail.progress">
                                                <input type="file" wire:model="imageupdate"
                                                    class="form-control form-sm" id="img">
                                                <div x-show="uploading">
                                                    <progress max="100" x-bind:value="progress"></progress>
                                                </div>
                                            </div>

                                            @error('image')
                                                <span class="alert text-danger text-sm">{{ $message }}
                                                </span>
                                            @enderror
                                        </td>
                                        <td>
                                            <textarea wire:model="des_update.{{ $item->id }}" class="form-control" cols="100%" rows="5">{{ $item->des }}</textarea>
                                            @error('des_update.{{ $item->id }}')
                                                <span class="alert text-danger text-sm">{{ $message }}</span>
                                            @enderror
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
