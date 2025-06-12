<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Producto</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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



.container {
    max-width: 70%;
    margin: 40px auto;
    padding: 40px;
    background-color: #ffffff;
    border-radius: 15px;
    box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
    text-align: center;
}


        h1 {
            text-align: center;
            margin-bottom: 30px;
            color: #333;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
            color: #555;
        }

        input[type="text"],
        input[type="number"],
        textarea,
        select,
        input[type="file"] {
            width: 100%;
            padding: 12px 15px;
            margin-bottom: 20px;
            border-radius: 8px;
            border: 1px solid #ccc;
            font-size: 15px;
            background-color: #f9f9f9;
            transition: border 0.3s;
        }

        input:focus,
        textarea:focus,
        select:focus {
            border-color: #9e0f0f;
            outline: none;
        }

button {
    background-color: #9e0f0f;
    color: white;
    padding: 14px 30px;
    border-radius: 8px;
    border: none;
    font-size: 16px;
    font-weight: bold;
    cursor: pointer;
    transition: background-color 0.3s ease;
    margin-top: 40px;
    margin-right: auto; /* alineación derecha */
    display: block;
}


        button:hover {
            background-color: #7c0c0c;
        }


.form-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 30px 50px;
    text-align: left;
}


.imagen-actual img {
    max-width: 120px;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0,0,0,0.1);
}


footer {
    background-color: #9e0f0f;
    color: white;
    text-align: center;
    padding: 15px;
    font-weight: bold;
    width: 100%;
}

    </style>
</head>
<body>

<header>
    <img src="{{ asset('blanquito.png') }}" alt="Logo Tienda">
    <nav class="header-nav">
        <a href="/productos">Productos</a>
        <a href="/" class="home-button">Inicio</a>
    </nav>
    <a href="{{ route('index') }}" class="boton-ir-al-listado">Ir al Listado de Productos</a>
</header>


<main>
<div class="container">
    <h1>Editar Producto</h1>
    <form action="{{ route('update', $producto->id) }}" method="POST" enctype="multipart/form-data">



  @csrf
    @method('PUT')

    <div class="form-grid">
        <div>
            <label for="nombre">Nombre del Producto</label>
            <input type="text" id="nombre" name="nombre" value="{{ $producto->nombre }}" required>
        </div>

        <div>
            <label for="precio">Precio</label>
            <input type="number" id="precio" name="precio" value="{{ $producto->precio }}" step="0.01" required>
        </div>

        <div>
            <label for="categoria">Categoría</label>
            <select id="categoria" name="categoria_id" required>

 @foreach($categorias as $categoria)
                    <option value="{{ $categoria->id }}" {{ $producto->categoria_id == $categoria->id ? 'selected' : '' }}>
                        {{ $categoria->nombre }}
                    </option>
                @endforeach
            </select>
        </div>


<div>
    <label>Imagen actual:</label>
    <div class="imagen-actual">

        @if($producto->imagen)
            <img src="{{ asset($producto->imagen) }}" alt="Imagen actual del producto">
        @else
            <p>Sin imagen</p>
        @endif
    </div>

    <label>Nueva imagen:</label>
    <input type="file" name="imagen">
</div>


<div style="grid-column: 1 / -1">
    <label for="descripcion">Descripción</label>
    <textarea id="descripcion" name="descripcion" rows="4" required>{!! $producto->descripcion !!}</textarea>
</div>
    <button type="submit">Guardar Cambios</button>


</form>

</div>


</main>
<footer>
    <p>&copy; 2025 TecnoStore. Todos los derechos reservados.</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/tinymce@5.10.7/tinymce.min.js"> /*carga el editor*/</script>
<script src="https://cdn.jsdelivr.net/npm/tinymce@5.10.7/langs/es.js"> /*carga el idioma */</script>

<script>
tinymce.init({
  selector: 'textarea#descripcion', // Selecciona el textarea con id="descripcion"
  language: 'es',        // Establece el idioma del editor en español
  plugins: 'lists',   // Activa el plugin de listas
  toolbar: 'bold italic | bullist numlist', // Muestra botones de negrita, cursiva, lista con viñetas y lista numerada
  menubar: false,   // Oculta la barra de menús
  branding: false,  // Oculta la marca "Powered by TinyMCE"
  elementpath: false,      // Oculta la ruta de etiquetas (ej. body > p)
  statusbar: false     // Oculta la barra de estado inferior
});

</script>

</body>
</html>
