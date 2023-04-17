<!DOCTYPE html>
<html lang="pt-br">

<head>
   <meta charset="UTF-8">
  <link rel="shortcut icon" href="img/assets/icon.svg" type="image/x-icon">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Ficção cientifica</title>
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css"> -->
</head>

<!-- RETIRAR TAMANHO DAS IMAGENS NO CSS -->

<body>
  <div class='container'>
    <?php include 'include/nav.php';?>
    <?php include 'include/bannerAnimacoes.php';?>
    
    <main>
      <h2 class='h2 mt-5 mb-3 text-center'>Rick and Morty - Season 6</h2>

      <figure class='row mb-4'>
      <figcaption>Rick and Morty</figcaption>
      <iframe width="853" height="480" src="https://www.youtube.com/embed/6Zt15L7Gy3U" title="Rick And Morty  - 6ª Temporada | Trailer Oficial | HBO Max" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </figure>
      <div class="d-flex justify-content-xl-between flex-md-wrap flex-xl-nowrap flex-lg-nowrap flex-sm-wrap flex-wrap justify-content-md-center justify-content-sm-center mt-4 noticiaContainer">
        <?php include 'include/noticiaAnimacao3.php';?>
        <?php include 'include/noticiaFilme2.php';?>
      </div>
    </main>
    </div>
    <?php include 'include/footer.php';?>


    <!-- <script src="js/script.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script> -->
</body>

</html>