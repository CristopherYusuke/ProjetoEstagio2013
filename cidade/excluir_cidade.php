<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<?php
$id = (int) $_GET['id'];

$sql = "SELECT * FROM CIDADE 
WHERE id = $id";

include '../conecta.php';

$resultado = mysql_query($sql);

if( mysql_num_rows($resultado) == 0 ) {
  echo 'CIDADE INEXISTENTE';
  exit;
}

$sql = "DELETE from CIDADE  WHERE id = $id";

$resultado = mysql_query($sql);

if( $resultado === false ) {
	 echo 'ERRO NO SQL';
	exit;
}

?>
<script type="text/javascript">
alert('REGISTRO EXCLUÍDO.');
window.location = 'listar_cidade.php';
</script>
<?php