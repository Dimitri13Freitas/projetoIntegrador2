<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Ficção cientifica</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <link rel="stylesheet" href="css/seila.css">
</head>

<!-- RETIRAR TAMANHO DAS IMAGENS NO CSS -->

<body>
  <main>
    <div class='container main'>
      <?php include 'include/nav.php';?>
      <?php include 'include/bannerAnimacoes.php';?>

      <h2 class='h1'>As animações mais Premiadas:</h2>

      <div class='row'>
        <section class='premiados border rounded'>
          <h3 class='h2'> 1° Animação</h3>
          <img class='rounded' src="img/banner/img2.jpg" alt="">
          <ul class='m-0 p-0'>
            <li class='h6'>Premios</li>
            <li class='h6'>Premios</li>
            <li class='h6'>Premios</li>
            <li class='h6'>Premios</li>
          </ul>
        </section>
      </div>

    </div>
    <?php include 'include/footer.php';?>
  </main>


  <script src="js/script.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>