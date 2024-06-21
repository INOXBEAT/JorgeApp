<?php

echo "pagina inicio 2";

?>
<hr>
<form class="floating-logout" action="index.php?accion=Logout" method="post">
      <input type="submit" value="Cerrar Sesión" style="color:black;background:transparent;border:none;">
    </form>
    <hr>
    <p>bienvenido <?php echo $_SESSION["usuario"] ?></p>
    <br>
    <p>Su estado es <?php echo $_SESSION["estado"] ?></p>