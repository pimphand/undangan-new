<div>
    <form class="custom-form mt-4 pt-2" wire:submit.prevent="login" autocomplete="off">

        <div class="mb-3 ">
            <label class="form-label" for="username">Username</label>
            <input type="text" class="form-control" wire:model.lazy="username" id="username"
                placeholder="Enter username" name="username" value="Henry">
            <span class="text-danger"></span>
        </div>
        <div class="mb-3 ">
            <div class="d-flex align-items-start">
                <div class="flex-grow-1">
                    <label class="form-label" for="password">Password</label>
                </div>
                <div class="flex-shrink-0">
                    <div class="">
                        <a href="{{ route('password.request') }}" class="text-muted">Forgot
                            password?</a>
                    </div>
                </div>
            </div>

            <div class="input-group auth-pass-inputgroup">
                <input type="password" class="form-control" wire:model.lazy="password" placeholder="Enter password"
                    name="password" aria-label="Password" aria-describedby="password-addon">
                <span class="text-danger"></span>
                <button class="btn btn-light ms-0" type="button" id="password-addon"><i
                        class="mdi mdi-eye-outline"></i></button>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="remember-check">
                    <label class="form-check-label" for="remember-check">
                        Remember me
                    </label>
                </div>
            </div>

        </div>
        <div class="mb-3">
            <button class="btn btn-primary w-100 waves-effect waves-light" type="submit">Log In</button>
        </div>
    </form>
</div>