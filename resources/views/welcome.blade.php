<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sinanat - Aplikasi Kepegawaian</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <style>
        body {
            background-color: #f0f4f8; /* Background pastel */
            color: #555; /* Soft text color */
            font-family: 'Poppins', sans-serif;
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            margin: 0;
        }

        .navbar-custom {
            width: 100%;
            position: fixed;
            top: 0;
            left: 0;
            padding: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: #d1e7f7; /* Soft pastel blue for navbar */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .logo img {
            max-width: 100px; /* Set max-width for responsiveness */
            height: auto;
        }

        .auth-links {
            display: flex;
            gap: 15px;
        }

        .auth-links a {
            color: #fff;
            text-decoration: none;
            padding: 10px 20px;
            border-radius: 5px;
            transition: 0.3s;
        }

        .btn-login {
            background-color: #ffb3d9; /* Pastel pink for Login */
        }

        .btn-register {
            background-color: #ffb3d9; /* Pastel pink for Register */
        }

        .auth-links a:hover {
            opacity: 0.8;
        }

        .container {
            text-align: center;
            margin-top: 100px; /* Adjusts space below navbar */
        }

        h1 {
            font-size: 2.5rem;
            font-weight: bold;
            margin-bottom: 10px;
            color: #094985; /* Blue color for 'Welcome' text */
        }

        p {
            font-size: 1.2rem;
            opacity: 0.8;
            color: #666; /* Soft color for text */
        }

        .logo-img {
            width: 200px; /* Adjust logo width */
            height: auto;
        }
    </style>
</head>
<body>

    <!-- Navbar with Logo on the Left & Login/Register on the Right -->
    <div class="navbar-custom">
        <div class="logo">
            <img src="{{ asset('images/ntlogo.png') }}" alt="SiGawai">
        </div>
        <div class="auth-links">
            <a href="{{ route('login') }}" class="btn-login">Login</a>
            <a href="{{ route('register') }}" class="btn-register">Register</a>
        </div>
    </div>

    <!-- Main Content -->
    <div class="logo">
        <img src="{{ asset('images/ntlogo.png') }}" alt="SiGawai">
    </div>
    <div class="container">
        <h1>Welcome to Sinanat</h1>
        <p>Aplikasi Data Kepegawaian</p>
    </div>

</body>
</html>
