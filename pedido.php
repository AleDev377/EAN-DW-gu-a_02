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
        <div class="summary-table-container">
            <h2>¡Haz hecho la mejor elección!</h2>
            <h3>Pedido</h3>
            <form action="index.php" method="POST">
                <input type="text" id="nombre" name="nombre" placeholder="Nombre">
                <input type="text" id="apellido" name="apellido" placeholder="Apellido">
                <input type="email" id="email" name="email" placeholder="Correo Electrónico">
                <input type="tel" id="telefono" name="telefono" placeholder="Celular">
                <input type="text" id="direccion" name="direccion" placeholder="Dirección">
                <button type="submit">Enviar</button>
            </form>
        </div>
    </section>
    <section class="summary-section">
        <div class="summary-table-container">
        <h2>Resumen de Pedido</h2>
            <table class="summary-table">
                <thead>
                    <tr>
                        <th>Disfraz</th>
                        <th>Talla</th>
                        <th>Cantidad</th>
                        <th>Precio</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Disfraz de Superhéroe</td>
                        <td>Pequeño</td>
                        <td>1</td>
                        <td>$15.00</td>
                        <td>$15.00</td>
                    </tr>
                    <tr>
                        <td>Disfraz de Pirata</td>
                        <td>Mediano</td>
                        <td>2</td>
                        <td>$20.00</td>
                        <td>$40.00</td>
                    </tr>
                    <tr>
                        <td>Disfraz de Fantasma</td>
                        <td>Grande</td>
                        <td>1</td>
                        <td>$18.00</td>
                        <td>$18.00</td>
                    </tr>
                    <tr>
                        <td>Disfraz de Halloween</td>
                        <td>Mediano</td>
                        <td>3</td>
                        <td>$25.00</td>
                        <td>$75.00</td>
                    </tr>
                    <tr>
                        <td>Disfraz de Navidad</td>
                        <td>Pequeño</td>
                        <td>1</td>
                        <td>$22.00</td>
                        <td>$22.00</td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="4">Total</td>
                        <td>$170.00</td>
                    </tr>
                </tfoot>
            </table>
        </div>
    </section>
    <footer class="footer-section">
        <div class="footer-content">
            <div class="footer-info">
                <h3>Visítanos</h3>
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
