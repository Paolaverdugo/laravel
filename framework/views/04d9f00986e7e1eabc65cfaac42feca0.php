<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">

<title>Productos en <?php echo e(ucfirst($categoria->nombre)); ?></title>
<h1>Productos en la categoría: <?php echo e(ucfirst($categoria->nombre)); ?></h1>
</head>
<body>
    <h1>Productos en la categoría: <?php echo e(ucfirst($nombre)); ?></h1>

    <?php if($productos->isEmpty()): ?>
        <p>No hay productos en esta categoría.</p>
    <?php else: ?>
        <ul>
            <?php $__currentLoopData = $productos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $producto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li>
                    <h3><?php echo e($producto->nombre); ?></h3>
                    <p><?php echo e($producto->descripcion); ?></p>
                    <p>Precio: <?php echo e($producto->precio); ?>€</p>
                </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    <?php endif; ?>

    <a href="<?php echo e(route('index')); ?>">Volver al listado general</a>
</body>
</html>
<?php /**PATH /home/usuario/tienda2/resources/views/categoria.blade.php ENDPATH**/ ?>