@extends('layouts.app')

@section('title', 'Student Dashboard')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white">
                    <h4 class="mb-0"><i class="fas fa-tachometer-alt me-2"></i>Student Dashboard</h4>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="alert alert-info">
                        <h5 class="alert-heading">Welcome, {{ $user->name }}!</h5>
                        <p class="mb-0">Here's your academic information and performance metrics.</p>
                    </div>
                    
                    <div class="row mt-4">
                        <div class="col-md-3 mb-3">
                            <div class="card text-white bg-primary h-100">
                                <div class="card-body text-center">
                                    <h5 class="card-title"><i class="fas fa-id-card"></i> Student ID</h5>
                                    <p class="card-text display-6">{{ $user->student_id ?? 'Not Set' }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <div class="card text-white bg-success h-100">
                                <div class="card-body text-center">
                                    <h5 class="card-title"><i class="fas fa-building"></i> Department</h5>
                                    <p class="card-text display-6">{{ $user->department ?? 'Not Set' }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <div class="card text-white bg-info h-100">
                                <div class="card-body text-center">
                                    <h5 class="card-title"><i class="fas fa-graduation-cap"></i> Program</h5>
                                    <p class="card-text display-6">{{ $user->program ?? 'Not Set' }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <div class="card text-white bg-warning h-100">
                                <div class="card-body text-center">
                                    <h5 class="card-title"><i class="fas fa-chart-line"></i> Average</h5>
                                    <p class="card-text display-6">{{ $user->average ?? 'Not Set' }}</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Additional Info -->
                    <div class="row mt-4">
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header bg-secondary text-white">
                                    <h6 class="mb-0">Personal Information</h6>
                                </div>
                                <div class="card-body">
                                    <p><strong>Name:</strong> {{ $user->name }}</p>
                                    <p><strong>Email:</strong> {{ $user->email }}</p>
                                    <p><strong>Age:</strong> {{ $user->age ?? 'Not Set' }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header bg-secondary text-white">
                                    <h6 class="mb-0">Quick Actions</h6>
                                </div>
                                <div class="card-body">
                                    <div class="d-grid gap-2">
                                        <a href="{{ url('/') }}" class="btn btn-outline-primary">
                                            <i class="fas fa-home me-1"></i> Back to Home
                                        </a>
                                        <a href="{{ route('logout') }}" class="btn btn-outline-danger" 
                                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                            <i class="fas fa-sign-out-alt me-1"></i> Logout
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection