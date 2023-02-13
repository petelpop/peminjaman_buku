<header class="p-3 bg-dark text-white">
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                <li><a href="#" class="nav-link px-2 text-white">perpus</a></li>
            </ul>
            <div class="text-end">
                @guest
                <a href="" class="btn btn-warning me-2">Login</a>
                <a href="" class="btn btn-primary">Sign-up</a>
                @else
                <a href="" class="btn btn-outline-danger me-2" onclick="event.preventDefault(); document.getElementById
                    ('logout-form').submit();">logout</a>
                <form action="" id="logout-form" method="POST">
                    @csrf
                </form>
                @endguest
            </div>
        </div>
    </div>
</header>
