<?php

class Conectar
{
    protected $dhb;

    protected function Conexion()
    {
        try{

            $this->dhb = new PDO(
                "mysql:host=localhost;dbname=ventas",
                "root",
                ""
            );

            return $this->dbh;
        } catch (Exception $e) {

            print "Error BD: " . $e->getMessage() . "<br/>";

            die();
        }
    }

    public function set_names()
    {
        return $this->dbh->query("SER NAMES 'utf8' ");
    }
}