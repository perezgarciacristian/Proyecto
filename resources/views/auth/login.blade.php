<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="/login01/css/style.css">
    <link rel="icon" href="/registro01/images/leones.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyUniversity</title>

</head>

<body>
    <div id="log-div">
        <div id="log-hori">
            <a href="/login">
                <img class="log-logo" src="/registro01/images/leones.png" alt="logo">
            </a>
            <h3 id="log-reg"> Aún no tienes cuenta?</h3>
            <p id="reg-inf"> Si formas parte de la universidad <br> y aún no tienes cuenta, registrate dando <br> click en el siguiente botón </p>
            <div class="wrap">
                <a href="/register">
                    <button class="button">Registrate</button>
                </a>

            </div>
            <div id="log-vert">

                <h3 id="log-log">LOGIN</h3>
                @error('autentication')
                <script>
                    alert("Datos incorrectos");
                </script>
                @enderror


                <form action="" method="POST">
                    @csrf
                    <div class="code">
                        <input class="input" type="text" name="email" placeholder="Correo o Usuario" required>
                    </div>
                    <div class="code">
                        <input class="input" type="password" name="password" placeholder="Contraseña" required>
                    </div>
                    <div>
                        <button class="btn-log">
                            Inicia sesion
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>