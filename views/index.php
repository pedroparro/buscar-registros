<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SEARCH PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
    <h1>BUSCA PHP</h1>

    <form method="get">
        <div class="mb-3">
            <input type="search" class="form-control" name="s">
        </div>
      
        <button type="submit" class="btn btn-primary">Pesquisar</button>
    </form><hr>

    <?php include "view.php"; ?>

    
    <table class="table">
    <h1>SEARCH PHP</h1>
      <?php 
      require_once("../models/Search.php");

      if(isset($_GET['s'])){
        $titulo = $_GET['s'];
        $obj = new Search();
        $rows = $obj->searchDb($titulo);
        
        foreach($rows as $value):
      
      ?>
       <th scope="col">ID</th>
        <th scope="col">TITULO</th>
        <th scope="col">DESCRIÇÃO</th>
        <th scope="col">INGREDIENTES</th>
        <th scope="col">TEMPO</th>
        <tr>
        <th scope="row"><?php echo $value['id']; ?></th>
        <td><?php echo $value['titulo']; ?></td>
        <td><?php echo $value['descricao']; ?></td>
        <td><?php echo $value['ingredientes']; ?></td>
        <td><?php echo $value['tempo']; ?></td>
        </tr>
        <?php endforeach; } ?>
    </tbody>
</table>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>