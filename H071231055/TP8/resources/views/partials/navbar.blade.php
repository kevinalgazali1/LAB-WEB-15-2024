<header>
    <nav>
        <ul class="navbar" style="font-family: Monospace; font-weight: bold;">
            <li><a class="{{request()->routeIs('home') ? 'active' : ''}}" href="{{route('home')}}">Home</a></li>
            <li><a class="{{request()->routeIs('about') ? 'active' : ''}}" href="{{route('about')}}">About</a></li>
            <li><a class="{{request()->routeIs('gallery') ? 'active' : ''}}" href="{{route('gallery')}}">Shop</a>
            </li>
        </ul>
    </nav>
</header>

