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
            <label for="lyrics">Lời</label>
            <textarea wire:model="lyrics" class="form-control" cols="100%" rows="5"></textarea>
            @error('lyrics')
                <span class="alert text-danger text-sm">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <div x-data="{ uploading: false, progress: 0 }" x-on:livewire-upload-start="uploading = true"
                x-on:livewire-upload-finish="uploading = false" x-on:livewire-upload-error="uploading = false"
                x-on:livewire-upload-progress="progress = $event.detail.progress">
                <label for="img">mp3</label>
                <input type="file" wire:model="mp3" class="form-control form-sm" id="img">
                <div x-show="uploading">
                    <progress max="100" x-bind:value="progress"></progress>
                </div>
            </div>
            @error('mp3')
                <span class="alert text-danger text-sm">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="mp4">Link mp4</label>
            <input wire:model="mp4" type="text" class="form-control" id="mp4">
            @error('mp4')
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
                            <th>Lời</th>
                            <th>Mp3</th>
                            <th>Mp4</th>
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
                                            <textarea wire:model="lyrics_update.{{ $item->id }}" class="form-control" cols="100%" rows="5">{{ $item->lyrics }}</textarea>
                                            @error('lyrics_update.{{ $item->id }}')
                                                <span class="alert text-danger text-sm">{{ $message }}</span>
                                            @enderror
                                        </td>
                                        <td>
                                            @if ($item->mp3)
                                                <audio controls>
                                                    <source src="{{ Storage::url($item->mp3) }}">
                                                </audio>
                                            @else
                                                null
                                            @endif
                                            <div x-data="{ uploading: false, progress: 0 }" x-on:livewire-upload-start="uploading = true"
                                                x-on:livewire-upload-finish="uploading = false"
                                                x-on:livewire-upload-error="uploading = false"
                                                x-on:livewire-upload-progress="progress = $event.detail.progress">
                                                <input type="file" wire:model="mp3_update"
                                                    class="form-control form-sm" id="img">
                                                <div x-show="uploading">
                                                    <progress max="100" x-bind:value="progress"></progress>
                                                </div>
                                            </div>

                                            @error('mp3_update')
                                                <span class="alert text-danger text-sm">{{ $message }}
                                                </span>
                                            @enderror
                                        </td>
                                        <td>
                                            <input wire:model="mp4_update.{{ $item->id }}" class="form-control"
                                                type="text" value="{{ $item->name }}">
                                            @error('mp4_update.{{ $item->id }}')
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
