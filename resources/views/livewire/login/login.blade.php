<div>
    <div class="card card-bordered">
        <div class="card-inner card-inner-lg">
            <div class="nk-block-head">
                <div class="nk-block-head-content">
                    <h4 class="nk-block-title">Đăng nhập hệ thống</h4>

                </div>
            </div>
            <form wire:submit.prevent="login()">
                <div class="form-group">
                    <div class="form-label-group">
                        <label class="form-label" for="default-01">Mail</label>
                    </div>
                    <div class="form-control-wrap">
                        <input type="text" class="form-control form-control-lg @error('email') error @enderror" id="default-01" wire:model.lazy="email" placeholder="{{ __('Nhập địa chỉ Mail') }}">
                        @error('email') <span class="invalid">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-label-group">
                        <label class="form-label" for="password">Mật khẩu</label>
                        <!-- <a class="link link-primary link-sm" href="">Forgot Code?</a> -->
                    </div>
                    <div class="form-control-wrap">
                        <a href="javascript:void(0);" class="form-icon form-icon-right passcode-switch lg" data-target="password">
                            <em class="passcode-icon icon-show icon ni ni-eye"></em>
                            <em class="passcode-icon icon-hide icon ni ni-eye-off"></em>
                        </a>
                        <input type="password" class="form-control form-control-lg @error('password') error @enderror" id="password" wire:model.lazy="password" placeholder="{{ __('Nhập mật khẩu') }}">
                        @error('password') <span class="invalid">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-lg btn-primary btn-block">{{ __('Đăng nhập') }}</button>
                </div>
            </form>
        </div>
    </div>
</div>
