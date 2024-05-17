// Objeto de productos
const productos = [
    {
      nombre: 'Sala 4 piezas',
      precio: 1300000,
      descripcion: 'lujosa sala de 4 piezas color beige',
      imagen: '/img/producto1.jpg'
    },
    {
        nombre: 'Sala de Lujo',
        precio: 2300000,
        descripcion: 'todo el lujo a su disposicion con 7 elementos totalmente decorativos',
        imagen: 'img/producto2.jpg'
      },
      {
      nombre: 'Espacios grandes',
      precio: 3300000,
      descripcion: 'Acogedora sala para espacios grandes',
      imagen: 'img/producto3.jpg'
      },
      {
        nombre: 'Sala Blanca',
        precio: 2300000,
        descripcion: 'hermosa sala en color blanco para disfrutar',
        imagen: 'img/producto4.jpg'
      },
      {
      nombre: 'Sala 4 piezas',
      precio: 1300000,
      descripcion: 'lujosa sala de 4 piezas color beige',
      imagen: 'img/producto5.jpg'
      },
      {
        nombre: 'Sala de Lujo',
        precio: 2300000,
        descripcion: 'todo el lujo a su disposicion con 7 elementos totalmente decorativos',
        imagen: 'img/producto6.jpg'
      },
      {
      nombre: 'Espacios grandes',
      precio: 3300000,
      descripcion: 'Acogedora sala para espacios grandes',
      imagen: 'img/producto7.jpg'
      },
      {
        nombre: 'Sala Blanca',
        precio: 2300000,
        descripcion: 'hermosa sala en color blanco para disfrutar',
        imagen: 'img/producto8.jpg'
      },
    ];

  // Función para generar elementos HTML de productos
function generarProductos() {
    const contenedorProductos = document.querySelector('.productos');

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
