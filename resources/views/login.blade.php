<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopbeatc - Login</title>
    <!-- Link Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-secondary bg-opacity-10 d-flex align-items-center justify-content-center vh-100">

    <div class="card shadow-sm border-0 p-4" style="width: 350px;">
        <h3 class="text-center fw-bold text-danger mb-3">Login Shopbeatc</h3>
        
        <!-- Form mengarah ke Halaman Admin -->
        <form action="{{ route('admin') }}" method="GET">
            <div class="mb-3">
                <label class="form-label">Email / Username</label>
                <input type="text" class="form-control" placeholder="admin@shopbeatc.com" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Password</label>
                <input type="password" class="form-control" placeholder="******" required>
            </div>
            <!-- Tombol Login menuju Halaman Admin -->
            <button type="submit" class="btn btn-danger w-100 fw-bold">Login ke Admin</button>
        </form>

        <div class="text-center mt-3">
            <a href="{{ route('frontend') }}" class="text-decoration-none text-muted small">&laquo; Kembali ke Frontend</a>
        </div>
    </div>

</body>
</html>