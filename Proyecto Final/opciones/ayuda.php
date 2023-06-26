<?php  
require_once "cabecera-secundaria.php";
?>

 


        <!-- PRIMER CONTENEDOR-->
        <section class="py-5">
            <div data-aos="fade-right" class="container my-5">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <h2>Bienvenido al apartado de ayuda</h2>
                        <p class="lead">Aquí podrás encontrar una mini sección de preguntas y respuestas.</p>
                        <p class="mb-0">Hay algunas preguntas frecuentes con sus respectivas respuestas, a lo mejor te ayudan con tu problema, sino es el caso, puedes dejar tu pregunta a tu problema en la caja de comentarios y esperar a que uno de nuestros moderadores la conteste, eso si, tendrás que registrarte para realizar esa acción.</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- PRIMER CONTENEDOR-->

  
        <!-- CONTENEDOR INTERMEDIO-->
        <section class="py-5">
            <div data-aos="flip-left" class="container my-5">
                <div class="row justify-content-center">
                    <div class="col-lg-6">

                        
                        <!-- Preguntas-->
                        <h2>Preguntas Frecuentes</h2>
                        <div class="accordion" id="accordionPanelsStayOpenExample">
                          
                          <div class="accordion-item">
                            <h2 class="accordion-header">
                              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                                ¿Cómo creo una cuenta?
                              </button>
                            </h2>
                            <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show">
                              <div class="accordion-body">
                                <strong>Creación de una cuenta.</strong> Para crear una cuenta necesitas tener un correo electronico con el cual poder registrarte, tienes que saber que si el correo ya ha sido registrado no podrás volverte a registrar con el mismo <code>(de preferencia un correo de Gmail)</code>, Una vez llenado los campos se activara el botón de crear cuenta y ya solo te faltara comprobar el captcha y verificar que tus contraseñas coincidan.
                              </div>
                            </div>
                          </div>

                          <div class="accordion-item">
                            <h2 class="accordion-header">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                                ¿De qué trata el sitio?
                              </button>
                            </h2>
                            <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse">
                              <div class="accordion-body">
                                <strong>Paginá sobre fotos</strong> Es un sitio tipo "social media" para compartir imagenes relacionado a la cultura latina
                              </div>
                            </div>
                          </div>
                          
                          <div class="accordion-item">
                            <h2 class="accordion-header">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                                ¿Qué hago si no recuerdo mi contraseña?
                              </button>
                            </h2>
                            <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse">
                              <div class="accordion-body">
                                <strong>En caso de no acordarte de tu contraseña.</strong> Hay una opción en el menu del inicio que dice recuperar mi contraseña o en el Log-in hay una opción que dice, No recuerdo mi contraseña, al entrar en esa opción, habra un formulario en el que te pedira el correo con el que te registraste, una vez llenado el formulario con el correo correspondiente, se enviara un correo con la contraseña que tienes <code>(Ojo: tiene que ser el correo de la cuenta de la cual quieres recuperar tu contraseña).</code>
                              </div>
                            </div>
                          </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!-- CONTENEDOR INTERMEDIO-->




                <!-- CONTENEDOR COMENTARIOS-->
        <section class="py-5">
            <div data-aos="fade-right" class="container my-5">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <h2>Preguntas y Respuestas</h2>
                        <p class="lead">Aquí podrás hacer una pregunta en la sección de preguntas y respuestas.</p>
                        <p class="mb-0">Solo escribe tu pregunta en el formulario, ten en cuenta que hay un maximo de caracteres así que trata de que la pregunta sea breve, una vez publicada tu pregunta, un moderador de la pagina se encargara de contestarla lo más pronto posible.</p>
                        <br>
                   

                        <form  class="form-floating" name="form-ajax" id="form-ajax" method="post" action="#">
                  <!--Nombre-->
                          <div class="mb-3">
                              <label>Escribe aquí tu pregunta</label>
                              <input class="form-control" type="text" placeholder="Pregunta..." name="nombre" id="comentario" required="requiered" maxlength="100">
                          </div>
        

                    <button type="reset" class="btn btn-secondary" name="clear">Limpiar</button>
                    <button type="button" class="btn btn-primary"  id="preguntar">Enviar pregunta</button>
                              
                <br>
                <br>
            </form>

                                <h2>Preguntas de usuarios</h2>
                                  <?php  
                                  require_once '../BD/conexion-ajax.php';
                                  $query=$cnnPDO->prepare('SELECT * from comentarios');
                                  $query->execute();
                                  $count=$query->rowCount();

                                  $i=0;
                                  if ($count) {
                                    $row=$query->fetch(PDO::FETCH_ASSOC);

                                  do{
                                /*  echo '<div class="d-flex">
                                    <img src="https://png.pngtree.com/png-vector/20191022/ourlarge/pngtree-user-vector-icon-with-white-background-png-image_1843115.jpg"
                                      class="me-3 rounded-circle"style="width: 60px; height: 60px;"/>
                                      <div>
                                      <h5 class="fw-bold"><header>'.$row['nombre'].'</header>
                                      <small class="text-muted">'.$row['fecha'].'</small></h5> <p>'.$row['comentario'].'</p></div></div>'; */


                                      echo'
                                          <div class="accordion" id="accordionPanelsStayOpenExample">
                                            
                                            <div class="accordion-item">
                                              <h2 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-'.$i.'" aria-expanded="false" aria-controls="panelsStayOpen-collapse'.$i.'">
                                                  '.$row['nombre'].'
                                                </button>
                                              </h2>
                                              <div id="panelsStayOpen-'.$i.'" class="accordion-collapse collapse">
                                                <div class="accordion-body">
                                                  <strong>Respuesta.</strong> '.$row['comentario'].'.
                                                                    <br>
                                                                        
                                                </div>
                                              </div>
                                            </div>
                                          
                                          </div>        ';



                                    $i++;
                                    $row=$query->fetch(PDO::FETCH_ASSOC);

                                  }while ($count!=$i); 

                                  }


                                  ?>

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


