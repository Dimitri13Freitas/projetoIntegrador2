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



<body>
  <div class='container'>
    <?php include 'include/nav.php'; ?>
    <?php include 'include/bannerAnimacoes.php'; ?>

    <main>
      <article>
        <div class='row mt-5'>
          <div class='col-xl-8 col-md-12 col-sm-12'>
            <h2 class="h1 mb-1">Rick and Morty</h2>
            <small class='mb-3 d-block small pb-2 border-bottom border-2' aria-label='Link para a fonte do conteúdo da página'>Novembro 23, 2022 by <cite><a aria-label="Link que leva para o endereço de onde foram tiradas essas informações" href="https://www.aficionados.com.br/rick-and-morty/">www.aficionados.com.br</a></cite></small>
            <p>Criada por Justin Roiland e Dan Harmon, Rick & Morty é uma série animada de comédia que mostra as aventuras interdimensionais de Rick, a mente mais brilhante da galáxia, e seu neto Morty.</p>
            <p>Com sua arma capaz de criar portais para viajar no tempo-espaço, Rick leva Morty para explorar todos as absurdas formas de vida que o universo é capaz de sustentar. Apesar de genial, Rick tem sofre de alcoolismo e possui uma relação conflituosa com sua família, fruto da sua visão cínica da vida e seu egoísmo. Por outro lado, Morty está longe de ter o intelecto do seu avô, mas é o único capaz de fazê-lo ser um pouquinho mais gentil.</p>
            <p>Entre momentos hilários e reflexões interessantes sobre a vida, Rick & Morty arranca gargalhadas e ainda rende ótimas discussões filosóficas.</p>
          </div>
        </div>
        <figure class=' row my-3'>
          <div class='col-xl-7 col-md-12  col-sm-12 conteudo'>
            <img class='rounded' src="img/imgAnimacao/destaques/img2Conteudo.webp" alt="Rick e morty saindo de dentro de um portal da arma de portais.">
          </div>
          <figcaption class='col-xl-5 col-md-12 col-sm-12 sobreImg'>
            <h4>Sobre a Imagem:</h4>
            <p>Rick and Morty respectivamente saindo de um portal</p>
          </figcaption>
        </figure>
        <div class='row mb-5'>
          <div class='col-xl-8 col-md-12 col-sm-12'>
            <p>Em questão das próximas temporadas após a atual 6ª temporada de Rick and Morty, Roiland revelou na entrevista acima que atualmente estão “escrevendo a 7ª temporada e já trabalhando na 8ª temporada” também. Contudo, no dia 6 de agosto de 2021, Cody Ziglar (roteirista) havia anunciado no Twitter que os roteiros da 7ª temporada haviam sido finalizados prontos. Então, será que o co-criador expôs um retrocesso?</p>
            <p>Talvez sim. Mas, não se prendam à isso. Visto que revisões são um bom sinal de refinamento. Além disso, há algum tempo o Adult Swim “padronizou” este modelo duplo de produção das temporadas do seriado.</p>
          </div>
        </div>
      </article>
    </main>
    <div class="d-flex justify-content-xl-between flex-md-wrap flex-xl-nowrap flex-lg-nowrap flex-sm-wrap flex-wrap justify-content-md-center justify-content-sm-center mt-4 noticiaContainer">
      <?php include 'include/noticiaAnimacao1.php'; ?>
      <?php include 'include/noticiaAnimacao2.php'; ?>
    </div>
  </div>
  <?php include 'include/footer.php'; ?>


  <script src="js/script.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>