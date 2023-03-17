<?php
include("config.php"); //db connection and directory variables
 $count=0;
 $index=0;
 $pcards = $_GET["pcards"];
 $maxnumber = $_GET["maxnumber"];
 $cards = explode (":", $pcards);
for($count; $count < 3; $count++)
{
       $query = "SELECT * FROM $table WHERE (card = '$cards[$count]')";
       $result = mysqli_query($con, $query);

       if(!$result)
       {
         $query_error = "Failed at the mysql_db_query.";
         echo"$query_error";
         exit();
       }
       else
       {
        $r = mysqli_fetch_array($result);
        $indice = 0;
        $thecards[$count][$indice] =  $r["title"];
        $test2 = $r["card"];
        //echo"$test2 <-------no array value test <--->cards count --> $cards[$count]<BR>";
        $test = $thecards[$count][$indice];
        //echo"$test <-------test <BR>";
        $indice++;
        $thecards[$count][$indice] =  $r["description"];
        $indice++;
        $thecards[$count][$indice] =  $r["thumb"];
        $indice++;
        $thecards[$count][$indice] =  $r["limage"];
       }
}
       $count = 0;
       $index = 0;
?>
<html>
<head>
<meta http-equiv="Content-Language" content="es">
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-15">
<title>Tu Consulta al Antiguo Tarot - Influencias Diarias</title>
<script type="text/JavaScript">
<!--
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}
//-->
</script>
<style type="text/css">
<!--
.FileteBlanco {
	border: 1px solid #000000;
}
.FileteIzquierda {
	border-left-width: 1px;
	border-left-style: solid;
	border-left-color: #000000;
}
.FileteDerecha {
	border-right-width: 1px;
	border-right-style: solid;
	border-right-color: #000000;
}
h3 {
	margin: 1px;
	padding: 0px;
	font-family: Georgia, "Times New Roman", Times, serif;
	font-size: 16px;
}
p {
	font-family: Georgia, "Times New Roman", Times, serif;
	font-size: 13px;
	color: #333333;
}
h1 {
	margin: 1px;
	padding: 0px;
	font-family: Georgia, "Times New Roman", Times, serif;
}
body,td,th {
	font-family: Georgia, Times New Roman, Times, serif;
}
-->
</style>
</head>
<BODY onLoad="window.print()">
<table border="0" align="center" cellpadding="5" cellspacing="0" bgcolor="#FFFFFF" class="FileteBlanco">
  <tr>
    <td align="center"><table width="100%" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td colspan="2" align="left" valign="bottom"><img src="Imagen/E1.gif" width="123" height="67"></td>
          <td align="center" valign="middle"><h1 align="center">Tirada Influencias Diarias </h1></td>
          <td colspan="2" align="right" valign="bottom"><img src="Imagen/E2.gif" width="123" height="67"></td>
        </tr>
        <tr>
          <td width="8" align="left" valign="middle"></td>
          <td width="115" align="left" valign="middle" class="FileteIzquierda"><img src="Imagen/E5.gif" width="40" height="140"></td>
          <td align="center" valign="top"><p>&nbsp;</p>
            <p>&nbsp;</p>
            <table border="0" align="center" cellpadding="6" cellspacing="6" class="genericstyle">
              <tr valign="middle">
                <td align="center"><a href="<?php $thumb=$thecards[0][2]; $large=$thecards[0][3]; echo "$imagedirectory$largeimage$large";?>" target="_blank"><img border="<?php echo"$imageborder";?>" src="<?php echo"$imagedirectory$thumb";?>" vspace="3" width="<?php echo"$imagewidth";?>" height="<?php echo"$imageheight";?>"></a> </td>
                <td align="center"><a href="<?php $thumb=$thecards[1][2]; $large=$thecards[1][3]; echo "$imagedirectory$largeimage$large";?>" target="_blank"><img border="<?php echo"$imageborder";?>" src="<?php echo"$imagedirectory$thumb";?>" vspace="3" width="<?php echo"$imagewidth";?>" height="<?php echo"$imageheight";?>"></a> </td>
                <td align="center"><a href="<?php $thumb=$thecards[2][2]; $large=$thecards[2][3]; echo "$imagedirectory$largeimage$large";?>" target="_blank"><img border="<?php echo"$imageborder";?>" src="<?php echo"$imagedirectory$thumb";?>" vspace="3" width="<?php echo"$imagewidth";?>" height="<?php echo"$imageheight";?>"></a></td>
              </tr>
            </table>
            <p>&nbsp;</p>
            <p>&nbsp;</p></td>
          <td width="115" align="right" valign="middle" class="FileteDerecha"><img src="Imagen/E6.gif" width="40" height="140"></td>
          <td width="8" align="right" valign="middle"></td>
        </tr>
        <tr>
          <td colspan="2" align="left" valign="top"><img src="Imagen/E3.gif" width="123" height="67"></td>
          <td align="center" valign="middle"><h1>Interpretaci&oacute;n<br>
            </h1></td>
          <td colspan="2" align="right" valign="top"><img src="Imagen/E4.gif" width="123" height="67"></td>
        </tr>
      </table></td>
  </tr>
  <tr>
    <td><table width="100%" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td width="7" align="left" valign="top">&nbsp;</td>
          <td colspan="2" align="left" valign="bottom"><table width="600" border="0" align="center" cellpadding="2" cellspacing="2">
              <tr>
                <td colspan="2" class="Estilo23"><h3>La Influencia de los Arcanos </h3></td>
              </tr>
              <tr>
                <td width="120" align="center" valign="middle"><strong><a href="<?php $thumb=$thecards[0][2]; $large=$thecards[0][3]; echo "$imagedirectory$largeimage$large";?>" target="_blank"><img border="<?php echo"$imageborder";?>" src="<?php echo "$imagedirectory$thumb";?>" width="<?php echo"$imagewidth";?>" height="<?php echo"$imageheight";?>" ></A><br>
                  </strong></td>
                <td width="480" valign="top"><p>
                    <?php $tarotcard = $thecards[0][0]; echo"$tarotcard";?>
                  </p>
                  <p>
                    <?php $tarotmeaning = $thecards[0][1]; echo"$tarotmeaning";?>
                  </p></td>
              </tr>
              <tr>
                <td  colspan="2" class="Estilo26"><h3>La Influencia de los Astros </h3></td>
              </tr>
              <tr>
                <td align="center" valign="middle"><strong><a href="<?php $thumb=$thecards[1][2]; $large=$thecards[1][3]; echo "$imagedirectory$largeimage$large";?>" target="_blank"><img border="<?php echo"$imageborder";?>" src="<?php echo "$imagedirectory$thumb";?>" width="<?php echo"$imagewidth";?>" height="<?php echo"$imageheight";?>" ></A></strong></td>
                <td valign="top"><p>
                    <?php $astrocard = $thecards[1][0]; echo"$astrocard";?>
                  </p>
                  <p>
                    <?php $astromeaning = $thecards[1][1]; echo"$astromeaning";?>
                  </p></td>
              </tr>
              <tr>
                <td colspan="2" class="Estilo29" ><h3>La Influencia de los Elementos </h3></td>
              </tr>
              <tr>
                <td align="center" valign="middle"><strong><a href="<?php $thumb=$thecards[2][2]; $large=$thecards[2][3]; echo "$imagedirectory$largeimage$large";?>" target="_blank"><img border="<?php echo"$imageborder";?>" src="<?php echo "$imagedirectory$thumb";?>" width="<?php echo"$imagewidth";?>" height="<?php echo"$imageheight";?>" ></A></strong></td>
                <td align="left" valign="top"><p>
                    <?php $elementcard = $thecards[2][0]; echo"$elementcard";?>
                  </p>
                  <p>
                    <?php $elementmeaning = $thecards[2][1]; echo"$elementmeaning";?>
                  </p></td>
              </tr>
            </table></td>
        </tr>
      </table></td>
  </tr>
</table>
<div align="center" style="margin-top:15px;"> <a href="http://www.astraltarot.net" target="_blank"><img src="Imagen/Astraltarot.gif" alt="Astraltarot.net" width="262" height="42" border="0"></a>
  <br/>
  <script>
date=new Date();
anyo=date.getFullYear();
document.write("Copyright &copy; "+anyo+" http://www.astraltarot.net");
</script></div>
</BODY>
</html>
