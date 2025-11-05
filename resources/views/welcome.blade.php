<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Student Assessment System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .hero-section {
            background: linear-gradient(135deg, #c1ccfeff 0%, #e1c8fbff 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
        }
        .welcome-card {
            background: white;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        }
    </style>
</head>
<body>
    <div class="hero-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="welcome-card p-5">
                        <div class="text-center mb-5">
                            <h1 class="display-4 fw-bold text-primary">Student Assessment System</h1>
                            <p class="lead text-muted">Manage student records, grades, and academic information</p>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="d-grid gap-3">
                                    <a href="{{ route('login') }}" class="btn btn-primary btn-lg">
                                        <i class="fas fa-sign-in-alt"></i> Login
                                    </a>
                                    <a href="{{ route('register') }}" class="btn btn-outline-primary btn-lg">
                                        <i class="fas fa-user-plus"></i> Register
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card bg-light">
                                    <div class="card-body">
                                        <h5 class="card-title"></h5>
                                        <ul class="list-unstyled">
                                            <li>✅ Student Registration</li>
                                           
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        @if (Route::has('login'))
                            <div class="text-center mt-5">
                                @auth
                                    <div class="alert alert-success">
                                        You are logged in! 
                                        <a href="{{ url('/home') }}" class="btn btn-success btn-sm ms-2">Go to Dashboard</a>
                                    </div>
                                @else
                                    <p class="text-muted">Get started by creating an account or logging in</p>
                                @endauth
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>