<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light pt-3 pb-3">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar">
                <span class="navbar-toggler-icon"></span>
            </button>

            <a href="home.html" class="navbar-brand me-lg-5">LOGO</a>

            <div class="collapse navbar-collapse ms-lg-5" id="navbar">
                <ul class="nav navbar-nav">
                    <li class="nav-item px-lg-4">
                        <a class="nav-link" href="#">page 1</a>
                    </li>
                    <li class="nav-item px-lg-4">
                        <a class="nav-link" href="#">page 2</a>
                    </li>
                    <li class="nav-item px-lg-4">
                        <a class="nav-link" href="#">page 3</a>
                    </li>
                </ul>
            </div>

            <form class="d-none d-lg-block me-lg-4">
                <div class="input-group">
                    <input type="search" class="form-control" placeholder="Search">
                    <button class="btn btn-outline-secondary" type="button" id="search"><i class="bi bi-search"></i></button>
                </div>
            </form>

            <div class="btn-group">
                <a href="login.html" class="btn btn-dark">Sign In</a>
            </div>
        </div>
    </nav>
</body>
</html>