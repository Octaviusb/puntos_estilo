<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tienda Puntos Estilo</title>
  <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
</head>
<body>
<header>
    <nav class="white" role="navigation">
        <div class="nav-wrapper container">
            <img src="{{ asset('img/logoPe.jpg') }}" alt="logo Puntos Estilo" class="logo-size">
            <a id="logo-container" href="#" class="brand-logo"></a>
            <ul class="right hide-on-med-and-down">
                <li><a href='/'>Inicio</a></li>
                <li><a href='/tienda'>Tienda</a></li>
                <li><a href='/login'>Login</a></li>
                <li><a href='/register'>Registrarse</a></li>
                <li><a href='/aliados'>Aliados</a></li>
                <li><a href='/puntos'>Tus Puntos</a></li>
                <li><a href='/contacto'>Contacto</a></li>
            </ul>
        </div>
    </nav>
</header>


  <main>
    <div class="productos">
      <!-- Los productos se generarán dinámicamente con JavaScript -->
    </div>

    <div class="carrito">
      <h2>Carrito de Compras</h2>
      <ul class="carrito-items">
        <!-- Los items del carrito se agregarán dinámicamente -->
      </ul>
      <p>Total: <span class="total">$0.00</span></p>
      <button class="proceder-pago">Proceder al Pago</button>
    </div>

    <form class="formulario-pago">
      <label for="nombre">Nombre completo:</label>
      <input type="text" id="nombre" name="nombre" required>

      <label for="tarjeta">Número de tarjeta:</label>
      <input type="text" id="tarjeta" name="tarjeta" required>

      <label for="fechaVencimiento">Fecha de vencimiento (MM/AA):</label>
      <input type="text" id="fechaVencimiento" name="fechaVencimiento" required>

      <label for="codigoSeguridad">Código de seguridad:</label>
      <input type="text" id="codigoSeguridad" name="codigoSeguridad" required>

      <label for="codigoPostal">Código postal:</label>
      <input type="text" id="codigoPostal" name="codigoPostal" required>

      <button type="button" class="proceder-pago-tarjeta">Proceder al Pago con Tarjeta</button>
      <button type="button" class="proceder-pago-efectivo">Proceder al Pago en Efectivo</button>
    </form>
  </main>

  <footer class="footer">
    <div class="container bottom_border">
    <div class="row">
    <div class="col-sm-4 col-md col-sm-4 col-12 col">
    <h5 class="headin5_amrc col_white_amrc pt2">Find us</h5>
    <!--headin5_amrc-->
    <p class="mb10">lema genera{</p>
    <p><i class="fa fa-location-arrow"></i> Calle XX Carrera XX No. XX-xx</p>
    <p><i class="fa fa-phone"></i>  +57-12345678  </p>
    <p><i class="fa fa fa-envelope"></i> info@example.com  </p>
    <p class="text-center">Copyright @2024 | Designed With by <a href="#">Ener Octavio Buitrago +573124458684</a></p>

    <ul class="social_footer_ul">
    <li><a href="http://webenlance.com"><i class="fab fa-facebook-f"></i></a></li>
    <li><a href="http://webenlance.com"><i class="fab fa-twitter"></i></a></li>
    <li><a href="http://webenlance.com"><i class="fab fa-linkedin"></i></a></li>
    <li><a href="http://webenlance.com"><i class="fab fa-instagram"></i></a></li>
    </ul>
    <!--social_footer_ul ends here-->
    </div>
    </div>
    </div>
  </footer>

  <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
