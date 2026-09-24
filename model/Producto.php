<?php
    //La clase Producto hereda las funciones de la clase Conectar
    class Producto extends Conectar
    {
        //obtiene todos los productos de la BD
        public function get_producto(){

            //Establece la conexion con la BD
            $conectar = parent::conexion;

            //Codificacion de caracteres
            parent::set_name();

            //Consuta SQL para obtener todos los productos
            $sql = "SELECT * FROM tm_producto WHERE est = 1"

            //Preparar la consulta
            $sql = $conectar->prepare(sql);

            //Ejecuta la consulta
            $sql = execute();

            //Obtiene y retorna todos los registros encontrados
            $resultado = $sql->fetchAll();

            return $resultado;
        }
    }
?>