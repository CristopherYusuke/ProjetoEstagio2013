<!DOCTYPE html>
<!--[if IE 8]> 				 <html class="no-js lt-ie9" lang="en" > <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en" > <!--<![endif]-->

<head>
	<meta charset="utf-8" />
  <meta name="viewport" content="width=device-width" />
  <title>Cadastro de usuario</title>
  <link rel="stylesheet" href="../css/foundation.css" />
  <link rel="stylesheet" href="../css/custon.css" />

  <script> document.write('<script src=' + ('__proto__' in {} ? 'js/vendor/zepto' : 'js/vendor/jquery') + '.js><\/script>') </script>
  <script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script> 
  <script type="text/javascript" src="../js/vendor/custom.modernizr.js"></script>
  <script type="text/javascript" src="../js/usuario.js"></script>
  <script type="text/javascript" src="../js/XMLWriter-1.0.0-min.js"></script>


</head>
<body>
 <?php include ('../nav.php') ?>

<div class="row">
  <div class="small-12 small-centered large-8 columns">
    <ul class="button-group round even-2">
      <li><a id="btn_Cadastrar_usuario" href="#" class="button">Cadastrar</a></li>
      <li><a id="btn_Listar_usuario"href="#" class="button">Listar</a></li>
    </ul>
  </div>
</div>

  <div  class="row ">
    <div class="small-12 small-centered large-8 columns">
      <form class="custom" >
        <fieldset>
          <legend>Usuario</legend>

          <div class="row">
            <div class="small-6 columns">
              <label>nome</label>
              <input id="input_nome" type="text" placeholder="nome" >
            </div>
            <div class="small-6 columns">
              <label>Login</label>
              <input id="input_login"type="text" placeholder="Login" >
            </div>
          </div>
          
          <div class="row">
            <div class="large-6 columns">
              <label >Senha</label>
              <input id="input_senha" type="password" placeholder="digite sua senha" >
            </div>
            <div class="large-6 columns">
              <label>Tipo Usuario</label>
              <select id="cbx_tp_usuario" class="medium">
                <option value="VENDEDOR">Vendedor</option>
                <option value="Adiministrador"> Adiministrador</option>
              </select>
            </div>
          </div>
          <div class="row">
            <div class="small-12 columns">
              <input type="button" id="btn_enviar" class="button success right" value="Cadastrar" onClick = "getdetails()" />
            </div>
          </div>
        </fieldset>
      </form>
    </div>
</div>


  
  <script src="../js/foundation.min.js"></script>

  <!--
   <script type="text/javascript" src="js/vendor/jquery.js"></script>
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
