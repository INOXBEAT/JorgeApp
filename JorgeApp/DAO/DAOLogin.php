<?php
class DAOLogin {

    public function login($user, $password) {
        $conexion = new Conexion();
        $sql = "SELECT * FROM Usuarios WHERE Correo = :usuario AND Contrasena = :pass";
        error_log($sql);

        $conexion->buscarQuery($sql, ['usuario' => $user, 'pass' => $password]);
        $validar = $conexion->obtenerFilasAfectadas();

        return $validar > 0 ? 2 : 3;
    }

    public function obtenerUsuarios($user) {
        $conexion = new Conexion();
        $sql = "SELECT * FROM Usuarios WHERE Correo = :user";
        error_log($sql);

        $conexion->buscarQuery($sql, ['user' => $user]);
        return $conexion->obtenerResult();
    }
}
