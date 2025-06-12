<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Productos en <?php echo e(ucfirst($nombre)); ?></title>
	<style>
    	body {
        	font-family: Arial, sans-serif;
        	background-color: #f4f6f9;
        	margin: 0;
        	padding: 0;
        	min-height: 100vh;
        	display: flex;
        	flex-direction: column;
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

    	.categoria-container {
        	width: 80%;
        	margin: 40px auto;
        	padding: 30px;
        	background-color: white;
        	border-radius: 15px;
        	box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
    	}

    	.categoria-container h1 {
        	font-size: 28px;
        	color: #9e0f0f;
        	margin-bottom: 20px;
        	text-align: center;
    	}

    	ul {
        	list-style: none;
        	padding: 0;
    	}

    	li {
        	margin-bottom: 25px;
        	padding: 20px;
        	border: 1px solid #ccc;
        	border-radius: 10px;
        	background-color: #f9f9f9;
    	}

    	li h3 {
        	margin: 0;
        	color: #333;
    	}

    	li p {
        	margin: 5px 0 10px;
        	color: #555;
    	}




.descripcion-producto ul,
.descripcion-producto ol {
    list-style-position: inside;
    list-style-type: disc;
    padding-left: 20px;
    margin: 10px 0;
    background: none;
    border: none;
    display: block;

}

.descripcion-producto li {
    margin-bottom: 5px;
    background: none;
    border: none;
    padding: 0;
}

.descripcion-producto p {
    margin: 10px 0;
    background: none;
    padding: 0;
    border: none;
}





    	.boton-volver {
        	background-color: white;
        	color: #9e0f0f;
        	border: 2px solid #9e0f0f;
        	padding: 12px 25px;
        	border-radius: 28px;
        	font-size: 16px;
        	text-decoration: none;
        	font-weight: bold;
        	display: inline-block;
        	margin-top: 30px;
        	transition: all 0.3s ease;
    	}

    	.boton-volver:hover {
        	background-color: #9e0f0f;
        	color: white;
    	}

    	footer {
        	background-color: #9e0f0f;
        	color: white;
        	text-align: center;
        	padding: 10px;
        	margin-top: auto;
        	font-weight: bold;
    	}



.contenedor-productos {
	display: flex;
	flex-wrap: wrap;
	gap: 20px;
	justify-content: center;
	margin-top: 20px;
}

.producto-card {
	width: 380px;
	border: 1px solid #ccc;
	border-radius: 10px;
	overflow: hidden;
	box-shadow: 0 2px 8px rgba(0,0,0,0.1);
	background-color: white;
	transition: transform 0.3s;
}

.producto-card:hover {
	transform: translateY(-5px);
}

.producto-card img {
	width: 300px;
	height: auto;
margin-left:40px;
	object-fit: cover;
}

.producto-card .info {
	padding: 18px;
}

.producto-card .info h3 {
	font-size: 21px;
	margin-bottom: 11px;
	color: #333;
}

.producto-card .info p {
	margin: 5px 0;
	color: #555;
	font-size: 15px;
}

.producto-card .precio {
	margin-top: 15px !important ;
	font-size:21px !important;
	color: #9e0f0f !important;
}



.alert-success-custom {
	background-color: #d4edda;
	color: #155724;
	padding: 12px 20px;
	border: 1px solid #c3e6cb;
	border-radius: 8px;
	margin-top: 20px;
	transition: opacity 0.5s ease;
	font-weight: 500;
}


.boton-carrito {
	background-color: #9e0f0f;
	color: white;
	border: none;
	padding: 10px 18px;
	border-radius: 8px;
	font-weight: bold;
	cursor: pointer;
	float: right;
	margin-bottom: 20px;
	margin-top: 10px;
	transition: background-color 0.3s ease;
}

.boton-carrito:hover {
	background-color: #7d0c0c;
}


//hace que al meter listas en descripcion se vea normal y no con recuadros







</style>


</head>
<body>



<header>
	<img src="<?php echo e(asset('blanquito.png')); ?>" alt="Logo Tienda">
	<nav class="header-nav">
	<a href="<?php echo e(route('productos_portatiles')); ?>">Añadir producto a esta categoria</a>
    	<a href="/productos">Productos</a>
        <a href="/carrito">Ver carrito</a>
    	<a href="/">Inicio</a>

	</nav>
</header>

<?php if(session('success')): ?>
	<div class="alert-success-custom">
    	<?php echo e(session('success')); ?>

	</div>
<?php endif; ?>






<div class="categoria-container">
		<h1>Productos en la categoría: <?php echo e(ucfirst($nombre)); ?></h1>

<?php if($productos->isEmpty()): ?>
	<p style="text-align:center; color: #888;">No hay productos en esta categoría.</p>
<?php else: ?>
	<div class="contenedor-productos">
	<?php $__currentLoopData = $productos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $producto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	<div class="producto-card">

<?php if($producto->imagen): ?>
	<img src="<?php echo e(asset($producto->imagen)); ?>" alt="<?php echo e($producto->nombre); ?>">
<?php else: ?>
	<img src="<?php echo e(asset('imagenes/imagen_por_defecto.png')); ?>" alt="Imagen por defecto">
<?php endif; ?>

	<div class="info">
	<h3><?php echo e($producto->nombre); ?></h3>

<div class="descripcion-producto">
    <?php echo $producto->descripcion; ?>

</div>

	<p class="precio"><?php echo e(number_format($producto->precio, 2)); ?> €</p>

<form method="POST" action="<?php echo e(route('agregar', $producto->id)); ?>">
<?php echo csrf_field(); ?>
<button type="submit" class="boton-carrito">Añadir al carrito</button>
</form>
</div>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<?php endif; ?>


</div>

<footer>
	<p>&copy; 2025 TecnoStore. Todos los derechos reservados.</p>
</footer>

</body>
</html>

<?php /**PATH /home/usuario/tienda2/resources/views/portatiles.blade.php ENDPATH**/ ?>