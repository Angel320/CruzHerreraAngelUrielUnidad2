<?php
ob_start();
//Listo
require_once '../BD/conexion-ajax.php';
$nombre=$_POST['nombre'];
$comentario=$_POST['comentario']; 
$fecha=strftime("%d-%B-%Y");





if (!empty($nombre) && !empty($comentario))
                    {
                      //Insertar datos en la tabla de la db  
                      $sql=$cnnPDO->prepare("INSERT INTO comentarios
                        (nombre, comentario, fecha) VALUES (:nombre, :comentario, :fecha)");

                      //Asignar el contenido de las variables a los parametros
                      $sql->bindParam(':nombre',$nombre);   
                      $sql->bindParam(':comentario',$comentario);  
                      $sql->bindParam(':fecha',$fecha);    
                     
                      //Ejecutar la variable $sql
                      $sql->execute();
                    }
                    echo $cnnPDO->prepare($sql);  
                    echo 1;
?>




