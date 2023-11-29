<div>
    <form wire:submit="save">
        <div class="form-group">
            <label for="title">Tiêu đề</label>
            <input wire:model="title" type="text" class="form-control">
            @error('title')
                <span class="alert text-danger text-sm">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group" wire:ignore>
            <label for="des">Nội dung</label>
            <textarea wire:model='content' class="form-control" wire:model="content" name="editor1" id="editor" cols="100%"
                rows="20">{{ $content }}
          </textarea>
            @error('content')
                <span class="alert text-danger text-sm">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="des">Lĩnh vực</label>
            <select wire:model='field_id' class="form-control">
                @foreach ($dataField as $item)
                    @if ($item->id == $field_id)
                        <option selected value="{{ $item->id }}">{{ $item->name }}</option>
                    @else
                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                    @endif
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="date">Ngày</label>
            <input wire:model="date" type="date" class="form-control">
            @error('date')
                <span class="alert text-danger text-sm">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="tag">Tag</label>
            <input wire:model="tag" type="tag" class="form-control">
            @error('tag')
                <span class="alert text-danger text-sm">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <img src="{{ Storage::url($image) }}" alt="" width="200" height="150">
            <div x-data="{ uploading: false, progress: 0 }" x-on:livewire-upload-start="uploading = true"
                x-on:livewire-upload-finish="uploading = false" x-on:livewire-upload-error="uploading = false"
                x-on:livewire-upload-progress="progress = $event.detail.progress">
                <label for="img">Ảnh</label>
                <input type="file" wire:model="image_update" class="form-control form-sm" id="img">
                <div x-show="uploading">
                    <progress max="100" x-bind:value="progress"></progress>
                </div>
            </div>
            @error('image')
                <span class="alert text-danger text-sm">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="belong_to">Thuộc về</label>
            <select wire:model='belong_to' class="form-control">
                @foreach ($dataCommunication as $key => $item)
                    @if ($key == $belong_to)
                        <option selected value="{{ $key }}">{{ $item }}</option>
                    @else
                        <option value="{{ $key }}">{{ $item }}</option>
                    @endif
                @endforeach
            </select>
        </div>
        <button wire:click="save" class="btn btn-success mb-2">Submit</button>
    </form>
</div>
<script>
    ClassicEditor
        .create(document.querySelector('#editor'))
        .then(editor => {
            console.log(editor);
            editor.model.document.on('change:data', () => {
                @this.set('content', editor.getData());
            });
        })
        .catch(error => {
            console.error(error);
        });
</script>
