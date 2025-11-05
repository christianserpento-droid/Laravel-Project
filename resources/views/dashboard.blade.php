@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Student Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h5>Welcome, {{ Auth::user()->name }}!</h5>
                    
                    <div class="row mt-4">
                        <div class="col-md-6">
                            <div class="card text-white bg-primary mb-3">
                                <div class="card-body">
                                    <h5 class="card-title">Student ID</h5>
                                    <p class="card-text">{{ Auth::user()->student_id }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card text-white bg-success mb-3">
                                <div class="card-body">
                                    <h5 class="card-title">Department</h5>
                                    <p class="card-text">{{ Auth::user()->department }}</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mt-3">
                        <a href="{{ url('/') }}" class="btn btn-outline-primary">Back to Home</a>
                        <a href="{{ route('logout') }}" class="btn btn-outline-danger" 
                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            Logout
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

