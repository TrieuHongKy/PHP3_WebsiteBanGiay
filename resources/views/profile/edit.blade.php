@extends('client.app')
@section('profile')
    {{--<x-app-layout>--}}
{{--    <x-slot name="header">--}}
    <div style="margin-top:150px;">
        <h2 class="ml-12 font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Hồ sơ') }}
        </h2>
        <form class="ml-4" method="POST" action="{{ route('logout') }}">
            @csrf

            <x-dropdown-link :href="route('logout')"
                             onclick="event.preventDefault();
                                                this.closest('form').submit();">
                {{ __('Đăng xuất') }}
            </x-dropdown-link>
        </form>
{{--    </x-slot>--}}

    <div class="py-10">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-profile-information-form')

            </div>

            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div>
    </div>
    {{--</x-app-layout>--}}

@endsection