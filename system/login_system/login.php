<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <!-- My CSS -->
    <link rel="stylesheet" href="../../style.css">
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar bg-nav">
        <div class="container">
            <a class="navbar-brand d-flex">
                <img src="#" alt="Logo">
                <p class="text-primary-color">To Do List App</p>
            </a>
            </form>
        </div>
    </nav>
    <!-- End Of Navbar -->

    <!-- Form Login -->
    <section id="form_login" class="position-absolute top-50 start-50 translate-middle">
        <div class="container">
            <form action="login_system.php" method="POST">
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" id="username" aria-describedby="usernameHelp">
                </div>
                <div class="mb-3">
                    <label for="pass" class="form-label">Password</label>
                    <input type="password" class="form-control" id="pass">
                </div>
                <div class="mb-3">
                    <p>Tidak memiliki akun? <a href="#">Register Sekarang</a></p>
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
            </form>
        </div>
    </section>
    <!-- End of Form Login -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>