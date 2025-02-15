<!-- app.blade.php -->
<html>
<head>
    <!-- Bibliothèques tiers -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"/>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Task Management</title>

    <style>
       
        .navbar {
            background: rgba(255, 255, 255, 0.9);
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease-in-out;
            padding: 20px 20px;
            margin-top : -10px;
        }

        .navbar-brand {
            font-size: 1.8rem;
            font-weight: bold;
            color: #222 !important;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .navbar-nav .nav-link {
            font-size: 1.1rem;
            font-weight: 500;
            color: #555 !important;
            margin-right: 15px;
            transition: all 0.3s ease-in-out;
        }

        .navbar-nav .nav-link:hover {
            color:rgb(202, 193, 86) !important;
            transform: scale(1.05);
        }

        .navbar-toggler {
            border: none;
        }

        .navbar-toggler-icon {
            filter: invert(1);
        }

        /* 📱 Responsive */
        @media screen and (max-width: 768px) {
            .navbar-nav {
                text-align: center;
            }
        }
    </style>
</head>
<body>

<!-- 🌍 Navigation -->
<nav class="navbar navbar-expand-lg navbar-light">
  <div class="container">
    <a class="navbar-brand" href="/">Task Management</a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        @if (Auth::guest())
        <li class="nav-item">
          <a class="nav-link" href="/register"><i class="fas fa-user-plus"></i> Sign Up</a>
        </li>
          <li class="nav-item">
            <a class="nav-link" href="/login"><i class="fas fa-sign-in-alt"></i> Login</a>
          </li>
          
        
        @else
          <li class="nav-item">
            <a class="nav-link" href="/"><i class="fas fa-list"></i> Task list</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/add-task"><i class="fas fa-plus-circle"></i> New task</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/logout"><i class="fas fa-sign-out-alt"></i> Logout</a>
          </li>
        @endif
      </ul>
    </div>
  </div>
</nav>

<div class="container mt-4">
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if(session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif

    @yield('content')
</div>

<footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</footer>

</body>
</html>
