<!DOCTYPE html>
<html lang="pt-br">

<head>
   <meta charset="UTF-8">
  <link rel="shortcut icon" href="img/assets/icon.svg" type="image/x-icon">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Ficção cientifica</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
</head>

<!-- RETIRAR TAMANHO DAS IMAGENS NO CSS -->

<body>
  <div class='container'>
    <?php include 'include/nav.php';?>
    <?php include 'include/bannerAnimacoes.php';?>
    
    <main>
      <article>

      <h2 class='h1 m-5'>Proximos Lançamentos:</h2>

      <div class='lançamentosContainer d-flex justify-content-around align-items-start flex-wrap lancamentosContainer mb-5'>
        <div>
          <section class='lancamentos border rounded  d-flex flex-column'>
            <figure>
              <figcaption>Rick and Morty</figcaption>
              <img class='rounded' src="img/imgAnimacao/lancamentos/img1.webp" alt="Temporada nova de Rick and Morty">
            </figure>
            <h3 class='h3 text-center mt-2 mb-4'>Rick and Morty - Season 6</h3>
            <a href="animacoesTrailerRick.php" class='btn btn-primary d-block'>Assistir Trailer</a>
          </section>
        </div>
        <div class='mt-xxl-5 mt-xl-5 mt-lg-5 mt-md-0 mt-sm-0'>
          <section class='lancamentos border rounded  d-flex flex-column'>
            <figure>
              <figcaption>Buzz Lightyear</figcaption>
              <img class='rounded' src="img/imgAnimacao/lancamentos/img2.webp" alt="Buzz segurando um gatinho">
            </figure>
            <h3 class='h3 text-center mt-2 mb-4'>Lightyear (SpinOff de Toy Story)</h3>
            <a href="animacoesTrailerBuzz.php" class='btn btn-primary d-block'>Assistir Trailer</a>
          </section>
        </div>
        <div>
          <section class='lancamentos border rounded  m-auto my-0 d-flex flex-column'>
            <figure>
              <figcaption>HBO Scavengers Reign</figcaption>
              <img class='rounded' src="img/imgAnimacao/lancamentos/img3.webp" alt="moto futurista e seu dono apreciando a vista.">
            </figure>
            <h3 class='h3 text-center mt-2 mb-4'>Scavengers Reign</h3>
            <a href="animacoesTrailerScavengers.php" class='btn btn-primary d-block'>Assistir Trailer</a>
          </section>
        </div>
      </div>
      </article>

      <div class="d-flex justify-content-xl-between flex-md-wrap flex-xl-nowrap flex-lg-nowrap flex-sm-wrap flex-wrap justify-content-md-center justify-content-sm-center mt-4 noticiaContainer">
        <?php include 'include/noticiaAnimacao3.php';?>
        <?php include 'include/noticiaFilme2.php';?>
      </div>
    </main>
    </div>
    <?php include 'include/footer.php';?>


  <script src="js/script.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>