<?php
    $idUs=$_POST['idUs'];
    $nomUs=$_POST['nomUs'];
    $apUs=$_POST['apUs'];
    $sexUs=$_POST['sexUs'];
    $fnUs=$_POST['fnUs'];
    $direccionUs=$_POST['direccionUs'];
    $ciudadUs=$_POST['ciudadUs'];
    $cpUs=$_POST['cpUs'];

     
   
    if(isset($_POST['idUs']) && !empty($_POST['idUs']) && 
       isset($_POST['nomUs']) && !empty($_POST['nomUs']) &&
       isset($_POST['apUs']) && !empty($_POST['apUs']))

       {
           $EnlaceBD= mysql_connect(localhost,root,vic21) or die("no se conecto a la BD!");
           mysql_select_db(abc,$EnlaceBD) or die("No se puede seleccionar la BD" );

            

           mysql_query("INSERT INTO cliente VALUES ('$idUs','$nomUs','$apUs','$sexUs','$fnUs','$direccionUs',' $ciudadUs',' $cpUs')");
           echo "Los datos han sido registrados correctamente";
       }else{
           echo "Error al registrar los datos"
       }

?>