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
      <?php include 'nav.php';?>
      <section class="bannerHome">
        <h2 class="remove">.</h2>
        <div class="banner d-flex flex-column justify-content-center rounded">
          <article class='ms-sm-2 ms-md-4 ms-lg-6 ms-xl-6'>
            <h2>Titulo Super Foda</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit consectetur, doloribus, accusantium tempore ducimus nam qui porro numquam animi, maxime.</p>
          </article>
        </div>
      </section>
    </div>

      
      
      
    <h2 class='h1 m-5'>Proximos Lançamentos:</h2>

    <div class='container'>
      <div class='row'>
        <div class='col-4'>
          <section class='lancamentos border rounded'>
            <img class='rounded' src="img/banner/img3.jpg" alt="">
            <h3 class='h3'>Nome do Filme que vai ocupar bastante espaço</h3>
            <a href="">Assistir Trailer</a>
          </section>
        </div>
        <div class='col-4'>
          <section class='lancamentos border rounded'>
            <img class='rounded' src="img/banner/img3.jpg" alt="">
            <h3 class='h3'>Nome do Filme que vai ocupar bastante espaço</h3>
            <a href="">Assistir Trailer</a>
          </section>
        </div>
        <div class='col-4'>
          <section class='lancamentos border rounded'>
            <img class='rounded' src="img/banner/img3.jpg" alt="">
            <h3 class='h3'>Nome do Filme que vai ocupar bastante espaço</h3>
            <a href="">Assistir Trailer</a>
          </section>
        </div>
      </div>
    </div>
    <?php include 'footer.php';?>
  </main>


  <script src="js/script.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>