<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/4f6d7f0454.js" crossorigin="anonymous"></script>
    <title>@yield('title', 'Página Base')</title>

    <link rel="stylesheet" type="text/css" href="css/baseEstilos.css">
    @stack('styles')

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
    <div class="derecha-header">
        <div class="cont-MensIcon">
            <i class="fa-solid fa-message fa-2xl"></i>
            <span class="badge">2</span>
        </div>
        <div class="cont-notifIcon">
            <i class="fa-solid fa-bell fa-2xl"></i>
            <span class="badge">3</span>
        </div>
        <div class="cont-datosHeader">
            <h1>{{ $user->primerNombre }} {{ $user->apPaterno }} - {{ $user->direccion }}</h1>
        </div>
        <div class="cont-fotoPerfil">
            <img src="images/perfil_sin.png" alt="Perfil" class="fotoPerfil">
        </div>
    </div>
</header>

    <aside>
<h1>aside</h1>
    </aside>
    <main>
    @yield ('contenido')    
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