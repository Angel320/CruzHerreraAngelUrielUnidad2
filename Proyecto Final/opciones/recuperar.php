<?php  
require_once "cabecera-secundaria.php";
?>

 


        <!-- PRIMER CONTENEDOR-->
        <section class="py-5">
            <div data-aos="fade-up" data-aos-duration="1000" class="container my-5">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <h2>Recuperar contraseña</h2>
                        <p class="lead">Si no te acuerdas de tu contraseña aquí podrás recuperarla con tu correo.</p>
                        <p class="mb-0">Solo ingresa el correo y se enviara tu contraseña a la bandeja del correo que proporcionaste, recuerda que el correo tiene que ser el mismo que el de la cuenta a la cual deseas recuperar tu contraseña, sino existe no se o no es el correo, simplemente no se enviara nada</p>
                        <br>



            <form  class="form-floating" name="form-ajax" id="form-ajax" method="post" action="#">
                              <!--Nombre-->
                          <div class="mb-3">
                              <label>Escribe el correo para recuperar la contraseña</label>
                              <input class="form-control" type="text" placeholder="Ejmplo@gmail.com" name="correopsw" id="correopsw" required="requiered" maxlength="100">
                          </div>
        

                    <button type="reset" class="btn btn-secondary" name="clear">Limpiar</button>
                    <button type="button" class="btn btn-primary"  id="recuperar">Recuperar contraseña</button>
                              
                <br>
                <br>
            </form>

                        
                    </div>
                </div>
            </div>
        </section>
        <!-- PRIMER CONTENEDOR-->

  
       

 


                <!-- CONTENEDOR COMENTARIOS-->
        <section class="py-5">
            <div class="container my-5">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                      
                   

                        
                    </div>
                </div>
            </div>
        </section>
        <!-- CONTENEDOR COMENTARIOS-->



        <!-- PIE DE PAGINA-->
        <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; LATAM-erica Website 2023</p></div>
        </footer>
        <!-- PIE DE PAGINA-->





    </body>
</html>

<?php  
require_once "pie-secundario.php";
?>





<!-- FORMU COMENTARIO-->
<script type="text/javascript">
$(document).ready(function() {
    let emailreg = /^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/;
        var datos = $('#form-ajax').serialize();

    $("#recuperar").click(function() {
    var datos = $('#form-ajax').serialize();
    


        //ESTRUCTURA DE ALERTA DEL CORREO
        if ($("#correopsw").val() == "") {
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
                title: 'Escriba un correo'
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
                    url:"../BD/recuperar-correo.php",
                    data:datos,
                    success:function(r){
                         //R estaba tomando el mensaje de error
                        if (r!=2) {
                        //Recargar pagina 
                        //window.location.reload()
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
                                    title: 'La contraseña ha sido enviado al correo proporcionado'
                                })

                                                $('#nombre').val('');
                                                $('#comentario').val('');
                                                

                                                
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
                                                    title: 'El correo de la cuenta que desea recuperar no existe'
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
