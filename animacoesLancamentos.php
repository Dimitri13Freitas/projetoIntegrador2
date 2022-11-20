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
    <div class='container'>
      <?php include 'include/nav.php';?>
      <?php include 'include/bannerHome.php';?>

      <h2 class='h1 m-5'>Proximos Lançamentos:</h2>

      <div class='lançamentosContainer d-flex justify-content-around align-items-start flex-wrap lancamentosContainer mb-5'>
        <div>
          <section class='lancamentos border rounded p-4 d-inline-block'>
            <img class='rounded border' src="img/banner/img3.jpg" alt="">
            <h3 class='h3 text-center mt-2 mb-4'>Nome do Filme que vai ocupar bastante espaço</h3>
            <a href="" class='btn btn-primary d-block'>Assistir Trailer</a>
          </section>
        </div>
        <div class='mt-xxl-5 mt-xl-5 mt-lg-5 mt-md-0 mt-sm-0'>
          <section class='lancamentos border rounded p-4 d-inline-block'>
            <img class='rounded border' src="img/banner/img3.jpg" alt="">
            <h3 class='h3 text-center mt-2 mb-4'>Nome do Filme que vai ocupar bastante espaço</h3>
            <a href="" class='btn btn-primary d-block'>Assistir Trailer</a>
          </section>
        </div>
        <div>
          <section class='lancamentos border rounded p-4 m-auto my-0 d-inline-block'>
            <img class='rounded border' src="img/banner/img3.jpg" alt="">
            <h3 class='h3 text-center mt-2 mb-4'>Nome do Filme que vai ocupar bastante espaço</h3>
            <a href="" class='btn btn-primary d-block'>Assistir Trailer</a>
          </section>
        </div>
      </div>
      <div class="d-flex justify-content-xl-between flex-md-wrap flex-xl-nowrap flex-lg-nowrap flex-sm-wrap flex-wrap justify-content-md-center justify-content-sm-center mt-4 mb-5 noticiaContainer">
        <section class="noticia rounded-3  border d-flex align-items-center">
          <div class="noticiaSeila d-flex flex-column">
            <small>Filmes</small>
            <h2>Seila</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. At nam molestias ipsa praesentium tenetur ea fugiat unde impedit, assumenda itaque deleniti quam facilis totam doloremque. Soluta quia omnis cupiditate minima.</p>
            <a href="filmesPrincipais.html">Continuar lendo...</a>
          </div>
          <img src="img/banner/img2.jpg" alt="">
        </section>
        <section class="noticia rounded-3 border d-flex align-items-center">
          <div class="noticiaSeila d-flex flex-column">
            <small>Filmes</small>
            <h2>Seila</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. At nam molestias ipsa praesentium tenetur ea fugiat unde impedit, assumenda itaque deleniti quam facilis totam doloremque. Soluta quia omnis cupiditate minima.</p>
            <a href="filmesPrincipais.html">Continuar lendo...</a>
          </div>
          <img src="img/banner/img2.jpg" alt="">
        </section>
      </div>
    </div>
    <?php include 'include/footer.php';?>
  </main>


  <script src="js/script.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>