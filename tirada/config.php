<?php
$db = "u743457472_Astral"; //Nombre de la base de datos
$host = "localhost"; //Host de la base de datos
$user = "u743457472_Tarot"; //Usuario de la base de datos
$pass = "k9b|T]SHL$R;"; //Password de la base de datos
$table = "ArcanosMinchiate"; //set this to the name of the table that holds the card info.
$imagedirectory = "Imagen/"; //main image directory
$largeimage = ""; // large image directory. leave blank unless you want to move the larger cards.
$imageborder = "1"; // card border width. this must be set to a number larger than 0 for the images to have a border
$imagewidth = "90"; //width of card thumbnails that appear on pages
$imageheight = "165"; // height of card thumbnails that appear on pages
$tablewidth = "550";//set the main table width on the spread pages with this.
$con= mysqli_connect("$host","$user","$pass", "$db");
if(!$con)
{
  $connect_error = "Fallo al intentar conectar con MySql";
  echo"Fallo al intentar conectar a la Base de Datos";
  exit();
}
 srand((double)microtime()*1000000);
?>
