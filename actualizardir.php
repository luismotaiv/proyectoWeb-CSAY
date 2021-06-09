<?php
session_start();
require_once("modelo/config.php");
$sesion=$_SESSION['id_usuario'];
$id = $_GET['id'];

$sql = "SELECT * FROM direccion, usuario WHERE id_direccion='$id' AND direccion.id_usuario=$sesion";
$query = mysqli_query($conexion, $sql);

$row = mysqli_fetch_array($query);

?>
  
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="css/stylesadmin.css?v=<?php echo time(); ?>">
    <meta name="viewport" content="width =device-width, initial-scale =1" <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Didact+Gothic&family=Kaushan+Script&family=Secular+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/stylesnav.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Direcciones </title>
</head>
<center>
<body>

    <?php
    include_once("cabeceracliente.php");
    ?>
   
    <div class="container mt-5 agregar">
        
            <div class="col-md-3">
                <h1>Actualizar direcci&oacuten</h1>
                <form action="update_dir.php" method="POST" enctype="multipart/form-data">
                    <input type="text" placeholder="Calle" name="calle" class="form-control mb-3"  required="" value="<?php echo $row['calle']  ?>" >


                    <input type="number" placeholder="Numero de casa" class="form-control mb-3" name="num_casa" required=""  value="<?php echo $row['num_casa']  ?>">

                    <input type="text" placeholder="Colonia" name="colonia" class="form-control mb-3" required=""
                    value="<?php echo $row['colonia']  ?>">

                    <input type="text" placeholder="Municipio" name="municipio" class="form-control mb-3" required=""
                    value="<?php echo $row['municipio']  ?>">

                    Estado:
                    <select class="form-control mb-3" name="estado" requiered  value="<?php echo $row['estado']  ?>">
                       
                        <option value="DIF">Distrito Federal</option>
                        <option value="AGS">Aguascalientes</option>
                        <option value="BCN">Baja California</option>
                        <option value="BCS">Baja California Sur</option>
                        <option value="CAM">Campeche</option>
                        <option value="CHP">Chiapas</option>
                        <option value="CHI">Chihuahua</option>
                        <option value="COA">Coahuila</option>
                        <option value="COL">Colima</option>
                        <option value="DUR">Durango</option>
                        <option value="GTO">Guanajuato</option>
                        <option value="GRO">Guerrero</option>
                        <option value="HGO">Hidalgo</option>
                        <option value="JAL">Jalisco</option>
                        <option value="MEX">M&eacute;xico</option>
                        <option value="MIC">Michoac&aacute;n</option>
                        <option value="MOR">Morelos</option>
                        <option value="NAY">Nayarit</option>
                        <option value="NLE">Nuevo Le&oacute;n</option>
                        <option value="OAX">Oaxaca</option>
                        <option value="PUE">Puebla</option>
                        <option value="QRO">Quer&eacute;taro</option>
                        <option value="ROO">Quintana Roo</option>
                        <option value="SLP">San Luis Potos&iacute;</option>
                        <option value="SIN">Sinaloa</option>
                        <option value="SON">Sonora</option>
                        <option value="TAB">Tabasco</option>
                        <option value="TAM">Tamaulipas</option>
                        <option value="TLX">Tlaxcala</option>
                        <option value="VER">Veracruz</option>
                        <option value="YUC">Yucat&aacute;n</option>
                        <option value="ZAC">Zacatecas</option>

                    </select>

                    <input type="number" placeholder="Codigo postal" class="form-control mb-3" name="codigo_postal" required=""  value="<?php echo $row['codigo_postal']  ?>">
                    <input type="hidden" placeholder="id_usuario" name="id_usuario" class="form-control mb-3" value="<?php echo $sesion  ?> ">
                    <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                </form>
            </div>
        
    </div>
    
    <?php 
    include_once("footer.html");?>
    
</body>
</center>
</html>