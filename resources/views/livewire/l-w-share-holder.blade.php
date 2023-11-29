<div>
    <form wire:submit="save">
        <div class="form-group">
          <label for="name">Tên</label>
          <input wire:model="name" type="text" class="form-control" id="name">
            @error('name') <span class="alert text-danger text-sm">{{ $message }}</span> @enderror
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
                            <input wire:model="nameupdate.{{$item->id}}" class="form-control" type="text" value="{{$item->name}}" > 
                            @error('nameupdate.{{$item->id}}') 
                            <span class="alert text-danger text-sm">{{ $message }}</span> 
                            @enderror 
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
