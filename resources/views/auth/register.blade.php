<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registro - Sistema de monitoreo de salud en tiempo real</title>

    <!-- Fuentes y estilos -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background: linear-gradient(135deg, #87CEEB 0%, #4682B4 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .auth-box {
            background-color: rgba(255, 255, 255, 0.9);
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            width: 400px;
        }
        .auth-logo {
            background-color: #4682B4;
            color: white;
            padding: 20px;
            text-align: center;
            font-size: 24px;
            font-weight: 700;
        }
        .auth-logo a {
            color: white;
            text-decoration: none;
        }
        .auth-card-body {
            padding: 30px;
        }
        .btn-primary {
            background-color: #4682B4;
            border-color: #4682B4;
        }
        .btn-primary:hover {
            background-color: #3c6d9e;
            border-color: #3c6d9e;
        }
    </style>
</head>
<body>
<div class="auth-box">
    <!-- Título -->
    <div class="auth-logo">
        <a href="/">Sistema de Monitoreo de Salud</a>
    </div>

    <!-- Tarjeta de registro -->
    <div class="auth-card-body">
        <h4 class="text-center mb-4">{{ __('Registro') }}</h4>

        <!-- Formulario -->
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Campo de Nombre -->
            <div class="mb-3">
                <label for="name" class="form-label">{{ __('Nombre') }}</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                </div>
                @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <!-- Campo de Email -->
            <div class="mb-3">
                <label for="email" class="form-label">{{ __('Correo electrónico') }}</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                </div>
                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <!-- Campo de Contraseña -->
            <div class="mb-3">
                <label for="password" class="form-label">{{ __('Contraseña') }}</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="fas fa-lock"></i></span>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                </div>
                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <!-- Campo de Confirmación de Contraseña -->
            <div class="mb-3">
                <label for="password-confirm" class="form-label">{{ __('Confirmar Contraseña') }}</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="fas fa-lock"></i></span>
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                </div>
            </div>

            <!-- reCAPTCHA -->
            <div class="mb-3">
                {!! NoCaptcha::display() !!}
                @if ($errors->has('g-recaptcha-response'))
                    <span class="invalid-feedback d-block" role="alert">
                        <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
                    </span>
                @endif
            </div>

            <!-- Botón de Registro -->
            <div class="d-grid gap-2">
                <button type="submit" class="btn btn-primary">
                    {{ __('Registrarse') }}
                </button>
            </div>
        </form>

        <!-- Enlace a Inicio de Sesión -->
        <p class="text-center mt-3">
            <a href="{{ route('login') }}" class="text-decoration-none">¿Ya tienes una cuenta? Inicia sesión</a>
        </p>
    </div>
</div>

<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
{!! NoCaptcha::renderJs() !!}
</body>
</html>

