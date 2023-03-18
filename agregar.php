<?php include "./header.php";?>


<div class="container">
  <div class="row">
    <div class="col">
      <div class="card mt-4">
          <div class="card-body">
            <a href="index.php" class="btn btn-outline-info"><i class="fa-thin fa-angles-left"></i>Regresar</a>
            
            <h2>Agregar nuevo registro</h2>
            <form action="" method="post">
              <label for="paterno">Apellido Paterno</label>
              <input type="text" class="form-control" id="paterno" name="paterno">
              <label for="materno">Apellido Materno</label>
              <input type="text" class="form-control" id="materno" name="materno">
              <label for="nombre">Nombre</label>
              <input type="text" class="form-control" id="nombre" name="materno">
              <label for="fechaNacimiento">Fecha de nacimiento</label>
              <input type="date" class="form-control" id="fechaNacimiento" name="fechaNacimiento">
              <button type="button" class="btn btn-outline-primary mt-3">Enviar</button>
            </form>
          </div>    
      </div>
    </div>
  </div>
</div>

<?php include "./scripts.php";?>