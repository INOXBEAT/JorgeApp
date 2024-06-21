<?php

class Controlador {

    public function abrirRuta($ruta) {
        require_once $ruta;
    }

    public function login($user, $password) {
        $dao = new DAOLogin();
        $result = $dao->login($user, $password);

        switch ($result) {
            case '1':
                header("Location: index.php?accion=vlogin&error=3");
                exit;
            
            case '2':
                $resultf = $dao->obtenerUsuarios($user);
                $row = $resultf->fetch();
                $_SESSION["usuario"] = $row["Correo"];
                $_SESSION["estado"] = $row["Estado"];
                
                header("Location: index.php");
                exit;

            case '3':
                header("Location: index.php?accion=vlogin&error=2");
                exit;

            default:
                header("Location: index.php?accion=vlogin&error=1");
                exit;
        }
    }

    public function cerrarSesion() {
        if (isset($_SESSION["usuario"])) {
            unset($_SESSION["usuario"]);
        }
        if (isset($_SESSION["estado"])) {
            unset($_SESSION["estado"]);
        }



        session_destroy();
        header("Location: index.php");
        exit;
    }
}

?>