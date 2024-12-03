<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DGIVOA</title>
    <link rel="stylesheet" type="text/css" href="css/loginEstilos.css">
</head>
<body>
    <header class="header">
        <div class="logo-container">
            <img src="images/logo_sin.png" alt="Logo" class="logo">
            <div class="header-text">
                <p class="header-line">Dirección General de Inspección y</p>
                <p class="header-line">Vigilancia de Obras y Acciones</p>
            </div>
        </div>
    </header>

    <main class="login-container">
        <h2>Iniciar sesión</h2>
        <form class="login-form" method="POST" action="{{ route('login') }}">
    @csrf
    <input type="email" name="email" placeholder="correo electrónico" required>
    <input type="password" name="password" placeholder="contraseña" required>
    <button id="loginButton" type="submit">Entrar</button>
</form>

<!-- Mostrar errores si los hay -->
@if($errors->has('loginError'))
    <div class="error-message">
        {{ $errors->first('loginError') }}
    </div>
@endif

    </main>

    <footer class="footer">
        <div class="footer-content">
            <img src="images/logo_hidalgo.png" alt="Logo Hidalgo" class="footer-logo">
            <div class="footer-text">
                <p class="footer-title">Contraloría</p>
                <p class="footer-line">42162 San Agustín</p>
                <p class="footer-line">Tlaxiaca, Hgo.</p>
            </div>
        </div>
    </footer>
</body>
</html>
