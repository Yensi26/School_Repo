<?php 
include'conection.php';
?>

<!DOCTYPE html>
<html>
<link rel="stylesheet" href="css/bootstrap.min.css">

<head>
	<title>repasando</title>
	<script>
function myFunction() {
    var checkBox = document.getElementById("myCheck");
    var text = document.getElementById("text");
    if (checkBox.checked == true){
        text.style.display = "block";
    } else {
       text.style.display = "none";
    }
}
</script>

 <link href="https://fonts.googleapis.com/css?family=Lato: 100,300,400,700|Luckiest+Guy|Oxygen:300,400" rel="stylesheet">
  <link href="style.css" type="text/css" rel="stylesheet">
</head>


<body>
	<style>

</style>

	<style>
	/*division */
	   section:after {
    content: "";
    display: table;
    clear: both;
}
input[type=text], select {
    width: 10%;
    padding: 8px 12px;
    margin: 4px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
   box-sizing: medium-box;

}

input[type=submit] {
    width: 25%;
    background-color: #4CAF50;
    color: white;
    padding: 10px 15px;
    margin: 4px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: red;
    box-sizing: medium-box;

}

div {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 10px;
    /*tamano fondo */
    /*width: 25%;*/
    height: 100%;
}
</style>


	

   <h2>Inscripcion Estudiantes</h2>

<div>
	<form action="inscripguar.php" method="POST">  

  <div class="container">
  <div class="row">
    <div class="col-sm">
     
    </div>
    <div class="col-6 col-md-4">
      <h4>tipo de pago </h4> 
    <input type="radio" name="gender" value="male"> mes<br>
  <input type="radio" name="gender" value="female"> completo<br>
    </div>

    <div class="col-sm">
    
    </div>
  </div>
</div> 
		Matricula: <input type="text" name="codestu" placeholder="matricula"><br>
    Nombre: <input type="text" name="nombre" placeholder="nombre" ><br>
    Apellido: <input type="text" name="apellido" placeholder="Apellido"><br>
    seccion: <input type="text" name="seccion" placeholder="seccion"><br>
     nivel: <input type="text" name="nivel" placeholder="nivel"><br>
    fecha de inicio: <input type="date" name="feregistro" min="2018-03-25"
                                  max="2018-05-25" step="2" > <br>  
     descuento: <input type="text" name="descuento" placeholder="descuento">
      tipo de descuento: <input type="text" name="tipodesc" placeholder="tipo descuento"><br>
      balance: <input type="text" name="balnce" placeholder="balance"><br>
      <button type="submit">registrar</button><br>
	</form>


			</div>


<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">subjects</th>
      <th scope="col">id año escolar</th>
      <th scope="col">nivel</th>
      <th scope="col">fecha registro</th>
      <th scope="col">monto</th>
         </tr>
  </thead>
  <tbody>
    
      </tbody>

  <?php 
 $consultar = "select *from inscripcion";
 $result = mysqli_query($conector,$consultar);
while($ver = mysqli_fetch_array($result)){
?> 
       <tr>
       	<td><?php echo $ver["id_inscripcion"] ?></td>
        <td><?php echo $ver["id_estudiante"] ?></td>
        <td><?php echo $ver["id_ano_escolar"] ?></td>
        <td><?php echo $ver["id_nivel"] ?></td>
        <td><?php echo $ver["fecha_inscripcion"] ?></td>
        <td><?php echo $ver["monto"] ?></td>
       </tr>
	
<?php }?>
</table>

</body>

</html>