<div>

    <div class="text-center">
        <h5 class="mb-0">{{ __("Selamat datang") }}</h5>
        <p class="text-muted mt-2">{{ __("Silahkan $title untuk membuat undangan") }}</p>
    </div>
    @if ($reg == "Login")
    <form class="custom-form mt-4 pt-2" wire:submit.prevent="login" autocomplete="off">

        <div class="mb-3 ">
            <label class="form-label">{{ __("Username") }}</label>
            <input required type="text" class="form-control" wire:model="username" placeholder="Enter username">
        </div>
        <div class="mb-3 ">
            <div class="d-flex align-items-start">
                <div class="flex-grow-1">
                    <label class="form-label">Password</label>
                </div>
                <div class="flex-shrink-0">
                    <div class="">
                        <a href="{{ route('password.request') }}" class="text-muted">Forgot
                            password?</a>
                    </div>
                </div>
            </div>

            <div class="input-group auth-pass-inputgroup">
                <input required type="password" class="form-control" wire:model.lazy="password"
                    placeholder="Enter password" name="password" aria-label="Password"
                    aria-describedby="password-addon">
                <button class="btn btn-light ms-0" type="button" id="password-addon"><i
                        class="mdi mdi-eye-outline"></i></button>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col">
                <div class="form-check">
                    <input class="form-check-input" wire:model.lazy="remember" type="checkbox" id="remember-check">
                    <label class="form-check-label" for="remember-check">
                        Remember me
                    </label>
                </div>
            </div>

        </div>
        <div class="mb-3">
            <button class="btn btn-primary w-100 waves-effect waves-light" type="submit">{{ __("Masuk") }}</button>
        </div>
    </form>
    @else
    <form class="custom-form mt-4 pt-2" wire:submit.prevent="register" autocomplete="off">


        <div class="mb-3 position-relative">
            <label class="form-label" for="validationTooltipUsername">Subdomain / Url Undangan</label>
            <div class="input-group">
                <span class="input-group-text" id="validationTooltipUsernamePrepend">undanganmo.com/</span>
                <input required type="text" class="form-control" id="validationTooltipUsername" wire:model='subdomain'
                    placeholder="Username" aria-describedby="validationTooltipUsernamePrepend" required>
            </div>
            <h6>undanganmo.com/{{ Str::slug($subdomain) }}</h6>
        </div>
        <div class="mb-3 ">
            <label class="form-label" for="username">{{ __("Email") }}</label>
            <input required type="text" class="form-control" wire:model.lazy="reg_email" placeholder="Enter email">
            <span class="text-danger"></span>
        </div>

        <div class="mb-3 ">
            <label class="form-label" for="username">{{ __("Username") }}</label>
            <input required type="text" class="form-control" wire:model.lazy="reg_username"
                placeholder="Enter username">
            @error('reg_username')
            <span class="text-danger">
                {{ $exception->getMessage() }}
            </span>
            @enderror

        </div>
        <div class="mb-3 ">
            <div class="d-flex align-items-start">
                <div class="flex-grow-1">
                    <label class="form-label" for="password">Password</label>
                </div>
            </div>

            <div class="input-group auth-pass-inputgroup">
                <input required type="password" class="form-control" wire:model.lazy="reg_password"
                    placeholder="Enter password" name="password" aria-label="Password"
                    aria-describedby="password-addon">
                <span class="text-danger"></span>
                <button class="btn btn-light ms-0" type="button" id="password-addon"><i
                        class="mdi mdi-eye-outline"></i></button>
            </div>
        </div>
        <div class="mb-3 ">
            <div class="d-flex align-items-start">
                <div class="flex-grow-1">
                    <label class="form-label" for="password">Konfirmasi Password</label>
                </div>
            </div>

            <div class="input-group auth-pass-inputgroup">
                <input required type="password" class="form-control" wire:model.lazy="reg_konfirmasi_password"
                    placeholder="Enter password" name="password" aria-label="Password"
                    aria-describedby="password-addon">
                <span class="text-danger"></span>
                <button class="btn btn-light ms-0" type="button" id="password-addon"><i
                        class="mdi mdi-eye-outline"></i></button>
            </div>
        </div>

        <div class="mb-3">
            <button class="btn btn-primary w-100 waves-effect waves-light" type="submit">{{ __("Daftar") }}</button>
        </div>
    </form>
    @endif

    <div class="mt-4 pt-2 text-center">
        <div class="signin-other-title">
            <h5 class="font-size-14 mb-3 text-muted fw-medium">- Login Dengan -</h5>
        </div>

        <ul class="list-inline mb-0">
            <li class="list-inline-item">
                <a href="{{ route('facebook.redirect') }}"
                    class="social-list-item bg-primary text-white border-primary">
                    <i class="mdi mdi-facebook"></i>
                </a>
            </li>
            <li class="list-inline-item">
                <a href="javascript:void()" class="social-list-item bg-info text-white border-info">
                    <i class="mdi mdi-twitter"></i>
                </a>
            </li>
            <li class="list-inline-item">
                <a href="{{ route('google.redirect') }}" class="social-list-item bg-danger text-white border-danger">
                    <i class="mdi mdi-google"></i>
                </a>
            </li>
            <li class="list-inline-item">
                <a href="{{ route('github.redirect') }}" class="social-list-item bg-dark text-white border-dark">
                    <i class="mdi mdi-github"></i>
                </a>
            </li>
        </ul>
    </div>

    <div class="mt-5 text-center">
        @if ($reg == "Login")
        <p class="text-muted mb-0">Belum punya akun ?
            <b wire:click='form("Register")' class="text-primary fw-semibold"> {{ __("Daftar") }}
            </b>
        </p>
        @else
        <p class="text-muted mb-0">Sudah punya akun ?
            <b wire:click='form("Login")' class="text-primary fw-semibold"> {{ __("Masuk") }}
            </b>
        </p>
        @endif
    </div>

</div>