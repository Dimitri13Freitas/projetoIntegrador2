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
    <?php include 'include/nav.php'; ?>
    <main>
      <!-- Noticias -->
      <div class="d-flex justify-content-xl-between flex-md-wrap flex-xl-nowrap flex-lg-nowrap flex-sm-wrap flex-wrap justify-content-md-center justify-content-sm-center mt-4 noticiaContainer">
        <?php include 'include/noticiaAnimacao1.php'; ?>
        <?php include 'include/noticiaAnimacao2.php'; ?>
      </div>
      <div class='mt-5 mb-5 obrasContainer'>
        <div class='container'>
          <article class='obras rounded border pt-4'>
            <h2 class='h1 py-5 titulo'>Obras que recomendamos:</h2>
            <ul class='row p-0'>
              <li class='col-xl-3 col-md-6 col-sm-12 d-flex justify-content-center'>
                <a href="animacaoConteudoRobots.php">
                  <figure>
                    <img class='rounded' src="img/home/img1Obra.webp" alt="Love, Death & Robots cartaz de anuncio">
                    <figcaption>Love, Death & Robots</figcaption>
                  </figure>
                </a>
              </li>
              <li class='col-xl-3 col-md-6 col-sm-12 d-flex justify-content-center'>
                <a href="SinopseStarWars.php">
                  <figure>
                    <img class='rounded' src="img/home/img3obra.webp" alt="Imagem Do filme Star Wars">
                    <figcaption>Star Wars IV</figcaption>
                  </figure>
                </a>
              </li>
              <li class='col-xl-3 col-md-6 col-sm-12 d-flex justify-content-center'>
                <a href="livrosPgClas2.php">
                  <figure>
                    <img class='rounded' src="img/home/img5obra.webp" alt="Imagem da capa do livro 'Duna', em um deserto">
                    <figcaption>Duna</figcaption>
                  </figure>
                </a>
              </li>
              <li class='col-xl-3 col-md-6 col-sm-12 d-flex justify-content-center'>
                <a href="NoticiasConteudo.php">
                  <figure>
                    <img class='rounded' src="img/home/img1Obra.webp" alt="error 404 image not found, sorry about that">
                    <figcaption>Series</figcaption>
                  </figure>
                </a>
              </li>
            </ul>
          </article>
        </div>
      </div>
      <section class='container ultimosReviews'>
        <h2 class='h1 py-5'>Ultimos Reviews</h2>
        <ul class='row mb-5'>
          <li class='col-xl-6 col-sm-12 mb-5'>
            <div class='pt-2 pb-3 ps-3 m-auto pe-3 border rounded'>
              <small class='mb-2 d-block'>Animação</small>
              <div class='d-flex'>
                <figure>
                  <img class='mb-3 m-auto rounded' src="img/imgAnimacao/premiados/img1.webp" alt="Wall-e e E.V.A">
                  <figcaption>WALL-E</figcaption>
                </figure>
              </div>
              <p class='text-center'>Afirmar que Wall-E é simplesmente o melhor filme lançado em 2008 é pouco. Este clássico instantâneo merece muito mais. De cara, podemos afirmar que é a melhor produção assinada pela Pixar Animation, desde o início de sua parceria com os...</p>
              <a class="verde" href="animacaoConteudoWall.php">Continuar lendo...</a>
            </div>
          </li>
          <li class='col-xl-6 col-sm-12'>
            <div class='pt-2 pb-3 ps-3 m-auto pe-3 border rounded'>
              <small class='mb-2 d-block'>Filmes</small>
              <div class='d-flex'>
                <figure>
                  <img class=' mb-3 m-auto rounded' src="img/home/img4obra.webp" alt="Imagem de banner do Filmes Avatar 2">
                  <figcaption>Avatar 2</figcaption>
                </figure>
              </div>
              <p class='text-center'>Uma década após a primeira batalha de Pandora entre os Na'vi e os humanos, Jake (Sam Worthington) vive pacificamente com sua família e seu povo. Ele e Ney'tiri (Zoe Saldana) formaram uma família e estão fazendo de tudo para superar os conflitos...</p>
              <a class="verde" href="SinopseAvatar2.php">Continuar lendo...</a>
            </div>
          </li>
          <li class='col-xl-6 col-sm-12 mb-5'>
            <div class='pt-2 pb-3 ps-3 m-auto pe-3 border rounded'>
              <small class='mb-2 d-block'>Livros</small>
              <div class='d-flex'>
                <figure>
                  <img class=' mb-3 m-auto rounded' src="img/home/img6obra.jpg" alt="Frankstein">
                  <figcaption>Frankstein</figcaption>
                </figure>
              </div>
              <p class='text-center'>Victor é um cientista que dedica a juventude e a saúde para descobrir como reanimar tecidos mortos e gerar vida artificialmente. O resultado de sua experiência, um monstro que o próprio Frankenstein considera uma...</p>
              <a class="verde" href="livrosPgFAV.php">Continuar lendo...</a>
            </div>
          </li>
          <li class='col-xl-6 col-sm-12'>
            <div class='pt-2 pb-3 ps-3 m-auto pe-3 border rounded'>
              <small class='mb-2 d-block'>Series</small>
              <div class='d-flex'>
                <figure>
                  <img class='mb-3 m-auto rounded' src="img/imgAnimacao/premiados/img1.webp" alt="Wall-e">
                  <figcaption>4° Review</figcaption>
                </figure>
              </div>
              <p class='text-center'>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Recusandae alias perferendis nihil aliquam quos dolorem maiores vel facilis! Amet deserunt quibusdam quod porro sed cumque nulla harum rerum quis obcaecati.</p>
              <a class="verde" href="NoticiasConteudo.php">Continuar lendo...</a>
            </div>
          </li>
        </ul>
      </section>
    </main>
  </div>
  <?php include 'include/footer.php'; ?>



  <script src="js/script.js"></script>
  <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script> -->
</body>

</html>