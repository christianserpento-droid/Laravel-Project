<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Student Assessment System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        .hero-section {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
        }
        .welcome-card {
            background: white;
            border-radius: 15px;
            box-shadow: 0 20px 40px rgba(0,0,0,0.1);
        }
        .feature-list li {
            padding: 8px 0;
        }
    </style>
</head>
<body>
    <div class="hero-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="welcome-card p-5">
                        <!-- Top Right Auth Links -->
                        @if (Route::has('login'))
                            <div class="text-end mb-4">
                                @auth
                                   <a href="{{ route('dashboard') }}" class="btn btn-primary">Dashboard</a>

                                    <a href="{{ route('logout') }}" class="btn btn-outline-danger" 
                                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        <i class="fas fa-sign-out-alt"></i> Logout
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                @else
                                    <a href="{{ route('login') }}" class="btn btn-outline-primary me-2">
                                        <i class="fas fa-sign-in-alt"></i> Login
                                    </a>
                                    @if (Route::has('register'))
                                        <a href="{{ route('register') }}" class="btn btn-primary">
                                            <i class="fas fa-user-plus"></i> Register
                                        </a>
                                    @endif
                                @endauth
                            </div>
                        @endif

                        <div class="text-center mb-5">
                            <h1 class="display-4 fw-bold text-primary mb-3">Student Assessment System</h1>
                            <p class="lead text-muted">Manage student records, grades, and academic information efficiently</p>
                        </div>

                        @auth
                            <!-- Student Info for Logged-in Users -->
                            <div class="student-info bg-light rounded-3 p-4 mb-5">
                                <h4 class="text-center mb-4">Welcome back, {{ Auth::user()->name }}! 👋</h4>
                                <div class="row">
                                    <div class="col-md-3 mb-3">
                                        <div class="card text-white bg-primary h-100">
                                            <div class="card-body text-center">
                                                <h6 class="card-title"><i class="fas fa-id-card"></i> Student ID</h6>
                                                <p class="card-text fs-5">{{ Auth::user()->student_id ?? 'Not Set' }}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <div class="card text-white bg-success h-100">
                                            <div class="card-body text-center">
                                                <h6 class="card-title"><i class="fas fa-building"></i> Department</h6>
                                                <p class="card-text fs-5">{{ Auth::user()->department ?? 'Not Set' }}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <div class="card text-white bg-info h-100">
                                            <div class="card-body text-center">
                                                <h6 class="card-title"><i class="fas fa-graduation-cap"></i> Program</h6>
                                                <p class="card-text fs-5">{{ Auth::user()->program ?? 'Not Set' }}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <div class="card text-white bg-warning h-100">
                                            <div class="card-body text-center">
                                                <h6 class="card-title"><i class="fas fa-chart-line"></i> Average</h6>
                                                <p class="card-text fs-5">{{ Auth::user()->average ?? 'Not Set' }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center mt-3">
                                    <a href="{{ route('dashboard') }}" class="btn btn-primary btn-lg">
                                        <i class="fas fa-tachometer-alt"></i> Go to Dashboard
                                    </a>
                                </div>
                            </div>
                        @else
                            <!-- Main Content for Guests -->
                            <div class="row align-items-center">
                                <div class="col-md-6">
                                    <div class="d-grid gap-3">
                                        <a href="{{ route('login') }}" class="btn btn-primary btn-lg py-3">
                                            <i class="fas fa-sign-in-alt me-2"></i> Login to System
                                        </a>
                                        <a href="{{ route('register') }}" class="btn btn-outline-primary btn-lg py-3">
                                            <i class="fas fa-user-plus me-2"></i> Create New Account
                                        </a>
                                    </div>
                                    <div class="text-center mt-4">
                                        <p class="text-muted">Get started by creating an account or logging in</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card border-0 bg-light">
                                        <div class="card-body">
                                            <h5 class="card-title text-center mb-4">System Features</h5>
                                            <ul class="feature-list list-unstyled">
                                                <li><i class="fas fa-check text-success me-2"></i> Student Registration & Profiles</li>
                                                <li><i class="fas fa-check text-success me-2"></i> Grade Management System</li>
                                                <li><i class="fas fa-check text-success me-2"></i> Academic Record Tracking</li>
                                                <li><i class="fas fa-check text-success me-2"></i> Department Management</li>
                                                <li><i class="fas fa-check text-success me-2"></i> Program Enrollment</li>
                                                <li><i class="fas fa-check text-success me-2"></i> Performance Analytics</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endauth
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>