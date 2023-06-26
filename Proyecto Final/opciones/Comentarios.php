<?php  
ob_start();
session_start();
if(($_SESSION['correo'])!=''){
?>


<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="Cabecera-secundaria" />
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




   
         <!-- Estilo pero con diferente ruta para las otras vistas-->
        <link href="../css/styles.css" rel="stylesheet" />
        <link rel="stylesheet" href="../css/contacto.css">




    </head>
    <body>

        <!-- MENU-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="../BD/logout.php">Home</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link" href="../BD/logout.php">Salir</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- MENU-->


        
        <section class="py-5">
            <div class="container my-5">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <!-- 
                        <form  class="form-floating" name="form-ajax" id="form-ajax" method="post" action="#">
									//Nombre
								<div class="mb-3">
			                        <label>Nombre</label>
			                        <input class="form-control" type="text" placeholder="Nombre" name="nombre" id="nombre" required="requiered" maxlength="100">
			                    </div>
								//Comentario
			                    <div class="mb-3">
			                        <label>Comentantario</label>
			                        <textarea class="form-control" type="text" name="comentario" id="comentario" placeholder="Escriba su pregunta" required="requiered" rows="5" cols="5" maxlength="350"></textarea>
			                    </div>

								<button type="reset" class="btn btn-secondary" name="clear">Limpiar</button>
			        			<button type="button" class="btn btn-primary"  id="enviar">Enviar pregunta</button>
															
								<br>
								<br>
						</form>
                        -->

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
																/*	UPDATE `comentarios` SET `id`='1' WHERE `nombre`='Nombre' */


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
									                                <strong>Respuesta.</strong>
                                                                    <br>

                                                                    
                                                                     <form  class="form-floating" name="form-ajax" id="form-ajax" method="post" action="../BD/respuesta.php">
                                                                     <input class="form-control" type="text" placeholder="Nombre" name="id" id="id" required="requiered" hidden="" value="'.$row['id'].'">
                                                                      <input class="form-control" type="text" placeholder="Nombre" name="comentario" id="comentario" required="requiered" value="'.$row['comentario'].'">
                                                                      <br>

                                                                        <input type="submit" class="btn btn-success" name="respuesta">
                                                                        </form>
									                              


                                                                  </div>
									                            </div>
									                          </div>
									                        
									                        </div>				';



																		$i++;
																		$row=$query->fetch(PDO::FETCH_ASSOC);

																	}while ($count!=$i); 

																	}
																	?>

                    </div>
                </div>
            </div>
        </section>
        <!-- PRIMER CONTENEDOR-->



        <!-- PIE DE PAGINA-->
        <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; LATAM-erica Website 2023</p></div>
        </footer>
        <!-- PIE DE PAGINA-->






    </body>
</html>

<?php  
require_once "pie-secundario.php";

}
else{
header("Location:../index.php");
ob_end_flush();
}
?>