@extends('layouts.app')

@section('content')
  <div class="productos"></div>
@endsection

@push('scripts')
  <script src="{{ asset('js/productos.js') }}"></script>
@endpush

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tienda Puntos Estilo</title>
  <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
  <header>
    <nav class="white" role="navigation">
      <div class="nav-wrapper container">
        <img src="{{ asset('img/logoPe.jpg') }}" alt="logo Puntos Estilo" class="logo-size";">
        <a id="logo-container" href="#" class="brand-logo"></a>
        <ul class="right hide-on-med-and-down">
          <li><a href='#'>Inicio</a></li>
          <li><a href='/tienda'>Tienda</a></li>
          <li><a href='/login'>Login</a></li>
          <li><a href='/registro'>Registrarse</a></li>
          <li><a href='/aliados'>Aliados</a></li>
          <li><a href='/puntos'>Tus Puntos</a></li>
          <li><a href='/contacto'>Contacto</a></li>
        </ul>
      </div>
    </nav>
  </header>

  <main>
    <div class="productos"></div>

    <!-- Sección de carrito y formulario de pago -->
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
          <!-- Contenido del footer -->
        </div>
      </div>
    </div>
  </footer>

  <script src="{{ asset('js/app.js') }}"></script>
  <script src="{{ asset('js/productos.js') }}"></script>
  <script>
    // Función para generar elementos HTML de productos
    function generarProductos() {
      const contenedorProductos = document.querySelector('.productos');
      const productos = [
        {
          nombre: 'Producto 1',
          precio: 100,
          descripcion: 'Descripción del Producto 1',
          imagen: '{{ asset("img/producto1.jpg") }}'
        },
        {
          nombre: 'Producto 2',
          precio: 200,
          descripcion: 'Descripción del Producto 2',
          imagen: '{{ asset("img/producto2.jpg") }}'
        }
        // Agrega más productos según sea necesario
      ];

      productos.forEach(producto => {
        const productoHTML = `
          <div class="producto">
            <img src="${producto.imagen}" alt="${producto.nombre}">
            <h3>${producto.nombre}</h3>
            <p>${producto.descripcion}</p>
            <p>Precio: $${producto.precio}</p>
            <button>Agregar al carrito</button>
          </div>
        `;
        contenedorProductos.innerHTML += productoHTML;
      });
    }

    // Llama a la función para generar productos al cargar la página
    window.addEventListener('DOMContentLoaded', generarProductos);
  </script>
</body>
</html>
@endsection
