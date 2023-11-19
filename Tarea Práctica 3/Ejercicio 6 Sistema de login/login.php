<?php
session_start();
include("conexion.php");
include("usuarios.php");

if($_SERVER["REQUEST_METHOD"] == "POST") {
   $myusername = $_POST['username'];
   $mypassword = $_POST['password']; 

   if (isset($users[$myusername]) && $users[$myusername] == $mypassword){
      $_SESSION['login_user'] = $myusername;
      header("location: index.php");
   }else {
      $error = "Su nombre de usuario o contraseña no son válidos";
   }
}
?>
<html>
   <head>
      <link rel="stylesheet" type="text/css" href="styles.css">
   </head>
   <body>
      <H1>BIENVENIDO PORFAVOR INGRESA TUS CREDENCIALES PARA INICIAR SESION </H1>
      <div class="container">
         <form action = "" method = "post">
            <label for="uname"><b>Usuario</b></label>
            <input type="text" placeholder="Ingrese su Usuario" name="username" required>

            <label for="psw"><b>Contraseña</b></label>
            <input type="password" placeholder="Ingrese su Contraseña" name="password" required>

            <button type="submit">Iniciar sesion</button>
         </form>
         <div style="font: size 14px;px; color:#cc0000; margin-top:10px"><?php echo $error; ?></div>
      </div>
      <footer>

      <h3>Realizado por ERICK VARGAS</h3>
      </footer>
   </body>
</html>
