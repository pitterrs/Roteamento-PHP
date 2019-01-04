<?php
include_once '../conect.php';
require_once 'script.php';

$id = $_GET['id'];

$consulta = "SELECT * FROM usuario WHERE id = $id";
$resultado = mysqli_query($cn, $consulta);
$usuario = mysqli_fetch_assoc($resultado);


echo $head;
echo $header;
echo $aside;
?>

<div class="content-wrapper">

<!-- Titulo da seção -->
<section class="content-header">
  <h1>
    Editar usuário
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
  <div class="box-header">
    <h3 class="box-title">Alterar de dados cadastrais</h3>
   </div>

<div class="box-body">
      <div class="form-group">

		<!-- Início do Formulário -->      	
        <form action="modifuser.php" method="post">

        <!-- Input ID -->
        <input type="hidden" name="id" value="<?php echo $usuario['id']; ?>">

		<!-- Label e Input Nome -->
        <label>Nome Completo:</label>
        <div class="input-group">
          <div class="input-group-addon">
            <i class="fa fa-user"></i>
          </div>
          <input type="text" name="nome" style="height: 28px; width: 40%; font-weight: bold;" class="form-control" value="<?php echo $usuario['usuario']; ?>">
        </div>

        <!-- Label e input e-mail -->
        <label style="margin-top:10px;">E-mail do usuário:</label>
        <div class="input-group">
          <div class="input-group-addon">
              <i class="fa fa-at"></i>
            </div>
            <input type="text" name="email" style="height: 28px; width: 40%; font-weight: bold;" class="form-control" value="<?php echo $usuario['email']; ?>">
          </div>

          <!-- Label e input login -->
          <label style="margin-top:10px;">Login:</label>
        <div class="input-group">
          <div class="input-group-addon">
              <i class="fa fa-user"></i>
            </div>
            <input type="text" name="login" style="height: 28px; width: 40%; font-weight: bold;" class="form-control" value="<?php echo $usuario['login']; ?>">
          </div>
          
          <!-- Botão cadastrar -->
          <button type="submit" name="enviar" value="modificar" class="btn btn-info" style="margin-top:30px; width: 100px;">Modificar</button> 

          <!-- Botão cadastrar -->
          <button type="submit" name="enviar" value="cancelar" class="btn btn-danger" style="margin-top:30px; width: 100px;">Cancelar</button> 

          
        </form>
        <!-- Fim do Formulário --> 
      </div>
    </div>
  </div>
</section>
</div>

<?php
echo $footer;
echo $javascript; 
?>