<?php
/*
Receber as informações do formulário de cadastro de cidades
e cadastrar a cidade no banco de dados
*/

$cidade = $_POST['cidade'];
$uf = $_POST['uf'];
$uf =  strtoupper($uf);
include '../conecta.php';

$sql = "INSERT INTO cidade
(CIDADE, UF) VALUES ('$cidade', '$uf')";

$resultado = mysql_query($sql);

if($resultado === true) {
	?>
    <script type="text/javascript">
	alert('SEUS DADOS FORAM SALVOS.');
	window.location = 'listar_cidade.php';
	</script>
    <?php
}
else {
	echo "SEU COMANDO INSERT FALHOU";
	echo mysql_error();
}