<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid ">
        <a class="navbar-brand" href="#">RUS Admin</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/student/all">Student</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/kelas/all">Class</a>
                </li>
            </ul>
            <ul class="navbar-nav ms-auto">
                @auth
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            {{ auth()->user()->name }}
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="/dashboard/student">My Dashboard</a></li>
                            <li>
                                <form action="/auth/logout" method="POST">
                                    @csrf
                                    <button type="submit" class="dropdown-item">
                                        Sign Out
                                    </button>
                                </form>
                            </li>

                        </ul>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link" href="/auth/login">Sign In</a>
                    </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>
