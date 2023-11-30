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
            <input wire:model="description" type="text" class="form-control" id="des">
            @error('description')
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
        <div class="form-group">
            <label for="des">Lĩnh vực</label>
            <select wire:model='field_id' class="form-control">
                @foreach ($dataField as $item)
                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="des">Hoạt động trong</label>
            <select wire:model='active_in' class="form-control">
                <option value="SẢN XUẤT">SẢN XUẤT</option>
                <option value="KINH DOANH">KINH DOANH</option>
                <option value="TRỒNG TRỌT">TRỒNG TRỌT</option>
                <option value="CHĂN NUÔI BÒ">CHĂN NUÔI BÒ</option>
                <option value="CHĂN NUÔI HEO">CHĂN NUÔI HEO</option>
                <option value="SƠ MI RƠ MOÓC">SƠ MI RƠ MOÓC</option>
                <option value="GIA CÔNG CƠ KHÍ & SẢN PHẨM PHỤ TRỢ">GIA CÔNG CƠ KHÍ & SẢN PHẨM PHỤ TRỢ</option>
                <option value="CUNG CẤP PHÔI THÉP VÀ VẬT TƯ NGUYÊN VẬT LIỆU">CUNG CẤP PHÔI THÉP VÀ VẬT TƯ NGUYÊN VẬT
                    LIỆU</option>
                <option value="LINH KIỆN CÔNG NGHIỆP VÀ DÂN DỤNG">LINH KIỆN CÔNG NGHIỆP VÀ DÂN DỤNG</option>
                <option value="THIẾT BỊ NÔNG NGHIỆP,CÔNG NGHIỆP, XÂY DỰNG">THIẾT BỊ NÔNG NGHIỆP,CÔNG NGHIỆP, XÂY DỰNG
                </option>
                <option value="LINH KIỆN PHỤ TÙNG Ô TÔ, XE MÁY">LINH KIỆN PHỤ TÙNG Ô TÔ, XE MÁY</option>
                <option value="DỊCH VỤ THIẾT KẾ VÀ PHÁT TRIỂN SẢN PHẨM">DỊCH VỤ THIẾT KẾ VÀ PHÁT TRIỂN SẢN PHẨM</option>
                <option value="GIAO THÔNG - HẠ TẦNG KỸ THUẬT">GIAO THÔNG - HẠ TẦNG KỸ THUẬT</option>
                <option value="KHU CÔNG NGHIỆP">KHU CÔNG NGHIỆP</option>
                <option value="KHU ĐÔ THỊ">KHU ĐÔ THỊ</option>
                <option value="BẤT ĐỘNG SẢN">BẤT ĐỘNG SẢN</option>
                <option value="VẬN TẢI ĐƯỜNG BỘ">VẬN TẢI ĐƯỜNG BỘ</option>
                <option value="DỊCH VỤ CẢNG CHU LAI">DỊCH VỤ CẢNG CHU LAI</option>
                <option value="VẬN TẢI BIỂN">VẬN TẢI BIỂN</option>
                <option value="DỊCH VỤ ĐÓNG GÓI VÀ THÁO KIỆN, KIỂM HÀNG">DỊCH VỤ ĐÓNG GÓI VÀ THÁO KIỆN, KIỂM HÀNG
                </option>
                <option value="TRUNG TÂM THƯƠNG MẠI">TRUNG TÂM THƯƠNG MẠI</option>
                <option value="DỊCH VỤ NHÀ HÀNG ĂN UỐNG">DỊCH VỤ NHÀ HÀNG ĂN UỐNG</option>
                <option value="TRUNG TÂM HỘI NGHỊ TIỆC CƯỚI">TRUNG TÂM HỘI NGHỊ TIỆC CƯỚI</option>
                <option value="KHU VUI CHƠI GIẢI TRÍ TRONG NHÀ">KHU VUI CHƠI GIẢI TRÍ TRONG NHÀ</option>
                <option value="KHU MUA SẮM CAO CẤP">KHU MUA SẮM CAO CẤP</option>
            </select>
        </div>
        <div class="form-group">
            <label for="des">Link</label>
            <input wire:model="link" type="text" class="form-control" id="des">
            @error('link')
                <span class="alert text-danger text-sm">{{ $message }}</span>
            @enderror
        </div>
        <button type="submit" class="btn btn-success mb-2">Submit</button>
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
                            <th>Ảnh</th>
                            <th>Lĩnh vực</th>
                            <th>Hoạt động trong</th>
                            <th>Link</th>
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
                                            {{ $item->title }}
                                        </td>

                                        <td>
                                            @if ($item->image)
                                                <img src="{{ Storage::url($item->image) }}" width="100px"
                                                    height="100px">
                                            @else
                                                null
                                            @endif
                                        </td>
                                        <td>
                                            {{ $item->field_name }}
                                        </td>
                                        <td>
                                            {{ $item->field_active_in }}

                                        </td>
                                        <td>
                                            <textarea disabled class="form-control" id="" cols="100%" rows="5">{{ $item->link }}</textarea>

                                        </td>
                                        <td>
                                            <a class="btn btn-primary btn-sm" wire:navigate
                                                href="{{ route('activation-field-update', ['id' => $item->id]) }}">Sửa</a>
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
