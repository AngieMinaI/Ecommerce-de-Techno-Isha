<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
        <link rel="stylesheet" href="../css/login.css">
    </head>
    <body>

    <?php
    include("../includes/header2.php");

    ?>
    <div class="login-box">
        <div>
      <h1>Login</h1>
       <form action="../llamadas/procesoLogueo.php" method="post" class="contenedor-novedad">
        <label for="username">Administrador</label>
        <input type="text" name="administrador" placeholder="Nombre de administrador" required> 
        <label for="password">Clave</label>
        <input type="password" name="clave" placeholder="Clave" required>
        <input type="submit" name="entrar" value="Entrar">
        
        </div>
      </form>
    </div>
    <?php
    include("../includes/footer2.php");
    ?>
    </body>
</html>