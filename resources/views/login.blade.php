@extends('layouts.app')

@section('content')

<style>
    .container {
        display: flex;
        width: 160%;
        max-width: 1500px;
        background-color: #fff; 
        border-radius: 1px;
        overflow: hidden;
        margin-top: 50px;
    }

    .form-container {
        width: 40%;
        padding: 50px;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    .form-container h1 {
        font-size: 28px;
        font-weight: bold;
        margin-bottom: 10px;
    }

    .form-container p {
        color: #777;
        margin-bottom: 20px;
    }

    .form-group {
        margin-bottom: 20px;
    }

    .form-group label {
        font-size: 14px;
        font-weight: 600;
        color: #333;
    }

    .form-control {
        width: 100%;
        padding: 12px;
        font-size: 16px;
        border-radius: 8px;
        transition: all 0.3s ease;
    }

    .form-control:focus {
        border-color:rgb(0, 0, 0);
        box-shadow: 0 0 8px rgba(238, 255, 1, 0.5);
    }

    .btn {
        width: 100%;
        padding: 12px;
        font-size: 16px;
        font-weight: 600;
        color: #fff;
        background-color:rgb(255, 212, 104);
        border: none;
        border-radius: 8px;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .btn:hover {
        background-color:rgb(255, 255, 92);
    }

    .google-btn {
        width: 100%;
        padding: 12px;
        font-size: 16px;
        font-weight: 600;
        color: #333;
        background-color: #fff;
        border: 1px solid #ddd;
        border-radius: 8px;
        cursor: pointer;
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 10px;
        transition: all 0.3s ease;
    }

    .google-btn:hover {
        background-color: #f1f1f1;
    }

    .image-container {
        width: 50%;
        background: url('/storage/images/sports-image.png') no-repeat center center/cover;
        background-size: cover;
    }

    @media (max-width: 768px) {
        .container {
            flex-direction: column;
            width: 90%;
        }

        .form-container, .image-container {
            width: 100%;
        }

        .image-container {
            height: 300px;
        }
    }
</style>

<div class="container">
    <div class="form-container">
        <h1>Welcome Back</h1>
        <p>Please enter your details.</p>
        
        <form method="post" action="{{ route('user.login') }}">
            @csrf
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control" id="email" required>
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control" id="password" required>
            </div>

            <div class="form-group">
                <input type="checkbox" id="remember-me">
                <label for="remember-me">Remember me</label>
            </div>

            <button type="submit" class="btn" >Sign in</button>
        </form>
        
        <p style="margin-top: 15px; text-align: center;">
            Don't have an account? <a href="register" style="color:rgb(98, 97, 55);">Sign up for free!</a>
        </p>
    </div>

    <div class="image-container"></div>
</div>

@endsection
