<nav class="navbar navbar-expand-lg auto-hiding-navbar py-3 px-3 navbar-light shadow-sm bg-white sticky-top">
    <div class="container">
        <a href="#" class="navbar-brand">
            <span class="text-primary">We</span>Tic
        </a>
        <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navmenu">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navmenu">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a href="home.php" class="nav-link active">
                        HOME
                    </a>
                </li>
                <li class="nav-item">
                    <a href="home.php" class="nav-link active">
                        ABOUT
                    </a>
                </li>
                <li class="nav-item">
                    <a href="home.php" class="nav-link active">
                        REPORT A PROBLEM
                    </a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <?php if (isset($_SESSION['username'])) : ?>
                    <li class="nav-item dropdown">
                        <span class="dropdown-toggle mx-auto btn me-3 nav-link" data-bs-toggle="dropdown" aria-expanded="true">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                            </svg>
                        </span>
                        <ul class="dropdown-menu dropdown-menu-dark">
                            <li><a href="profile.php" class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                <?php endif; ?>
                <div class="dropdown-center">
                    <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Centered dropdown
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Action two</a></li>
                        <li><a class="dropdown-item" href="#">Action three</a></li>
                    </ul>
                </div>

                <?php if (isset($_SESSION['username'])) : ?>
                    <li class="nav-item">
                        <a href="./includes/logout.inc.php" class="btn btn-secondary nav-link text-white mx-auto mt-lg-1">LOGOUT</a>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>