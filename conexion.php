<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "micromercado_mariela";

$conn = mysqli_connect ( "localhost","root","","micromercado_mariela" );
if (!$conn){
  die("No hay conexion: ".mysqli_connect_error());
}

$Nombre =$_POST ['fn'];
$Contraseña=$_POST['ln'];  
$Parroquia =$_POST['cn']; 
$Direccion =$_POST['ad'];
$Telefono =$_POST['ph']; 
$Correo =$_POST['em']; 

//Login
/*if(isset($_POST["btn"])){
    $query = mysqli_query($conn, "SELECT * FROM login WHERE cliNombre = '$Nombre' AND  cliContraseña = '$Cotraseña'");
    $nr = mysqli_num_rows($query);

    if($nr==1){
        echo "<script> alert ('Bienvenid@ $Nombre'); window.location= 'principal.php' </script>";
    }else{
        echo "<script> alert ('Este usuario no exixte'); window.location= 'it_checkout.html' </script>";

    }
}
*/
//Registrar
if(isset($_POST["btn"])){
    $sqlgrabar = "INSERT INTO cliente (cliNombre,cliContraseña,cliDireccion,cliParroquia,cliTelefono,cliCorreo) 
    VALUES ('$Nombre','$Contraseña','$Direccion','$Parroquia','$Telefono','$Correo')";

    if(mysqli_query($conn,$sqlgrabar)){

        echo "<script> alert ('Usuario registrado con éxito: $Nombre'); window.location= 'it_checkout.html' </script>";
    }else{
        echo "Error: ".$sql."<br>".mysql_error($conn);
    }
}

?>