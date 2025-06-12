<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Productos</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        header {
            background-color: #9e0f0f;
            text-align: left;
            color: white;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            display: flex;
            align-items: center;
            justify-content: space-between;
            background-image: url('fondo.png');
            background-size: cover;
            background-position: center;
        }

        header img {
            max-width: 300px;
            margin-left: 20px;
        }

        .menu {
            display: flex;
            justify-content: flex-end;
            gap: 20px;
            margin-right: 20px;
        }

        .menu a {
            text-decoration: none;
            padding: 13px 29px;
            background-color: white;
            color: black;
            border-radius: 30px;
            font-weight: bold;
            transition: background-color 0.3s ease;
            margin-top: 15px;
        }

        .menu a:hover {
            background-color: #9e0f0f;;
        }

        .contenedor {
            width: 85%;
            max-width: 1200px;
            margin: 40px auto;
            padding: 30px;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
            flex-grow: 1;
        }

        .contenedor h1 {
            font-size: 28px;
            color: #9e0f0f;
            margin-bottom: 30px;
            font-weight: bold;
            text-align: left;
        }


        .bloque {
            margin-top: 40px;
        }

        .bloque h2 {
            color: #9e0f0f;
        }

        .bloque p {
            margin-bottom: 15px;
        }

        .boton-rojo {
            display: inline-block;
            padding: 12px 25px;
            background-color:  #9e0f0f;
            color: white;
            border-radius: 30px;
            font-weight: bold;
            text-decoration: none;
            transition: background-color 0.3s ease;
            margin-top: 15px;
        }

        .boton-rojo:hover {
            background-color: #9e3535;
        }

        footer {
            background-color: #9e0f0f;
            color: white;
            text-align: center;
            padding: 15px 0;
            font-weight: bold;
            margin-top: 50px;
            box-shadow: 0 -4px 6px rgba(0, 0, 0, 0.1);
            margin-top: auto;
        }


.recuadro {
    background-color: #f1f1f1;
    padding: 20px;
    border-radius: 8px;
    box-shadow: inset 0 0 5px rgba(0, 0, 0, 0.05);
}



.bloque.recuadro {
  margin-left: 140px;
margin-bottom:100px;
}


.carrusel-wrapper {
  height: 330px;
  display: flex;
  align-items: center;
  justify-content: center;
  overflow: hidden;
  width: 330px;
  margin: 44px auto;
  position: relative;
}

.carrusel {
  display: flex;
  width: 900%;
  animation: carruselInfoAnim 27s infinite;
}

.carrusel img {
  width: 100%;
flex: 0 0 auto;}


/* Animación */
@keyframes carruselInfoAnim {
  0% { transform: translateX(0%); }
  11.11% { transform: translateX(0%); }
  22.22% { transform: translateX(-100%); }
  33.33% { transform: translateX(-200%); }
  44.44% { transform: translateX(-300%); }
  55.55% { transform: translateX(-400%); }
  66.66% { transform: translateX(-500%); }
  77.77% { transform: translateX(-600%); }
  88.88% { transform: translateX(-700%); }
  100% { transform: translateX(-800%); }
}


    </style>
</head>
<body>

<header>
    <img src="<?php echo e(asset('blanquito.png')); ?>" alt="Logo Tienda">
    <div class="menu">
        <a href="<?php echo e(url('/')); ?>">Inicio</a>
    </div>
</header>

<div class="contenedor">
    <h1>GESTIÓN DE PRODUCTOS</h1>

    <!-- Carrusel de imágenes -->
    <div class="carrusel-wrapper">
    <div class="carrusel">
        <img src="<?php echo e(asset('1.webp')); ?>" alt="Imagen 1" loading="lazy">
        <img src="<?php echo e(asset('2.webp')); ?>" alt="Imagen 2" loading="lazy">
        <img src="<?php echo e(asset('3.webp')); ?>" alt="Imagen 3" loading="lazy">
        <img src="<?php echo e(asset('4.webp')); ?>" alt="Imagen 4" loading="lazy">
        <img src="<?php echo e(asset('5.webp')); ?>" alt="Imagen 5" loading="lazy">
        <img src="<?php echo e(asset('6.webp')); ?>" alt="Imagen 6" loading="lazy">
        <img src="<?php echo e(asset('7.webp')); ?>" alt="Imagen 7" loading="lazy">
        <img src="<?php echo e(asset('8.webp')); ?>" alt="Imagen 8" loading="lazy">
        <img src="<?php echo e(asset('10.webp')); ?>" alt="Imagen 10" loading="lazy">
        <img src="<?php echo e(asset('11.webp')); ?>" alt="Imagen 11" loading="lazy">
        <img src="<?php echo e(asset('12.webp')); ?>" alt="Imagen 12" loading="lazy">
    </div>
</div>

</div>


<!-- Sección para listar productos -->
<div class="bloque recuadro">
    <h2>Listar Productos</h2>
    <p>En esta sección se insertarán los productos que con el tiempo se irán añadiendo a la web.</p>
    <a href="<?php echo e(route('index')); ?>" class="boton-rojo">Ir a Listado de Productos</a>
</div>


<!-- Sección para añadir productos -->
<div class="bloque recuadro">
    <h2>Añadir Producto</h2>
    <p>Aquí podrás añadir nuevos productos a la tienda. Completa los campos necesarios para agregar un producto a nuestra base de datos.</p>
    <a href="<?php echo e(route('create')); ?>" class="boton-rojo">Añadir un Producto</a>
</div>


</div>

<footer>
    <p>&copy; 2025 TecnoStore. Todos los derechos reservados.</p>
</footer>


</body>
</html>
<?php /**PATH /home/usuario/tienda2/resources/views/gestionar-productos.blade.php ENDPATH**/ ?>