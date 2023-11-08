<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>INICIO</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>

<body>
    {{-- INICIO HEADER --}}
    <header>
        <nav class="navbar top">
            <div class="logo">LOGO</div>
            <div class="nav-links">
                <a href="#">Ayuda</a>
                <span>|</span> <!-- Carácter "|" para separar -->
                <a href="/register">Únete</a>
                <span>|</span> <!-- Carácter "|" para separar -->
                <a href="/login">Iniciar Sesión</a>
            </div>
        </nav>

        <nav class="navbar bottom">
            <div class="nav-categories">
                <a href="#">Hombres</a>
                <span>|</span> <!-- Carácter "|" para separar -->
                <a href="#">Mujeres</a>
                <span>|</span> <!-- Carácter "|" para separar -->
                <a href="#">Niños</a>
                <span>|</span> <!-- Carácter "|" para separar -->
                <a href="#">Sport</a>
                <span>|</span> <!-- Carácter "|" para separar -->
                <a href="#">Zapatillas</a>
            </div>
            <div class="nav-search">
                <input type="text" placeholder="Buscar...">
                <button><i class="fas fa-search"></i></button>
            </div>
            <div class="nav-icons">
                <a href="#"><i class="fas fa-heart"></i></a>
                <a href="#"><i class="fas fa-shopping-bag"></i></a>
            </div>
        </nav>
    </header>
    {{-- Fin de HEADER --}}
    <main>
    @yield('content')
    </main>
    {{-- inicio del footer --}}
    <footer>
        <div class="footer-container">
            <div class="footer-content-container">
                <h3 class="website-logo">Ayllu</h3>
                <span class="footer-info">XXX-XXX-XXX</span>
                <span class="footer-info">AYLLUEJEMPLO.COM</span>
            </div>
            <div class="footer-menus">
                <div class="footer-content-container">
                    <span class="menu-title">Menu</span>
                    <a href="/nosotros" class="menu-item-footer">Nosotros</a>
                    <a href="#" class="menu-item-footer">Servicios</a>
                    <a href="/contacto" class="menu-item-footer">Contactanos</a>
                </div>
                <div class="footer-content-container">
                    <span class="menu-title">Legal</span>
                    <a href="#" class="menu-item-footer">Politica de Privacidad</a>
                    <a href="/FAQ" class="menu-item-footer">FAQ</a>
                    <a href="#" class="menu-item-footer">Libro de quejas</a>
                </div>
            </div>
            <div class="footer-content-container">
                <span class="menu-title">Síguenos</span>
                <div class="social-container">
                    <a href="#" class="social-link"><i class="fab fa-facebook"></i></a>
                    <a href="#" class="social-link"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="social-link"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
        <div class="copyright-container">
            <span class="copyright">Copyright &copy; 2023, Rhamtec. All rights reserved.</span>
        </div>
    </footer>
</body>
</html>
