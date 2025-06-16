<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Autenticação')</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #6a11cb, #2575fc);
            color: #fff;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .auth-card {
            max-width: 420px;
            width: 100%;
            background: #fff;
            color: #333;
            border-radius: 12px;
            padding: 30px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }

        .auth-card h4 {
            font-weight: 600;
            margin-bottom: 20px;
            text-align: center;
        }

        .auth-card .form-control {
            height: 45px;
            border-radius: 8px;
        }

        .auth-card .btn {
            height: 45px;
            border-radius: 8px;
            font-weight: 600;
            text-transform: uppercase;
        }

        .auth-card .btn-primary {
            background: linear-gradient(135deg, #6a11cb, #2575fc);
            border: none;
        }

        .auth-card .btn-primary:hover {
            background: linear-gradient(135deg, #2575fc, #6a11cb);
        }

        .auth-card .text-muted {
            font-size: 14px;
            text-align: center;
            margin-top: 15px;
        }

        .auth-card .text-muted a {
            color: #6a11cb;
            text-decoration: none;
        }

        .auth-card .text-muted a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <div class="auth-card">
        <h4>@yield('title', 'Autenticação')</h4>
        @yield('content')
    </div>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
