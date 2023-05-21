{{-- <x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ml-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}


@extends('layout.app')

@section('mainContent')
    <div class="row flex-center min-vh-100 py-6">
        <div class="col-sm-10 col-md-8 col-lg-6 col-xl-5 col-xxl-4"><a class="d-flex flex-center mb-4" href="/"><img
                    class="me-2" src="../../../assets/img/icons/spot-illustrations/falcon.png" alt=""
                    width="58" /><span class="font-sans-serif fw-bolder fs-5 d-inline-block">AMPSD</span></a>
            <div class="card">
                <div class="card-body p-4 p-sm-5">
                    <div class="row flex-between-center mb-2">
                        <div class="col-auto">
                            <h5>Register</h5>
                        </div>
                        <div class="col-auto fs--1 text-600"><span class="mb-0 undefined">Have an account?</span> <span><a
                                    href="{{ route('login') }}">Login</a></span></div>
                    </div>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="mb-3">
                            <input class="form-control" type="text" name="name" value="{{ old('name') }}"
                                autocomplete="on" placeholder="Name" required />
                        </div>
                        <div class="mb-3">
                            <input class="form-control" type="email" autocomplete="on" name="email"
                                value="{{ old('email') }}" placeholder="Email address" required />
                        </div>
                        <div class="row gx-2">
                            <div class="mb-3 col-sm-6">
                                <input class="form-control" type="password" autocomplete="on" name="password"
                                    placeholder="Password" required />
                            </div>
                            <div class="mb-3 col-sm-6">
                                <input class="form-control" name="password_confirmation" type="password" autocomplete="on"
                                    placeholder="Confirm Password" required />
                            </div>
                        </div>
                        {{-- <div class="form-check"><input class="form-check-input" type="checkbox"
                                id="basic-register-checkbox" /><label class="form-label" for="basic-register-checkbox">I
                                accept the
                                <a href="#!">terms </a>and <a href="#!">privacy policy</a></label></div> --}}
                        <div class="mb-3"><button class="btn btn-primary d-block w-100 mt-3" type="submit"
                                name="submit">Register</button></div>
                    </form>
                    {{-- <div class="position-relative mt-4">
                        <hr />
                        <div class="divider-content-center">or register with</div>
                    </div>
                    <div class="row g-2 mt-2">
                        <div class="col-sm-6"><a class="btn btn-outline-google-plus btn-sm d-block w-100"
                                href="#"><span class="fab fa-google-plus-g me-2" data-fa-transform="grow-8"></span>
                                google</a></div>
                        <div class="col-sm-6"><a class="btn btn-outline-facebook btn-sm d-block w-100" href="#"><span
                                    class="fab fa-facebook-square me-2" data-fa-transform="grow-8"></span> facebook</a>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
@endsection
