<div>
    <form wire:submit="save">
        <div class="form-group">
          <label for="name">Tên</label>
          <input wire:model="name" type="text" class="form-control" id="name">
            @error('name') <span class="alert text-danger text-sm">{{ $message }}</span> @enderror
        </div>
        <div class="form-group">
          <label for="des">Vị trí</label>
          <input wire:model="position" type="text" class="form-control" id="des">
            @error('position') <span class="alert text-danger text-sm">{{ $message }}</span> @enderror
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
        <div class="form-group">
            <label for="des">Chức vụ</label>
            <select wire:model='level' class="form-control" name="" id="">
                    <option value="1">HỘI ĐỒNG QUẢN TRỊ THACO</option>
                    <option value="2">BAN KIỂM SOÁT</option>
              </select>
            </div>
            <div class="form-group">
                <label for="des">Nam/Nữ</label>
                <select wire:model='sex' class="form-control" name="" id="">
                        <option value="Nam">Nam</option>
                        <option value="Nữ">Nữ</option>
                  </select>
                </div>
        <button  type="submit" class="btn btn-primary my-2">Submit</button>
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
                        <th>Vị trí</th>
                        <th>Ảnh</th>
                        <th>Chức vụ</th>
                        <th>Nam/Nữ</th>
                        <th>Sửa</th>
                        <th>Xóa</th>
                    </tr>
                </thead>
                <tbody>
                    @if (!empty($data))
                    @foreach ($data as $item)
                    <tr>
                        <td> 
                            <input wire:model="nameupdate.{{$item->id}}" class="form-control" type="text" value="{{$item->name}}" > 
                            @error('nameupdate.{{$item->id}}') 
                            <span class="alert text-danger text-sm">{{ $message }}</span> 
                            @enderror 
                        </td>
                        <td>
                            <input wire:model="positionupdate.{{$item->id}}" class="form-control"  >
                            @error('positionupdate.{{$item->id}}') 
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
                            <select wire:model='levelupdate.{{$item->id}}' class="form-control text-sm">
                                @if ($levelupdate[$item->id]==1)
                                <option selected value="1">HỘI ĐỒNG QUẢN TRỊ THACO</option>
                                <option value="2">BAN KIỂM SOÁT</option>
                                @else
                                <option value="1">HỘI ĐỒNG QUẢN TRỊ THACO</option>
                                <option selected value="2">BAN KIỂM SOÁT</option>
                                @endif
                          </select>
                        </td>
                        <td>
                            <div class="form-group">
                                <select wire:model='sexupdate.{{$item->id}}' class="form-control" name="" id="">
                                        
                                        @if ($sexupdate[$item->id]=='Nam')
                                        <option selected value="Nam">Nam</option>
                                        <option value="Nữ">Nữ</option>
                                        @else
                                        <option value="Nam">Nam</option>
                                        <option selected value="Nữ">Nữ</option>
                                        @endif
                                  </select>
                                </div>
                        </td>
                        <td>
                            <button wire:click="update('{{$item->id}}')" class="btn btn-primary btn-sm" >Update</button>
                        </td>
                        <td>
                            <button wire:click="delete('{{$item->id}}')" class="btn btn-danger btn-sm">Delete</button>
                        </td>
                    </tr>
                    @endforeach
                    @endif
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>
