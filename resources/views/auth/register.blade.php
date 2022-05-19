<x-guest-layout>
    
    <div class="container main_style">
        
        <main class="form-signin">
            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" />
            
            <!-- Validation Errors -->
            <x-auth-validation-errors class="mb-4" :errors="$errors" />
            
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <a href="/">
                    <img src="{{ asset("images/bigscreen.svg") }}" alt="logo bigscreen" class="logo_position">
                </a>

                <div class="form1">
                    <x-label for="name" :value="__('Nom')" />
                    <div class="form-floating">
                        <x-input id="name" class="form-control" type="text" name="name" :value="old('name')" required autofocus />
                    </div>
                </div>
                
                <div class="form1">
                    <x-label for="email" :value="__('Email')" />
                    <div class="form-floating">
                        <x-input id="email" class="form-control" type="email" name="email" :value="old('email')" required autofocus />
                    </div>
                </div>
                
                <div class="form1">
                    <x-label for="password" :value="__('Mot de passe')" />
                    <div class="form-floating">
                        <x-input id="password" class="form-control"
                        type="password"
                        name="password"
                        required autocomplete="current-password" />
                    </div>
                </div>
                
                <div class="form1">
                    <x-label for="password_confirmation" :value="__('Confirmer le mot de passe')" />
                    <div class="form-floating">
                        <x-input id="password_confirmation" class="form-control"
                        type="password"
                        name="password_confirmation"
                        required />
                    </div>
                </div>
                
                <button class="w-100 btn btn-lg btn_color" type="submit">
                    
                    {{ __("S'enregistrer") }}
                </button>
                <div class="check_position">
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 forget_style" href="{{ route('login') }}">
                        {{ __('Vous êtes déjà enregistré ?') }}
                    </a>
                </div>
            </form>
        </main>
        
    </div>
</x-guest-layout>

