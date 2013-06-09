<!DOCTYPE html>
<!--[if IE 8]> 				 <html class="no-js lt-ie9" lang="en" > <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en" > <!--<![endif]-->

<head>
	<meta charset="utf-8" />
  <meta name="viewport" content="width=device-width" />
  <title>CDES</title>
  <link rel="stylesheet" href="../css/foundation.css" />
  <link rel="stylesheet" href="../css/custon.css" />
   <script>
  document.write('<script src=' +
  ('__proto__' in {} ? '../js/vendor/zepto' : '../js/vendor/jquery') +
  '.js><\/script>')
  </script>
  <script src="../js/cliente.js"></script>
  <script src="../js/vendor/custom.modernizr.js"></script>

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
    <div class="small-12 small-centered large-10 columns">
      <form class="custom" >
        <fieldset>
          <legend>Cliente</legend>
          <div class="row">
            <div class="small-6 columns">
              <label><input name="radio" type="radio" id="radio1" style="display:none; CHECKED"><span class="custom radio"></span>Fisico</label> 
            </div>
            <div class="small-6 columns">
                <label><input name="radio" type="radio" id="radio2" style="display:none;"><span class="custom radio"></span>Juridico</label>
            </div>
          </div>
          <div class="row">
            <div class="large-6 columns">
              <label>nome</label>
              <input id="input_nome" type="text" placeholder="nome" >
            </div>
            <div class="large-3 columns">
              <label>CPF</label>
              <input id="input_cpf" type="text" placeholder="CPF" >
            </div>
             <div class="large-3 columns">
              <label>CNPJ</label>
              <input id="input_cnpj" type="text" placeholder="cnpj" >
            </div>
          </div>

          <div class="row">
            <div class="small-6 columns">
              <label>Telefone</label>
              <input id="input_telefone"type="text" placeholder="Login" >
            </div>
            <div class="small-6 columns">
              <label>celular</label>
              <input id="input_celular"type="text" placeholder="Login" >
            </div>
          </div>
          
          <div class="row">
            <div class="small-5 columns">
              <label >Data Nascimento</label>
              <input id="input_data_nasc" type="date"  >
            </div>

            <div class="small-3 columns">
              <label>UF</label>
              <select id="cbx_UF" class="small">
                <option value='UF'>UF</option>
              </select>
            </div>
            <div class="small-4 columns">
              <label>cidade</label>
              <select id="cbx_cidade" class="medium">
             
              </select>
            </div>
          </div>
           <div class="row">
            <div class="small-10 columns">
              <label>Endereço</label>
              <input id="input_endereco" type="text" placeholder="Endereco" >
            </div>
            <div class="small-2 columns">
              <label>Numero</label>
              <input id="input_num" type="text" placeholder="Numero" >
            </div>
            
          </div>
          <div class="row">
             <div class="small-6 columns">
              <label>CEP</label>
              <input id="input_cep" type="text" placeholder="CEP" >
            </div>
             <div class="small-6 columns">
              <label>Bairro</label>
              <input id="input_bairro" type="text" placeholder="bairro" >
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
   <script src="../js/foundation/foundation.orbit.js"></script>
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
