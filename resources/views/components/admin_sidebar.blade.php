<style>
    .logout {
        margin-top: 50%;
    }

    .logout_style {
        color: white;
        font-size: 17px;
    }
</style>


<div class="container-fluid">
    <div class="row flex-nowrap">
        <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 color_col" id="sticky-sidebar">
            <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100 sticky-top">
                <img src="{{ asset("images/bigscreen.svg") }}" alt="logo bigscreen" class="logo_position">
                <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                    <li class="nav-item">
                        <a href="{{ route("administration") }}" class="color_link align-middle px-0">
                            <span class="ms-1 d-none d-sm-inline">Accueil</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route("questionnaire") }}" class="color_link px-0 align-middle">
                            <span class="ms-1 d-none d-sm-inline">Questionnaire</span>
                        </a>
                        </li>
                        <li>
                            <a href="{{ route("reponses") }}" class="color_link px-0 align-middle">
                                <span class="ms-1 d-none d-sm-inline">Réponses</span> 
                            </a>
                            </li>
                    </ul>
                    
                    <hr>
                    <div>
                            <!-- Logout -->
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                
                                <x-dropdown-link :href="route('logout')"
                                onclick="event.preventDefault();
                                this.closest('form').submit();">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z"/>
                                    <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
                                </svg>
                                <span class="ms-1 d-none d-sm-inline logout_style">{{ __('Se déconnecter') }}</span>
                                </x-dropdown-link>
                            </form>
                    </div>
            </div>
        </div>
        <div class="col py-3">
            @yield("sidebar")
        </div>
    </div>
</div>