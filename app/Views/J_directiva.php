<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
<script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.ckeditor.com/ckeditor5/39.0.0/classic/ckeditor.js"></script>
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
        <div class="col-md-12 d-flex align-items-end flex-column bd-highlight mb-3">
            <br>
                <button type="button" class="btn text-white mt-auto p-2 bd-highlight" data-bs-toggle="modal" data-bs-target="#exampleModal" 
                            style="background: #0353A4;
                                    background: linear-gradient(182deg,rgba(3, 83, 164, 1) 0%, rgba(2, 62, 125, 1) 53%, rgba(0, 18, 51, 1) 100%);" >
                            Crear Ficha
                </button>
            <br>
        </div>
        <hr>
        <div class="col-md-12">
            <br>
            <table id="myTable" class=" display table table-striped">
        <thead>
            <tr>
                <th>N°</th>
                <th>Nombre y Apellido</th>
                <th>Titulo</th> 
                <th>Contenido</th> 
                <th>Email</th>
                <th>Imagen</th> 
                <th>Fecha de Carga</th> 
            </tr>
        </thead>
        <tbody>
            <?php foreach ($data->getResultArray() as $row) {?>
                <tr>
                    <td><?php echo $row['id'];?></td>
                    <td><?php echo $row['nombre'];?></td>
                    <td><?php echo $row['titulo'];?></td>
                    <td><?php echo $row['contenido'];?></td>
                    <td><?php echo $row['email'];?></td>
                    <td><img class="img-fluid"  src="<?php echo base_url('public/uploads/'.$row['filename']);?>" alt="" width="60"> </td>
                    <td><?php echo $row['created_at'];?></td>
                </tr>
            <?php }?>   
        </tbody>
   
    </table>
        </div>
    </div>
    <br><br>    
</div>


<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header" style="background: #0353A4;
                            background: linear-gradient(182deg,rgba(3, 83, 164, 1) 0%, rgba(2, 62, 125, 1) 53%, rgba(0, 18, 51, 1) 100%);">
                            <h5 class="modal-title text-white" id="exampleModalLabel">Crear Ficha</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                <div class="modal-body">
                   <form action="<?= base_url('jd_upload') ?>" method="post" enctype="multipart/form-data">
                        <?= csrf_field() ?> 
                        <div class="form-group">
                            <label for="titulo">Nombre y Apellido:</label>
                            <input type="text" name="nombre" id="nombre" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="titulo">Titulo Academíco:</label>
                            <input type="text" name="titulo" id="titulo" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="editor">Contenido:</label>
                            <textarea name="contenido" id="editor"></textarea>
                            <!-- <input type="text" name="contenido" id="contenido" class="form-control"> !-->
                        </div>
                        <div class="form-group">
                            <label for="titulo">Email:</label>
                            <input type="text" name="email" id="email" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="titulo">Area de Interes:</label>
                            <input type="text" name="interes" id="interes" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Imagen:</label>
                            <input type="file"  name="userfile" class="form-control" >
                        </div>
 


                    <br><br>
                  
                    </div>
                    <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                            <button type="submit" class="btn text-white" style="background: #0353A4;
                            background: linear-gradient(182deg,rgba(3, 83, 164, 1) 0%, rgba(2, 62, 125, 1) 53%, rgba(0, 18, 51, 1) 100%);">Guardar</button>
                    </div>
                    </form>
        </div>
    </div>
</div>

<script>
    ClassicEditor
        .create(document.querySelector('#editor'))
        .catch(error => {
            console.error(error);
        });
</script>
