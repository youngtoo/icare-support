<nav class="nav flex-column pt-5">
    <a class="nav-link active" aria-current="page" href="{{ route('home') }}"><i data-feather="activity"></i> Dashboard</a>
    <a class="nav-link" href="{{ route('tickets')}}"><i data-feather="file"></i> Tickets</a>
    <a class="nav-link" href="{{ route('reports')}}"><i data-feather="terminal"></i> Reports</a>
    <a class="nav-link" href=" {{ route('settings')}}"><i data-feather="settings"></i> Settings</a>
    <a class="nav-link" href="{{ route('system')}}"><i data-feather="terminal"></i> System</a>
    @auth
    <a class="nav-link" href="/logout"><i data-feather="log-out"></i> Logout</a>
    @endauth

    @guest
    <a class="nav-link" href="/login"><i data-feather="log-in"></i> Login</a>
    @endguest
</nav>