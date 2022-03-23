<main>
    <nav class="py-2 bg-light border-bottom">
        <div class="container d-flex flex-wrap">
            <ul class="nav me-auto">
                <li class="nav-item"><a href="{{ route('show_index') }}" class="nav-link link-dark px-2 active" aria-current="page">Home</a>
                </li>
                <li class="nav-item"><a href="#" class="nav-link link-dark px-2">Pricing</a></li>
                <li class="nav-item"><a href="#" class="nav-link link-dark px-2">About</a></li>
            </ul>
            <ul class="d-flex flex-row-reverse">

                @if (Route::has('login'))
                    {{-- <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block"> --}}
                    @auth
                        <li class="nav-link link-dark px-2">
                            <a href="{{ url('/dashboard') }}"
                            class="nav-link">Dashboard</a>
                        </li>

                        <li class="nav-link link-dark px-2">
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <div class="nav-link link-dark px-2">
                                    <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                                      this.closest('form').submit(); " role="button">
                                        <i class="fas fa-sign-out-alt"></i>

                                        {{ __('Log Out') }}
                                    </a>
                                </div>
                            </form>
                        </li>
                    @else
                        <li class="nav-link link-dark px-2">
                            <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log
                                in</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-link link-dark px-2">
                                <a href="{{ route('register') }}"
                                    class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                            </li>
                        @endif
                    @endauth
                    {{-- </div> --}}
                @endif
            </ul>
        </div>
    </nav>

    {{-- <div class="collapse navbar-collapse justify-content-center">
        <ul class="navbar-nav">
            @foreach ($categories as $category)
                <li><a href="{{route('voir_produit', ['id' => $category->id])}}"></a>{{$category->name}}</li>
            @endforeach
        </ul>
    </div> --}}
</main>



