<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>To Do List</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <!-- My CSS -->
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    
    <!-- Navbar -->
    <nav class="navbar bg-nav">
        <div class="container">
            <a class="navbar-brand d-flex">
                <img src="#" alt="Logo">
                <p class="text-primary-color">To Do List App</p>
            </a>
                <form class="d-flex" role="search">
                <a href="system/login_system/login.php"class="btn btn-outline-light text-primary-color" type="submit">Login</a>
            </form>
        </div>
    </nav>
    <!-- End Of Navbar -->

    <!-- Hero Section -->
    <main id='home'>
        <div class="container">
            <div class="row" id='batas_home'>
                <div class="col-md-4">
                    <img src="assets/Checklist.gif" alt="GIF" class='img-fluid'>
                </div>
                <div class="col-md-8 mt-5">
                    <h1>To Do List</h1>
                    <p>Buat kegiatan rencana harian anda dengan mudah dengan menggunakan website ini.</p>
                    <a href="#" class="btn btn-primary-color shadow">Buat Rencana</a>
                </div>
            </div>
        </div>
    </main>
    <!-- End Of Hero Section -->

    <!-- Layanan Section -->
    <section id="layanan" class="text-center mt-5">
        <div class="container">
            <div class="wrapper_layanan mb-4">
                <h2>Apa Yang Bisa Anda Lakukan?</h2>
                <p>Berikut adalah beberapa hal yang bisa anda lakukan pada website ini</p>
            </div>
            <div class="card_layanan">
                <div class="row mx-auto">
                    <div class="col-md-4 mb-3">
                        <div class="card" style="width: 18rem;">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="card" style="width: 18rem;">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="card" style="width: 18rem;">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Layanan Section -->

    <!-- Bootstrap Script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>