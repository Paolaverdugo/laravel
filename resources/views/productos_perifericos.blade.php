<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Agregar desde Almacenamiento</title>
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
        	background-image: url('{{ asset('fondo.png') }}');
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
        	margin-bottom: 40px;
    	}

    	.form-grid {
        	display: grid;
        	grid-template-columns: 1fr 1fr;
        	gap: 30px 40px;
        	text-align: left;
    	}

    	.form-group {
        	display: flex;
        	flex-direction: column;
    	}

    	.form-group label {
        	font-weight: bold;
        	margin-bottom: 8px;
        	color: #444;
    	}

    	.form-group input,
    	.form-group textarea {
        	width: 100%;
        	padding: 12px 15px;
        	border-radius: 8px;
        	border: 1px solid #ccc;
        	font-size: 15px;
        	background-color: #f9f9f9;
        	transition: border 0.3s;
        	margin-bottom: 15px;
    	}

    	.form-group input:focus,
    	.form-group textarea:focus {
        	border-color: #9e0f0f;
        	outline: none;
    	}

    	.input-file {
        	background-color: #f9f9f9;
        	border: 2px dashed #ccc;
        	padding: 10px;
        	border-radius: 8px;
        	font-size: 14px;
    	}

    	button[type="submit"] {
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

    	button[type="submit"]:hover {
        	background-color: #7c0c0c;
    	}

    	footer {
        	background-color: #9e0f0f;
        	color: white;
        	text-align: center;
        	padding: 10px;
        	margin-top: -80px;;
        	font-weight: bold;
    	}



	</style>
</head>
<body>

<header>
	<img src="{{ asset('blanquito.png') }}" alt="Logo Tienda">
	<nav class="header-nav">
<a href="{{ route('categoria', ['nombre' => 'perifericos']) }}">Ver productos de Periféricos</a>
 <a href="{{ route('index') }}" class="boton-volver">Volver al listado general</a>

    	<a href="/" class="home-button">Volver al Inicio</a>

</nav>
</header>

<div class="form-container">
	<h1>Crear Producto desde Periféricos</h1>

	<form action="{{ route('guardarDesdePerifericos') }}" method="POST" enctype="multipart/form-data">
    	@csrf
    	<input type="hidden" name="categoria_id" value="3">

@if(session('success'))
	<div style="background-color: #d4edda; color: #155724; padding: 15px; border-radius: 5px; margin-bottom: 20px; border: 1px solid #c3e6cb;">
    	{{ session('success') }}
	</div>
@endif


    	<div class="form-grid">
        	<div class="form-group">
            	<label for="nombre">Nombre</label>
            	<input type="text" name="nombre" id="nombre" placeholder="Nombre del producto" required>
        	</div>

        	<div class="form-group">
            	<label for="precio">Precio</label>
            	<input type="number" step="0.01" name="precio" id="precio" placeholder="Precio" required>
        	</div>

<div class="form-group" style="grid-column: span 2;">
            	<label for="descripcion">Descripción</label>
        	</div>
<textarea name="descripcion" id="descripcion" rows="4" placeholder="Descripción del producto" required></textarea>

        	<div class="form-group" style="grid-column: span 2;">
            	<label for="imagen">Imagen del producto</label>
            	<input type="file" name="imagen" id="imagen" class="input-file" accept="image/*">
        	</div>
    	</div>

    	<button type="submit">Guardar</button>
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


