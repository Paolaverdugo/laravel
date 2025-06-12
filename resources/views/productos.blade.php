<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Tecnostore - Productos</title>
	<style>
    	body {
        	font-family: Arial, sans-serif;
        	background-color: #f8f9fa;
        	margin: 0;
        	padding: 0;
    	}

    	header {
        	background-image: url('{{ asset('fondo.png') }}');
        	background-size: cover;
        	background-position: center;
        	padding: 10px 0;
        	text-align: center;
        	color: white;
        	position: relative;
        	height: 120px;
        	opacity: 0.9;
    	}

    	header img {
        	position: absolute;
        	left: 10px;
        	top: 50%;
        	transform: translateY(-50%);
        	max-width: 200px;
    	}

    	.header-nav {
        	position: absolute;
        	top: 50%;
        	right: 30px;
        	transform: translateY(-50%);
    	}

    	.header-nav select {
        	background-color: #f0f0f0;
        	color: #b34f4f;
        	padding: 14px 20px;
        	font-size: 22px;
        	border-radius: 10px;
        	border: 1px solid #ccc;
        	cursor: pointer;
        	width: 100%;
        	max-width: 550px;
        	box-sizing: border-box;
        	text-align: center;
        	height: 55px;
        	box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
    	}

    	.header-nav select:hover {
        	background-color: #e0e0e0;
    	}

    	.productos-destacados-title {
        	font-size: 30px;
        	text-align: center;
        	color: #9e0f0f;
        	margin: 50px 0 30px;
    	}

    	.productos-deslizables {
        	display: flex;
        	overflow-x: auto;
        	gap: 20px;
        	scroll-behavior: smooth;
        	padding-bottom: 20px;
        	animation: deslizamiento 30s linear infinite;
    	}

    	.producto-deslizable {
        	background-color: white;
        	width: 300px;
        	padding: 20px;
        	border-radius: 10px;
        	box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        	text-align: center;
    	}

    	.producto-deslizable img {
        	width: 100%;
        	height: auto;
        	border-radius: 8px;
    	}

    	.producto-deslizable h3 {
        	color: #9e0f0f;
        	margin-top: 15px;
    	}

    	.nueva-fila {
        	display: flex;
        	justify-content: center;
        	margin-top: 40px;
    	}

    	.producto-estatico {
        	flex: 1;
        	max-width: 90vw;
    	}

    	.producto-estatico img {
        	width: 100%;
        	height: 40vh;
        	object-fit: cover;
        	border-radius: 8px;
    	}

    	.footer {
        	background-color: #9e0f0f;
        	color: white;
        	text-align: center;
        	padding: 20px;
        	margin-top: 40px;
        	font-weight: bold;
    	}

    	.lo-que-no-puedes-perderte {
        	margin-top: 100px;
        	margin-bottom: 40px;
        	padding: 0 20px;
    	}

    	.lo-que-no-puedes-perderte h3 {
        	font-size: 28px;
        	color: #9e0f0f;
        	margin-bottom: 20px;
    	}

    	.imagenes-perdidas {
        	display: flex;
        	justify-content: space-between;
        	gap: 20px;
    	}

    	.imagenes-perdidas img {
        	width: 100%;
        	height: auto;
        	object-fit: cover;
        	border-radius: 8px;
    	}

    	@keyframes deslizamiento {
        	0% {
            	transform: translateX(0);
        	}
        	100% {
            	transform: translateX(-100%);
        	}
    	}

    	/* Sección de tarjetas informativas */
    	.ventajas-compras {
        	margin: 80px 20px 40px;
    	}

    	.tarjetas {
        	display: flex;
        	flex-wrap: wrap;
        	justify-content: center;
        	gap: 30px;
    	}

    	.tarjeta {
        	background-color: #ffffff;
        	border: 2px solid #e5e5e5;
        	border-radius: 20px;
        	box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        	text-align: center;
        	width: 210px;
        	padding: 10px;
        	transition: transform 0.3s ease;
    	}

    	.tarjeta:hover {
        	transform: scale(1.05);
    	}

    	.tarjeta img {
        	width: 70px;
        	height: auto;
        	margin-bottom: 15px;
    	}

    	.tarjeta.big img {
        	width: 180px;
    	}

    	.tarjeta p {
        	color: #9e0f0f;
        	font-weight: bold;
        	font-size: 16px;
    	}

    	/* Bloque de información final con línea fina gris arriba */
    	.info-tienda {
        	border-top: 1px solid #ccc;
        	padding-top: 20px;
        	text-align: left;
        	margin: 40px 20px;
        	font-size: 14px;
        	color: #333;
        	line-height: 1.6;
    	}

    	.pc-componentes-texto {
        	font-size: 12px;
        	color: #333;
        	text-align: center;
        	margin-top: 20px;
    	}


.btn-volver-inicio {
	position: absolute;
	top: 2660px;
	right: 20px;
	background-color: #ffffff;
	color: #000000;
	padding: 8px 14px;
	font-size: 14px;
	border: 1px solid #ccc;
	border-radius: 6px;
	text-decoration: none;
	box-shadow: 0 2px 6px rgba(0,0,0,0.2);
	z-index: 999;
	transition: background-color 0.3s;
}

.btn-volver-inicio:hover {
	background-color: #f0f0f0;
}




	</style>
</head>
<body>

<header>
	<img src="{{ asset('blanquito.png') }}" alt="Logo Tienda">
	<div class="header-nav">
    	<select onchange="window.location.href=this.value;">
        	<option value="#">Categorías</option>
        	<option value="{{ url('categoria/portatiles') }}">Portátiles</option>
        	<option value="{{ url('categoria/ordenadores') }}">Ordenadores</option>
        	<option value="{{ url('categoria/perifericos') }}">Periféricos</option>
        	<option value="{{ url('categoria/almacenamiento') }}">Almacenamiento</option>
        	<option value="{{ url('categoria/smartphones') }}">Smartphones</option>

    	</select>
	</div>
</header>

<section>
	<h2 class="productos-destacados-title">Productos Destacados</h2>
	<div class="productos-deslizables">
    	<div class="producto-deslizable">
        	<img src="{{ asset('a') }}" alt="Producto 1">
        	<h3> Portátil HP  </h3>
        	<p>Portátil HP 15-fc0069ns AMD Ryzen 5 7520U/16GB/1TB SSD/15.6</p>
    	</div>
    	<div class="producto-deslizable">
        	<img src="{{ asset('b') }}" alt="Producto 2">
        	<h3>Portátil Replay HP</h3>
        	<p>250 G7 i3-10110U 8GB 256SSD Refurbished </p>
    	</div>
    	<div class="producto-deslizable">
        	<img src="{{ asset('c') }}" alt="Producto 3">
        	<h3>Portátil HP</h3>
        	<p> 15-fd0246ns Intel Core i5-1334U/16GB/1TB SSD/15.6"</p>
    	</div>
    	<div class="producto-deslizable">
        	<img src="{{ asset('d') }}" alt="Producto 4">
        	<h3> Portátil Acer Aspire 3</h3>
        	<p>A315-59 Intel Core i5-1235U/16GB/1TB SSD/15.6"  </p>
    	</div>
    	<div class="producto-deslizable">
        	<img src="{{ asset('e') }}" alt="Producto 5">
        	<h3>Ordenador Sobremesa Arizone Eternal Pc </h3>
        	<p> AMD Ryzen 3 4300G/32GB/1TB SSD </p>
    	</div>
    	<div class="producto-deslizable">
        	<img src="{{ asset('f') }}" alt="Producto 6">
        	<h3> Lenovo ThinkCentre M720t</h3>
        	<p>Intel Core i7-9700/8GB/512 GB SSD Reacondicionado </p>
    	</div>
	</div>
</section>

<section>
	<div class="nueva-fila">
    	<div class="producto-estatico">
       	<img src="{{ asset('ahorro2.png') }}" alt="Ahorro" style="max-width: 100%; height: auto;">
    	</div>
	</div>
</section>

<section class="lo-que-no-puedes-perderte">
	<h3>Lo que no puedes perderte</h3>
	<div class="imagenes-perdidas">
    	<div>
        	<img src="{{ asset('movil2.png') }}" alt="Móviles">
    	</div>
    	<div>
        	<img src="{{ asset('almacenamiento.png') }}" alt="Pendrives">
    	</div>
    	<div>
        	<img src="{{ asset('teclados.png') }}" alt="Teclados">
    	</div>
	</div>
</section>

<!-- Sección de tarjetas -->
<section class="ventajas-compras">
	<div class="tarjetas">
    	<div class="tarjeta">
        	<img src="{{ asset('fotos_pequeñas/oferta.png') }}" alt="Ofertas especiales">
        	<p>Ofertas especiales todo el año</p>
    	</div>
    	<div class="tarjeta big">
        	<img src="{{ asset('fotos_pequeñas/devolucion.webp') }}" alt="Devolución gratuita">
        	<p>Devolución gratuita sin complicaciones</p>
    	</div>
    	<div class="tarjeta big">
        	<img src="{{ asset('fotos_pequeñas/pedidos.webp') }}" alt="Envío rápido">
        	<p>Recibe tu pedido en 48h</p>
    	</div>
    	<div class="tarjeta big">
        	<img src="{{ asset('fotos_pequeñas/envios.webp') }}" alt="Envío gratuito">
        	<p>Envío gratis a partir de 50€</p>
    	</div>
    	<div class="tarjeta big">
        	<img src="{{ asset('fotos_pequeñas/garantia.webp') }}" alt="Garantía devolución">
        	<p>Garantía de devolución en 48h</p>
    	</div>
	</div>
</section>



<style>
	.contenedor-categorias {
    	display: flex;
    	justify-content: center;
    	gap: 40px;
    	flex-wrap: wrap;
	}

	.categoria {
    	position: relative;
    	display: inline-block;
    	text-align: center;
	}

	.categoria img {
    	width: 312px;
    	height: auto;
    	border-radius: 12px;
	}

	.overlay {
    	position: absolute;
    	bottom: 22px;
    	left: 90%; /* Centrado horizontal */
    	transform: translateX(-50%); /* Centrado exacto */
    	background-color: rgba(158, 15, 15, 0.6); /* Rojo transparente */
    	border-radius: 50%;
    	width: 38px; /* Círculo más grande */
    	height: 38px; /* Círculo más grande */
    	display: flex;
    	align-items: center;
    	justify-content: center;
    	transition: background-color 0.3s ease;
	}

	.overlay span {
    	font-size: 45px; /* Símbolo "+" más grande */
    	color: white;
    	font-weight: bold;
	}

	.categoria:hover .overlay {
    	background-color: rgba(158, 15, 15, 0.8); /* Más oscuro al hacer hover */
    	cursor: pointer;
	}

	/* darle algo de espacio al símbolo "+" */
	.categoria p {
    	margin-top: 10px;
    	color: #9e0f0f;
    	font-weight: bold;
	}
</style>





<section style="margin: 60px 20px;">
	<div class="contenedor-categorias">
    	<a href="{{ url('categoria/almacenamiento') }}" class="categoria">
        	<img src="{{ asset('minifotos/dc.png') }}" alt="dc">
        	<div class="overlay"><span>+</span></div>
    	</a>
    	<a href="{{ url('categoria/smartphones') }}" class="categoria">
        	<img src="{{ asset('minifotos/movil.png') }}" alt="movil">
        	<div class="overlay"><span>+</span></div>
    	</a>
    	<a href="{{ url('categoria/ordenadores') }}" class="categoria">
        	<img src="{{ asset('minifotos/ordenador.png') }}" alt="ordenador">
        	<div class="overlay"><span>+</span></div>
    	</a>
    	<a href="{{ url('categoria/portatiles') }}" class="categoria">
        	<img src="{{ asset('minifotos/pc.png') }}" alt="pc">
        	<div class="overlay"><span>+</span></div>
    	</a>
    	<a href="{{ url('categoria/perifericos') }}" class="categoria">
        	<img src="{{ asset('minifotos/teclado.png') }}" alt="teclado">
        	<div class="overlay"><span>+</span></div>
    	</a>
	</div>
</section>






<!-- Bloque de información final con línea fina gris arriba -->
<div class="info-tienda">
	<p>
    	TecnoStore es tu tienda online de tecnología e informática. Somos líderes en el sector, basándonos en la confianza, la experiencia y un profundo conocimiento tecnológico. Desde 2005, innovamos y respondemos a las necesidades de la comunidad tecnológica.
	</p>
	<p>
    	Con más de 100.000 artículos disponibles y 31.700 m² distribuidos en nuestras instalaciones, además de cuatro tiendas físicas en Madrid, Barcelona, Murcia y Alhama de Murcia, nuestro compromiso es ofrecerte la mejor experiencia de compra.
	</p>
	<p>
 <strong>Envíos gratuitos</strong> a partir de 50€ en 24 horas* (y si alguna vez incumplimos la fecha, te devolvemos los gastos de envío); <strong>Garantía</strong> y
<strong>Devoluciones gratuitas</strong> con atención personalizada sin esperas.
	</p>
	<p>
    	En TecnoStore, el cliente es nuestra prioridad. Nos tomamos muy en serio sus opiniones y trabajamos para superar siempre sus expectativas. ¡Bienvenido a TecnoStore!
	</p>
</div>


<a href="{{ url('/') }}" class="btn-volver-inicio">Volver a inicio</a>




<footer class="footer">
	<p>&copy; 2025 TecnoStore. Todos lso derechos reservados</p>
</footer>

</body>
</html>
