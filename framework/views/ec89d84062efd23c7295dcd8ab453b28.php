<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Carrito</title>
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

    	.alert-success-custom {
        	background-color: #28a745;
        	color: white;
        	padding: 15px;
        	text-align: center;
        	font-weight: bold;
        	border-radius: 8px;
        	margin-bottom: 20px;
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

    	.container {
        	width: 80%;
        	margin: 40px auto;
        	background-color: #fff;
        	padding: 30px;
        	border-radius: 15px;
        	box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        	flex-grow: 1;
    	}

    	h1 {
        	text-align: center;
        	color: #333;
        	margin-bottom: 30px;
    	}

    	table {
        	width: 100%;
        	border-collapse: collapse;
        	margin-bottom: 30px;
    	}

    	th, td {
        	border: 1px solid #ddd;
        	padding: 12px;
        	text-align: center;
    	}

    	th {
        	background-color: #9e0f0f;
        	color: white;
    	}

    	tr:nth-child(even) {
        	background-color: #f9f9f9;
    	}

    	.btn-eliminar {
        	background-color: white;
        	color: #9e0f0f;
        	border: 2px solid #9e0f0f;
        	padding: 8px 16px;
        	border-radius: 6px;
        	font-size: 14px;
        	font-weight: bold;
        	cursor: pointer;
        	transition: all 0.3s ease;
    	}

    	.btn-eliminar:hover {
        	background-color: #9e0f0f;
        	color: white;
    	}

    	.btn-volver {
        	display: inline-block;
        	background-color: white;
        	color: #9e0f0f;
        	border: 2px solid #9e0f0f;
        	padding: 12px 25px;
        	border-radius: 8px;
        	font-size: 16px;
        	text-decoration: none;
        	font-weight: bold;
        	transition: all 0.3s ease;
        	text-align: center;
    	}

    	.btn-volver:hover {
        	background-color: #9e0f0f;
        	color: white;
    	}

    	.no-items {
        	text-align: center;
        	font-size: 18px;
        	color: #555;
    	}

    	footer {
        	background-color: #9e0f0f;
        	color: white;
        	text-align: center;
        	padding: 20px;
        	font-weight: bold;
        	margin-top: auto;
    	}


.celda-precio {
	min-width: 80px;
}

.celda-imagen {
	min-width: 105px;
}

.celda-nombre {
	width: 170px;
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

<?php if(session('success')): ?>
	<div class="alert-success-custom">
    	<?php echo e(session('success')); ?>

	</div>
<?php endif; ?>

<div class="container">
	<h1>Carrito de compras</h1>

    	<table>
        	<thead>
            	<tr>
                	<th>Nombre</th>
                	<th>Descripción</th>
                	<th>Cantidad</th>
                	<th>Precio</th>
             	<th>Imagen</th>
                	<th>Acción</th>
            	</tr>
        	</thead>
        	<tbody>

<?php $__currentLoopData = $carrito; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $clave => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    	<tr>
        	<td class="celda-nombre"><?php echo e($item['nombre']); ?></td>
        	<td><?php echo $item['descripcion'] ?? ''; ?></td>

<td>
	<form action="<?php echo e(route('actualizar')); ?>" method="POST" style="display:inline-flex; align-items:center; gap:5px;">
    	<?php echo csrf_field(); ?>

    	<input type="hidden" name="id" value="<?php echo e($clave); ?>" //la clave es el id del producto>


<button type="submit" name="accion" value="decrementar" style="padding: 5px 10px;">-</button>


<span style="min-width: 20px; text-align: center;"><?php echo e($item['cantidad'] ?? 1); ?></span>


    	<button type="submit" name="accion" value="incrementar" style="padding: 5px 10px;">+</button>
	</form>
</td>



        <td class="celda-precio"><?php echo e(number_format(($item['precio'] ?? 0) * ($item['cantidad'] ?? 1), 2)); ?> €</td>
       	<td class="celda-imagen">
       	<?php if(!empty($item['imagen'])): ?>
      	<img src="<?php echo e(asset($item['imagen'])); ?>" alt="Imagen de <?php echo e($item['nombre']); ?>" width="110">
      	<?php else: ?>






	<img src="<?php echo e(asset('imagenes/imagen_por_defecto.png')); ?>" alt="Imagen por defecto" width="110">
      	<?php endif; ?>
        	</td>
        	<td>
            	<form action="<?php echo e(route('eliminar', $clave)); ?>" method="POST" onsubmit="return confirm('¿Eliminar este producto?');">
                	<?php echo csrf_field(); ?>
                	<?php echo method_field('DELETE'); ?>
                	<button type="submit" class="btn-eliminar">Eliminar</button>
            	</form>
        	</td>
    	</tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<tbody>    	</table>

	<a href="<?php echo e(url('/productos')); ?>" class="btn-volver">Volver a la tienda</a>
</div>

<footer>
	&copy; 2025 TecnoStore. Todos los derechos reservados.
</footer>

</body>
</html>
<?php /**PATH /home/usuario/tienda2/resources/views/carrito.blade.php ENDPATH**/ ?>