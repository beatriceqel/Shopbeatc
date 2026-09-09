<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopbeatc - Admin Dashboard</title>
    <!-- Link Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <div class="d-flex">
        <!-- Sidebar Admin -->
        <div class="bg-dark text-white p-3 vh-100" style="width: 250px;">
            <h4 class="fw-bold text-danger mb-4">Seller Centre</h4>
            <ul class="nav nav-pills flex-column mb-auto">
                <li class="nav-item">
                    <a href="#" class="nav-link active bg-danger">Dashboard</a>
                </li>
                <li>
                    <a href="#" class="nav-link text-white">Kelola Produk</a>
                </li>
                <li>
                    <a href="#" class="nav-link text-white">Pesanan Masuk</a>
                </li>
            </ul>
            <hr>
            <a href="{{ route('frontend') }}" class="btn btn-outline-light btn-sm w-100">Logout ke Frontend</a>
        </div>

        <!-- Main Content Admin -->
        <div class="container-fluid p-4 bg-light">
            <h2 class="fw-bold">Dashboard Admin Shopbeatc</h2>
            <p class="text-muted">Selamat datang di Panel Kontrol Penjualan.</p>
            
            <div class="row mt-4">
                <div class="col-md-4">
                    <div class="card bg-danger text-white p-3 shadow-sm border-0">
                        <h5>Total Produk</h5>
                        <h3>124 Items</h3>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card bg-success text-white p-3 shadow-sm border-0">
                        <h5>Pesanan Baru</h5>
                        <h3>18 Pesanan</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>