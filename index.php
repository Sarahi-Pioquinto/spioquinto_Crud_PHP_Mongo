<?php include "./header.php";?>


    <div class="container">
        <div class="row">
            <div class="col">
            <div class="card mt-4">
                <div class="card-body">
                <h2>Crud con mongodb y php</h2>
                <a href="agregar.php" class="btn btn-primary">
                <i class="fa-light fa-user-plus"></i>
                Agregar nuevo registro
                </a>
                <hr>
                <table class="table table table-sm table-hover table-bordered">
                    <thead>
                        <th>Apellido paterno</th>
                        <th>Apellido materno</th>
                        <th>Nombre</th>
                        <th>Fecha de nacimiento</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                     
                    </thead>
                    <tbody>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td class="text-center">
                                <form action="" method="post">
                                    <button class="btn btn-warning">
                                    <i class="fa-light fa-user-pen"></i>
                                        Editar
                                    </button>
                                </form>
                            </td>
                            <td class="text-center">
                                <form action="">
                                    <button class="btn btn-danger">
                                    <i class="fa-light fa-user-xmark"></i>
                                        Eliminar
                                    </button>
                                </form>
                            </td>
                            
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
  </div>
</div>

<?php include "./scripts.php";?>