<section id="contact-fo" class="contact-fo data-filter-02">
    <div class="contact-fo-container  mb-60">
        <h2> Gửi email cho chúng tôi </h2>
        @if (session()->has('message'))
            <p class="text-success text-center">{{ session()->get('message') }}</p>
        @endif
        <form wire:submit.prevent="save" accept-charset="UTF-8">
            @csrf
            <div class="row">
                <div class="col-xl-6 col-lg-12">
                    <div class="form-group">
                        <input id='contact_name' type="text" class="form-control" wire:model="name" value=""
                            placeholder="Họ và tên / Tên công ty" required="required">
                    </div>
                </div>
                <div class="col-xl-6 col-lg-12">
                    <div class="form-group">
                        <input type="email" class="form-control" wire:model="email" value="" id="contact_email"
                            placeholder="Thư điện tử" required="required">
                    </div>
                </div>
                <div class="col-xl-6 col-lg-12">
                    <div class="form-group">
                        <select id="contact_address" wire:model="address" class="form-control" required="required">
                            <option value="vanhoatruyenthong@thaco.com.vn">Ban Văn hóa - Truyền thông
                            </option>
                            <option value="vanhoatruyenthong@thaco.com.vn">Chăm sóc khách hàng</option>

                        </select>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-12">
                    <div class="form-group">
                        <input type="number" class="form-control" wire:model="phone" value="" id="contact_phone"
                            placeholder="Số điện thoại" required="required">
                    </div>
                </div>
                <div class="col-xl-12">
                    <div class="form-group">
                        <textarea wire:model="content" id="contact_content" class="form-control" rows="5" placeholder="Nội dung"
                            required="required"></textarea>
                    </div>
                </div>
                {{-- <div class="col-md-12 d-flex justify-content-center">
                    <div class="form-group">
                        <script src="https://www.google.com/recaptcha/api.js?hl=vi" async defer></script>
                        <script>
                            "use strict";
                            var refreshRecaptcha = function() {
                                grecaptcha.reset();
                            };
                        </script>
                        <div class="g-recaptcha" theme="light"
                            id="buzzNoCaptchaId_0c3471a32c18a19c4c2d961822f3e176"
                            data-sitekey="6LdRWiAfAAAAAEGsJXSuvTNp7YrOM4854lzsZ8wi"></div>
                    </div>
                </div> --}}
                <div class="col-xl-12">
                    <div class="form-group d-flex justify-content-center">
                        <button id="success" type="submit" class="btn cyan text send-contact">Gửi
                            ngay</button>
                    </div>
                </div>
            </div>
        </form>
</section>
<div class="chat-online mb-60">
    <h2> Gửi email cho chúng tôi </h2>
</div>
