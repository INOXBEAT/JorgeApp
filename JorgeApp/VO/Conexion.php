<?php

class Conexion {

    private const HOST = "localhost";
    private const USER = "ciptenet_cipte";
    private const PASSWORD = "QdI$%FxGH.{x";
    private const DB_NAME = "ciptenet_aplicativo_Jorge";
    
    
    private $conn = null;
    private $resultado = null;
    private $filas = 0;
    private $id = 0;

    private function abrirConexion() {
        try {
            $this->conn = new PDO("mysql:host=" . self::HOST . ";dbname=" . self::DB_NAME, self::USER, self::PASSWORD);
            $this->conn->exec("set names utf8");
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Error al conectar con la base de datos: " . $e->getMessage());
        }
    }

    private function cerrarConexion() {
        $this->conn = null;
    }

    public function buscarQuery($sql, $params) {
        try {
            $this->abrirConexion();
            $stmt = $this->conn->prepare($sql);
            foreach ($params as $key => $value) {
                $stmt->bindValue(':' . $key, $value);
            }
            $stmt->execute();
            $this->resultado = $stmt;
            $this->filas = $stmt->rowCount();
        } catch (PDOException $e) {
            die("Error al ejecutar la consulta: " . $e->getMessage());
        } finally {
            $this->cerrarConexion();
        }
    }

    public function obtenerResult() {
        return $this->resultado;
    }

    public function obtenerFilasAfectadas() {
        return $this->filas;
    }

    public function obtenerId() {
        return $this->id;
    }
}
