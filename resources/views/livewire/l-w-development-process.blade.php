<div>
    <form wire:submit="save">
        <div class="form-group">
          <label for="year">Năm</label>
          <input wire:model="year" type="text" class="form-control" id="year">
            @error('year') <span class="alert text-danger text-sm">{{ $message }}</span> @enderror
        </div>
        <div class="form-group">
          <label for="des">Mô tả</label>
          <input wire:model="description" type="text" class="form-control" id="des">
            @error('description') <span class="alert text-danger text-sm">{{ $message }}</span> @enderror
        </div>
        <div class="form-group">
            <div
            x-data="{ uploading: false, progress: 0 }"
            x-on:livewire-upload-start="uploading = true"
            x-on:livewire-upload-finish="uploading = false"
            x-on:livewire-upload-error="uploading = false"
            x-on:livewire-upload-progress="progress = $event.detail.progress"
            >
                <label for="img">Ảnh</label>
                <input  type="file" wire:model="image" class="form-control form-sm" id="img">
                <div x-show="uploading">
                    <progress max="100" x-bind:value="progress"></progress>
                </div>
            </div>
            @error('image') <span class="alert text-danger text-sm">{{ $message }}</span> @enderror
        </div>
        <button  type="submit" class="btn btn-primary mb-2">Submit</button>
      </form>
<div class="card shadow mb-4">
    @if(session()->has('message'))
    <p class="text-bold text-danger alert text-center">{{session()->get('message')}}</p>
    @endif
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Tên</th>
                        <th>Mô tả</th>
                        <th>Ảnh</th>
                        <th>Sửa</th>
                        <th>Xóa</th>
                    </tr>
                </thead>
                <tbody>
                    @if (!empty($data))
                    @foreach ($data as $item)
                    <form wire:submit="update('{{$item->id}}')">
                    <tr>
                        <td> 
                            <textarea wire:model="yearupdate.{{$item->id}}" class="form-control" cols="100%" rows="4"> </textarea>
                            @error('yearupdate.{{$item->id}}') 
                            <span class="alert text-danger text-sm">{{ $message }}</span> 
                            @enderror 
                        </td>
                        <td>
                            <textarea wire:model="descriptionupdate.{{$item->id}}" class="form-control"  cols="100%" rows="4"></textarea>
                            @error('descriptionupdate.{{$item->id}}') 
                            <span class="alert text-danger text-sm">{{ $message }}</span> 
                            @enderror 
                        </td>
                        <td>
                            <img src="{{ Storage::url($item->image) }}" width="100px" height="100px" alt="Member">
                            <div
                            x-data="{ uploading: false, progress: 0 }"
                            x-on:livewire-upload-start="uploading = true"
                            x-on:livewire-upload-finish="uploading = false"
                            x-on:livewire-upload-error="uploading = false"
                            x-on:livewire-upload-progress="progress = $event.detail.progress"
                            >
                                <input  type="file" wire:model="imageupdate" class="form-control form-sm" id="img">
                                <div x-show="uploading">
                                    <progress max="100" x-bind:value="progress"></progress>
                                </div>
                            </div>
                            @error('image') 
                            <span class="alert text-danger text-sm">{{ $message }}
                            </span> @enderror
                        </td>
                        <td>
                            <button wire:click="update('{{$item->id}}')" class="btn btn-primary btn-sm" >Sửa</button>
                        </td>
                        <td>
                            <button wire:click="delete('{{$item->id}}')" class="btn btn-danger btn-sm">Xóa</button>
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
