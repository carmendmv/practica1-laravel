<header>
    <div class="bg-base-100">
    <div class="flex-1">
        <a class="btn btn-ghost text-xl">daisyUI</a>
    </div>
    <div class="flex-none gap-2">
        <div class="form-control">
        <input type="text" placeholder="Search" class="input input-bordered w-24 md:w-auto" />
        </div>
        <div class="dropdown dropdown-end">
        <div tabindex="0" role="button" class="btn btn-ghost btn-circle avatar">
            <div class="w-10 rounded-full">
            <img class="max-h-full bg-white" src="{{asset('img/logo.png')}}" alt="logo">
            </div>
        </div>
        <ul
            tabindex="0"
            class="menu menu-sm dropdown-content bg-base-100 rounded-box z-[1] mt-3 w-52 p-2 shadow">
            <li>
                <a class="justify-between">
                    Profile
                    <span class="badge">New</span>
                </a>
            </li>
            <li>
            @guest
                <div>
                    <form action="{{route('login')}}" method="post">
                        <a href="login" class="btn btn-primary btn-sm">Login</a>
                        <!--<a href="{{route("login")}}" class="btn btn-primary btn-sm">Login</a> ES LO MISMO CUANDO SE UTILIZA EL METODO GET--->
                        <a href="register" class="btn btn-sm">Register</a>   
                    </form>
                </div>
                @endguest
                @auth
                {{auth()->user()->name}}
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="btn btn-sm">
                        {{ __('Log Out') }}
                    </button>
                </form>
                @endauth
            </ul>
        </div>
    </div>
</header>