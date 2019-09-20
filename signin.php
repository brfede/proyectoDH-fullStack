<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style-signin.css">
    <title>Document</title>

<body id="body">

  <div class="fondo">
    <div class="registro">
      <p>No tienes una cuenta?</p>
      <p>Registrate <a href="login.php">acá</a></p>
    </div>
  </div>
  <div class="signIn">
    <h2>Sign In</h2>
    <form action="validar.php" method="POST">
        <div class="formSignIn">
            <p>
                <label for="email"></label>
                <input class="formItems" type="email" name="email" placeholder="Email">
            </p>
            <p>
                <label for="password"></label>
                <input class="formItems" type="password" name="password" placeholder="Contraseña">
            </p>
            <p>
                <input class="bottonSignIn" type="submit" value="Sign In">
            </p>
        </div>
    </form>
</div>
</body>