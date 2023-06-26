
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Captcha-->
        <script src='https://www.google.com/recaptcha/api.js'></script>
        <!-- Libreria script de las animaciones-->
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <!-- Iniciador de las animaciones-->
        <script>
          AOS.init();
        </script>
        <!-- Formulario-->
        <script src="../js/formulario.js"></script>




    </body>
</html>



<!--VALIDAR CAPTCHA-->
<script type="text/javascript">
   // Validar apretando un boton con el id validar
   /* $(document).on('click', '#validar', function()
    {
        var response = grecaptcha.getResponse();
        alert(response);

        if (response != "") {
              alert("captcha Valido");
        }   else{
              alert("Comprueba el captcha");
            }
        }) */

      function ValidarCap()
    {
        var response = grecaptcha.getResponse();
        alert(response);

        if (response != "") {
              alert("captcha Valido");
        }   else{
              alert("Comprueba el captcha");
            }
    }
 //document.getElementById('correo').addEventListener('keyup', ValidarCap);
</script>




<!--Deshabilitar y habilitar-->
<script type="text/javascript">
  function activar()
  {//Inicio Función
  
        correo = document.getElementById('correo').value;
        pais = document.getElementById('pais').value;
        psw = document.getElementById('psw').value;
        confirmar = document.getElementById('confirmar').value;
       // captcha = document.getElementById('captcha').value;

        if (correo != "" && pais!== "Selecciona tu país" && psw!= "" && confirmar!= "") {
              document.getElementById('enviar').disabled=false
        }   else{
              document.getElementById('enviar').disabled = true
            }

  }//Fin Función

  //EVENTOS
  document.getElementById('correo').addEventListener('keyup', activar);
  document.getElementById('pais').addEventListener('change', activar);
  document.getElementById('psw').addEventListener('keyup', activar);
  document.getElementById('confirmar').addEventListener('keyup', activar);
  //document.getElementById('captcha').addEventListener('keyup', activar);
</script>


<!--Alertas-->
<script type="text/javascript">
$(document).ready(function() {
    let emailreg = /^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/;
        var datos = $('#form-ajax').serialize();

    $("#enviar").click(function() {
    var datos = $('#form-ajax').serialize();
    


        //ESTRUCTURA DE ALERTA DEL CORREO
        if ($("#correo").val() == "") {
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 5000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            })
            Toast.fire({
                icon: 'error',
                //  Aqui pones el mensaje donde diga tittle
                title: 'Ingrese un correo'
            })
            return false;
        } 
        //ESTRUCTURA DE ALERTA DEL EMAIL


        //ESTRUCTURA DE ALERTA DE LA CONTRASEÑA
            else if ($("#psw").val() == "") {
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 5000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            })
            Toast.fire({
                icon: 'error',
                title: 'Contraseña incompleta, llena este campo'
            })
            return false;
        }

        //ESTRUCTURA DE ALERTA DEL PAIS
        if ($("#pais").val() == "Selecciona tu país") {
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 5000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            })
            Toast.fire({
                icon: 'error',
                //  Aqui pones el mensaje donde diga tittle
                title: 'Seleciona un país'
            })
            return false;
        } 
        //ESTRUCTURA DE ALERTA DEL PAIS


        //CONFIRMAR CONTRASEÑAS 

                if ($("#confirmar").val() != $("#psw").val()) {
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 5000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            })
            Toast.fire({
                icon: 'error',
                //  Aqui pones el mensaje donde diga tittle
                title: 'Las contraseñas no coinciden'
            })
            return false;
        }



//ESTRUCTURA DE ALERTA DEL CAPTCHA
    //Variable que valida captcha
    
    var response = grecaptcha.getResponse();
        if (response == "")  {
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 5000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            })
            Toast.fire({
                icon: 'error',
                //  Aqui pones el mensaje donde diga tittle
                title: 'Compruebe el captcha'
            })
            return false;
        } 
        //ESTRUCTURA DE ALERTA DEL CAPTCHA

         

        //ESTRUCTURA DEL AJAX
                else  {
                $.ajax({
                    type:"POST",
                    url:"BD/save.php",
                    data:datos,
                    success:function(r){
                         //R estaba tomando el mensaje de error
                        if (r!=2) {
                            alert(r)

                            //ALERTA DE EXITO, TIENE QUE HABER UNA PARA QUE TE LIMPIE EL FORMULARIO
                                const Toast = Swal.mixin({
                                    toast: true,
                                    position: 'top-end',
                                    showConfirmButton: false,
                                    timer: 5000,
                                    timerProgressBar: true,
                                    didOpen: (toast) => {
                                        toast.addEventListener('mouseenter', Swal.stopTimer)
                                        toast.addEventListener('mouseleave', Swal.resumeTimer)
                                    }
                                })
                                Toast.fire({
                                    icon: 'success',
                                    title: 'Registro enviado'
                                })

                                                $('#correo').val('');
                                                $('#psw').val('');
                                                $('#confirmar').val('');
                                                $('#pais').val('');
                           
                        }//CIERRE IF R DIFERENTE DE 2
                                            else {
                                                //Muestra el valor con alert(r)
                                                const Toast = Swal.mixin({
                                                toast: true,
                                                position: 'top-end',
                                                showConfirmButton: false,
                                                timer: 5000,
                                                timerProgressBar: true,
                                                didOpen: (toast) => {
                                                    toast.addEventListener('mouseenter', Swal.stopTimer)
                                                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                                                }
                                                 })
                                                Toast.fire({
                                                    icon: 'error',
                                                    //  Aqui pones el mensaje donde diga tittle
                                                    title: 'El correo ya existe, intenta con otro'
                                                })
                                                //El swal detiene cualquier accion que haya por debajo de el
                                                            swal ("¡Se Generó un Error Al Intentar Registrar!");

                                            }
                    }//CIERRE FUNCION R
                });//CIERRE DEL ELSE DEL AJAX
                return false;
                }//CIERRE ELSE
                

    });

});
</script>

















<!-- FORMU COMENTARIO-->
<script type="text/javascript">
$(document).ready(function() {
    let emailreg = /^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/;
        var datos = $('#form-ajax').serialize();

    $("#preguntar").click(function() {
    var datos = $('#form-ajax').serialize();
    


        //ESTRUCTURA DE ALERTA DEL CORREO
        if ($("#id").val() == "") {
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 5000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            })
            Toast.fire({
                icon: 'error',
                //  Aqui pones el mensaje donde diga tittle
                title: 'Surgio un error'
            })
            return false;
        } 
        //ESTRUCTURA DE ALERTA DEL EMAIL


        //ESTRUCTURA DE ALERTA DE LA CONTRASEÑA
            else if ($("#comentario").val() == "") {
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 5000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            })
            Toast.fire({
                icon: 'error',
                title: 'ingrese una pregunta'
            })
            return false;
        }

      
         

        //ESTRUCTURA DEL AJAX
                else  {
                $.ajax({
                    type:"POST",
                    url:"../BD/guardar-comentario.php",
                    data:datos,
                    success:function(r){
                         //R estaba tomando el mensaje de error
                        if (r!=2) {
                        //Recargar pagina 
                        window.location.reload()
                          //  alert(r)

                            //ALERTA DE EXITO, TIENE QUE HABER UNA PARA QUE TE LIMPIE EL FORMULARIO
                                const Toast = Swal.mixin({
                                    toast: true,
                                    position: 'top-end',
                                    showConfirmButton: false,
                                    timer: 5000,
                                    timerProgressBar: true,
                                    didOpen: (toast) => {
                                        toast.addEventListener('mouseenter', Swal.stopTimer)
                                        toast.addEventListener('mouseleave', Swal.resumeTimer)
                                    }
                                })
                                Toast.fire({
                                    icon: 'success',
                                    title: 'Registro enviado'
                                })

                                                $('#nombre').val('');
                                                $('#comentario').val('');
                                                

                                                
                        }//CIERRE IF R DIFERENTE DE 2
                                            else {
                                                //Muestra el valor con alert(r)
                                                const Toast = Swal.mixin({
                                                toast: true,
                                                position: 'top-end',
                                                showConfirmButton: false,
                                                timer: 5000,
                                                timerProgressBar: true,
                                                didOpen: (toast) => {
                                                    toast.addEventListener('mouseenter', Swal.stopTimer)
                                                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                                                }
                                                 })
                                                Toast.fire({
                                                    icon: 'error',
                                                    //  Aqui pones el mensaje donde diga tittle
                                                    title: 'Hubo un error al publicar la pregunta'
                                                })
                                                //El swal detiene cualquier accion que haya por debajo de el
                                                            swal ("¡Se Generó un Error Al Intentar Registrar!");

                                            }
                    }//CIERRE FUNCION R
                });//CIERRE DEL ELSE DEL AJAX
                return false;
                }//CIERRE ELSE
  
    });

});
</script>
<!-- FORMU COMENTARIO-->

















<!-- ALERTAS DEL Inicio-->
<script type="text/javascript">
$(document).ready(function() {
    let emailreg = /^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/;
        var datos = $('#form-login').serialize();

    $("#entrar").click(function() {
    var datos = $('#form-login').serialize();
    


        //ESTRUCTURA DE ALERTA DEL CORREO
        if ($("#correo").val() == "") {
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 5000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            })
            Toast.fire({
                icon: 'error',
                //  Aqui pones el mensaje donde diga tittle
                title: 'Escriba un correo, llene el campo'
            })
            return false;
        } 
        //ESTRUCTURA DE ALERTA DEL EMAIL


        //ESTRUCTURA DE ALERTA DE LA CONTRASEÑA
            else if ($("#psw").val() == "") {
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 5000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            })
            Toast.fire({
                icon: 'error',
                title: 'Escriba la contraseña, llene el campo'
            })
            return false;
        }

         

        //ESTRUCTURA DEL AJAX
                else  {
                $.ajax({
                    type:"POST",
                    url:"../BD/iniciar.php",
                    data:datos,
                    success:function(r){
                         //R estaba tomando el mensaje de error
                        if (r!=2) {
                            alert(r)

                            //ALERTA DE EXITO, TIENE QUE HABER UNA PARA QUE TE LIMPIE EL FORMULARIO
                                const Toast = Swal.mixin({
                                    toast: true,
                                    position: 'top-end',
                                    showConfirmButton: false,
                                    timer: 5000,
                                    timerProgressBar: true,
                                    didOpen: (toast) => {
                                        toast.addEventListener('mouseenter', Swal.stopTimer)
                                        toast.addEventListener('mouseleave', Swal.resumeTimer)
                                    }
                                })
                                Toast.fire({
                                    icon: 'success',
                                    title: 'Bienvenido usuario moderador'
                                })

                                                //$('#correo').val('');
                                                //$('#psw').val('');
                                                //$('#confirmar').val('');
                                                //$('#pais').val('');



                                                 setTimeout( function() { window.location.href = "opciones/Comentarios.php"; }, 5000 );






                           
                        }//CIERRE IF R DIFERENTE DE 2
                                            else {
                                                //Muestra el valor con 
                                                alert(r)
                                                const Toast = Swal.mixin({
                                                toast: true,
                                                position: 'top-end',
                                                showConfirmButton: false,
                                                timer: 5000,
                                                timerProgressBar: true,
                                                didOpen: (toast) => {
                                                    toast.addEventListener('mouseenter', Swal.stopTimer)
                                                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                                                }
                                                 })
                                                Toast.fire({
                                                    icon: 'error',
                                                    //  Aqui pones el mensaje donde diga tittle
                                                    title: 'El correo o la contraseña no son validos'
                                                })
                                                //El swal detiene cualquier accion que haya por debajo de el
                                                            swal ("¡Se Generó un Error Al Intentar Registrar!");

                                            }
                    }//CIERRE FUNCION R
                });//CIERRE DEL ELSE DEL AJAX
                return false;
                }//CIERRE ELSE
                

    });

});
</script>
<!-- ALERTAS DEL Inicio-->