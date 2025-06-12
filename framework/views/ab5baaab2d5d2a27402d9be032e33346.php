<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto - TecnoStore</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600;700&family=Lora:wght@400;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
            color: #333;
            line-height: 1.6;
            display: flex;
            flex-direction: column;
            min-height: 100vh; /* Asegura que la altura mínima sea de 100% de la ventana */
        }

	header {
        	background-image: url('<?php echo e(asset('fondo.png')); ?>');
        	background-size: cover;
        	background-position: center;
        	padding: 5px 0;
        	text-align: center;
        	color: white;
        	position: relative;
        	height: 132px;
        	opacity: 0.9;
    	}

    	header img {
        	position: absolute;
        	left: -23px;
        	top: 50%;
        	transform: translateY(-50%);
        	max-width: 312px;
    	}

    	.header-nav {
        	position: absolute;
        	top: 50%;
        	right: 20px;
        	transform: translateY(-50%);
        	display: flex;
        	gap: 20px;
    	}

    	.header-nav a {
        	background-color: white;
        	color: #9e0f0f;
        	padding: 10px 20px;
        	border-radius: 20px;
        	text-decoration: none;
        	font-weight: bold;
        	transition: background-color 0.3s, transform 0.2s;
    	}

    	.header-nav a:hover {
        	background-color: #9e0f0f;
        	color: white;
        	transform: scale(1.05);
    	}


        /* Main Container */
        .contenedor {
            width: 85%;
            margin: 70px auto;
            padding: 40px 50px;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        .contenedor h1 {
            font-family: 'Montserrat', sans-serif;
            font-size: 35px; /* Título un poco más pequeño */
            color: #9e0f0f;
            margin-bottom: 30px;
            font-weight: 700;
        }

        .contact-info {
            background-color: #f0f0f0;
            padding: 15px;
            border-radius: 8px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            margin: 20px 0;
        }
        .contact-info img {
            width: 30px;
            margin-bottom: 15px;
        }
        .contact-info p {
            font-size: 16px;
            font-family: 'Open Sans', sans-serif;
            font-weight: 600;
            color: #333;
            margin: 0;
        }

        /* Footer */
        footer {
            background-color: #9e0f0f;
            color: white;
            text-align: center;
            padding: 20px 0;
            margin-top: auto; /* Esto asegura que el footer se mantenga abajo */
            font-size: 14px;
        }

        /* Línea decorativa entre el contenido y el footer */
        footer::before {
            content: "";
            display: block;
            width: 100%;
            height: 5px;
            background: linear-gradient(to right, #f7a1a1, #9e0f0f, #f7a1a1); /* Línea con gradiente */
            border-radius: 50px; /* Curvado de la línea */
            margin-bottom: 20px;
        }

        /* Recuadro de comentarios y mapa con fondo rojo */
        .mapa-comentarios {
            background-color: #9e0f0f;
            padding: 40px 0;
            color: white;
            text-align: center;
        }

        .mapa-comentarios h3 {
            font-size: 1.4rem;
            color: white;
            margin-bottom: 20px;
        }

        .mapa-comentarios .comentarios {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            max-width: 800px;
            margin-left: auto;
            margin-right: auto;
        }

        .mapa-comentarios .comentarios h3 {
            font-size: 1.4rem;
            color: #333;
            margin-bottom: 20px;
        }

        .mapa-comentarios .comentarios textarea {
            padding: 10px;
            font-size: 1rem;
            border-radius: 10px;
            border: 1px solid #ddd;
            width: 100%;
            box-sizing: border-box;
        }

        .mapa-comentarios .comentarios button {
            padding: 10px 20px;
            background-color: #9e0f0f;
            color: white;
            font-size: 1rem;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
            margin-top: 10px;
        }

        .mapa-comentarios .comentarios button:hover {
            background-color: #a90000;
        }

        @media (max-width: 768px) {
            .contenedor {
                width: 90%;
                padding: 20px;
            }
            header img {
                max-width: 150px;
            }
        }


/* Estilo para el contenedor del formulario */

.comentario-form-container {
    width: 70%;
    margin: 40px auto;
    padding: 40px;
    background-color: #ffffff;
    border-radius: 15px;
    box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
    text-align: center;
}

/* Título del formulario (si lo pones) */
.comentario-form-container h2 {
    font-size: 28px;
    color: #333;
    margin-bottom: 30px;
}

/* Campos del formulario */
.comentario-form input[type="text"],
.comentario-form textarea {
    width: 100%;
    padding: 12px 15px;
    border-radius: 8px;
    border: 1px solid #ccc;
    font-size: 15px;
    background-color: #f9f9f9;
    transition: border 0.3s;
    margin-bottom: 20px;
}

.comentario-form input[type="text"]:focus,
.comentario-form textarea:focus {
    border-color: #9e0f0f;
    outline: none;
}

/* Botón enviar */
.comentario-form button[type="submit"] {
    background-color: #9e0f0f;
    color: white;
    padding: 14px 30px;
    border-radius: 8px;
    border: none;
    font-size: 16px;
    font-weight: bold;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.comentario-form button[type="submit"]:hover {
    background-color: #7c0c0c;
}


    </style>
</head>
<body>


<header>
	<img src="<?php echo e(asset('blanquito.png')); ?>" alt="Logo">
	<div class="header-nav">
    	<a href="<?php echo e(url('/productos')); ?>">Productos</a>
    	<a href="<?php echo e(url('/')); ?>">Inicio</a>
	</div>
</header>



<div class="contenedor">
    <h1>CONTACTOS</h1>

    <!-- Correo Electrónico -->
    <div class="contact-info">
        <img src="<?php echo e(asset('gmail.png')); ?>" alt="Correo Electrónico">
        <p><strong>Correo Electrónico:</strong> contacto@tecnostore.com</p>
    </div>

    <!-- Instagram -->
    <div class="contact-info">
        <img src="<?php echo e(asset('ig.png')); ?>" alt="Instagram">
        <p><strong>Instagram:</strong> <a target="_blank">@TecnoStore</a></p>
    </div>

    <!-- Teléfono -->
    <div class="contact-info">
        <img src="<?php echo e(asset('tlfn.png')); ?>" alt="Teléfono">
        <p><strong>Teléfono:</strong> +34 123 456 789</p>
    </div>
</div>

<!-- Mapa y comentarios -->
<div class="mapa-comentarios">
    <!-- Mapa -->
    <div style="margin-top: 40px; margin-bottom: 40px;">
        <h3>¿Dónde nos encontramos?</h3>
        <div style="overflow: hidden; border-radius: 12px; box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1); max-width: 100%; height: 350px;">
            <iframe src="https://www.google.com/maps?q=Chiclana+de+la+Frontera,+Cádiz,+España&output=embed" width="100%" height="100%" style="border: 0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>



    <!-- Formulario de comentarios -->

<div class="comentario-form-container">
    <h2>Deja tu comentario</h2>
    <form action="<?php echo e(route('comentario')); ?>" method="POST" class="comentario-form" id="contact-form">
        <?php echo csrf_field(); ?>
        <input type="text" name="nombre" placeholder="Tu nombre" required>
        <textarea name="comentario" placeholder="Escribe tu comentario" required></textarea>
        <button type="submit">Enviar</button>
    </form>

    <div id="mensaje-exito" style="display:none; margin-top:20px; color:green;">
        ¡Comentario enviado con éxito!
    </div>
</div>



<!-- JavaScript -->
<script>
	function enviarComentario() {
    	// Prevenir el envío real del formulario para evitar que se recargue la página
    	event.preventDefault();

    	// Mostrar el mensaje de éxito
    	document.getElementById('mensaje-exito').style.display = 'block';

    	// Limpiar el formulario después de enviar
    	document.getElementById('contact-form').reset();


    	return false; // Evita que el formulario se envíe de la forma tradicional
	}
</script>


</section>

<!-- Footer -->
<footer>
    <p>&copy; 2025 TecnoStore. Todos los derechos reservados.</p>
</footer>

<script>
    function enviarComentario() {
        event.preventDefault();
        document.getElementById('mensaje-exito').style.display = 'block';
        document.getElementById('contact-form').reset();
        setTimeout(() => {
            document.getElementById('mensaje-exito').style.display = 'none';
        }, 3000);
        return false;
    }
</script>

</body>
</html>

<?php /**PATH /home/usuario/tienda2/resources/views/contacto.blade.php ENDPATH**/ ?>