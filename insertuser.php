<?php
session_start();
require_once 'script.php';

echo $head;
echo $header;
echo $aside;
echo '<div class="content-wrapper">';

echo '

<!-- Titulo da seção -->
<section class="content-header">
  <h1>
    Cadastro de usuários
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="#">Forms</a></li>
    <li class="active">Advanced Elements</li>
  </ol>
</section>

<section class="content">

  <!-- Titulo do formulário -->
  <div class="box box-danger">
';

      if(isset($_SESSION['sucesso'])){
      echo $_SESSION['sucesso'];
      unset($_SESSION['sucesso']);
      };

      if(isset($_SESSION['erro'])){
      echo $_SESSION['erro'];
      unset($_SESSION['erro']);
      };

      if(isset($_SESSION['nome_vazio'])){
      echo $_SESSION['nome_vazio'];
      unset($_SESSION['nome_vazio']);
      };

      if(isset($_SESSION['email_vazio'])){
      echo $_SESSION['email_vazio'];
      unset($_SESSION['email_vazio']);
      };

      if(isset($_SESSION['login_vazio'])){
      echo $_SESSION['login_vazio'];
      unset($_SESSION['login_vazio']);
      };
      
      if(isset($_SESSION['vazio'])){
      echo $_SESSION['vazio'];
      unset($_SESSION['vazio']);
      };
  
    
  echo '   <div class="box-header">
    <h3 class="box-title">Preencha os campos abaixo</h3>
   </div>

   
    <div class="box-body">
      <div class="form-group">

        <!-- Label e Input Nome -->
        <form action="acaouser.php" method="post">
        <label>Nome Completo:</label>
        <div class="input-group">
          <div class="input-group-addon">
            <i class="fa fa-user"></i>
          </div>
          <input type="text" name="nome" placeholder="João da Silva" style="height: 28px; width: 40%;" class="form-control">
        </div>

        <!-- Label e input e-mail -->
        <label style="margin-top:10px;">E-mail do usuário:</label>
        <div class="input-group">
          <div class="input-group-addon">
              <i class="fa fa-at"></i>
            </div>
            <input type="text" name="email" placeholder="joao@gmail.com" style="height: 28px; width: 40%;" class="form-control">
          </div>

          <!-- Label e input login -->
          <label style="margin-top:10px;">Login:</label>
        <div class="input-group">
          <div class="input-group-addon">
              <i class="fa fa-user"></i>
            </div>
            <input type="text" name="login" placeholder="joao1990" style="height: 28px; width: 40%;" class="form-control">
          </div>
          
          <!-- Botão cadastrar -->
          <button type="submit" name="enviar" value="cadastrar" class="btn btn-info" style="margin-top:30px; width: 100px;">Cadastrar</button> 

          <!-- Botão cadastrar -->
          <button type="submit" name="enviar" value="cancelar" class="btn btn-danger" style="margin-top:30px; width: 100px;">Cancelar</button> 

          <!-- Botão Listar usuários -->
          <button type="submit" name="enviar" value="listar" class="btn btn-primary" style="margin-top:30px; width: 150px;">Usuários cadastrados</button> 

          
        </form>

      </div>
    </div>
  </div>
</section>';


echo '</div>';

echo $footer;
echo $javascript;