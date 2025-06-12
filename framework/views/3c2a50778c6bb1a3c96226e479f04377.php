<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Crear Producto</title>
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

    	/* Estilo del mensaje flash dentro del contenedor */
    	.alert-success-custom {
        	background-color: #28a745; /* Verde */
        	color: white; /* Letra blanca */
        	padding: 15px;
        	text-align: center;
        	font-weight: bold;
        	border-radius: 8px;
        	margin-bottom: 20px; /* Espacio entre el mensaje y el formulario */
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

    	.form-container {
        	width: 70%;
        	margin: 40px auto;
        	padding: 40px;
        	background-color: #ffffff;
        	border-radius: 15px;
        	box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        	text-align: center;
        	flex-grow: 1;
    	}

    	.form-container h1 {
        	font-size: 30px;
        	color: #333;
        	margin-bottom: 30px;
    	}

    	.form-grid {
        	display: grid;
        	grid-template-columns: 1fr 1fr;
        	gap: 30px 50px;
        	text-align: left;
    	}

    	.form-group {
        	display: flex;
        	flex-direction: column;
    	}

    	.form-group label {
        	font-size: 16px;
        	font-weight: 600;
        	color: #444;
        	margin-bottom: 5px;
    	}

    	.form-group input,
    	.form-group textarea,
    	.form-group select {
        	width: 100%;
        	padding: 12px 15px;
        	border-radius: 8px;
        	border: 1px solid #ccc;
        	font-size: 15px;
        	background-color: #f9f9f9;
        	transition: border 0.3s;
        	margin-bottom: 20px;
    	}

    	.form-group input:focus,
    	.form-group textarea:focus,
    	.form-group select:focus {
        	border-color: #9e0f0f;
        	outline: none;
    	}


.form-container h1 {
	font-size: 30px;
	color: #333;
	margin-bottom: 62px;
}



    	.form-container button {
        	background-color: #9e0f0f;
        	color: white;
        	padding: 14px 30px;
        	border-radius: 8px;
        	border: none;
        	font-size: 16px;
        	font-weight: bold;
        	cursor: pointer;
        	transition: background-color 0.3s ease;
        	margin-top: -20px;
    	margin-left:1100px;

    	}

    	.form-container button:hover {
        	background-color: #7c0c0c;
    	}

    	.boton-ir-al-listado {
        	background-color: white;
        	color: #9e0f0f;
        	border: 2px solid #9e0f0f;
        	padding: 12px 25px;
        	border-radius: 28px;
        	font-size: 16px;
        	text-decoration: none;
        	margin-top: 45px;
        	display: inline-block;
        	font-weight: bold;
        	transition: all 0.3s ease;
    	margin-right:-1090px;

    	}

    	.boton-ir-al-listado:hover {
        	background-color: #9e0f0f;
        	color: white;
    	}

    	footer {
        	background-color: #9e0f0f;
        	color: white;
        	text-align: center;
        	padding: 10px;
        	margin-top: 10px;
        	font-weight: bold;
    	}


.input-file {
	background-color: #f9f9f9;
	border: 2px dashed #ccc;
	padding: 10px;
	border-radius: 8px;
	font-size: 15px;
	transition: border-color 0.3s ease-in-out;
}

.input-file:hover {
	border-color: #9e0f0f;
	background-color: #fff8f8;
}

input[type="file"]::file-selector-button {
	background-color: #9e0f0f;
	color: white;
	border: none;
	padding: 10px 20px;
	border-radius: 6px;
	font-weight: bold;
	cursor: pointer;
	transition: background-color 0.3s ease;
}

input[type="file"]::file-selector-button:hover {
	background-color: #7c0c0c;
}

</style>


</head>
<body>



<header>
	<img src="<?php echo e(asset('blanquito.png')); ?>" alt="Logo Tienda">
	<nav class="header-nav">
    	<a href="/productos">Productos</a>
    	<a href="/" class="home-button">Inicio</a>
	</nav>
	<a href="<?php echo e(route('index')); ?>" class="boton-ir-al-listado">Ir al Listado de Productos</a>

</header>


<?php if(session('success')): ?>
	<div class="alert-success-custom">
    	<?php echo e(session('success')); ?>

	</div>
<?php endif; ?>


<div class="form-container">
	<h1>Crear Producto</h1>
	<form action="<?php echo e(route('store')); ?>" method="POST"  enctype="multipart/form-data">
    	<?php echo csrf_field(); ?>


<div class="form-grid">
	<div class="form-group">
    	<label for="nombre">Nombre del Producto</label>
    	<input type="text" id="nombre" name="nombre" required>
	</div>

	<div class="form-group">
    	<label for="descripcion">Descripción</label>
    	<textarea id="descripcion" name="descripcion" rows="4" required></textarea>
	</div>


	<div class="form-group">
    	<label for="precio">Precio</label>
    	<input type="number" id="precio" name="precio" step="0.01" required>
	</div>


	<div class="form-group">
    	<label for="categoria">Categorías</label>
    	<select id="categoria" name="categoria_id" required>


 <?php $__currentLoopData = $categorias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categoria): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
         	<option value="<?php echo e($categoria->id); ?>"><?php echo e($categoria->nombre); ?></option>
        	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    	</select>
	</div>




	<div class="form-group">
    	<label for="imagen">Subir imagen del Producto</label>
    	<input type="file" name="imagen" id="imagen"  class="input-file">
	</div>
</div>

<button type="submit">Añadir Producto</button>
</form>
</div>


<footer>
	<p>&copy; 2025 TecnoStore. Todos los derechos reservados.</p>
</footer>


<script src="https://cdn.jsdelivr.net/npm/tinymce@5.10.7/tinymce.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/tinymce@5.10.7/langs/es.js"></script>

<script>
	tinymce.init({
    	selector: 'textarea#descripcion',
    	language: 'es',
    	plugins: 'lists',
    	toolbar: 'bold italic | bullist numlist',
    	menubar: false,
    	branding: false,
    	elementpath: false, //  oculta el tipo de etiquetas recuadro descripcion
    	statusbar: false	//  oculta también toda la barra inferior
	});
</script>

</body>
</html>
<?php /**PATH /home/usuario/tienda2/resources/views/create.blade.php ENDPATH**/ ?>