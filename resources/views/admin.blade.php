<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Admin Dashboard - Orbit</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            background: #eef6fc;
            color: #1f2a44;
        }

        /* NAVBAR */

        .navbar {
            height: 75px;
            background: white;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 7%;
            box-shadow: 0 2px 10px rgba(31, 42, 68, 0.06);
        }

        .logo {
            font-size: 32px;
            font-weight: 700;
            color: #17233d;
        }

        .logo span {
            color: #16a9e5;
        }

        .navbar a {
            text-decoration: none;
            color: #334155;
            font-weight: 600;
        }

        .logout {
            background: #16a9e5;
            color: white !important;
            padding: 11px 22px;
            border-radius: 25px;
        }

        .logout:hover {
            background: #0796d0;
        }

        /* CONTENT */

        .container {
            width: 86%;
            max-width: 1200px;
            margin: 45px auto;
        }

        .welcome {
            margin-bottom: 30px;
        }

        .welcome h1 {
            font-size: 38px;
            margin-bottom: 10px;
        }

        .welcome p {
            color: #718096;
            font-size: 17px;
        }

        /* CARDS */

        .cards {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 25px;
            margin-bottom: 35px;
        }

        .card {
            background: white;
            padding: 30px;
            border-radius: 18px;
            box-shadow: 0 10px 30px rgba(31, 42, 68, 0.08);
        }

        .card h3 {
            color: #718096;
            font-size: 15px;
            margin-bottom: 12px;
        }

        .card .number {
            font-size: 32px;
            font-weight: 700;
            color: #1f2a44;
        }

        /* PRODUCT */

        .product-section {
            background: white;
            padding: 30px;
            border-radius: 18px;
            box-shadow: 0 10px 30px rgba(31, 42, 68, 0.08);
        }

        .product-section h2 {
            margin-bottom: 25px;
        }

        .add-product {
            display: inline-block;
            background: #16a9e5;
            color: white;
            text-decoration: none;
            padding: 12px 22px;
            border-radius: 25px;
            font-weight: 600;
            margin-bottom: 25px;
        }

        .add-product:hover {
            background: #0796d0;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        table th,
        table td {
            padding: 15px;
            border-bottom: 1px solid #e5eaf0;
            text-align: left;
        }

        table th {
            color: #475569;
            background: #f8fafc;
        }

        .empty {
            text-align: center;
            padding: 30px;
            color: #718096;
        }

        /* RESPONSIVE */

        @media (max-width: 800px) {

            .cards {
                grid-template-columns: 1fr;
            }

            .navbar {
                padding: 0 5%;
            }

            .container {
                width: 92%;
            }

            .welcome h1 {
                font-size: 30px;
            }

            table {
                font-size: 14px;
            }
        }
    </style>
</head>

<body>

    <!-- NAVBAR -->

    <nav class="navbar">

        <a href="{{ url('/') }}" class="logo">
            Orbit<span>.</span>
        </a>

        <a href="{{ url('/') }}" class="logout">
            Logout
        </a>

    </nav>


    <!-- CONTENT -->

    <main class="container">

        <div class="welcome">

            <h1>Admin Dashboard</h1>

            <p>
                Selamat datang di halaman administrator website.
            </p>

        </div>


        <!-- STATISTIC CARDS -->

        <div class="cards">

            <div class="card">

                <h3>Total Produk</h3>

                <div class="number">
                    0
                </div>

            </div>


            <div class="card">

                <h3>Total Pesanan</h3>

                <div class="number">
                    0
                </div>

            </div>


            <div class="card">

                <h3>Total Pengguna</h3>

                <div class="number">
                    0
                </div>

            </div>

        </div>


        <!-- PRODUCT -->

        <section class="product-section">

            <h2>Data Produk</h2>

            <a href="#" class="add-product">
                + Tambah Produk
            </a>

            <table>

                <thead>

                    <tr>
                        <th>No</th>
                        <th>Nama Produk</th>
                        <th>Harga</th>
                        <th>Stok</th>
                        <th>Aksi</th>
                    </tr>

                </thead>

                <tbody>

                    <tr>
                        <td colspan="5" class="empty">
                            Belum ada data produk.
                        </td>
                    </tr>

                </tbody>

            </table>

        </section>

    </main>

</body>

</html>