<?php
$link = mysql_connect('localhost', 'mysql_user', 'mysql_password')
if (!$link){
die ('não pode ser conectado: ' .mysql_error());
}
echo 'conexão com secesso!';
mysql_close($link);
?>