<?php
//INSERT INTO `cursos` (`id`, `nombre_curso`) VALUES (NULL, 'Sitio Web con PHP');
//Este archivo 'cursos 'se encuentra en 'secciones' por ponemos los puntos ../configuraciones/ en la ruta
//Llamamos a nuestro configuración  include_once'../configuraciones/bd.php' y crear instancia $conexionBD = BD::crearInstancia()
//cursos.php accede a ../configuraciones/bd.php
    include_once '../configuraciones/bd.php';
    $conexionBD = BD::crearInstancia();

    //Recepcionar las instrucciones
    $id=isset($_POST['id'])?$_POST['id']:'';
    $nombre_curso=isset($_POST['nombre_curso'])?$_POST['nombre_curso']:'';
    //Recibir la acción
    $accion=isset($_POST['accion'])?$_POST['accion']:'';
    
    print_r($_POST);


    if($accion!=''){
        switch($accion){
            case 'agregar':
                //Aquí se arma la insersión (CONSULTA)
                $sql="INSERT INTO cursos (id, nombre_curso) VALUES (NULL, :nombre_curso)";
                //Prepara la consulta
                $consulta=$conexionBD->prepare($sql);
                //Le pasa un parametro
                $consulta->bindParam(':nombre_curso', $nombre_curso); 
                //Ejecuta la consulta 
                $consulta->execute();
               
            break;
            //Min 1:44:00
            case 'editar':
                $sql="UPDATE cursos SET nombre_curso=:nombre_curso WHERE id=:id";
                $consulta=$conexionBD->prepare($sql);
                $consulta->bindParam(':id',$id);
                $consulta->bindParam(':nombre_curso',$nombre_curso);
                $consulta->execute();
            break;
            //Min 1:42:00
            case 'borrar':
                $sql="DELETE FROM cursos WHERE id=:id";
                $consulta=$conexionBD->prepare($sql);
                $consulta->bindParam(':id',$id);
                $consulta->execute();

            break;
            case 'Seleccionar':
                $sql="SELECT * FROM cursos WHERE id=:id";
                $consulta=$conexionBD->prepare($sql);
                $consulta->bindParam(':id',$id);
                $consulta->execute();
                $curso=$consulta->fetch(PDO::FETCH_ASSOC);
               
                $nombre_curso=$curso['nombre_curso'];
                

                break;
        }
    }

$consulta = $conexionBD->prepare("SELECT * FROM cursos");
$consulta->execute();
//fetchAll nos retorna todos los datos y lo vamos almacenar en $listaCursos
$listaCursos = $consulta->fetchAll();





?>

