<div>
    <form wire:submit="save">
        <div class="form-group">
            <label for="imprint">Giá trị</label>
            <input wire:model="imprint" type="text" class="form-control" id="imprint">
            @error('imprint')
                <span class="alert text-danger text-sm">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="title">Tiêu đề</label>
            <input wire:model="title" type="title" class="form-control" id="title">
            @error('title')
                <span class="alert text-danger text-sm">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="des">Mô tả</label>
            <input wire:model="des" type="des" class="form-control" id="des">
            @error('des')
                <span class="alert text-danger text-sm">{{ $message }}</span>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary mb-2">Submit</button>
    </form>
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Giá trị</th>
                            <th>Tiêu đề</th>
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
                                            <input wire:model="imprint_update.{{ $item->id }}" class="form-control"
                                                type="text">
                                            @error('imprint_update.{{ $item->id }}')
                                                <span class="alert text-danger text-sm">{{ $message }}</span>
                                            @enderror
                                        </td>
                                        <td>
                                            <input wire:model="title_update.{{ $item->id }}" class="form-control"
                                                type="text">
                                            @error('title_update.{{ $item->id }}')
                                                <span class="alert text-danger text-sm">{{ $message }}</span>
                                            @enderror
                                        </td>
                                        <td>
                                            <input wire:model="des_update.{{ $item->id }}" class="form-control"
                                                type="text">
                                            @error('des_update.{{ $item->id }}')
                                                <span class="alert text-danger text-sm">{{ $message }}</span>
                                            @enderror
                                        </td>
                                        <td>
                                            <button class="btn btn-primary btn-sm">Sửa</button>
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
