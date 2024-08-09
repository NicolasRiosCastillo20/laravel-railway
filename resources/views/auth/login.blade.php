@extends('layouts.app')

@section('content')
    <div class="contairner" style="width: 100%; display: flex; justify-content: center; justify-content: center">
        <div class="form-container">
            <p class="title">Login</p>
            <form class="form" method="POST" action="{{ route('login') }}">
                @csrf
                <div class="input-group">
                    <label for="username">Correo</label>
                    {{-- <input type="text" name="username" id="username" placeholder=""> --}}
                    <input id="email" type="email" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="input-group">
                    <label for="password">Password</label>
                    <input class="@error('password') is-invalid @enderror" type="password" name="password" id="password" placeholder="">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div style="margin-top: 8%">
                    <button class="sign">Iniciar sesion</button>
                </div>
            </form>
        </div>
    </div>

    <style>
        html, body {
            height: 100%;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            background-image: url('{{ asset('img/portadaMocca.jpg') }}');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }

        .container {
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .form-container {
        width: 420px;
        height: 380px;
        border-radius: 0.75rem;
        background-color: rgba(17, 24, 39, 0.8);
        padding: 2rem;
        color: rgba(243, 244, 246, 1);

        }

        .title {
        text-align: center;
        font-size: 2.5rem;
        line-height: 2rem;
        font-weight: 700;
        }

        .form {
        margin-top: 2.5rem;
        }

        .input-group {
        margin-top: 0.50rem;
        font-size: 1rem;
        line-height: 1.20rem;
        }

        .input-group label {
        display: block;
        color: rgb(175, 156, 156);
        margin-bottom: 4px;
        }

        .input-group input {
        width: 100%;
        border-radius: 0.375rem;
        border: 1px solid rgba(55, 65, 81, 1);
        outline: 0;
        background-color: rgba(17, 24, 39, 0.8);
        padding: 0.75rem 1rem;
        color: rgba(243, 244, 246, 1);
        }

        .input-group input:focus {
        border-color: rgba(167, 139, 250);
        }

        .sign {
        display: block;
        width: 100%;
        background-color:  #dec5b7;
        padding: 0.75rem;
        text-align: center;
        color: rgba(17, 24, 39, 1);
        border: none;
        border-radius: 0.375rem;
        font-weight: 600;
        }
    </style>
@endsection
