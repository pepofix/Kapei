<?php
include("config.php");
 $count= 0;
 $cardcount = 0;
 $cardindex = 0;
 $cards = array(-1,-1,-1);
 $thecards = [];
 $number = rand(0,96);
 //echo" NUMBER --> $number 1<BR>";
 while($number > 19 && $number < 35)
{
   $number = rand(0,96);
   //echo" NUMBER --> $number 2 should be 0 $count<BR>";
}
$cards[$count] = $number;
$count++;
$number = rand(24,35);
//echo" NUMBER --> $number 3  count should be 1 $count --><BR>";
$cards[$count] = $number;
$count++;
//echo" NUMBER --> $number 4  count should be 2 $count --><BR>";
$number = rand(20,23);
//echo" NUMBER --> $number 4  count should be 2 $count --><BR>";
$cards[$count] = $number;
$count = 0;
for($count; $count < 3; $count++)
{
     $randnum = rand(1,100);
     if(($randnum % 2) != 0)
     {
       $cards[$count] =  $cards[$count]."r";
       
     }
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
       $printcards = implode (":", $cards);
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Language" content="es" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<META name="robots" content="NOINDEX,NOFOLLOW,NOARCHIVE,NOODP,NOSNIPPET"> 
<title>Tu Consulta al Antiguo Tarot - Influencias Diarias</title>
<script type="text/javascript">
<!--
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
//-->
</script>
<link href="Imagen/estilo.css" rel="stylesheet" type="text/css" />
</head>
<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" class="body" onLoad="MM_preloadImages('Imagen/VAI2.png','Imagen/IT2.png','Imagen/EPE2.png','Imagen/C2.png')">
<table width="500" border="0" align="center" cellpadding="3" cellspacing="3">
  <tr>
    <td><h1 align="center">Tu Consulta al Antiguo 
      Tarot
    </h1>
        <table border="0" align="center" cellpadding="1" cellspacing="1">
          <tr>
            <td valign="top"><table width="360" border="0" align="center" cellpadding="0" cellspacing="0">
                <tr>
                  <td width="364" align="center" valign="top" class="FileteGris"><div align="justify" class="Down">
                      <h3 align="center">Tirada Influencias Diarias </h3>
                    Esta es la Tirada de Cartas en Respuesta a Tu Consulta. Haz click en las im&aacute;genes, para verlas a tama&ntilde;o completo.  Lee la Interpretaci&oacute;n un poco m&aacute;s abajo.<br />
                  </div></td>
                </tr>
                <tr>
                  <td align="center" class="Sombra"></td>
                </tr>
            </table></td>
          </tr>
        </table>
      <table border="0" align="center" cellpadding="6" cellspacing="6" class="genericstyle">
          <tr valign="middle">
            <td align="center"><a href="<?php $thumb=$thecards[0][2]; $large=$thecards[0][3]; echo "$imagedirectory$largeimage$large";?>" target="_blank"><img border="<?php echo"$imageborder";?>" src="<?php echo"$imagedirectory$thumb";?>" vspace="3" width="<?php echo"$imagewidth";?>" height="<?php echo"$imageheight";?>" /></a> </td>
            <td align="center"><a href="<?php $thumb=$thecards[1][2]; $large=$thecards[1][3]; echo "$imagedirectory$largeimage$large";?>" target="_blank"><img border="<?php echo"$imageborder";?>" src="<?php echo"$imagedirectory$thumb";?>" vspace="3" width="<?php echo"$imagewidth";?>" height="<?php echo"$imageheight";?>" /></a> </td>
            <td align="center"><a href="<?php $thumb=$thecards[2][2]; $large=$thecards[2][3]; echo "$imagedirectory$largeimage$large";?>" target="_blank"><img border="<?php echo"$imageborder";?>" src="<?php echo"$imagedirectory$thumb";?>" vspace="3" width="<?php echo"$imagewidth";?>" height="<?php echo"$imageheight";?>" /></a></td>
          </tr>
      </table></td>
  </tr>
  <tr>
    <td align="center" class="Estilo23"><h1>Interpretaci&oacute;n de la Tirada de Cartas </h1>        </td>
  </tr>
  <tr>
    <td align="center" valign="middle"><script type="text/javascript">
/******************************************
* Scrollable content script II- © Dynamic Drive (www.dynamicdrive.com)
* Visit http://www.dynamicdrive.com/ for full source code
* This notice must stay intact for use
******************************************/
iens6=document.all||document.getElementById
ns4=document.layers
//specify speed of scroll (greater=faster)
var speed=5
if (iens6){
document.write('<div id="container" style="position:relative;width:490px;height:400px;border:1px solid #000000;overflow:hidden;background:#FFFF99;">')
document.write('<div id="content" style="position:absolute;width:485px;left:0;top:0;">')
}
</script>
      <ilayer sname="nscontainer" width=490 height=400 clip="0,0,490,400">
      <layer name="nscontent" left=0 top=0 width=490 height=400 visibility="hidden">
<table width="100%" border="0" align="center" cellpadding="3" cellspacing="3">
  <tr>
    <td colspan="2" align="left" valign="top"><h3>La Influencia de los Arcanos</h3></td>
  </tr>
  <tr>
    <td width="10%" align="right" valign="top"><h5><strong><a href="<?php $thumb=$thecards[0][2]; $large=$thecards[0][3]; echo "$imagedirectory$largeimage$large";?>" target="_blank"><img border="<?php echo"$imageborder";?>" src="<?php echo "$imagedirectory$thumb";?>" width="<?php echo"$imagewidth";?>" height="<?php echo"$imageheight";?>" /></a><br />
    </strong></h5></td>
    <td width="90%" valign="top"><h5>
      <?php $tarotcard = $thecards[0][0]; echo"$tarotcard";?>
    </h5>
        <p>
          <?php $tarotmeaning = $thecards[0][1]; echo"$tarotmeaning";?>
      </p></td>
  </tr>
  <tr>
    <td  colspan="2" class="Estilo26"><h3>La Influencia de los Astros</h3></td>
  </tr>
  <tr>
    <td width="10%" align="right" valign="top"><h5><strong><a href="<?php $thumb=$thecards[1][2]; $large=$thecards[1][3]; echo "$imagedirectory$largeimage$large";?>" target="_blank"><img border="<?php echo"$imageborder";?>" src="<?php echo "$imagedirectory$thumb";?>" width="<?php echo"$imagewidth";?>" height="<?php echo"$imageheight";?>" /></a></strong></h5></td>
    <td width="90%" valign="top"><h5>
      <?php $astrocard = $thecards[1][0]; echo"$astrocard";?>
    </h5>
        <p>
          <?php $astromeaning = $thecards[1][1]; echo"$astromeaning";?>
      </p></td>
  </tr>
  <tr>
    <td colspan="2" class="Estilo29" ><h3>La Influencia de los Elementos </h3></td>
  </tr>
  <tr>
    <td align="right" valign="top"><h5><strong><a href="<?php $thumb=$thecards[2][2]; $large=$thecards[2][3]; echo "$imagedirectory$largeimage$large";?>" target="_blank"><img border="<?php echo"$imageborder";?>" src="<?php echo "$imagedirectory$thumb";?>" width="<?php echo"$imagewidth";?>" height="<?php echo"$imageheight";?>" /></a></strong></h5></td>
    <td width="90%" align="left" valign="top"><h5>
      <?php $elementcard = $thecards[2][0]; echo"$elementcard";?>
    </h5>
        <p>
          <?php $elementmeaning = $thecards[2][1]; echo"$elementmeaning";?>
      </p></td>
  </tr>
</table>
      </layer>
      </ilayer>
      <script language="JavaScript1.2" type="text/javascript">
if (iens6)
document.write('</div></div>')
</script>
      <table width="100%" cellpadding="1" cellspacing="1" style="margin-top:5PX;">
        <tr>
          <td width="107" align="center" valign="middle"><a href="index.php" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('VolverInicio','','Imagen/VAI2.png',1)"><img src="Imagen/VAI1.png" alt="Volver al Inicio" name="VolverInicio" width="107" height="26" border="0"></a></td>
          <td width="110" align="center" valign="middle"><a href="diprint.php?pcards=<?php echo $printcards."&maxnumber=".$maxnumber;?>" target="_blank"  onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('ImprimirTirada','','Imagen/IT2.png',1)"><img src="Imagen/IT1.png" alt="Imprimir Tirada" name="ImprimirTirada" width="110" height="26" border="0"></a></td>
          <td width="117" align="center" valign="middle"></td>
          <td width="87" align="center" valign="middle"></td>
          <td width="25" align="center" valign="middle"><a href="#" onMouseOut="clearTimeout(moveupvar); MM_swapImgRestore();" onMouseOver="moveup();MM_swapImage('UP','','Imagen/up.png',1)"><img src="Imagen/up2.png" alt="SUBIR" title="SUBIR" name="UP" width="25" height="26" border="0"></a></td>
          <td width="25" align="center"><a href="#" onMouseOut="clearTimeout(movedownvar);MM_swapImgRestore();" onMouseOver="movedown(); MM_swapImage('DOWN','','Imagen/down.png',1)"><img src="Imagen/down2.png" alt="BAJAR" title="BAJAR" name="DOWN" width="25" height="26" border="0"></a></td>
        </tr>
      </table>
      <script language="JavaScript1.2" type="text/javascript">
if (iens6){
var crossobj=document.getElementById? document.getElementById("content") : document.all.content
var contentheight=crossobj.offsetHeight
}
else if (ns4){
var crossobj=document.nscontainer.document.nscontent
var contentheight=crossobj.clip.height
}

function movedown(){
if (iens6&&parseInt(crossobj.style.top)>=(contentheight*(-1)+400))
crossobj.style.top=parseInt(crossobj.style.top)-speed+"px"
else if (ns4&&crossobj.top>=(contentheight*(-1)+400))
crossobj.top-=speed
movedownvar=setTimeout("movedown()",20)
}

function moveup(){
if (iens6&&parseInt(crossobj.style.top)<=0)
crossobj.style.top=parseInt(crossobj.style.top)+speed+"px"
else if (ns4&&crossobj.top<=0)
crossobj.top+=speed
moveupvar=setTimeout("moveup()",20)
}
function getcontent_height(){
if (iens6)
contentheight=crossobj.offsetHeight
else if (ns4)
document.nscontainer.document.nscontent.visibility="show"
}
window.onload=getcontent_height
</script></td>
  </tr>
</table>
  <hr style="color:#cccccc; size:thin; ">
</div>
<div align="center"><div style="margin-bottom:10px; margin-top:10px; padding-bottom:0px; padding-top:0px; width:468px; border:#000000; border:thin">
  <iframe src="http://action.metaffiliation.com/emplacement.php?emp=81061Idc490b23cd9dd7bd" width="468" height="60" scrolling="no" frameborder="1"></iframe>
</div></div>
<hr style="color:#cccccc; size:thin; " />
</body>
</html>