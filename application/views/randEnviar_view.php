<head>
<title>Dr. Energia</title>
<link rel="icon" href="../images/drenergia200.jpg" />
<meta http-equiv="refresh" content="30;URL=http://www.drenergia.net.br/Sinais/Inserir.php">
</head>

<body bgcolor="#ffffff">
<table width="900" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td><h5><img src="../images/drenergia/Banner.jpg" width="902" height="182"  alt=""/></h5></td>
  </tr>
</table>
<td colspan="2" align="center" bgcolor="#FFFFFF"><h4 align="center">&nbsp;</h4>
  <h4 align="center">
  <p>
    <?php	
	
//$id=$_POST["id"];
$fp= rand(84,91);
  
 
$servidor="sinais.mysql.dbaas.com.br";
$usuario="sinais";
$senha="n23568917";

$link = mysql_connect("$servidor", "$usuario", "$senha");
mysql_select_db ("sinais");

if (!$link) {
    die('Não foi possível conectar: ');
}

$resultado = mysql_query ("UPDATE `fatordepotencia` SET `id`='1',`fp`='$fp' WHERE 1");
//$resultado = mysql_query ("UPDATE `fatordepotencia` SET `id`='1',`fp`='$fp' WHERE 1");");

//INSERT INTO `temp` (`id`, `tensaoA`) VALUES (NULL, '88');
//"INSERT INTO `temp`(`id`, `tensaoA`) VALUES ('null', '$tensaoA'"
 ?>   
  </p>
  <table width="900" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td width="816" align="right">&nbsp;</td>
      <td width="84" align="center"><a href="../temperatura/Cadastro.php"><img src="../images/volta.jpg" width="84" height="50"  alt=""/></a></td>
    </tr>
  </table>
  <p>&nbsp;</p>
  <table width="900" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td height="8" align="center"><img src="../images/drenergia/rodape.jpg"  alt=""/></td>
    </tr>
  </table>
  <p>&nbsp;</p>
<td colspan="2" align="center" bgcolor="#FFFFFF">
    </body>
</html>