<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>LATAM-erica</title>
        <!-- Favicon-->
        <link rel="icon" href="https://exploralat.am/images/shadowlight.png" />

        <!-- Libreria para validar con JQuery -->
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"> </script>
        <!-- Libreria de sweetalert 2-->
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
        <!-- Libreria para Iconos-->
        <script src="https://kit.fontawesome.com/0727983454.js" crossorigin="anonymous"></script>
        <!-- CHATBOT-->
        <script src="//code.tidio.co/v1xfakneb2ccbjjeguciuod9vntxedjz.js" async></script>




        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
         <!-- Estilo de contactos-->
        <link rel="stylesheet" href="css/contacto.css">
        <!-- Libreria estilos de la animación-->
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
         <!-- ESTILO FORMU-->
        <link rel="stylesheet" href="css/estilos.css">

        




    </head>
    <body>

        <!-- MENU-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="index.php">Home</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link" data-bs-toggle="modal" data-bs-target="#Login" href="#!">Iniciar</a></li>
                        <li class="nav-item"><a class="nav-link" data-bs-toggle="modal" data-bs-target="#Registro" href="#!">Registrarte</a></li>
                        <li class="nav-item"><a class="nav-link" href="opciones/recuperar.php">Recuperar contraseña</a></li>
                        <li class="nav-item"><a class="nav-link" href="opciones/ayuda.php">Ayuda</a></li>
                        
                    </ul>
                </div>
            </div>
        </nav>
        <!-- MENU-->











 <!-- REGISTRO-->
<div class="modal fade" id="Registro" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Registro</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form  class="form-floating" name="form-ajax" id="form-ajax" method="post" action="#">
                    
                    <!-- Grupo: Correo Electronico -->
                    <div class="formulario__grupo" id="grupo__correo">
                        <label for="correo" class="formulario__label">Correo Electrónico</label>
                        <div class="formulario__grupo-input">
                            <input type="email" class="formulario__input" name="correo" id="correo" placeholder="correo@correo.com">
                            <i class="formulario__validacion-estado fas fa-times-circle"></i>
                        </div>
                        <p class="formulario__input-error">El correo solo puede contener letras, numeros, puntos, guiones, guion bajo, y debe contener un @ y un dominio.</p>
                    </div>

                    <!-- Grupo: Contraseña -->
                    <div class="formulario__grupo" id="grupo__psw">
                        <label for="psw" class="formulario__label">Contraseña</label>
                        <div class="formulario__grupo-input">
                            <input type="password" class="formulario__input" name="psw" id="psw">
                            <i class="formulario__validacion-estado fas fa-times-circle"></i>
                        </div>
                        <p class="formulario__input-error">La contraseña tiene que ser de 4 a 12 dígitos.</p>
                    </div>

                    <!-- Grupo: Confirmar -->
                    <div class="formulario__grupo" id="grupo__confirmar">
                        <label for="confirmar" class="formulario__label">Repetir Contraseña</label>
                        <div class="formulario__grupo-input">
                            <input type="password" class="formulario__input" name="confirmar" id="confirmar">
                            <i class="formulario__validacion-estado fas fa-times-circle"></i>
                        </div>
                        <p class="formulario__input-error">Ambas contraseñas deben ser iguales.</p>
                    </div>


                    <!-- Select -->
                    <div class="mb-3">
                        <label>Pais</label>
                        <select class="form-control"  name="pais" id="pais" required="requiered">
                            <option selected disabled>Selecciona tu país</option>
                            <option>Argentina</option>
                            <option>Brasil</option>
                            <option>Colombia</option>
                            <option>Chile</option>
                            <option>Ecuador</option>
                            <option>México</option>
                            <option>Perú</option>
                            <option>Venezuela</option>
                        </select>
                    </div>
                    
                    <!-- Captcha -->
                    <div class="mb-3">
                        <div  class="g-recaptcha" data-sitekey="6LfMy1ceAAAAAIIsLiFMwkhYxX324aXV3hPSKoq3"></div>
                    </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" >Cerrar</button>
        <button type="button" class="btn btn-primary"  id="enviar" disabled="">Crear cuenta</button>
        </form>
      </div>
    </div>
  </div>
</div>
 <!-- REGISTRO-->