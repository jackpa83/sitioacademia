<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
<script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>

<script>
        $(document).ready(function() {
            $(document).ready(function() {
                $('#myTable').DataTable({
                    // Configuración opcional en español
                    language: {
                        url: 'https://cdn.datatables.net/plug-ins/1.13.7/i18n/es-ES.json'
                    },
                    pageLength: 10,
                    responsive: true
                });
            });
        });
</script>
<div class="container">
    <br>
    <div class="row">
        <div class="col-md-12  ">
            <br>
                <button type="button" class="btn text-white mt-auto p-2 bd-highlight" data-bs-toggle="modal" data-bs-target="#exampleModal" 
                            style="background: #0353A4;
                                    background: linear-gradient(182deg,rgba(3, 83, 164, 1) 0%, rgba(2, 62, 125, 1) 53%, rgba(0, 18, 51, 1) 100%);" >
                            Crear Usuario
                </button>
            <br><br>
        </div>
        <hr>
        <div class="col-md-12">
            <br>
            <table id="myTable" class=" display table table-striped">
        <thead>
            <tr>
                <th>N°</th>
                <th>Nombres</th>
                <th>Email</th> 
                <th>Niveles</th> 
                <th>Estatus</th> 
                <th>Fecha de Creación</th> 
            </tr>
        </thead>
        <tbody>
                <?php foreach ($data->getResultArray() as $row) {?>
                <tr>
                    <td><?php echo $row['id'];?></td>
                    <td><?php echo $row['nombre'];?></td>
                    <td><?php echo $row['email'];?></td>
                    <td><?php echo $row['key_niveles'];?></td>
                    <td><?php echo $row['key_estatus'];?></td>
                    <td><?php echo $row['created_at'];?></td>
                </tr>
            <?php }?>  
        </tbody>
   
    </table>
        </div>
    </div>
    <br><br>    
</div>

<?php if (session()->getFlashdata('msg')) : ?>
    <div class="row col-md-3">
        <div class="alert alert-success" role="alert">
            <?= session()->getFlashdata('msg') ?>
        </div>
    </div>
<?php endif; ?>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header" style="background: #0353A4;
                            background: linear-gradient(182deg,rgba(3, 83, 164, 1) 0%, rgba(2, 62, 125, 1) 53%, rgba(0, 18, 51, 1) 100%);">
                            <h5 class="modal-title text-white" id="exampleModalLabel">Crear Usuario</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                <div class="modal-body">
                        <form action="<?php echo base_url('r_user');?>" method="post">
                                <?= csrf_field() ?> 
                                <div class="form-group">
                                        <label for="exampleInputEmail1">Nombre:</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" name="nombre" aria-describedby="emailHelp" placeholder="Nombre" required>
                                </div>
                                <div class="form-group">
                                        <label for="exampleInputEmail1">Email:</label>
                                        <input type="email"class="form-control"  name="email" placeholder="Correo electrónico" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Contraseña:</label>
                                <input type="password" name="password" class="form-control" placeholder="Contraseña" required>  
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nivel de Usuario:</label>
                                        <select  class="form-control" name="key_niveles" id="key_niveles" >
                                            <option value="0">Seleccione</option>
                                            <option value="1">Administrador</option>
                                            <option value="2">Estudiante</option>
                                        </select>
                                </div>
                        
                  
                    </div>
                    <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                            <button type="submit" class="btn text-white" style="background: #0353A4;
                            background: linear-gradient(182deg,rgba(3, 83, 164, 1) 0%, rgba(2, 62, 125, 1) 53%, rgba(0, 18, 51, 1) 100%);">Cargar banner</button>
                    </div>
                    </form>
        </div>
    </div>
</div>


