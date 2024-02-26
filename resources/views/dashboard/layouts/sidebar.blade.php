<div class="sidebar border border-right col-md-3 col-lg-2 p-0 bg-light">
    <div class="offcanvas-md offcanvas-end bg-light" tabindex="-1" id="sidebarMenu" aria-labelledby="sidebarMenuLabel">
        <div class="offcanvas-body d-md-flex flex-column p-0 pt-lg-3 overflow-y-auto">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2 active" aria-current="page"
                        href="/dashboard/student">
                        <svg class="bi text-success" width="24" height="24" fill="currentColor">
                            <use xlink:href="#house-fill" />
                        </svg>
                        <span class="text-success">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2" href="/dashboard/kelas">
                        <svg class="bi text-success" width="24" height="24" fill="currentColor">
                            <use xlink:href="#file-earmark" />
                        </svg>
                        <span class="text-success">Kelas</span>
                    </a>
                </li>
            </ul>

            <hr class="my-3">

            <ul class="nav flex-column mb-auto">
                <li class="nav-item">
                    <form action="/auth/logout" method="POST">
                        @csrf
                        <button class="nav-link d-flex align-items-center gap-2" type="submit">
                            <svg class="bi text-success" width="24" height="24" fill="currentColor">
                                <use xlink:href="#door-closed" />
                            </svg>
                            <span class="text-success">Sign out</span>
                        </button>
                    </form>
                </li>
            </ul>
        </div>
    </div>
</div>
