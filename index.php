<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styles.css">
    <title>TodoList</title>
    <script src="https://kit.fontawesome.com/a5bc61b517.js" crossorigin="anonymous"></script>
    
</head>
<style>

</style>

<body  >
<form action="validar.php" method="post">
  <h1>TODOLIS</h1>

  <div class="login-continer" >
      <img src="IMG/listar2.webp" alt="" >
      <p>Iniciar tareas</p>
      <label for="">Ingrese Correo Electornico</label>
      <div class="fields">
         <div class="data">
         <i class="fas fa-at"></i>
         <input type="text" name="correo" placeholder="Correo electronico" required>
         </div>  
         <label for="">Contraseña</label>
         <div class="data">
         <i class="fas fa-lock"></i>
         <input type="password" name="contraseña" placeholder="Contraseña" required>
         </div>
      </div>
      <button type type="submit" class="btn-login">LOGIN</button> <a class="button" href="registrarvista.php">REGISTRATE</a>
  </div>
</form>
    
</body>

</html>