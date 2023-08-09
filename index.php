<!doctype html>
<html>
<head>

<meta charset="utf-8">
<!--- Favicon --->
<link rel="apple-touch-icon" sizes="180x180" href="./images/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="./images/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="./images/favicon-16x16.png">
<link rel="manifest" href="./images/site.webmanifest">
<meta name="msapplication-TileColor" content="#fade95">
<meta name="theme-color" content="#fade95">

<!--- CSS Style --->
<link rel="stylesheet" type="text/css" href="index.css">


<title>Iniciar Sesión</title>
</head>

<body>

        <!--- Variables --->
        <?php
        $view = "loading";

        if ($view == "login"):
          echo '<div class="container">
                  <div class="form-container">
                    <img src="ruta_de_la_imagen.png" alt="Ghost simulator logo" class="logo">
                    <p class="title">Iniciar Sesión</p>
                    <form class="form">
                      <div class="input-group">
                        <label for="username">Usuario (licencia)</label>
                        <input type="text" name="username" id="username" placeholder="">
                      </div>
                      <div class="input-group">
                        <label for="password">Contraseña</label>
                        <input type="password" name="password" id="password" placeholder="">
                      </div>
                      <button class="sign">Iniciar Sesión</button>
                    </form>
                    <div class="links">
                      <a href="#">Crear Cuenta</a>
                      <a href="#">Restablecer Contraseña</a>
                    </div>
                  </div>
                </div>
            ';

        else:
          echo '<div class="hamster-container">
            <div aria-label="Orange and tan hamster running in a metal wheel" role="img" class="wheel-and-hamster">
            <div class="wheel"></div>
            <div class="hamster">
            <div class="hamster__body">
            <div class="hamster__head">
              <div class="hamster__ear"></div>
              <div class="hamster__eye"></div>
              <div class="hamster__nose"></div>
            </div>
            <div class="hamster__limb hamster__limb--fr"></div>
            <div class="hamster__limb hamster__limb--fl"></div>
            <div class="hamster__limb hamster__limb--br"></div>
            <div class="hamster__limb hamster__limb--bl"></div>
            <div class="hamster__tail"></div>
            </div>
            </div>
            <div class="spoke"></div>
            </div>
            <h1 class="loading-text">Cargando...</h1>
          </div>';

        endif;
        ?>

</body>
</html>
