<nav style="margin-bottom: 100px;background-color:#37424c" class="navbar is-fixed-top" role="navigation"
    aria-label="main navigation">
    <div class="navbar-brand">
        <a class="navbar-item" href="{{ route('home') }}">
            <img src="https://testfortoxics.org/wp-content/uploads/Blog.png" width="100" height="40">
        </a>

        <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
        </a>
    </div>

    <div id="navbar-example" class="navbar-menu">
        @if (Route::has('login'))
        @auth
        <div class="navbar-start">

                    <a class="navbar-item is-tab" href="{{ route('home') }}" style="color: white">
                        Home
                    </a>

                    <a class="navbar-item is-tab" style="color: white">
                        About Us
                    </a>

                    <a class="navbar-item is-tab" style="color: white">
                        Contact Us
                    </a>
                    <div class="buttons">
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <button type="submit" class="button is-info is-outlined button">
                                {{ __('Log out') }}
                            </button>
                        </form>
                    <div>
            </div>
        @else
            <div class="navbar-end">
                <div class="navbar-item">
                    <div class="buttons">

                        <a class="button is-light" href="{{ route('login') }}">
                            <strong>Log in</strong>
                        </a>
                        @if (Route::has('register'))
                            <a class="button " href="{{ route('register') }}">
                                Register
                            </a>
                        @endif





                    </div>
                </div>
            </div>
        </div>
    @endauth
    @endif

</nav>
