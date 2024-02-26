<header class="navbar navbar-expand-md navbar-dark bg-success sticky-top shadow">
    <a class="navbar-brand me-0 fs-4 ms-3" href="#">Dashboard Admin</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav flex-row d-md-none">
            <li class="nav-item">
                <button class="nav-link px-3 text-black" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSearch" aria-controls="navbarSearch" aria-expanded="false"
                    aria-label="Toggle search">
                    <svg class="bi">
                        <use xlink:href="#search" />
                    </svg>
                </button>
            </li>
            <li class="nav-item">
                <button class="nav-link px-3 text-black" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <svg class="bi">
                        <use xlink:href="#list" />
                    </svg>
                </button>
            </li>
        </ul>
        <form class="d-flex w-100 d-md-none">
            <input class="form-control rounded-0 border-0" type="search" placeholder="Search" aria-label="Search">
        </form>
    </div>
    <div id="navbarSearch" class="navbar-search w-100 collapse">
        <form class="d-flex w-100">
            <input class="form-control rounded-0 border-0" type="search" placeholder="Search" aria-label="Search">
        </form>
    </div>
</header>
