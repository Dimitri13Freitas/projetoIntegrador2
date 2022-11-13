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
    <main>
      <div class="d-flex justify-content-xl-between flex-md-wrap flex-xl-nowrap flex-lg-nowrap flex-sm-wrap flex-wrap justify-content-md-center justify-content-sm-center mt-4 noticiaContainer">
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
    </main>
  </div>
  <div class='bg-secondary mt-5 mb-5 obrasContainer'>
    <h2 class='h1 p-5 pt-4'>Obras que recomendamos:</h2>
    <div class='container'>
      <article class='obras rounded border pt-4'>
        <ul class='row p-0'>
        <li  class='col-xl-3 col-md-6 col-sm-12 d-flex justify-content-center'>
          <a href=""><img class='rounded border' src="img/banner/img3.jpg" alt=""><h3 class='text-center'>Obra</h3></a>
          </li>
          <li class='col-xl-3 col-md-6 col-sm-12 d-flex justify-content-center'>
          <a href=""><img class='rounded border' src="img/banner/img3.jpg" alt=""><h3 class='text-center'>Obra</h3></a>
          </li>
          <li class='col-xl-3 col-md-6 col-sm-12 d-flex justify-content-center'>
          <a href=""><img class='rounded border' src="img/banner/img3.jpg" alt=""><h3 class='text-center'>Obra</h3></a>
          </li>
          <li class='col-xl-3 col-md-6 col-sm-12 d-flex justify-content-center'>
          <a href=""><img class='rounded border' src="img/banner/img3.jpg" alt=""><h3 class='text-center'>Obra</h3></a>
          </li>
        </ul>
      </article>
    </div>
  </div>
  <h2 class='h1 seila p-5 pt-4'>Ultimos Reviews</h2>
  <div class='container ultimosReviews'>
    <div class='row mb-5'>
      <div class='col-xl-6 col-sm-12 mb-5'>
        <section class='pt-2 pb-3 ps-3 m-auto pe-3 border rounded'>
          <a href="">
            <small class='mb-2 d-block'>Filmes</small>
              <div class='d-flex'>
                <img class=' mb-3 m-auto rounded' src="img/banner/img2.jpg" alt="">
              </div>
              <h3 class='text-center'>1° Review</h3>
              <p class='text-center'>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Recusandae alias perferendis nihil aliquam quos dolorem maiores vel facilis! Amet deserunt quibusdam quod porro sed cumque nulla harum rerum quis obcaecati.</p>
          </a>
        </section>
      </div>
      <div class='col-xl-6 col-sm-12'>
        <section class='pt-2 pb-3 ps-3 m-auto pe-3 border rounded'>
          <a href="">
            <small class='mb-2 d-block'>Filmes</small>
              <div class='d-flex'>
                <img class=' mb-3 m-auto rounded' src="img/banner/img2.jpg" alt="">
              </div>
              <h3 class='text-center'>1° Review</h3>
              <p class='text-center'>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Recusandae alias perferendis nihil aliquam quos dolorem maiores vel facilis! Amet deserunt quibusdam quod porro sed cumque nulla harum rerum quis obcaecati.</p>
          </a>
        </section>
      </div>
    </div>
  
    <div class='row'>
      <div class='col-xl-6 col-sm-12 mb-5'>
        <section class='pt-2 pb-3 ps-3 m-auto pe-3 border rounded'>
          <a href="">
            <small class='mb-2 d-block'>Filmes</small>
              <div class='d-flex'>
                <img class=' mb-3 m-auto rounded' src="img/banner/img2.jpg" alt="">
              </div>
              <h3 class='text-center'>1° Review</h3>
              <p class='text-center'>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Recusandae alias perferendis nihil aliquam quos dolorem maiores vel facilis! Amet deserunt quibusdam quod porro sed cumque nulla harum rerum quis obcaecati.</p>
          </a>
        </section>
      </div>
      <div class='col-xl-6 col-sm-12'>
        <section class='pt-2 pb-3 ps-3 m-auto pe-3 border rounded'>
          <a href="">
            <small class='mb-2 d-block'>Filmes</small>
              <div class='d-flex'>
                <img class=' mb-3 m-auto rounded' src="img/banner/img2.jpg" alt="">
              </div>
              <h3 class='text-center'>1° Review</h3>
              <p class='text-center'>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Recusandae alias perferendis nihil aliquam quos dolorem maiores vel facilis! Amet deserunt quibusdam quod porro sed cumque nulla harum rerum quis obcaecati.</p>
          </a>
        </section>
      </div>
    </div>
  </div>
  <?php include 'footer.php';?>
  

  <script src="js/script.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>