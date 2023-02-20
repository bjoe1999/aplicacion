<?php include('../templates/cabecera.php'); ?>

<div class="row">
    <div class="col-5">

        <form action="" method="post"> 
            <div class="card">
                <div class="card-header">
                    Alumnos
                </div>
                <div class="card-body">
                    
                <div class="mb-3">
                  <label for="id" class="form-label">ID</label>
                  <input type="text"
                    class="form-control" name="id" id="id" aria-describedby="helpId" placeholder="ID">
                  
                </div>
                <div class="mb-3">
                  <label for="nombre" class="form-label">Nombre</label>
                  <input type="text"
                    class="form-control" name="nombre" id="nombre" aria-describedby="helpId" placeholder="Escribe el nombre">
               
                </div>
                <div class="mb-3">
                  <label for="apellidos" class="form-label">Apellidos</label>
                  <input type="text"
                    class="form-control" name="apellidos" id="apellidos" aria-describedby="helpId" placeholder="Escriba los apellidos">
                  
                </div>
                <div class="mb-3">
                    <label for="" class="form-label"> Cursos del alumno</label>
                    <select multiple class="form-control" name="cursos[]" id="listaCursos">
                        <option>Seleccione una opción</option>
                        <option>Curso 1</option>
                        <option>Curso 2</option>
                    </select>
                </div>

                <div class="btn-group" role="group" aria-label="Button group name">
                    <button type="button" class="btn btn-success">Agregar</button>
                    <button type="button" class="btn btn-warning">Editar</button>
                    <button type="button" class="btn btn-danger">Borrar</button>
                </div>  

                </div>
                
            </div>
        </form>
    </div>
    <div class="col-7">
        <div class="table-responsive">
            <table class="table table-primary">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="">
                        <td scope="row">R1C1</td>
                        <td>R1C2</td>
                        <td>R1C3</td>
                    </tr>
                    <tr class="">
                        <td scope="row">Item</td>
                        <td>Item</td>
                        <td>Item</td>
                    </tr>
                </tbody>
            </table>
        </div>
        
    </div>
</div>
<?php include('../templates/pie.php'); ?>