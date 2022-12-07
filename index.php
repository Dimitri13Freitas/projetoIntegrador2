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
  <main>
    <div class='container'>
      <?php include 'include/nav.php';?>
      <?php include 'include/bannerHome.php';?>

      <!-- Noticias -->
      <div class="d-flex justify-content-xl-between flex-md-wrap flex-xl-nowrap flex-lg-nowrap flex-sm-wrap flex-wrap justify-content-md-center justify-content-sm-center mt-4 noticiaContainer">
        <?php include 'include/noticiaAnimacao1.php';?>
        <?php include 'include/noticiaAnimacao2.php';?>
      </div>
    </div>
    <div class='bg-secondary mt-5 mb-5 obrasContainer'>
      <div class='container'>
      <h2 class='h1 py-5 titulo'>Obras que recomendamos:</h2>
        <article class='obras rounded border pt-4'>
          <ul class='row p-0'>
            <li class='col-xl-3 col-md-6 col-sm-12 d-flex justify-content-center'>
              <a href="animacaoConteudoRobots.php">
                <img class='rounded' src="img/home/img1Obra.webp" alt="Love, Death & Robots cartaz de anuncio">
                <h3 class='text-center'>Love, Death & Robots</h3>
              </a>
            </li>
            <li class='col-xl-3 col-md-6 col-sm-12 d-flex justify-content-center'>
              <a href="SinopseStarWars.php">
                <img class='rounded' src="img/home/img3obra.webp" alt="Imagem Do filme Star Wars">
                <h3 class='text-center'>Star Wars IV</h3>
              </a>
            </li>
            <li class='col-xl-3 col-md-6 col-sm-12 d-flex justify-content-center'>
              <a href="livrosPgClas2.php">
              <img class='rounded' src="img/home/img5obra.webp"  alt="Imagem da capa do livro 'Duna', em um deserto">
                <h3 class='text-center'>Duna</h3>
              </a>
            </li>
            <li class='col-xl-3 col-md-6 col-sm-12 d-flex justify-content-center'>
              <a href="NoticiasConteudo.php">
                <img class='rounded' src="img/home/img1Obra.webp" alt="">
                <h3 class='text-center'>Series</h3>
              </a>
            </li>
          </ul>
        </article>
      </div>
    </div>
    <div class='container ultimosReviews'>
      <h2 class='h1 py-5'>Ultimos Reviews</h2>
      <div class='row mb-5'>
        <div class='col-xl-6 col-sm-12 mb-5'>
          <section class='pt-2 pb-3 ps-3 m-auto pe-3 border rounded'>
            <a href="animacaoConteudoWall.php">
              <small class='mb-2 d-block'>Animação</small>
              <div class='d-flex'>
                <img class='mb-3 m-auto rounded' src="img/imgAnimacao/premiados/img1.webp" alt="Wall-e e E.V.A">
              </div>
              <h3 class='h3 text-center'>WALL-E</h3>
              <p class='text-center'>Afirmar que Wall-E é simplesmente o melhor filme lançado em 2008 é pouco. Este clássico instantâneo merece muito mais. De cara, podemos afirmar que é a melhor produção assinada pela Pixar Animation, desde o início de sua parceria com os...</p>
            </a>
          </section>
        </div>
        <div class='col-xl-6 col-sm-12'>
          <section class='pt-2 pb-3 ps-3 m-auto pe-3 border rounded'>
            <a href="SinopseAvatar2.php">
              <small class='mb-2 d-block'>Filmes</small>
              <div class='d-flex'>
                <img class=' mb-3 m-auto rounded' src="img/home/img4obra.webp" alt="Imagem de banner do Filmes Avatar 2">
              </div>
              <h3 class='text-center'>Avatar 2</h3>
              <p class='text-center'>Uma década após a primeira batalha de Pandora entre os Na'vi e os humanos, Jake (Sam Worthington) vive pacificamente com sua família e seu povo. Ele e Ney'tiri (Zoe Saldana) formaram uma família e estão fazendo de tudo para superar os conflitos e continuarem juntos.</p>
            </a>
          </section>
        </div>
      </div>

      <div class='row'>
        <div class='col-xl-6 col-sm-12 mb-5'>
          <section class='pt-2 pb-3 ps-3 m-auto pe-3 border rounded'>
            <a href="livrosPgFAV.php">
              <small class='mb-2 d-block'>Livros</small>
              <div class='d-flex'>
                <img class=' mb-3 m-auto rounded' src="img/home/img6obra.webp" alt="">
              </div>
              <h3 class='text-center'>Frankstein</h3>
              <p class='text-center'>Victor é um cientista que dedica a juventude e a saúde para descobrir como reanimar tecidos mortos e gerar vida artificialmente. O resultado de sua experiência, um monstro que o próprio Frankenstein considera uma...</p>
            </a>
          </section>
        </div>
        <div class='col-xl-6 col-sm-12'>
          <section class='pt-2 pb-3 ps-3 m-auto pe-3 border rounded'>
            <a href="NoticiasConteudo.php">
              <small class='mb-2 d-block'>Series</small>
              <div class='d-flex'>
                <img class=' mb-3 m-auto rounded' src="img/imgAnimacao/premiados/img1.webp" alt="">
              </div>
              <h3 class='text-center'>4° Review</h3>
              <p class='text-center'>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Recusandae alias perferendis nihil aliquam quos dolorem maiores vel facilis! Amet deserunt quibusdam quod porro sed cumque nulla harum rerum quis obcaecati.</p>
            </a>
          </section>
        </div>
      </div>
    </div>
    <?php include 'include/footer.php';?>
  </main>



  <script src="js/script.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>