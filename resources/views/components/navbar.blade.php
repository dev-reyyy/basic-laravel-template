<div class="navbar">
    <div class="logo-container">
        <strong>My Starter Kit</strong>
    </div>
    <div class="button-container">
        @auth
            <form action="{{ route('logout') }}" method="post">
                @csrf
                <button type="submit">Logout</button>
            </form>
        @else
            <a href="{{ route('login') }}" class="btn-secondary">Login</a>
            <a href="{{ route('register') }}" class="btn-primary">Register</a>
        @endauth
    </div>
</div>
