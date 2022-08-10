<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="../css/login.css">
    
    <title>Login Cliente</title>
</head>
<body>
      <div class="login-container">
          <div class="login-info-container">
            <h1 class="title">Inicia sesion</h1>
            <div class="social-login">
                <div class="social-login-element">
                   <img src="../img/entrenador.png">
                   <span>Entrenador</span>
                </div>
                <div class="social-login-element">
                    <img src="../img/aerobicos.png">
                    <span>Cliente</span>
                </div>
            </div>
            <form class="inputs-container" id="formulario" action="../Controlador/login.php" method="POST">
                <input class="input" type="text" placeholder="Usuario" name="txt1">
                <input class="input" type="text" placeholder="Contraseña" name="txt2">
                <p>¿olvidaste tu contraseña? <span class="span">Click aqui</span></p>
                <button class="btn">Iniciar sesion</button>
            </form>
          </div>
            <img class="image-container" src="../img/pexels-leon-ardho-2468339.jpg" alt="">
      </div>

</body>
</html>