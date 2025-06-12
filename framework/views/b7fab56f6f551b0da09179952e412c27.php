<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Lista de Productos</title>
	<style>
    	body {
        	font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        	background-color: #f8f9fa;
        	margin: 0;
        	padding: 0;
        	display: flex;
        	flex-direction: column;
        	min-height: 100vh;
    	}
    	header {
        	background-color: #9e0f0f;
        	padding: 10px 0;
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
        	max-width: 200px;
        	margin-left: 20px;
    	}

    	/* Barra de menú */
    	.menu {
        	display: flex;
        	justify-content: flex-end;
        	gap: 20px;
        	margin-top: 0;
        	margin-right: 20px;
    	}
    	.menu a {
        	text-decoration: none;
        	padding: 12px 25px;
        	background-color: white;
        	color: black;
        	border-radius: 30px;
        	font-weight: bold;
        	transition: background-color 0.3s ease;
    	}
    	.menu a:hover {
        	background-color: #9e3535;
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

    	/* Tabla de productos */
    	table {
        	width: 100%;
        	border-collapse: collapse;
        	margin-top: 20px;
    	}
    	th, td {
        	border: 1px solid #ddd;
        	padding: 12px 20px;
        	text-align: center;
        	font-size: 16px;
    	}
    	th {
        	background-color: #9e0f0f;
        	color: white;
        	font-weight: bold;
        	text-transform: uppercase;
    	}
    	td {
        	background-color: white;
        	color: black;
    	}

    	/* Efecto hover para celdas de tabla */
    	tr:hover td {
        	background-color: #f1f1f1;
        	transition: background-color 0.3s ease;
    	}

    	/* Estilos de botones */
    	button {
        	background-color: #9e0f0f;
        	color: white;
        	padding: 8px 18px;
        	border-radius: 30px;
        	font-weight: bold;
        	border: none;
        	cursor: pointer;
        	transition: background-color 0.3s ease;
    	}
    	button:hover {
        	background-color: #9e3535;
    	}

    	footer {
        	background-color: #9e0f0f;
        	color: white;
        	text-align: center;
        	padding: 3px 0;
        	font-weight: bold;
        	margin-top: 50px;
        	box-shadow: 0 -4px 6px rgba(0, 0, 0, 0.1);
        	font-size: 12px;
    	}



	</style>
</head>
<body>

<header>
	<img src="<?php echo e(asset('blanquito.png')); ?>" alt="Logo Tienda">
	<div class="menu">
    	<a href="/productos">Ver Productos</a>
    	<a href="<?php echo e(url('/')); ?>">Inicio</a>
	</div>
</header>

<div class="contenedor">
	<h1>Lista de Productos</h1>


<form method="GET" style="margin-bottom: 20px;">
    <input type="text" name="buscar" placeholder="Buscar por nombre..." value="<?php echo e(request('buscar')); ?>" style="height: 25px;width:200px; padding: 8px; margin-right: 10px;font-size:16px;">

    <select name="categoria" style="padding: 8px; margin-right: 10px; height:50px; width:200px; font-size:18px;">
        <option value="">Todas las categorías</option>
        <?php $__currentLoopData = $categorias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($category->id); ?>" <?php echo e(request('categoria') == $category->id ? 'selected' : ''); ?>>
                <?php echo e($category->nombre); ?>

            </option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>

    <button type="submit" style="height:46px; width:100px; font-size:17px;":>Buscar</button>
</form>



	<?php if(session('success')): ?>
    	<div style="background-color: #d4edda; padding: 10px; color: #155724; margin-bottom: 15px; border: 1px solid #c3e6cb; border-radius: 5px;">
        	<?php echo e(session('success')); ?>

    	</div>
	<?php endif; ?>

	<!-- Tabla de productos -->
	<table>
    	<tr>
        	<th>Nombre</th>
        	<th>Precio</th>
        	<th>Descripción</th>
		<th>imagen</th>
        	<th>Categoria</th>
        	<th>Acción</th>
    	</tr>


<?php $__currentLoopData = $productos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $producto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<tr>
    <td><?php echo e($producto->nombre); ?></td>
    <td><?php echo e(number_format($producto->precio, 2)); ?> €</td>
    <td><?php echo $producto->descripcion; ?></td>

    <td>
        <?php if($producto->imagen): ?>


 <img src="<?php echo e(asset($producto->imagen)); ?>" alt="Imagen de <?php echo e($producto->nombre); ?>" width="110">

        <?php else: ?>
            <p>Sin imagen</p>
        <?php endif; ?>
    </td>

    <td><?php echo e($producto->categoria->nombre ?? 'Sin categoría'); ?></td>





    <td>
        <form action="<?php echo e(route('destroy', $producto->id)); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <?php echo method_field('DELETE'); ?>
            <button type="submit">Eliminar</button>
        </form>

   <a href="<?php echo e(route('edit', $producto->id)); ?>">
        <button style="margin-top: 5px;">Editar</button>
    </a>

    </td>
</tr>

    	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</table>
</div>

<footer>
	<p>&copy; 2025 TecnoStore. Todos los derechos reservados</p>
</footer>


<?php /**PATH /home/usuario/tienda2/resources/views/index.blade.php ENDPATH**/ ?>