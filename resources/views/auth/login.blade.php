<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .hero-section {
            background: linear-gradient(135deg, #ffffffff 0%, #c09be4ff 100%);
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
        .btn-outline-secondary {
            border-color: #667eea;
            color: #667eea;
        }
        .btn-outline-secondary:hover {
            background-color: #667eea;
            color: white;
        }
        .card-header {
            background: white;
            border-bottom: 1px solid rgba(0,0,0,0.05);
            font-weight: 600;
            font-size: 1.5rem;
            padding: 1.5rem;
        }
        .form-check-input:checked {
            background-color: #667eea;
            border-color: #667eea;
        }
        .forgot-password-link {
            color: #667eea;
            text-decoration: none;
        }
        .forgot-password-link:hover {
            color: #5a6fd8;
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="hero-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card welcome-card">
                        <div class="card-header text-center">{{ __('Login') }}</div>

                        <div class="card-body p-4">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf

                                <div class="mb-3">
                                    <label for="email" class="form-label">{{ __('E-Mail Address') }}</label>
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" 
                                           name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                        <div class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="password" class="form-label">{{ __('Password') }}</label>
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" 
                                           name="password" required autocomplete="current-password">

                                    @error('password')
                                        <div class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" 
                                               id="remember" {{ old('remember') ? 'checked' : '' }}>
                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>

                                <div class="d-grid gap-2">
                                    <button type="submit" class="btn btn-primary btn-lg">
                                        {{ __('Login') }}
                                    </button>
                                </div>

                                <div class="text-center mt-3">
                                    @if (Route::has('password.request'))
                                        <a class="forgot-password-link" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    @endif
                                </div>
                            </form>
                            
                            
                            <div class="text-center mt-4">
                                <a href="{{ url('/') }}" class="btn btn-outline-secondary">
                                    <i class="fas fa-home me-2"></i>{{ __('Back to Home') }}
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</body>
</html>