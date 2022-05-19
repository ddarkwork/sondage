<x-guest-layout>
    
    <style>
        /* .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }
        
        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
        
        html,
        body {
            height: 100%;
        }
        
        body {
            background-color: #141416;
            color: gray;
            display: grid;
            align-content: center;
        }
        
        .alert_msg {
            margin-bottom: 8%;
        }
        
        .form-signin {
            width: 100%;
            max-width: 330px;
            padding: 15px;
            margin: auto;
        }
        
        .form1 {
            margin-top: 15%;
            margin-bottom: 7%;
        }
        
        .check_position {
            text-align: center;
            padding-top: 2%;
        }
        
        .form-signin .checkbox {
            font-weight: 400;
        }
        
        .form-signin .form-floating:focus-within {
            z-index: 2;
        }
        
        .form-signin input[type="email"] {
            margin-bottom: -1px;
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0;
        }
        
        .form-signin input[type="password"] {
            margin-bottom: 10px;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
        }
        
        .btn_color {
            background-color: #9757D7;
            color: white;
        }
        
        .forget_style {
            color: #9757D7;
        } */
    </style>
    
    <div class="container main_style">
        
        <main class="form-signin">
            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" />
            
            <!-- Validation Errors -->
            <x-auth-validation-errors class="mb-4" :errors="$errors" />
            
            <form method="POST" action="{{ route('password.email') }}">
                @csrf
                <a href="/">
                    <img src="{{ asset("images/bigscreen.svg") }}" alt="logo bigscreen" class="logo_position">
                </a>
                
                <div class="form1">
                    
                    
                    <div class="alert_msg">
                        {{ __('Mot de passe oublié ? Veuillez saisir votre adresse mail pour réinitialiser votre mot de passe') }}
                    </div><br>
                    
                    <x-label for="email" :value="__('Email')" />
                    <div class="form-floating">
                        <x-input id="email" class="form-control" type="email" name="email" :value="old('email')" required autofocus />
                    </div>
                </div>
                    
                    <button class="w-100 btn btn-lg btn_color" type="submit">
                        
                        {{ __('Réinitialiser mon mot de passe') }}
                    </button>

                    <div class="check_position">
                        <a class="underline text-sm forget_style" href="{{ route('register') }}">
                            {{ __('Pas encore enregistré ?') }}
                        </a>
                    </div>
                </form>
            </main>
            
        </div>
    </x-guest-layout>
    
    