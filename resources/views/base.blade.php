<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/4f6d7f0454.js" crossorigin="anonymous"></script>
    <title>@yield('title', 'Página Base')</title> <!--Define el titulo de la pagina. se cambia en cada "contenido -->

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
            <span class="badge">0</span>
        </div>
        <div class="cont-notifIcon">
            <i class="fa-solid fa-bell fa-2xl"></i>
            <span class="badge">0</span>
        </div>
        <div class="cont-datosHeader">
            <h1>{{ $user->primerNombre }} {{ $user->apPaterno }} - {{ $user->direccion }}</h1>
        </div>
        <a href="{{ route('perfil') }}">
        <div class="cont-fotoPerfil">
            <img src="images/perfil.png" alt="Perfil" class="fotoPerfil">
        </div>
        </a>
    </div>
</header>

    <aside>        
        <div id="opcMenu">
            <Font>Menú</Font>
            <div class="cont-iconMen">
                <i class="fa-solid fa-bars fa-2xl" style="color: #ffffff;"></i>
            </div>
        </div>
        
        <a href="{{ route('menuOpciones') }}" class="home-button">
            <div class="cont-iconHome">
                <i class="fa-solid fa-house fa-2xl" style="color: #5ADB6D;"></i>
            </div>
            <p class="opcText">Inicio</p>
        </a>

        <a href="{{ route('perfil') }}" class="home-button">
            <div class="cont-iconHome">
            <i class="fa-solid fa-user fa-2xl" style="color: #000000;"></i>
            </div>
            <p class="opcText">Perfil</p>
        </a>

<a href="#" id="logoutButton" class="home-button">
    <div class="cont-iconHome">
        <i class="fa-solid fa-right-from-bracket fa-2xl" style="color: #f50a0a;"></i>
    </div>
    <p class="opcText">Cerrar Sesión</p>
</a>

<script>
    document.getElementById('logoutButton').addEventListener('click', function(event) {
        event.preventDefault();
        if (confirm('¿Estás seguro de que deseas cerrar sesión?')) {
            window.location.href = "{{ route('logout') }}";
        }
    });
</script>
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
