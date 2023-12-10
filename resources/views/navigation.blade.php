
<nav>
    <ul>
        <li class="{{ Request::routeIs('home') ? 'active' : '' }}"><a href="{{ route('home') }}">Home</a></li>
        <li class="{{ Request::routeIs('over') ? 'active' : '' }}"><a href="{{ route('over') }}">Over Mij</a></li>
        <li class="{{ Request::routeIs('contact') ? 'active' : '' }}"><a href="{{ route('contact') }}">Contact</a></li>
    </ul>
</nav>
