@extends('layouts.app')

@section('content')

<style>
    body {
        font-family: 'Arial', sans-serif;
        background-color:rgb(255, 255, 255);
    }

    h1 {
        text-align: left;
        font-size: 28px;
        font-weight: bold;
        margin-bottom: 10px;
        margin-top: 60px;
    }

    .w-50 {
        max-width: 500px;
        margin: auto;
        background-color: #fff;
        padding: 30px;
        border-radius: 1px;
        /* box-shadow: 0 4px 12px rgba(251, 192, 45, 0.3); */
    }

    .form-label {
        font-size: 14px;
        color:rgb(0, 0, 0);
        font-weight: 600;
    }

    .form-control {
        font-size: 16px;
        padding: 12px;
        border-radius: 8px;
        border: 1px solidrgb(255, 255, 255);
        background-color:rgb(255, 255, 255);
        margin-bottom: 20px;
        transition: all 0.3s ease;
    }

    .form-control:focus {
        border-color: #f9a825;
        box-shadow: 0 0 5px rgba(249, 168, 37, 0.5);
    }

    .btn {
        width: 100%;
        padding: 12px;
        font-size: 16px;
        font-weight: 600;
        color: #fff;
        background-color : rgb(255, 212, 104);
        border: none;
        border-radius: 8px;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .btn:hover {
        background-color: #f9a825;
    }

    .btn:focus {
        outline: none;
    }
</style>

<h1>Inscription</h1>

<div class="w-0 m-auto mt-10">
    <form method="post" action="/register">
        @csrf
        <div class="mb-3">
            <label for="prenom" class="form-label">Prénom</label>
            <input name="prenom" type="text" class="form-control" id="prenom" required>
        </div>
        <div class="mb-3">
            <label for="nom" class="form-label">Nom</label>
            <input name="nom" type="text" class="form-control" id="nom" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input name="email" type="email" class="form-control" id="email" required>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Mot de passe</label>
            <input name="password" type="password" class="form-control" id="password" required>
        </div>
        <button type="submit" class="btn">Soumettre</button>
    </form>
</div>

@endsection