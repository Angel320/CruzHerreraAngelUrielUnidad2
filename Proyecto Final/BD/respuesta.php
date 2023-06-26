<?php
ob_start();
//Listo
require_once '../BD/conexion-ajax.php';
$id=$_POST['id'];
$comentario=$_POST['comentario']; 





if (isset($_POST['respuesta'])) {
if (!empty($id) && !empty($comentario))
                    {
                      
                      //SENTENCIA SQL
                      $sql=$cnnPDO->prepare("UPDATE comentarios SET comentario=:comentario WHERE id=:id");
                      //PASAR VALORES
                      $sql->bindParam(':id',$id);   
                      $sql->bindParam(':comentario',$comentario);


                      //Ejecutar la variable $sql
                      $sql->execute();
                      header("Location:../opciones/Comentarios.php");


                    }
                  }
                    //echo $cnnPDO->prepare($sql);  
                    echo 1;
?>




