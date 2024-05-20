<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Sriracha&display=swap');
    </style>
    <link rel="stylesheet" href="css/style.css">
    <title>FunnyPuppies</title>
</head>

<body>
    <header>
        <div class="header-left">
            <img src="./imagenes/logo1.png" alt="Imagen Logo" class="logo">
            <p class="title-header">Funny Puppies</p>
        </div>
        <div class="header-right">
            <nav>
                <ul class="menu">
                    <li><a href="index.php">Inicio</a></li>
                    <li><a href="navidad.php">Navidad</a></li>
                    <li><a href="brujas.php">Brujas</a></li>
                    <li><a href="otros.php">Otros</a></li>
                </ul>
            </nav>
            <div class="cart">
                <span class="cart-count">8</span>
                <div class="cart-icon-wrapper">
                <a href="pedido.php">
                    <img src="./imagenes/carrito.png" alt="Carrito de Compras" class="cart-icon">
                </a>
                </div>
            </div>
        </div>
    </header>
    <section class="main-content">
        <div class="left-section">
            <h1 class="main-title">¡Haz que tu mejor amigo se luzca en cada fiesta! ¡Compra disfraces para perritos y
                deja que brillen junto a Ti!</h1>
            <p class="main-description">¡Descubre un mundo de diversión para tu peludo amigo! En nuestra página de
                compra de disfraces, encontrarás una amplia selección de trajes para todas las ocasiones, desde fiestas
                temáticas hasta sesiones de fotos. ¡Haz que cada momento sea especial para tu mascota con nuestros
                adorables y cónmodos disfraces!</p>
            <div class="youtube-container">
                <img class="youtube-icon" src="./imagenes/youtube.png" alt="">
                <p>Visítanos en YouTube</p>
            </div>
        </div>
        <div class="right-section">
            <h2>¡Suscríbete y participa por regalos!</h2>
            <h3>Regístrate</h3>
            <form action="resumen.php" method="POST">
                <input type="text" id="nombre" name="nombre" placeholder="Nombre">
                <input type="text" id="apellido" name="apellido" placeholder="Apellido">
                <input type="email" id="email" name="email" placeholder="Correo Electrónico">
                <input type="tel" id="telefono" name="telefono" placeholder="Celular">
                <button type="submit">Enviar</button>
            </form>
        </div>
    </section>
    <section class="highlight-section">
        <h2>Destacados</h2>
        <div class="highlight-cards">
            <div class="highlight-card">
                <div class="highlight-content">
                    <img src="./imagenes/brujas/3.png" alt="Destacado 1">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua.</p>
                </div>
            </div>
            <div class="highlight-card">
                <div class="highlight-content">
                    <img src="./imagenes/navidad/3.png" alt="Destacado 1">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua.</p>
                </div>
            </div>
            <div class="highlight-card">
                <div class="highlight-content">
                    <img src="./imagenes//otros/2.png" alt="Destacado 1">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua.</p>
                </div>
            </div>
            <div class="highlight-card">
                <div class="highlight-content">
                    <img src="./imagenes/brujas/5.png" alt="Destacado 1">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua.</p>
                </div>
            </div>
            <!-- Repite para las otras tarjetas -->
        </div>
    </section>
    <footer class="footer-section">
        <div class="footer-content">
            <div class="footer-info">
                <h3>Visitanos</h3>
                <p><strong>Dirección:</strong> Centro Comercial Santafé, Local 023</p>
                <p><strong>Ciudad:</strong> Bogotá (Colombia)</p>
                <p><strong>Teléfono:</strong> +123 456 7890</p>
                <p><strong>Email:</strong> contacto@funny-puppies.com</p>
                <p><strong>Horario:</strong> Lunes a Viernes, 9:00 AM - 6:00 PM</p>
            </div>
            <div class="footer-map">
                <h3>Encuéntranos en el Mapa</h3>
                <div class="map-container">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1988.022454114919!2d-74.04774729358358!3d4.76219152175008!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f859394bb333f%3A0x414694fb3359b449!2sCentro%20Comercial%20Santaf%C3%A9%2C%20Cl.%20185%20%2345-3%2C%20Bogot%C3%A1!5e0!3m2!1ses-419!2sco!4v1716065252550!5m2!1ses-419!2sco"
                        width="100%" height="200" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>