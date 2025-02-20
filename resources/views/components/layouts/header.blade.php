<header>
    <div class="bg-base-100 bg-transparent">
        <div class="flex items-center justify-between px-4 py-2">
            <!-- Logo / Título -->
            <a href="{{ url('/') }}" class="btn btn-ghost text-xl flex items-center">
                <img class="max-h-12" src="{{ asset('img/logo.png') }}" alt="logo">
            </a>

            <!-- Elementos de la derecha -->
            <div class="flex items-center gap-2">
                <!-- Barra de búsqueda -->
                <div class="form-control hidden sm:block">
                    <input type="text" placeholder="Search" class="input input-bordered w-24 sm:w-auto" />
                </div>

                <!-- Dropdown de usuario -->
                <div class="dropdown dropdown-end">
                    <div tabindex="0" role="button" class="btn btn-ghost btn-circle avatar">
                        <div class="w-10 h-10 rounded-full">
                            <!-- Puedes añadir una imagen de avatar aquí -->
                            <img class="max-h-full bg-white" src="{{asset('img/avatar.jpg')}}" alt="avatar">
                        </div>
                    </div>
                    <ul tabindex="0" class="menu menu-sm dropdown-content bg-base-100 rounded-box z-[1] mt-3 w-52 p-2 shadow">
                        <li>
                            @guest
                            <div class="flex-columns gap-2">
                                <form action="{{route('login')}}" method="post">
                                    <a href="login" class="btn btn-primary btn-sm ml-auto">Login</a>
                                    <a href="register" class="btn btn-sm">Register</a>   
                                </form>
                            </div>
                            @endguest

                            @auth
                            <p>{{auth()->user()->name}}</p>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="btn btn-sm">
                                    {{ __('Log Out') }}
                                </button>
                            </form>
                            @endauth
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>
