<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title> TecnoStore</title>
	<style>
    	body {
        	font-family: Arial, sans-serif;
        	background-color: #f8f9fa;
        	margin: 0;
        	padding: 0;
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
        	right: 30px;
        	transform: translateY(-50%);
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
    	.contenedor {
        	font-weight: bold;
        	width: 80%;
        	margin: 40px auto;
        	padding: 30px;
        	background-color: white;
        	border-radius: 10px;
        	text-align: center;
    	}
    	.contenedor h1 {
        	font-size: 28px;
        	color: #9e0f0f;
        	margin-bottom: 20px;
        	font-weight: bold;
    	}
    	.imagenes {
        	display: flex;
        	justify-content: space-around;
  	margin-top: 40px;
        	flex-wrap: wrap;
        	gap: 20px;
    	}
    	.tarjeta {
        	width: 30%;
        	background-color: #EEEEEE;
        	padding: 20px;
        	border-radius: 10px;
        	box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        	text-align: center;
        	margin-bottom: 20px;
    	}
    	.tarjeta:hover {
        	box-shadow: 0 8px 20px rgba(0,0,0,0.2);
    	}

.tarjeta img {
	width: 37%;
	height: auto;
	object-fit: contain; //hace qu la foto no se deforme o se acorte
	margin: 0 auto;
}


.img-candado {
	width: 59%;
}


	.img-gestion {
    	width: 59% !important; //fuerza que el estilo se haga
	}


    	.tarjeta h3 {
        	color: #9e0f0f;
        	font-size: 20px;
        	margin-top: 15px;
    	}

    	.ventajas-section {
        	background-color: #9e0f0f;
        	color: white;
        	padding: 40px;
        	margin-top: 40px;
        	border-radius: 10px;
    	}
    	.ventajas-section h2 {
        	font-size: 24px;
        	margin-bottom: 20px;
        	text-align: center;
    	}
    	.ventaja-list {
        	list-style-type: none;
        	padding: 0;
    	}
    	.ventaja-item {
        	font-size: 15px;
        	margin-bottom: 15px;
        	line-height: 1.6;
    	}
    	footer {
        	background-color: #9e0f0f;
        	color: white;
        	text-align: center;
        	padding: 20px;
        	margin-top: 40px;
        	font-weight: bold;
    	}
    	.footer-nav {
        	display: flex;
        	justify-content: center;
        	gap: 30px;
        	background-color: #fff;
        	padding: 15px 0;
        	margin-top: 40px;
        	border-radius: 30px;
        	box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        	width: 80%;
        	margin: 0 auto;
    	}
    	.footer-nav a {
        	font-size: 16px;
        	font-weight: 400;
        	text-decoration: none;
        	color: #7a0b0b;
        	padding: 10px 20px;
        	background-color: #e0e0e0;
        	border-radius: 20px;
        	transition: background-color 0.3s, transform 0.2s;
    	}
    	.footer-nav a:hover {
        	background-color: #9e0f0f;
        	color: white;
        	transform: scale(1.05);
    	}
    	.footer-nav a:active {
        	transform: scale(0.98);
    	}
    	.seccion-descripcion {
        	font-weight: bold;
        	margin-top: 40px;
        	padding: 20px;
        	background-color: #9e0f0f;
        	border-radius: 10px;
        	text-align: left;
        	width: 80%;
        	margin: 40px auto;
        	color: white;
    	}
    	.seccion-descripcion h3 {
        	color: white;
        	font-size: 22px;
        	margin-bottom: 15px;
    	}
    	.seccion-descripcion p,
    	.seccion-descripcion ul {
        	font-size: 16px;
        	line-height: 1.6;
    	}
    	.gestion-productos-buttons {
        	display: flex;
        	justify-content: space-around;
        	margin-top: 30px;
    	}
    	.gestion-productos-buttons a {
        	background-color: #9e0f0f;
        	color: white;
        	padding: 15px 30px;
        	text-decoration: none;
        	border-radius: 5px;
        	font-weight: bold;
        	transition: background-color 0.3s;
    	}
    	.gestion-productos-buttons a:hover {
        	background-color: #7a0b0b;
    	}
    	/* Sección de marcas */
    	.marcas-section {
        	margin-top: 50px;
        	padding: 40px 0;
        	background-color: #f8f9fa;
    	}
    	.marcas-section h2 {
        	font-size: 24px;
        	margin-bottom: 10px;
        	text-align: center;
        	color: #9e0f0f;
    	}


 .oferta-lateral {
	position: absolute;
	top: 2250px; /* Ajusta el top de la foto */
	left: -22px;
	width: 250px; /* Ajusta el tamaño de la imagen */
	z-index: 1000;
	border-radius: 10px;
	box-shadow: 0 4px 12px rgba(0,0,0,0.2);
}


    	/* Línea roja en la sección de marcas */
    	.linea-roja {
        	width: 80%;
        	height: 2px;
        	background-color: #9e0f0f;
        	margin: 0 auto 20px auto;
    	}
    	.marcas-logos {
        	display: flex;
        	justify-content: center;
        	gap: 40px;
        	flex-wrap: wrap;
    	}
    	.marca-logo {
        	width: 120px;
        	height: 120px;
        	display: flex;
        	justify-content: center;
        	align-items: center;
        	background-color: white;
        	border-radius: 10px;
        	box-shadow: 0 4px 10px rgba(0,0,0,0.1);
    	}
    	.marca-logo img {
        	max-width: 100%;
        	max-height: 100%;
        	object-fit: contain;
    	}


	/* Carrusel de abajo */
	.carrusel-container {
    	position: relative;
    	width: 100%;
    	max-width: 900px;
    	margin: auto;
    	overflow: hidden;
    	text-align: center;
	}

	.slides {
    	display: flex;
    	transition: transform 0.8s ease-in-out;
	}


.slide {
	display: flex;
	flex-direction: column;
	align-items: center;
	justify-content: center;
	min-width: 100%;
	padding: 10px;  /* Para evitar el posible corte de imagen */
}

//estilo de las letras abajo de las fotos
.caption {
    	width: 100%;
    	background-color: #f0f0f0;
    	padding: 15px;
    	text-align: center;
    	font-size: 16px;
    	font-weight: bold;
    	color: #333;
    	line-height: 1.6;
    	border-radius: 5px;
    	margin-top: 10px;
	}


	.slide img {
    	width: 100%;
    	max-height: 450px;
    	object-fit: contain;
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

/* Título del formulario  */
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



/*tarjetas de arriba carrusel*/
.carrusel-nuevo {
  width: 2000px;
  height: 600px;
  overflow: hidden;
  position: relative;
  margin: auto;
  display:flex;
}

.nuevo {
  display: flex;
  width: 200%;
  height: 100%;
  animation: desplazamiento 12s infinite ease-in-out;
}

.slide {
  flex: 0 0 100%;
  width: 100%;
  height: 100%;
  display: flex;
  align-items: center;
  justify-content: center;
  position: relative;
  overflow: hidden;
}



.contenido-slide {
  width: 100%;
  height: 100%;
  position: relative;

}


.contenido-slide img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  display: block;
  border-radius: 10px;
}


.boton-mas-info {
  position: absolute;
  bottom: 110px;
  left: 520px;
  background: rgba(0, 0, 0, 0.6);
  color: #fff;
  padding: 10px 15px;
  border-radius: 5px;
  text-decoration: none;
  font-weight: bold;
  z-index: 2;
}



/* Animación */

@keyframes desplazamiento {
  0%   { transform: translateX(0%); }
  40%  { transform: translateX(0%); }
  50%  { transform: translateX(-100%); }
  90%  { transform: translateX(-100%); }
  100% { transform: translateX(0%); }
}



/*carrusel varias fotos de abajo*/
.carrusel-info-container {
  height: 500px;
  display: flex;
  align-items: center;
  justify-content: center;
  overflow: hidden;
  width: 100%;
  max-width: 1200px;
  margin: 40px auto;
  position: relative;
}



.carrusel-info-slides {
  display: flex;
  width:900%; /* 9 slides */
  animation: carruselInfoAnim 43s infinite ;

}


.carrusel-info-slide {

  flex: 0 0 100%;
  box-sizing: border-box;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  padding: 10px;
  text-align: center;
}


.carrusel-info-slide img {
  width: auto;
  max-height: 350px;
  border-radius: 10px;
  display: block;
  margin: 0 auto;
}

.caption {
  margin-top: 15px;
  font-size: 16px;
  font-weight: bold;
  line-height: 1.4;
  color: #333;
}

/* Animación automática */
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
  100%   { transform: translateX(-800%); }
}


</style>

</head>
<body>

<header>
	<img src="<?php echo e(asset('blanquito.png')); ?>" alt="Logo Tienda">
	<nav class="header-nav">
    	<a href="/productos">Productos</a>
    	<a href="/carrito">Ver carrito</a>
	<a href="<?php echo e(route('gestionar-productos')); ?>">Gestionar Productos</a>

	</nav>
</header>

<img src="<?php echo e(asset('inicio_control/oferta_inicio.png')); ?>" alt="Oferta especial" class="oferta-lateral">

<!-- Carrusel de imágenes el de arriba -->
<div class="carrusel-nuevo">
	<div class="nuevo">

  	<div class="slide">
        	<img src="<?php echo e(asset('fotos_welcome/gestion.png')); ?>" alt="foto1">
        	<a href="<?php echo e(route('gestionar-productos')); ?>" class="boton-mas-info">Más información</a>
    	</div>

   	<div class="slide">
        	<img src="<?php echo e(asset('fotos_welcome/ventas.png')); ?>" alt="foto2">
        	<a href="<?php echo e(route('store')); ?>" class="boton-mas-info">Más información</a>
    	</div>
</div>

</div>


<div class="contenedor">
	<div class="imagenes">
    	<div class="tarjeta">
<img class="img-candado" src="<?php echo e(asset('inicio_control/candado.png')); ?>" alt="Imagen Producto 1">

        	<h3>Control total sobre tus productos y datos, en un solo lugar</h3>
    	</div>

<div class="tarjeta">
	<img class="img-gestion" src="<?php echo e(asset('inicio_control/gestionar.png')); ?>" alt="Imagen Producto 2">
	<h3>Gestiona y controla tus productos de manera rápida y sencilla</h3>
</div>


    	<div class="tarjeta">
        	<img src="<?php echo e(asset('inicio_control/optimizar.png')); ?>" alt="Imagen Producto 3">
        	<h3>Optimiza la gestión de tu tienda sin complicaciones</h3>
    	</div>
	</div>
</div>

<div class="seccion-descripcion">
	<h3> TECNOSTORE - tu tienda de informática</h3>
	<p>En <strong>TecnoStore</strong>, ofrecemos una amplia gama de productos electrónicos de la más alta calidad. Desde ordenadores y portátiles hasta dispositivos móviles, pendrives, discos duros y ratones, todos nuestros productos están seleccionados para cumplir con los más altos estándares de tecnología y fiabilidad. Nos comprometemos a brindarte soluciones innovadoras que se ajusten a tus necesidades, ofreciéndote una experiencia de compra sencilla y rápida.</p>
	<h3>Ventajas de Comprar con Nosotros</h3>
	<ul>
    	<li><strong>Variedad y calidad:</strong> Descubre una extensa selección de productos electrónicos, siempre con las mejores marcas y lo último en tecnología.</li>
    	<li><strong>Precios competitivos:</strong> Garantizamos precios justos y accesibles, con ofertas que te permiten disfrutar de los mejores productos al mejor precio.</li>
    	<li><strong>Asesoramiento experto:</strong> Nuestro equipo altamente capacitado está disponible para proporcionarte recomendaciones personalizadas, ayudándote a elegir los productos que mejor se adaptan a tus necesidades.</li>
    	<li><strong>Garantía en todos los productos:</strong> Cada artículo que ofrecemos cuenta con una garantía sólida, para que puedas comprar con total tranquilidad.</li>
    	<li><strong>Envíos rápidos y seguros:</strong> Todos nuestros productos se entregan de manera segura y puntual, para que los disfrutes en el menor tiempo posible.</li>
    	<li><strong>Atención al cliente 24/7:</strong> Nuestro equipo está disponible para responder cualquier pregunta o resolver inconvenientes, asegurando una experiencia de compra satisfactoria en todo momento.</li>
	</ul>
</div>




<!-- Carrusel de imágenes con descripción abajo -->
<div class="carrusel-info-container">
  <div class="carrusel-info-slides">
    <div class="carrusel-info-slide">
        	<img src="<?php echo e(asset('pc_inicio/pc1.png')); ?>" alt="PC1">
        	<div class="caption">Portátil PcCom Revolt 4060 Intel Core i9-14900HX/32GB/1TB SSD/RTX 4060/17.3" + Windows 11 Home</div>
    	</div>
    <div class="carrusel-info-slide">
        	<img src="<?php echo e(asset('pc_inicio/pc2.png')); ?>" alt="PC2">
        	<div class="caption">Portátil Acer Gaming Nitro V 15 ANV15-41 AMD Ryzen 7 7735HS/32GB/1TB SSD/RTX 4060/15.6"</div>
    	</div>

    <div class="carrusel-info-slide">

        	<img src="<?php echo e(asset('pc_inicio/pc3.png')); ?>" alt="PC3">
        	<div class="caption">Portátil Acer Gaming Predator Triton Neo 16 PTN16-51 Intel Core Ultra 7 155H/32GB/2TB SSD/RTX 4070</div>
    	</div>

    <div class="carrusel-info-slide">

        	<img src="<?php echo e(asset('pc_inicio/pc4.png')); ?>" alt="PC4">
        	<div class="caption">Portátil Dell Inspiron 3530 Intel Core i7-1355U/16GB/512GB SSD/15.6"</div>
    	</div>

    <div class="carrusel-info-slide">

        	<img src="<?php echo e(asset('pc_inicio/or1.png')); ?>" alt="OR1">
        	<div class="caption">Ordenador Sobremesa PC Racing AMD Ryzen 3 3200G/16GB/480GB SSD + Windows 11 Pro</div>
    	</div>

    <div class="carrusel-info-slide">

        	<img src="<?php echo e(asset('pc_inicio/or2.png')); ?>" alt="OR2">
        	<div class="caption">Ordenador Sobremesa PCM Aeon Thunder Intel Core i5-11400F/16GB/1TB SSD/RX 6500 XT</div>
    	</div>

    <div class="carrusel-info-slide">

        	<img src="<?php echo e(asset('pc_inicio/or3.png')); ?>" alt="OR3">
        	<div class="caption">Ordenador Sobremesa CoolBox DeepGaming Venom Intel Core i7-12700F/16GB/2TB 500GB SSD/RTX 3050</div>
    	</div>

    <div class="carrusel-info-slide">

        	<img src="<?php echo e(asset('pc_inicio/dc1.png')); ?>" alt="DC1">
        	<div class="caption">Disco Duro Kingston A400 960GB SSD SATA3 500MB/s</div>
    	</div>

    <div class="carrusel-info-slide">

        	<img src="<?php echo e(asset('pc_inicio/dc2.png')); ?>" alt="DC2">
        	<div class="caption">Disco Duro Seagate BarraCuda 3.5" 2TB SATA 3</div>
    	</div>
	</div>
</div>

<div class="marcas-section">
	<div class="linea-roja"></div>
	<h2>NUESTRAS MARCAS</h2>
	<div class="marcas-logos">
    	<div class="marca-logo">
        	<img src="<?php echo e(asset('marcas/amd.png')); ?>" alt="AMD">
    	</div>
    	<div class="marca-logo">
        	<img src="<?php echo e(asset('marcas/apple.png')); ?>" alt="Apple">
    	</div>
    	<div class="marca-logo">
        	<img src="<?php echo e(asset('marcas/asus.png')); ?>" alt="Asus">
    	</div>
    	<div class="marca-logo">
        	<img src="<?php echo e(asset('marcas/hp.png')); ?>" alt="HP">
    	</div>
    	<div class="marca-logo">
        	<img src="<?php echo e(asset('marcas/lenovo.png')); ?>" alt="Lenovo">
    	</div>
    	<div class="marca-logo">
        	<img src="<?php echo e(asset('marcas/msi.png')); ?>" alt="MSI">
    	</div>
    	<div class="marca-logo">
        	<img src="<?php echo e(asset('marcas/razer.png')); ?>" alt="Razer">
    	</div>
    	<div class="marca-logo">
        	<img src="<?php echo e(asset('marcas/samsung.png')); ?>" alt="Samsung">
    	</div>
	</div>
</div>

<div class="footer-nav">
	<a href="/">Inicio</a>
	<a href="<?php echo e(route('gestionar-productos')); ?>">Gestionar Productos</a>
    	<a href="/productos">Productos</a>

</div>



<footer>


<!-- Sección de contacto -->
<section style="margin: 40px auto; max-width: 1100px; text-align: center; background-color: #f9f9f9; border-radius: 12px; box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1); padding: 30px;">
	<h2 style="font-size: 2rem; color: #9e0f0f; margin-bottom: 20px;">CONTACTO</h2>

	<!-- Información de contacto en recuadro gris -->
	<div style="background-color: #f0f0f0; padding: 30px; border-radius: 12px; box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1); margin-bottom: 40px;">
    	<div style="display: flex; justify-content: space-between; flex-wrap: wrap; gap: 40px;">
        	<div style="flex: 1; min-width: 250px;">
            	<h3 style="font-size: 1.4rem; color: #333; margin-bottom: 10px;">DIRECCIÓN</h3>
            	<p style="font-size: 1rem; color: #666; line-height: 1.6;">Calle tecnologia,24<br>Chiclana de la Frontera, Cádiz, España</p>
        	</div>

        	<div style="flex: 1; min-width: 250px;">
            	<h3 style="font-size: 1.4rem; color: #333; margin-bottom: 10px;">TELÉFONO</h3>
            	<p style="font-size: 1rem; color: #666; line-height: 1.6;">+34 123 456 789</p>
        	</div>

        	<div style="flex: 1; min-width: 250px;">
            	<h3 style="font-size: 1.4rem; color: #333; margin-bottom: 10px;">CORREO ELECTRÓNICO</h3>
            	<p style="font-size: 1rem; color: #666; line-height: 1.6;">Correo Electrónico: contacto@tecnostore.com </p>
        	</div>
    	</div>
	</div>

	</div>


	<!-- MAPA -->
	<div style="margin-top: 40px; margin-bottom: 40px;">
    	<h3 style="font-size: 1.4rem; color: #333; margin-bottom: 20px;">¿Dónde nos encontramos?</h3>
    	<div style="overflow: hidden; border-radius: 12px; box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1); max-width: 100%; height: 350px;">
        	<iframe src="https://www.google.com/maps?q=Chiclana+de+la+Frontera,+Cádiz,+España&output=embed" width="100%" height="100%" style="border: 0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    	</div>
	</div>




<div class="comentario-form-container" id="comentario">
<?php if(session('success')): ?>
    	<div style="background-color: #d4edda; padding: 10px; color: #155724; margin-bottom: 15px; border: 1px solid #c3e6cb; border-radius: 5px;">
        	<?php echo e(session('success')); ?>

    	</div>
	<?php endif; ?>

<?php if($errors->any()): ?>
    <div style="background-color: #f8d7da; padding: 10px; color: #721c24; margin-bottom: 15px; border: 1px solid #f5c6cb; border-radius: 5px;">
        <p>Debes cumplir los requisitos de caracteres mínimos.</p>
    </div>
<?php endif; ?>





    <h2>Deja tu comentario</h2>
    <form  action="<?php echo e(route('comentario')); ?>#comentario" method="POST" class="comentario-form" id="contact-form">
        <?php echo csrf_field(); ?> //evita ataques,valida que se envia de mi pagina
        <input type="text" name="nombre" placeholder="Tu nombre (minimo3caracteres)" required>
        <textarea name="comentario" placeholder="Escribe tu comentario (minimo 10 caracteres)" required></textarea>
        <button type="submit">Enviar</button>
    </form>


    </div>
</div>




</section>

	<p>&copy; 2025 TecnoStore. Todos los derechos reservados.</p>
</footer>

</body>
</html>

<?php /**PATH /home/usuario/tienda2/resources/views/welcome.blade.php ENDPATH**/ ?>