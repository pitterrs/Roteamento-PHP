<?php
session_start();
require_once 'script.php';
include("../conect.php");
echo $head;
echo $header;
echo $aside;
echo '<div class="content-wrapper">';

echo '

<!-- Titulo da seção -->
<section class="content-header">
  <h1>
    Cadastro de itens
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="#">Forms</a></li>
    <li class="active">Advanced Elements</li>
  </ol>
</section>

<section class="content">

  <!-- Titulo do formulário -->
  <div class="box box-primary">
'; ?>
<?php 
      if(isset($_SESSION['sucesso_item'])){
      echo $_SESSION['sucesso_item'];
      unset($_SESSION['sucesso_item']);
      };

      if(isset($_SESSION['erro_item'])){
      echo $_SESSION['erro_item'];
      unset($_SESSION['erro_item']);
      };

      if(isset($_SESSION['desc_vazio'])){
      echo $_SESSION['desc_vazio'];
      unset($_SESSION['desc_vazio']);
      };

      if(isset($_SESSION['valor_vazio'])){
      echo $_SESSION['valor_vazio'];
      unset($_SESSION['valor_vazio']);
      };

      if(isset($_SESSION['forn_vazio'])){
      echo $_SESSION['forn_vazio'];
      unset($_SESSION['forn_vazio']);
      };
      
      if(isset($_SESSION['vazio'])){
      echo $_SESSION['vazio'];
      unset($_SESSION['vazio']);
      };
   ?>
    
    <div class="box-header">
    <h3 class="box-title">Preencha os campos abaixo</h3>
   </div>

   
    <div class="box-body">
      <div class="form-group">

        <!-- Label e Input Nome -->
        <form action="acaoitem.php" method="post">
          <label>Descrição do Item:</label>
          <div class="input-group">
            <div class="input-group-addon">
              <i class="fa fa-user"></i>
            </div>
            <input type="text" name="nome" placeholder="Arroz Sepe" style="height: 28px; width: 40%;" class="form-control">
          </div>

           <!-- Label e input e-mail -->
          <label style="margin-top:10px;">Valor do item:</label>
          <div class="input-group">
            <div class="input-group-addon">
              <i class="fa fa-money"></i>
            </div>
              <input type="text" name="valor" placeholder="13,00" style="height: 28px; width: 40%;" class="form-control">
          </div>


      <label style="margin-top:10px;">Fornecedor:</label>
      <div class="input-group">
        <select name="fornecedor" class="btn btn-primary dropdown-toggle">
          <option>Selecione</option>
          <?php
            $consulta = "SELECT * FROM fornecedor";
            $resultado = mysqli_query($cn, $consulta);
            while($row_resultado = mysqli_fetch_assoc($resultado)){ ?>
              <option value="<?php echo $row_resultado['forn_id']; ?>"><?php echo $row_resultado['forn_nome']; ?></option> <?php
              }
            ?>
        </select>
      </div>


      <!-- Botão cadastrar -->
          <button type="submit" name="enviar" value="cadastrar" class="btn btn-info" style="margin-top:30px; width: 100px;">Cadastrar</button> 

          <!-- Botão cadastrar -->
          <button type="submit" name="enviar" value="cancelar" class="btn btn-danger" style="margin-top:30px; width: 100px;">Cancelar</button> 

          <!-- Botão Listar usuários -->
          <button type="submit" name="enviar" value="listar" class="btn btn-primary" style="margin-top:30px; width: 130px;">Itens cadastrados</button>
    </form>

      </div>
    </div>
  </div>
</section>

<?php 
echo '</div>';

echo $footer;
echo $javascript;
?>