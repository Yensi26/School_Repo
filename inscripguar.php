<?php
  include 'conection.php';
  $f=$_POST["feregistro"];
  $n=$_POST["nombre"];
  $a=$_POST["apellido"];
  $s=$_POST["seccion"];
  $ns=$_POST["nivel"];
  $des=$_POST["descuento"];
  $tipdes=$_POST["tipodesc"];
  $balance=$_POST["balnce"];
  
  /*$guardars= mysqli_query($conector,"INSERT INTO seccion(des_seccion) VALUES('$seccionn')");

  $guardas= mysqli_query($conector,"INSERT INTO nivel (des_nivel) VALUES((SELECT '$nivels')");

  
$resultado = mysqli_query($conector,$guardar,$guardars,$guardas);*/
$resultado = mysqli_query($conector,"INSERT INTO persona(nom_persona,ape_persona) VALUES('$n','$a')");
$guardars= mysqli_query($conector,"INSERT INTO nivel(des_nivel) VALUES('$ns')");
$guarsec= mysqli_query($conector,"INSERT INTO seccion(des_seccion) VALUES('$s')");
$guarest= mysqli_query($conector,"INSERT INTO estudiante(fecha_reg) VALUES('$f',now())");

  if(!$resultado && !$guardars && !$guarsec && !$guarest)
  {
     
  	echo " error al registrar";
  }
  else
  {
  	echo "salvado";
  }

  mysqli_close($conector);
?>