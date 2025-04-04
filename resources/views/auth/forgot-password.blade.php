<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <img src="../img/logo_renascer_horizontal_bgw.png" class="navbar-brand-img h-100" alt="Logo Projeto" width="350px">
            </a>
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            Esqueceu sua senha? Sem problemas. Basta nos informar seu endereço de e-mail e enviaremos um e-mail com um link de redefinição de senha que permitirá que você escolha um novo.
        </div>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ url('login') }}">
                    Voltar
                </a>
                <x-button class="ml-3">
                    Link de redefinição de senha de e-mail
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
