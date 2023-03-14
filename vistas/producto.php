<div class="card p-0" style="width: 18rem;">
    <img src="imagenes/portadas-juegos/<?= $producto->getImagen() ?>" class="card-img-top" alt="">
    <div class="card-body">
        <h3 class="card-title fw-bold h3"><?= $producto->getNombre() ?></h3>
        <p class="card-text text-secondary">Película: <?= $producto->getPlataforma() ?></p>
        <p class="text-dark fs-5">$ <?= $producto->getPrecio() ?></p>
        <a href="index.php?s=detalle-producto&id=<?= $producto->getId() ?>" class="btn btn-dark">Ver Producto</a>
    </div>
</div>