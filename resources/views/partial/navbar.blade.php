<nav class="navbar navbar-expand-lg bg-dark ">
    <div class="container-fluid">
        <a class="navbar-brand text-light" href="/">Rumah Sakit</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link text-light" href="">admin</a>
                <a class="nav-link text-light" href="/dashboard/pabrik/all">pabrik</a>
                <a class="nav-link text-light" href="/dashboard/obat/all">obat</a>
                <a class="nav-link disabled text-light">About</a>
                <a class="nav-link text-light" href="/login/index">login</a>
                <a class="nav-link text-light" href="/register/index">register</a>
            </div>
        </div>
        <ul class="nav nav-pills">
            <li class="nav-item"><a href="/session/logout" class="nav-link active text-light">logout</a>
            </li>
        </ul>
        <ul class="navbar-nav ms-auto">
            @auth
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                        hi,{{ auth()->user()->name }}
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/dashboard"><i
                                    class="bi bi-layout-text-sidebar-reverse">Dashboard</i></a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li>
                            <form action="/session/logout" method="GET">
                                @csrf
                                <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"><a
                                            href="/session/logout">LogOut</a></i></button>
                            </form>
                        </li>
                    </ul>
                </li>
            @else
                <li class="nav-item">
                    <a href="/session/login" class="nav-link active">Login</a>
                @endauth
        </ul>
    </div>
</nav>
