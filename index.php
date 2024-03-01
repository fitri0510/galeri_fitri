<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Gallery Foto</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<style>
    a {
        text-decoration: none;
    }
    i {
        color: black;
    }
</style>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container">
            <a class="navbar-brand text-dark" href="index.php"><b>Website Gallery Foto</b></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            </button>
            <div class="collapse navbar-collapse mt-2" id="navbarNavAltMarkup">
                <div class="navbar-nav me-auto">

                </div>
                <a href="register.php" class="btn btn-outline-primary m-1">Daftar</a>
                <a href="login.php" class="btn btn-outline-success m-1">Login</a>
            </div>
        </div>
    </nav>
    <hr>
    <br><br>
    <div class="container mt-3">
        <div class="row">
            <div class="col-md-3">
                <div class="card">
                    <img src="" alt="" class="card-img-top" title="" style="height:12rem;">
                    <div class="card-footer text-center">
                        <a href="#" type="button" class="a" data-bs-toggle="modal">
                        <i class="bi bi-chat-heart"> 0</i>
                        </a>
                        <a href="#" type="button" class="a" data-bs-toggle="modal">
                        <i class="bi bi-chat-dots"> 0</i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <br><br>

    <footer class="d-flex justify-content-center border-top mt-3 bg-light fixed-bottom">
        <p>&copy; UKK RPL 2024 | Fitri</p>
    </footer>

    <script src="assets/js/bootstrap.min.js"></script>
</body>

</html>