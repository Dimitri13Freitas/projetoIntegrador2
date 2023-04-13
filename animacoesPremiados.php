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
      <h2 class='h1 mt-5'>As animações mais Premiadas:</h2>
      <div class='row mt-5'>
        <div class='col-xl-6 col-md-6 col-sm-12 d-flex justify-content-center'>
          <section class='premiados border rounded d-inline-block py-3 px-4'>
            <h3 class='h2 text-center mb-3'>WALL-E</h3>
            <figure class='destaquesImg'>
              <figcaption>Fime da pixar "WALL-E"</figcaption>
              <img class='rounded' src='img/imgAnimacao/premiados/img1.webp' alt="Wall-e e E.V.A">
            </figure>
            <ul class='m-0 mt-3 p-0 text-center d-flex flex-column align-items-center'>
              <li class='h5'>Oscar de Melhor Filme de Animação 2009</li>
              <li class='h5'>Globo de Ouro de Melhor Filme de Animação</li>
              <li class='h5'>Satellite Award de Melhor Filme de Animação</li>
              <li class='h5'>Prêmio Nebula de Melhor Roteiro</li>
            </ul>
          </section>
        </div>
        <div class='col-xl-6 col-md-6 col-sm-12 d-flex justify-content-center'>
          <section class='premiados space border rounded d-inline-block py-3 px-4'>
            <h3 class='h2 text-center mb-3'>O Gigante de Ferro</h3>
            <figure class='destaquesImg'>
              <figcaption>Filme da Pixar Gigante de Ferro</figcaption>
              <img class='rounded' src='img/imgAnimacao/premiados/img2.webp' alt="O gigante de ferro com seu amigo humano em sua mão">
            </figure>
            <ul class='m-0 mt-3 p-0 text-center d-flex flex-column align-items-center'>
              <li class='h5'>Satellite Award de Melhor Filme de Animação</li>
              <li class='h5'>Melhor Apresentação Dramática</li>
              <li class='h5'>Prêmio Nebula de Melhor Roteiro</li>
              <li class='h5'>Satellite Award de Melhor DVD Jovem</li>
            </ul>
          </section>
        </div>
      </div>
      <div class='row my-5'>
        <div class='col-xl-6 col-md-6 col-sm-12 d-flex justify-content-center'>
          <section class='premiados border rounded d-inline-block py-3 px-4'>
            <h3 class='h2 text-center mb-3'>A Família do Futuro</h3>
            <figure class='destaquesImg'>
              <figcaption>Filme da dreamworks "Familia do Futuro"</figcaption>
              <img class='rounded' src='img/imgAnimacao/premiados/img3.webp' alt="Todos os personagens de a familia do fururo">
            </figure>
            <ul class='m-0 mt-3 p-0 text-center d-flex flex-column align-items-center'>
              <li class='h5'>Annie Award Música em uma Produção de Longa-metragem</li>
              <li class='h5'>A família do futuro saturn award for best animated film</li>
              <li class='h5'>A família do futuro annie award for best storyboarding in an animated feature production</li>
              <li class='h5'>A família do futuro chicago film critics association award for best animated film</li>
            </ul>
          </section>
        </div>
        <div class='col-xl-6 col-md-6 col-sm-12 d-flex justify-content-center'>
          <section class='premiados space border rounded d-inline-block py-3 px-4'>
            <h3 class='h2 text-center mb-3'>Operação Big Hero</h3>
            <figure class='destaquesImg'>
              <figcaption>Animação da Disney "Operação big Hero"</figcaption>
              <img class='rounded' src='img/imgAnimacao/premiados/img4.webp' alt="um robô gordinho e uma criança">
            </figure>
            <ul class='m-0 mt-3 p-0 text-center d-flex flex-column align-items-center'>
              <li class='h5'>Oscar de Melhor Filme de Animação</li>
              <li class='h5'>Prêmio Globo de Ouro de Melhor Filme de Animação</li>
              <li class='h5'>Satellite Award de Melhor Filme de Animação</li>
              <li class='h5'>Critics' Choice Award de Melhor Filme de Animação</li>
            </ul>
          </section>
        </div>
      </div>
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