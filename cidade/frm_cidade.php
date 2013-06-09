<!DOCTYPE html>
<!--[if IE 8]> 				 <html class="no-js lt-ie9" lang="en" > <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en" > <!--<![endif]-->

<head>
	<meta charset="utf-8" />
  <meta name="viewport" content="width=device-width" />
  <title>Cadastro de cidade</title>
  <link rel="stylesheet" href="../css/foundation.css" />
  <link rel="stylesheet" href="../css/custon.css" />
  <script>
  document.write('<script src=' + ('__proto__' in {} ? '../js/vendor/zepto' : '../js/vendor/jquery') + '.js><\/script>')
  </script>
  <script src="../js/vendor/custom.modernizr.js"></script>
  <script type="text/javascript" src="../js/cidade.js"></script>
  <script src="../js/foundation.min.js"></script>


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

  <div  class="row ">
  <div class="small-12 small-centered large-8 columns">
    <form  action="salva_cidade.php" method="post" class="custom" >
      <fieldset>
        <legend>Cidade</legend>
        <div class="row">
          <div class="large-6 columns">
            <label>nome</label>
            <input type="text" name="cidade"  placeholder="nome da cidade" required>
          </div>
          <div class="large-6 columns">
            <label>UF</label>
            <select name="uf" class="small  ">
              <option value="ac">AC</option> 
              <option value="al">AL</option> 
              <option value="am">AM</option> 
              <option value="ap">AP</option> 
              <option value="ba">BA</option> 
              <option value="ce">CE</option> 
              <option value="df">DF </option> 
              <option value="es">ES </option> 
              <option value="go">GO</option> 
              <option value="ma">MA</option> 
              <option value="mt">MT </option> 
              <option value="ms">MS</option> 
              <option value="mg">MG</option> 
              <option value="pa">PA</option> 
              <option value="pb">PB</option> 
              <option value="pr">PR</option> 
              <option value="pe">PE</option> 
              <option value="pi">PI</option> 
              <option value="rj">RJ</option> 
              <option value="rn">RN</option> 
              <option value="ro">RO</option> 
              <option value="rs">RS</option> 
              <option value="rr">RR</option> 
              <option value="sc">SC</option> 
              <option value="se">SE</option> 
              <option value="sp">SP</option> 
              <option value="to">TO</option> 
            </select>
          </div>
        </div>
          <div class="row">
          <div class="small-12 columns">
            <input type="submit" id="btn_cadastrar" class="button success right" value="Cadastrar" >
          </div>
        </div>
      </fieldset>
    </form>
  </div>
 
</div>


  
  

  <!--
  
  <script src="js/foundation/foundation.js"></script>
  
  <script src="js/foundation/foundation.alerts.js"></script>
  
  <script src="js/foundation/foundation.clearing.js"></script>
  
  <script src="js/foundation/foundation.cookie.js"></script>
  
  <script src="js/foundation/foundation.dropdown.js"></script>
  
  <script src="js/foundation/foundation.forms.js"></script>
  
  <script src="js/foundation/foundation.joyride.js"></script>
  
  <script src="js/foundation/foundation.magellan.js"></script>
  
  <script src="js/foundation/foundation.orbit.js"></script>
  
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
