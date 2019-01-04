<?php 
session_start();
require_once 'script.php';
require ('../conect.php');

//itens por pagina
$itens_por_pagina = 5;

//pega a pagina atual
$pagina = intval($_GET['pagina']);
$item = $pagina * $itens_por_pagina;

//puxar itens do banco
$sql_code = "select * from itens LIMIT $item, $itens_por_pagina";
$execute = mysqli_query($cn, $sql_code) or die($mysqli->error);
$itens = $execute->fetch_assoc();
$num = $execute->num_rows;

//pega a quantidade total de resultados do banco
$num_total = mysqli_query($cn, "select * from itens")->num_rows;

//definir número de páginas
$num_paginas = ceil($num_total/$itens_por_pagina);

echo $head;
echo $header;
echo $aside;
echo '<div class="content-wrapper">';
?>

<?php
echo '<!-- Titulo da seção -->
<section class="content-header">
  <h1>
    Itens cadastrados
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="#">Forms</a></li>
    <li class="active">Advanced Elements</li>
  </ol>
</section>

<section class="content">

  <!-- Titulo do formulário -->
  <div class="box box-default">
  <div class="box-header">
    <h3 class="box-title">Lista de itens cadastrados</h3>
   </div>

   <div class="box-body">
      <div class="form-group col-xs-12">
';?>


<table class="table table-bordered table-hover">
  <tbody style="font-weight: bold;">
    <tr>
      <td>Código</td>
      <td>Descrição do Item</td>
      <td>Valor do Item</td>
      <td>Fornecedor</td>
      <td></td>
    </tr>
  </tbody>
    <?php
    $consulta = "SELECT * FROM itens ";
    $resultado = mysqli_query($cn, $sql_code);
    while($row = $resultado-> fetch_array()){ ?>
      <tr>
        <td><?php echo $row['item_id']; ?></td>
        <td><?php echo $row['item_nome']; ?></td>
        <td><?php echo $row['item_valor']; ?></td>
        <td><?php echo $row['forn_id_fk']; ?></td>
        <td><?php echo "<a href='edititem.php?id=" . $row['item_id'] . "'>Editar</a>"?></td>
      </tr>
      <?php } ?>
  </table>
  <nav aria-label="Page navigation">
    <ul class="pagination">
      <li>
        <a href="exibiritem.php?pagina=0" aria-label="Previous">
          <span aria-hidden="true">&laquo;</span>
        </a>
      </li>
      <?php
      for($i=0;$i<$num_paginas;$i++){ 
      $estilo = "";
      if($pagina == $i)
      $estilo = "class=\"active\"";
      ?>
      <li <?php echo $estilo; ?> ><a href="exibiritem.php?pagina=<?php echo $i; ?>"><?php echo $i+1; ?></a></li>
      <?php } ?>
      <li>
        <a href="exibiritem.php?pagina=<?php echo $num_paginas-1; ?>" aria-label="Next">
          <span aria-hidden="true">&raquo;</span>
        </a>
      </li>
    </ul>
  </nav>
  <button class="btn btn-block btn-primary" style="margin-top:30px; width: 125px;"><a href="insertitem.php" style="color:#FFF;">Inserir novo Item</a></button>







<?php 
echo '</div>
    </div>
  </div>
</section>
</div>';
echo $footer;
echo $javascript;
?>