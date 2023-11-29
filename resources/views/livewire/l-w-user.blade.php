<div>
    <form wire:submit="save">
        <div class="form-group">
            <label for="name">Tên</label>
            <input wire:model="name" type="text" class="form-control" id="name">
            @error('name')
                <span class="alert text-danger text-sm">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="des">Email</label>
            <input wire:model="email" type="email" class="form-control" id="des">
            @error('email')
                <span class="alert text-danger text-sm">{{ $message }}</span>
            @enderror
        </div>
        <div class="form-group">
            <label for="des">Password</label>
            <input wire:model="password" type="password" class="form-control" id="des">
            @error('password')
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
                            <th>Tên</th>
                            <th>Email</th>
                            <th>Password</th>
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
                                            <input wire:model="name_update.{{ $item->id }}" class="form-control"
                                                type="text">
                                            @error('name_update.{{ $item->id }}')
                                                <span class="alert text-danger text-sm">{{ $message }}</span>
                                            @enderror
                                        </td>
                                        <td>
                                            <input wire:model="email_update.{{ $item->id }}" class="form-control"
                                                type="email">
                                            @error('email_update.{{ $item->id }}')
                                                <span class="alert text-danger text-sm">{{ $message }}</span>
                                            @enderror
                                        </td>
                                        <td>
                                            <input wire:model="password_update.{{ $item->id }}"
                                                class="form-control" type="password">
                                            @error('password_update.{{ $item->id }}')
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
