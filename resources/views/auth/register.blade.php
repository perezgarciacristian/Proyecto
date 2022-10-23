<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form by Colorlib</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="/registro01/fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="/registro01/css/style.css">
</head>

<body>

    <div class="main">

        <section class="signup">
            <!-- <img src="images/signup-bg.jpg" alt=""> -->
            <div class="container">
                <div class="signup-content">
                    <form method="POST" id="signup-form" class="signup-form" action="">
                        @csrf
                        <h2 class="form-title">Crear cuenta</h2>
                        <div class="form-group">
                            <input type="text" class="form-input" name="name" id="name" placeholder="Nombre" value="{{old('name') ?? ''}}" />
                            @error('name')
                            <i>Ingrese un Nombre</i>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-input" name="email" id="email" placeholder="Correo" value="{{old('email') ?? ''}}" />
                            @error('email')
                            <i>Ingrese un Correo institucional válido</i>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" name="username" id="username" placeholder="Usuario" value="{{old('username') ?? ''}}" />
                            @error('username')
                            <i>Ingrese un usuario válido</i>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" name="degree" id="Carrera" placeholder="Carrera" value="{{old('degree') ?? ''}}" />
                            @error('degree')
                            <i>Ingrese una carrera</i>
                            @enderror
                        </div>
                        <div class="form-group">
                            <select class="form-input" name="gender">
                                <option value="{{old('gender') ?? ''}}">Género</option>
                                <option value="masculino">Masculino</option>
                                <option value="femenino">Femenino</option>
                            </select>
                            @error('gender')
                            <i>Ingrese su género</i>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-input" name="password" id="password" placeholder="Contraseña" />
                            <span toggle="#password" class="zmdi zmdi-eye-off field-icon toggle-password"></span>
                            @error('password')
                            <i>Ingrese una Contraseña con mínimo 8 caracteres</i>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-input" name="password_confirmation" id="re_password" placeholder="Repetir contraseña" />
                            @error('password_confirmation')
                            <i>Ambas contraseñas deben ser iguales</i>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" id="submit" class="form-submit" value="Registrar" />
                        </div>
                    </form>
                    <p class="loginhere">
                        ¿Ya tienes una cuenta? <a href="/login" class="loginhere-link">Inicia sesión aquí</a>
                    </p>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="/registro01/vendor/jquery/jquery.min.js"></script>
    <script src="/registro01/js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>