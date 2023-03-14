<?php 
require_once __DIR__ . '/banner.php';
?>

<section class="container">
    <h2 class="pt-4 pt-md-5 text-center text-dark fw-bold titulo text-uppercase">Funkos Pop!</h2>

    <div class="row row-cols-4 gap-3 py-4 py-md-5 justify-content-center">

    <?php  
    require_once __DIR__ . '/../clases/Producto.php';

    $productos = (new Producto())->traerPorTipo("funkopop");
  
    foreach ($productos as $producto) {
    require __DIR__ . '/../vistas/producto.php';
    }

    ?>
    </div>
</section>

<section class="container">
    <h2 class="pt-4 pt-md-5 text-center text-dark fw-bold titulo text-uppercase">Mochilas</h2>

    <div class="row row-cols-4 gap-3 py-4 py-md-5 justify-content-center">

    <?php  
    $productos = (new Producto())->traerPorTipo("mochilas");

    foreach ($productos as $producto) {
    require __DIR__ . '/../vistas/producto.php';
    }
    ?>
    </div>
</section>