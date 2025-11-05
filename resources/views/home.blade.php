<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Student Assessment System</title>


        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">


        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
                color: #3490dc;
                margin-bottom: 30px;
            }

            .subtitle {
                font-size: 24px;
                color: #6c757d;
                margin-bottom: 40px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            .student-info {
                background: #f8f9fa;
                border-radius: 10px;
                padding: 30px;
                margin-top: 30px;
                box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            }

            .feature-list {
                text-align: left;
                margin-top: 20px;
            }

            .feature-list li {
                margin-bottom: 10px;
                font-size: 16px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}" class="btn btn-primary">Dashboard</a>
                        <a href="{{ route('logout') }}" class="btn btn-outline-danger" 
                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            Logout
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    @else
                        <a href="{{ route('login') }}" class="btn btn-outline-primary">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="btn btn-primary">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Student Assessment
                </div>

                <div class="subtitle">
                    Manage Student Records and Academic Information
                </div>

                @auth

                    <div class="student-info">
                        <h4>Welcome back, {{ Auth::user()->name }}!</h4>
                        <div class="row justify-content-center mt-4">
                            <div class="col-md-3">
                                <div class="card text-white bg-primary mb-3">
                                    <div class="card-body">
                                        <h6 class="card-title">Student ID</h6>
                                        <p class="card-text">{{ Auth::user()->student_id }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card text-white bg-success mb-3">
                                    <div class="card-body">
                                        <h6 class="card-title">Department</h6>
                                        <p class="card-text">{{ Auth::user()->department }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card text-white bg-info mb-3">
                                    <div class="card-body">
                                        <h6 class="card-title">Program</h6>
                                        <p class="card-text">{{ Auth::user()->program }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card text-white bg-warning mb-3">
                                    <div class="card-body">
                                        <h6 class="card-title">Average</h6>
                                        <p class="card-text">{{ Auth::user()->average }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="{{ url('/home') }}" class="btn btn-primary btn-lg mt-3">Go to Dashboard</a>
                    </div>
                @else
                    <div class="student-info">
                        <h4>System Features</h4>
                        <div class="row">
                            <div class="col-md-6">
                                <ul class="feature-list">
                                    <li>✅ Student Registration & Profiles</li>
                                    <li>✅ Grade Management System</li>
                                    <li>✅ Academic Record Tracking</li>
                                    <li>✅ Department Management</li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <ul class="feature-list">
                                    <li>✅ Program Enrollment</li>
                                    <li>✅ Performance Analytics</li>
                                    <li>✅ Secure Authentication</li>
                                    <li>✅ Responsive Design</li>
                                </ul>
                            </div>
                        </div>
                        <div class="mt-4">
                            <p>Get started by creating an account or logging in</p>
                            <div class="d-grid gap-2 d-md-block">
                                <a href="{{ route('login') }}" class="btn btn-outline-primary btn-lg me-2">Login</a>
                                <a href="{{ route('register') }}" class="btn btn-primary btn-lg">Register Now</a>
                            </div>
                        </div>
                    </div>
                @endauth

                <div class="links mt-5">
                    <a href="https://laravel.com/docs">Documentation</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://blog.laravel.com">Blog</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>