<?php
//Esto es una configuración para la BD que sería una class que crea para poderse conectar (CON ESTO YA HAY UNA CONEXIÓN A LA BD)
class  BD {
    //Crear instancia para la conexión
    public static $instancia = null;
    //Crear el metodo "crearInstancia()"
    public static function crearInstancia(){
        //Si es true utilizará lsa conexión a la base de datos con el user root y password '' (vacía) e imprimimos conectados...
        if(!isset(self::$instancia) ){


            $opciones[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
            self::$instancia = new PDO('mysql:host=localhost;dbname=aplicacion', 'root', '', $opciones);
            echo "conectado...";
        }
        //De otro modo regresamos null
        return self::$instancia;

    }

}

?>