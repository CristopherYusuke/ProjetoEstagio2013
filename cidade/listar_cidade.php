<!DOCTYPE html>
<!--[if IE 8]> 				 <html class="no-js lt-ie9" lang="en" > <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en" > <!--<![endif]-->

<head>
	<meta charset="utf-8" />
  <meta name="viewport" content="width=device-width" />
  <title>CDES</title>
  <link rel="stylesheet" href="foundation_icons_general/stylesheets/general_foundicons.css">
  <link rel="stylesheet" href="../css/foundation.css" />
  <link rel="stylesheet" href="../css/custon.css" />
  <script src="../js/vendor/custom.modernizr.js"></script>

</head>
<body>
 <?php include ('../nav.php') ?>

<div class="row">
  <div class="small-12 small-centered large-8 columns">
    <ul class="button-group round even-2">
      <li><a id="btn_Cadastrar_usuario" href="frm_cidade.php" class="button">Cadastrar</a></li>
      <li><a id="btn_Listar_usuario"href="listar_cidade.php" class="button">Listar</a></li>

    </ul>
  </div>
</div>

<div class="row">
  <div class="small-12 small-centered large-8 columns">
    <table width="100%">
      <thead>
      <tr>
        <th>ID</th>
        <th>CIDADE</th>
        <th>UF</th>
        <th>Editar</th>
        <th>Excluir</th>
      </tr>
      </thead>
    <?php
    include '../conecta.php';

    $sql = 'SELECT
      ID, CIDADE, UF
    FROM CIDADE';

    $resultado = mysql_query($sql);

    while($linha = mysql_fetch_assoc($resultado)) { ?>
      <tr>
        <td><?php echo $linha['ID']; ?></td>
        <td><?php echo $linha['CIDADE']; ?></td>
        <td><?php echo $linha['UF']; ?></td>
        <td width="50px"><a class="tiny button secondary" href="editar_cidade.php?id=<?php echo $linha['ID']; ?>">Editar</a></td>
        <td width="50px"><a class="tiny button alert " href="excluir_cidade.php?id=<?php echo $linha['ID']; ?>">Excluir</a></td>
      </tr>
    <?php } ?>
    </table>
  </div>
</div>


  <script>
  document.write('<script src=' +
  ('__proto__' in {} ? '../js/vendor/zepto' : '../js/vendor/jquery') +
  '.js><\/script>')
  </script>
  
  <script src="../js/foundation.min.js"></script>
  
  <!--
  <script src="js/foundation/foundation.orbit.js"></script>
  <script src="js/foundation/foundation.js"></script>
  
  <script src="js/foundation/foundation.alerts.js"></script>
  
  <script src="js/foundation/foundation.clearing.js"></script>
  
  <script src="js/foundation/foundation.cookie.js"></script>
  
  <script src="js/foundation/foundation.dropdown.js"></script>
  
  <script src="js/foundation/foundation.forms.js"></script>
  
  <script src="js/foundation/foundation.joyride.js"></script>
  
  <script src="js/foundation/foundation.magellan.js"></script>
  
  
  
  <script src="js/foundation/foundation.placeholder.js"></script>
  
  <script src="js/foundation/foundation.reveal.js"></script>
  
  <script src="js/foundation/foundation.section.js"></script>
  
  <script src="js/foundation/foundation.tooltips.js"></script>

  <script src="js/foundation/foundation.topbar.js"></script>
    -->
  
  
  <script>
    $(document).foundation();
  </script>
</body>
</html>
