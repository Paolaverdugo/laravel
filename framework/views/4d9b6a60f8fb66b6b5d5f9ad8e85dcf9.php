<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información - TecnoStore</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">

    <style>
        /* Reset de márgenes y padding */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f7f8fa;
            color: #333;
        }

        /* Estilo del header */
        header {
            background-image: url('<?php echo e(asset('fondo.png')); ?>');
            background-size: cover;
            background-position: center;
            height: 180px; /* Reducimos la altura del header */
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            color: #fff;
        }

        header img {
            position: absolute;
            left: 20px; /* Ajustamos el logo a la izquierda */
            top: 50%;
            transform: translateY(-50%);
            max-width: 350px; /* Aumentamos aún más el tamaño del logo */
        }

        /* Contenedor principal */
        .contenedor {
            width: 85%;
            max-width: 1200px;
            margin: 40px auto;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            padding: 30px;
        }

        .contenedor h1 {
            font-size: 36px;
            font-weight: 700;
            color: #9e0f0f;
            text-align: center;
            margin-bottom: 20px;
        }

        .contenedor p {
            font-size: 18px;
            line-height: 1.6;
            margin-bottom: 20px;
            text-align: justify;
            color: #555;
        }

        /* Estilo para cada sección */
        .seccion-descripcion {
            margin-top: 40px;
            padding: 20px;
            background-color: #9e0f0f;
            color: white;
            border-radius: 8px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            display: flex;
            justify-content: flex-start; /*  asegura de que la imagen y texto estén alineados */
            align-items: center;
            margin-bottom: 30px; /* Añade un espacio entre las secciones */
        }

        /* Clases independientes para cada imagen */
        .imagen-mision {
            max-width: 150px; /* Tamaño de la imagen para la misión */
            height: auto;
            object-fit: cover;
            border-radius: 8px;
            margin-right: 20px; /* Añade un espacio a la derecha de la imagen */
        }

        .imagen-compromiso {
            max-width: 190px; /* Tamaño de la imagen para el compromiso */
            height: auto;
            object-fit: cover;
            border-radius: 8px;
            margin-right: 20px; /* Añadie un espacio a la derecha de la imagen */
        }

        .imagen-asesoramiento {
            max-width: 180px; /* Tamaño de la imagen para el asesoramiento */
            height: auto;
            object-fit: cover;
            border-radius: 8px;
            margin-right: 20px; /* Añade un espacio a la derecha de la imagen */
        }

        .imagen-historia {
            max-width: 140px; /* Tamaño de la imagen para la historia */
            height: auto;
            object-fit: cover;
            border-radius: 8px;
            margin-right: 20px; /* Añadimos un espacio a la derecha de la imagen */
        }

        .seccion-descripcion div {
            max-width: calc(100% - 170px); /* Hace que el texto ocupe el espacio restante */
        }

        .seccion-descripcion h3 {
            font-size: 28px;
            font-weight: 600;
            margin-bottom: 15px;
        }

        .seccion-descripcion p {
            font-size: 16px;
            line-height: 1.6;
            color: white;
            text-align: justify;
        }

        /* Estilo para el footer */
        footer {
            background-color: #9e0f0f;
            color: white;
            text-align: center;
            padding: 20px;
            margin-top: 40px;
        }

        /* Estilo de los enlaces de navegación en el footer */
        .footer-nav {
            background-color: #f7f8fa;
            padding: 15px 0;
            text-align: center;
            position: relative;
        }

        .footer-nav a {
            text-decoration: none;
            color: white;
            font-weight: 600;
            background-color: #9e0f0f; /* Botón rojo */
            padding: 10px 25px;
            border-radius: 50px;
            transition: background-color 0.3s, transform 0.3s;
        }

        .footer-nav a:hover {
            background-color: #7a0c0c; /* Rojo más oscuro al pasar el ratón */
            transform: scale(1.05);
        }

        /* Ubica el botón en la esquina inferior izquierda */
        .footer-nav a {
            position: absolute;
            bottom: 20px;
            left: 20px;
        }

        /* Responsividad */
        @media (max-width: 768px) {
            .seccion-descripcion {
                flex-direction: column; /* Cambia a columna en pantallas pequeñas */
                text-align: center; /* Alinea el texto al centro */
            }

            .seccion-descripcion img {
                max-width: 100%; /* Ajusta el tamaño de la imagen en móviles */
                margin-bottom: 20px;
            }

            .seccion-descripcion div {
                max-width: 100%; /* Ajusta el ancho del texto en móviles */
            }

            .contenedor h1 {
                font-size: 28px;
            }

            .seccion-descripcion h3 {
                font-size: 24px;
            }
        }



    </style>
</head>
<body>

<header>
    <img src="<?php echo e(asset('blanquito.png')); ?>" alt="Logo Tienda">
</header>

<div class="contenedor">
    <h1>¿Qué es TecnoStore?</h1>
    <p>En <strong>TecnoStore</strong>, ofrecemos una amplia gama de productos electrónicos de la más alta calidad. Desde ordenadores y portátiles hasta dispositivos móviles, pendrives, discos duros y ratones, todos nuestros productos están seleccionados para cumplir con los más altos estándares de tecnología y fiabilidad. Nos comprometemos a brindarte soluciones innovadoras que se ajusten a tus necesidades, ofreciéndote una experiencia de compra sencilla y rápida.</p>

    <!-- Sección de Misión -->
    <div class="seccion-descripcion">
        <img class="imagen-mision" src="info/mision.png" alt="Nuestra Misión">
        <div>
            <h3>Nuestra Misión</h3>
            <p>En TecnoStore, nuestra misión es ofrecer a nuestros clientes productos electrónicos de última tecnología, con el mejor servicio postventa. Nos esforzamos por mejorar cada día y adaptarnos a las necesidades cambiantes del mercado, siempre ofreciendo un trato personalizado y soluciones innovadoras para que nuestros clientes se sientan satisfechos.</p>
        </div>
    </div>

    <!-- Sección de Compromiso con la Calidad -->
    <div class="seccion-descripcion">
        <img class="imagen-compromiso" src="info/compromiso.png" alt="Compromiso con la Calidad">
        <div>
            <h3>Compromiso con la Calidad</h3>
            <p>En nuestra tienda, la calidad es nuestra principal prioridad. Seleccionamos cada uno de los productos con un riguroso proceso de calidad, asegurando que solo los mejores artículos lleguen a nuestras estanterías. Todos nuestros productos cuentan con garantía de fabricación, brindándote total confianza en cada compra.</p>
        </div>
    </div>

    <!-- Sección de Asesoramiento Personalizado -->
    <div class="seccion-descripcion">
        <img class="imagen-asesoramiento" src="info/asesoramiento.png" alt="Asesoramiento Personalizado">
        <div>
            <h3>Asesoramiento Personalizado</h3>
            <p>Sabemos que cada cliente tiene diferentes necesidades, por eso, nuestro equipo está disponible para brindarte un asesoramiento totalmente personalizado. Ya sea que necesites un equipo de trabajo, un ordenador para jugar, o un dispositivo móvil, te ayudaremos a elegir la opción que mejor se adapte a ti. ¡Tu satisfacción es nuestra meta!</p>
        </div>
    </div>

    <!-- Sección de Historia -->
    <div class="seccion-descripcion">
        <img class="imagen-historia" src="info/historia(1).png" alt="Historia de TecnoStore">
        <div>
            <h3>Historia de TecnoStore</h3>
            <p>TecnoStore comenzó con la visión de ofrecer una tienda de electrónica accesible y confiable para todo el público. Desde nuestros primeros días en el mercado, hemos crecido y evolucionado, siempre manteniendo nuestra promesa de calidad, confianza y atención al cliente. Hoy en día, somos una de las tiendas más destacadas en tecnología, con una amplia base de clientes satisfechos.</p>
        </div>
    </div>
</div>

<!-- Enlaces de navegación -->
<div class="footer-nav">
    <a href="/">Volver al inicio</a>
</div>

<!-- Footer -->
<footer>
    <p>&copy; 2025 TecnoStore. Todos los derechos reservados.</p>
</footer>

</body>
</html>
<?php /**PATH /home/usuario/tienda2/resources/views/informacion.blade.php ENDPATH**/ ?>