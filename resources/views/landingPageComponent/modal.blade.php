
{{-- <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Login to your account</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <!-- Session Status -->
                {{-- <x-auth-session-status class="mb-4" :status="session('status')" />

                <!-- Validation Errors -->
                <x-auth-validation-errors class="mb-4" :errors="$errors" />

                <form method="POST" action="{{ route('service') }}">
                    @csrf
                    <div class="grid gap-6">
                        <!-- Email Address -->
                        <div class="space-y-2">
                            <x-label for="email" :value="__('Email')" />

                            <x-input-with-icon-wrapper>
                                <x-slot name="icon">
                                    <x-heroicon-o-mail aria-hidden="true" class="w-5 h-5" />
                                </x-slot>
                                <x-input withicon id="email" class="block w-full" type="email" name="email"
                                    :value="old('email')" placeholder="{{ __('Email') }}" required autofocus />
                            </x-input-with-icon-wrapper>
                        </div>

                        <!-- Password -->
                        <div class="space-y-2">
                            <x-label for="password" :value="__('Password')" />

                            <x-input-with-icon-wrapper>
                                <x-slot name="icon">
                                    <x-heroicon-o-lock-closed aria-hidden="true" class="w-5 h-5" />
                                </x-slot>
                                <x-input withicon id="password" class="block w-full" type="password" name="password"
                                    required autocomplete="current-password" placeholder="{{ __('Password') }}" />
                            </x-input-with-icon-wrapper>
                        </div>

                        <!-- Remember Me -->
                        <div class="flex items-center justify-between">
                            <label for="remember_me" class="inline-flex items-center">
                                <input id="remember_me" type="checkbox"
                                    class="text-purple-500 border-gray-300 rounded focus:border-purple-300 focus:ring focus:ring-purple-500 dark:border-gray-600 dark:bg-dark-eval-1 dark:focus:ring-offset-dark-eval-1"
                                    name="remember">
                                <span
                                    class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
                            </label>

                            @if (Route::has('password.request'))
                                <a class="text-sm text-blue-500 hover:underline"
                                    href="{{ route('password.request') }}">
                                    {{ __('Forgot your password?') }}
                                </a>
                            @endif
                        </div>

                        <div>
                            <x-button class="justify-center w-full gap-2">
                                <x-heroicon-o-login class="w-6 h-6" aria-hidden="true" />
                                <span>{{ __('Log in') }}</span>
                            </x-button>
                        </div>


                    </div>
                </form>
            </div>
            {{-- </div> --}}
            {{-- <div class="modal-footer" style="display: flex; justify-content:space-between">
                @if (Route::has('register'))
                    <p class="text-sm text-gray-600 dark:text-gray-400">
                        {{ __('Don’t have an account?') }}
                        <a data-bs-toggle="modal" data-bs-target="#register" data-bs-dismiss="modal"
                            class="text-blue-500 hover:underline" style="cursor: pointer">
                            {{ __('Register') }}
                        </a>
                    </p>
                @endif
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>   --}}

{{-- <div class="modal fade" id="register" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Register</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <x-auth-validation-errors class="mb-4" :errors="$errors" />

                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="grid gap-6">
                        <!-- Name -->
                        <div class="space-y-2">
                            <x-label for="name" :value="__('Name')" />
                            <x-input-with-icon-wrapper>
                                <x-slot name="icon">
                                    <x-heroicon-o-user aria-hidden="true" class="w-5 h-5" />
                                </x-slot>
                                <x-input withicon id="name" class="block w-full" type="text" name="name"
                                    :value="old('name')" required autofocus placeholder="{{ __('Name') }}" />
                            </x-input-with-icon-wrapper>
                        </div>

                        <!-- Email Address -->
                        <div class="space-y-2">
                            <x-label for="email" :value="__('Email')" />
                            <x-input-with-icon-wrapper>
                                <x-slot name="icon">
                                    <x-heroicon-o-mail aria-hidden="true" class="w-5 h-5" />
                                </x-slot>
                                <x-input withicon id="email" class="block w-full" type="email" name="email"
                                    :value="old('email')" required placeholder="{{ __('Email') }}" />
                            </x-input-with-icon-wrapper>
                        </div>

                        <!-- Password -->
                        <div class="space-y-2">
                            <x-label for="passwordR" :value="__('Password')" />
                            <x-input-with-icon-wrapper>
                                <x-slot name="icon">
                                    <x-heroicon-o-lock-closed aria-hidden="true" class="w-5 h-5" />
                                </x-slot>
                                <x-input withicon id="passwordR" class="block w-full" type="password" name="password"
                                    required autocomplete="new-password" placeholder="{{ __('Password') }}" />
                            </x-input-with-icon-wrapper>
                        </div>

                        <!-- Confirm Password -->
                        <div class="space-y-2">
                            <x-label for="password_confirmation" :value="__('Confirm Password')" />
                            <x-input-with-icon-wrapper>
                                <x-slot name="icon">
                                    <x-heroicon-o-lock-closed aria-hidden="true" class="w-5 h-5" />
                                </x-slot>
                                <x-input withicon id="password_confirmation" class="block w-full" type="password"
                                    name="password_confirmation" required
                                    placeholder="{{ __('Confirm Password') }}" />
                            </x-input-with-icon-wrapper>
                        </div>

                        <div>
                            <x-button class="justify-center w-full gap-2">
                                <x-heroicon-o-user-add class="w-6 h-6" aria-hidden="true" />
                                <span>{{ __('Register') }}</span>
                            </x-button>
                        </div>
                        <div style="display: flex; justify-content:space-between">
                            
                        </div>

                    </div>
                </form>

            </div>
            <div class="modal-footer" style="display: flex; justify-content:space-between">
                <p class="text-sm text-gray-600 dark:text-gray-400" style="display: inline;">
                    {{ __('Already registered?') }}
                    <a data-bs-toggle="modal" data-bs-target="#staticBackdrop" data-bs-dismiss="modal"
                        class="text-blue-500 hover:underline" style="cursor: pointer;">
                        {{ __('Login') }}
                    </a>
                </p>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"
                  >Close</button>
            </div>

            </div>
            <div id="service">
                <customer-form />
                </div>
        </div>
    </div>
</div> --}}


<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel"
aria-hidden="true">
<div class="modal-dialog" role="document">
    <div class="modal-content">

        <div class="modal-body">
            <div>
                <form action="{{ route('service') }}" method="POST" id="modal_login_form">
                    @csrf
                    <div class="form-title">
                        SIGN IN
                    </div>

                    <div class="form-group">
                        <label for="email">Email address</label>
                        <input type="email" class="form-control" value="{{ old('email') }}" id="email"
                            name="email" placeholder="Enter email">

                        @if ($errors->any('email'))
                            <span class="text-danger">{{ $errors->first('email') }}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" name="password" autocomplete="false"
                            id="password" placeholder="Password">
                        @if ($errors->any('password'))
                            <span class="text-danger">{{ $errors->first('password') }}</span>
                        @endif
                    </div>


                    <div class="form-check">
                        <input type="checkbox" {{ old('remember_me') ? 'checked' : '' }} value="true"
                            name="remember_me" id="remember_me" class="form-check-input">
                        <label class="form-check-label" for="remember_me">Remember Me</label>

                    </div>

                    <div class="g-recaptcha" data-sitekey="{{ env('GOOGLE_CAPTCHA_KEY') }}"
                        data-callback="recaptchaDataCallbackLogin"
                        data-expired-callback="recaptchaExpireCallbackLogin"></div>

                    <input type="hidden" name="grecaptcha" id="hiddenRecaptchaLogin">
                    <div id="hiddenRecaptchaLoginError"></div>
                    @if ($errors->any('grecaptcha'))
                        <span class="text-danger">{{ $errors->first('grecaptcha') }}</span>
                    @endif
                    <div><button type="submit" class="btn btn-primary mt-2">Submit</button>&nbsp; Don't have an
                        account <a class="register_button" href="javascript:void(0)">sign up</a> here</div>

                    <div> <a href="{{ route('password.request') }}">Forget Password</a></div>

                </form>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss = "modal">Close</button>
        </div>
    </div>
</div>
</div>

