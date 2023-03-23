<?php

require "db.php";

 
$cedula = $_POST['cedula'];
$contra = $_POST['contra'];
$sql = "select * from clientes where id = '$cedula' " ;
$r = mysqli_query($l, $sql);
$n = mysqli_num_rows($r); 
if($n==1){
      header("location:../hola.html");
}else{
      echo '<script language="javascript">alert("Error de autentificacion");window.location.href="../index.html"</script>';
     
}
mysqli_close($conn);
?>