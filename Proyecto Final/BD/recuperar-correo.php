<?php
require_once "conexion-ajax.php";
//Trae datos del formulario
$correopsw=$_POST['correopsw']; 
//$correo="uriel20020136@gmail.com";



  //Buscar si ya existe ese correo
  $busqueda = "SELECT * FROM social WHERE correo='$correopsw'";
  $stmt = $cnnPDO->prepare($busqueda);
  $stmt->execute();
  $campo = $stmt->fetch(PDO::FETCH_ASSOC);

  //Condicional para correo repetido
      if ($correopsw =! $campo['correo']) {
        echo $correopsw;
    //    echo $campo['correo'];
        //echo 2;   //Si el correo no existe aqui se envia el mensaje de que el correo que proporciono no pertenece a ninguna cuenta
      }   
          else{
            echo $correopsw;
            echo 1;
            // Aqui vamos a hacer todo el proceso para mandar un correo al correo proporcionado para recuperar la contraseña
            /*
                    //Validar que las cajas no esten vacias
                    if (!empty($correo) && !empty($psw) && !empty($pais))
                    {
                      //Insertar datos en la tabla de la db  
                      $sql=$cnnPDO->prepare("INSERT INTO social
                        (correo, psw, pais) VALUES (:correo, :psw, :pais)");

                      //Asignar el contenido de las variables a los parametros
                      $sql->bindParam(':correo',$correo);   
                      $sql->bindParam(':psw',$psw);  
                      $sql->bindParam(':pais',$pais);    
                     
                      //Ejecutar la variable $sql
                      $sql->execute();
                    }
                    echo $cnnPDO->prepare($sql);  */
          }





?>