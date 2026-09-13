<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login - Orbit</title>

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
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .login-container {
            width: 100%;
            max-width: 430px;
            padding: 20px;
        }

        .logo {
            text-align: center;
            font-size: 42px;
            font-weight: 700;
            color: #17233d;
            margin-bottom: 30px;
        }

        .logo span {
            color: #16a9e5;
        }

        .login-card {
            background: white;
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 15px 40px rgba(31, 42, 68, 0.10);
        }

        .login-card h1 {
            text-align: center;
            font-size: 30px;
            margin-bottom: 10px;
            color: #1f2a44;
        }

        .login-card .subtitle {
            text-align: center;
            color: #718096;
            margin-bottom: 30px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
            color: #334155;
        }

        .form-group input {
            width: 100%;
            padding: 14px 16px;
            border: 1px solid #d7e0ea;
            border-radius: 10px;
            font-size: 15px;
            outline: none;
        }

        .form-group input:focus {
            border-color: #16a9e5;
            box-shadow: 0 0 0 3px rgba(22, 169, 229, 0.12);
        }

        .login-button {
            width: 100%;
            padding: 14px;
            border: none;
            border-radius: 30px;
            background: #16a9e5;
            color: white;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            margin-top: 5px;
        }

        .login-button:hover {
            background: #0796d0;
        }

        .back-home {
            text-align: center;
            margin-top: 25px;
        }

        .back-home a {
            text-decoration: none;
            color: #16a9e5;
            font-weight: 600;
        }

        .back-home a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>

    <div class="login-container">

        <div class="logo">
            Orbit<span>.</span>
        </div>

        <div class="login-card">

            <h1>Welcome Back</h1>

            <p class="subtitle">
                Login untuk mengakses halaman admin
            </p>

            <form action="{{ url('/login') }}" method="POST">

                @csrf

                <div class="form-group">
                    <label for="email">Email</label>

                    <input
                        type="email"
                        id="email"
                        name="email"
                        placeholder="Masukkan email"
                        required
                    >
                </div>

                <div class="form-group">
                    <label for="password">Password</label>

                    <input
                        type="password"
                        id="password"
                        name="password"
                        placeholder="Masukkan password"
                        required
                    >
                </div>

                <button type="submit" class="login-button">
                    Login
                </button>

            </form>

            <div class="back-home">
                <a href="{{ url('/') }}">
                    ← Kembali ke Home
                </a>
            </div>

        </div>

    </div>

</body>

</html>