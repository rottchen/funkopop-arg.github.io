<?php 
require_once __DIR__ . '/banner.php';
?>

<section class="container py-5">
  <div class="accordion" id="accordionExample">
    <div class="accordion-item">
      <h2 class="accordion-header" id="headingOne">
        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          ¿Cuales son los medios de pago?
        </button>
      </h2>
      <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
        <div class="accordion-body">
          Los unicos medios de pago que manejamos son <strong>transferencias bancarias o Mercadopago (Credito y Debito)</strong>
      </div>
    </div>
    <div class="accordion-item">
      <h2 class="accordion-header" id="headingTwo">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          ¿Por qué medio se envía el producto?
        </button>
      </h2>
      <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
        <div class="accordion-body">
          El envío está a cargo del comprador, por ende <strong>él elige la emprese de logística.</strong>
        </div>
      </div>
    </div>
    <div class="accordion-item">
      <h2 class="accordion-header" id="headingThree">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          ¿Qué es una exclusiva?
        </button>
      </h2>
      <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
        <div class="accordion-body">
        Son artículos que solo están disponibles a través de un proveedor en particular o a través de un evento específico. Emitimos exclusivas en una variedad de formas, y <strong>todas son producciones limitadas.</strong> 
        </div>
      </div>
    </div>
  </div>
</section>

<section class="container">
  <h2 class="py-2 mb-3">¡Si te surge una pregunta, no dudes en contactarnos!</h2>
  <form>
    <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">Nombre Completo</label>
      <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nombre Apellido">
    </div>
    <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">E-Mail</label>
      <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="NombreApellido@ejemplo.com">
    </div>
    <div class="mb-3">
      <label for="exampleFormControlTextarea1" class="form-label">Mensaje</label>
      <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>
    <div>
      <button type="submit" class="btn btn-dark mb-3 px-5">Enviar</button>
    </div>
  </form>

</section>