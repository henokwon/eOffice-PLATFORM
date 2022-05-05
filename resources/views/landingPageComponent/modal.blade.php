
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Login to your account</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                {{-- <div id="login-form-wrap">

                    <form id="login-form">
                      <label for="email">Email</label>
                        <p>
                            <input type="email" id="email" name="email" placeholder="Email Address" required><i
                             class="validation"><span></span><span></span></i>
                        </p>
                        <p>
                          <label for="password">Password</label>
                        <p>
                            <input type="password" id="password" name="password" required><i
                                class="validation"><span></span><span></span></i>
                        </p>
                        <input type="submit" id="login" value="Login">
                        </p>
                    </form>
                    <div id="create-account-wrap">
                        <p>Not a member? <a href="#">Create Account</a>
                        <p>
                    </div>
                    <!--create-account-wrap-->
                </div> --}}
                {{-- <div id="login-form-wrap"> --}}

                <!-- Session Status -->
                <x-auth-session-status class="mb-4" :status="session('status')" />

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
            <div class="modal-footer" style="display: flex; justify-content:space-between">
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
</div>

<div class="modal fade" id="register" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
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
                                <x-input withicon id="name" class="block w-full" type="text" name="name" :value="old('name')"
                                    required autofocus placeholder="{{ __('Name') }}" />
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
                            <x-label for="password" :value="__('Password')" />
                            <x-input-with-icon-wrapper>
                                <x-slot name="icon">
                                    <x-heroicon-o-lock-closed aria-hidden="true" class="w-5 h-5" />
                                </x-slot>
                                <x-input withicon id="password" class="block w-full" type="password" name="password" required
                                    autocomplete="new-password" placeholder="{{ __('Password') }}" />
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
                                    name="password_confirmation" required placeholder="{{ __('Confirm Password') }}" />
                            </x-input-with-icon-wrapper>
                        </div>
        
                        <div>
                            <x-button class="justify-center w-full gap-2">
                                <x-heroicon-o-user-add class="w-6 h-6" aria-hidden="true" />
                                <span>{{ __('Register') }}</span>
                            </x-button>
                        </div>
        
                        <p class="text-sm text-gray-600 dark:text-gray-400">
                            {{ __('Already registered?') }}
                            <a href="{{ route('login') }}" class="text-blue-500 hover:underline">
                                {{ __('Login') }}
                            </a>
                        </p>
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
</div>
