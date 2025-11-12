@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register - Student Assessment System</title>

    <!-- Bootstrap + Font Awesome -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">

    <style>
        .hero-section {
            background: linear-gradient(135deg, #ffffff 0%, #c09be4 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
        }
        .welcome-card {
            background: white;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        }
        .form-control:focus {
            border-color: #667eea;
            box-shadow: 0 0 0 0.2rem rgba(102, 126, 234, 0.25);
        }
        .btn-primary {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            border: none;
        }
        .btn-primary:hover {
            background: linear-gradient(135deg, #5a6fd8 0%, #6a4190 100%);
            transform: translateY(-2px);
            transition: all 0.3s ease;
        }
    </style>
</head>

<body>
    <div class="hero-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="welcome-card p-5">
                        <div class="text-center mb-4">
                            <a href="{{ url('/') }}" class="btn btn-outline-secondary btn-sm mb-3">
                                <i class="fas fa-arrow-left"></i> Back to Home
                            </a>
                            <h1 class="display-5 fw-bold text-primary">Student Registration</h1>
                            <p class="lead text-muted">Create your student account</p>
                        </div>

                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">

                                    <!-- Student ID -->
                                    <div class="mb-3">
                                        <label for="student_id" class="form-label">Student ID *</label>
                                        <input id="student_id" type="text"
                                            class="form-control @error('student_id') is-invalid @enderror"
                                            name="student_id" value="{{ old('student_id') }}" required autofocus>
                                        @error('student_id')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <!-- Name -->
                                    <div class="mb-3">
                                        <label for="name" class="form-label">Full Name *</label>
                                        <input id="name" type="text"
                                            class="form-control @error('name') is-invalid @enderror"
                                            name="name" value="{{ old('name') }}" required>
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <!-- Email -->
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email Address *</label>
                                        <input id="email" type="email"
                                            class="form-control @error('email') is-invalid @enderror"
                                            name="email" value="{{ old('email') }}" required>
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <!-- Age -->
                                    <div class="mb-3">
                                        <label for="age" class="form-label">Age *</label>
                                        <input id="age" type="number"
                                            class="form-control @error('age') is-invalid @enderror"
                                            name="age" value="{{ old('age') }}" required min="1" max="150">
                                        @error('age')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <!-- Average -->
                                    <div class="mb-3">
                                        <label for="average" class="form-label">Average Grade *</label>
                                        <input id="average" type="number" step="0.01"
                                            class="form-control @error('average') is-invalid @enderror"
                                            name="average" value="{{ old('average') }}" required min="0" max="100">
                                        @error('average')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <!-- Department -->
                                    <div class="mb-3">
                                        <label for="department" class="form-label">Department *</label>
                                        <input id="department" type="text"
                                            class="form-control @error('department') is-invalid @enderror"
                                            name="department" value="{{ old('department') }}" required>
                                        @error('department')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <!-- Program -->
                                    <div class="mb-3">
                                        <label for="program" class="form-label">Program *</label>
                                        <input id="program" type="text"
                                            class="form-control @error('program') is-invalid @enderror"
                                            name="program" value="{{ old('program') }}" required>
                                        @error('program')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <!-- Password -->
                                    <div class="mb-3">
                                        <label for="password" class="form-label">Password *</label>
                                        <input id="password" type="password"
                                            class="form-control @error('password') is-invalid @enderror"
                                            name="password" required>
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <!-- Confirm Password -->
                                    <div class="mb-3">
                                        <label for="password-confirm" class="form-label">Confirm Password *</label>
                                        <input id="password-confirm" type="password" class="form-control"
                                            name="password_confirmation" required>
                                    </div>
                                </div>
                            </div>

                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-primary btn-lg">
                                    <i class="fas fa-user-plus"></i> Register Account
                                </button>
                            </div>

                            <div class="text-center mt-3">
                                <p class="text-muted">
                                    Already have an account?
                                    <a href="{{ route('login') }}" class="text-primary text-decoration-none">
                                        Login here
                                    </a>
                                </p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
@endsection
