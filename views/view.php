<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TABELA PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
    <h1>TABELA PHP</h1>
    <table class="table">
    <thead>
        <tr>
        <th scope="col">ID</th>
        <th scope="col">TITULO</th>
        <th scope="col">DESCRIÇÃO</th>
        <th scope="col">INGREDIENTES</th>
        <th scope="col">TEMPO</th>
        </tr>
    </thead>
    <tbody>
      <?php 
      require_once("../models/Search.php");
      $obj = new Search();
      $rows = $obj->viewDb();
      
      foreach($rows as $value):
      
      ?>
        <tr>
        <th scope="row"><?php echo $value['id']; ?></th>
        <td><?php echo $value['titulo']; ?></td>
        <td><?php echo $value['descricao']; ?></td>
        <td><?php echo $value['ingredientes']; ?></td>
        <td><?php echo $value['tempo']; ?></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
    
