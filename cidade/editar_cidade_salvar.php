<?php

$id = (int) $_POST['id'];
$cidade = $_POST['cidade'];
$uf = $_POST['uf'];
$uf =  strtoupper($uf);

$sql = "SELECT ID FROM CIDADE
WHERE ID = $id";

include '../conecta.php';

$resultado = mysql_query($sql);

if( mysql_num_rows($resultado) != 1 ) {
	echo 'REGISTRO INEXISTENTE';
	exit;
}

$sql = "UPDATE CIDADE SET
CIDADE = '$cidade', UF = '$uf'
WHERE ID = $id";

$resultado = mysql_query($sql);

if( $resultado === false ) {
	echo 'FALHA PARA EDITAR A CIDADE';
	exit;
}

?>
<script type="text/javascript">
alert('SEUS DADOS FORAM SALVOS.');
window.location = 'listar_cidade.php';
</script>
<?php