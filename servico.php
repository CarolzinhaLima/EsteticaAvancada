<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/servico.css">
    <link rel="stylesheet" href="css/rodape.css">
    <link rel="stylesheet" href="mobile/menuMobile.css">
    <script src="https://kit.fontawesome.com/2a698b527f.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/login.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Serviços</title>
</head>
<body>
  <?php
  include('includes/menu.php');
  include('mobile/menuMobile.php');
  ?>
  <main>
<div class="servico">
  <h1 class="titulo">Todos os Serviços</h1>
 
  <div class="conteudo">
    <div class="card" style="width: 18rem;">
      <img class="card-img-top" src="img/limpeza-de-pele.png" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">Serviço</h5>
        <a href="servicoSelecionado.php" class="btn btn-primary">Saiba Mais</a>
      </div>
    </div>

    <div class="card" style="width: 18rem;">
      <img class="card-img-top" src="img/limpeza-de-pele.png" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">Serviço</h5>
        <a href="servicoSelecionado.php" class="btn btn-primary">Saiba Mais</a>
      </div>
    </div>

    <div class="card" style="width: 18rem;">
      <img class="card-img-top" src="img/limpeza-de-pele.png" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">Serviço</h5>
        <a href="servicoSelecionado.php" class="btn btn-primary">Saiba Mais</a>
      </div>
    </div>
  </div>
</div> 
</main>

<footer>
<?php
  include('includes/rodape.php');
?>
</footer>
</body>
</html>