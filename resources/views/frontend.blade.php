<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopbeatc - Frontend</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <!-- Navbar Frontend dengan Tombol Link ke Login -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-danger px-4">
        <a class="navbar-brand fw-bold" href="#">Shopbeatc</a>
        <div class="ms-auto">
            <a href="{{ route('login') }}" class="btn btn-outline-light btn-sm fw-bold">Login</a>
        </div>
    </nav>

    <!-- Content Frontend -->
    <div class="container my-5 text-center">
        <h1 class="fw-bold text-danger">Selamat Datang di Shopbeatc</h1>
        <p class="text-secondary">Platform e-commerce masa kini dengan penawaran terbaik.</p>
        
        <div class="row mt-4 justify-content-center">
            <div class="col-md-4">
                <div class="card shadow-sm border-0 p-3">
                    <h5 class="card-title fw-bold">Sepatu Sneaker</h5>
                    <p class="text-danger fw-bold">Rp 250.000</p>
                    <a href="{{ route('login') }}" class="btn btn-danger btn-sm">Beli Sekarang</a>
                </div>
            </div>
        </div>
    </div>

</body>
</html>