<!DOCTYPE html>
<html lang='pt-br'>

<head>
  <meta charset="UTF-8">
  <link rel="shortcut icon" href="img/icon.svg" type="image/x-icon">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Ficção cientifica</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
<main>
  <div class='container'>
    <?php include 'include/nav.php';?>
    <?php include 'include/bannerLivros.php';?>
    
    <div class="row">
      <div class=" sla col-12">
        <h1>George Orwell</h1>
      </div>
      <article class="col-xl-5 col-md-8 col-sm-12">
        <img class="brdr" src="img/livros/George.webp" alt="Imagem do autor George Orwell">
      </article>
      <section class=" col-xl-6 col-md-12 col-sm-12">
        <p > George Orwell foi considerado o maior cronista do século xx, já devem imaginar o porquê, né? É muita criatividade, critica social e ficção científica misturada em suas obras, o que as deixam únicas e agradam aos múltiplos gostos literários. George Orwell foi um dos escritores britânicos mais famosos do século XX. Ele era um escritor do modernismo, e suas obras apresentavam uma linguagem simples e objetiva que acabou cativando leitores em todo o mundo. Mesmo assim, seus súditos nunca chegaram perto da mediocridade.</p> 
        <p>O sucesso literário do autor só veio em 1945, com a publicação de seu livro "A revolução dos Bichos". O romancista publicaria mais tarde sua obra mais famosa, "1984", em 1949, que, como aquele, denunciava os regimes totalitários. Ele morreu em Londres em 21 de janeiro de 1950.</p>
      </section>
    </div>
      <div class="sla row justify-content-center"> 
        <h2 class="col-12 justify-content-center" style="text-align:center ;"> Principais produções </h2>
        <section class="mud principais brd col-xl-3 col-md-5 col-sm-12 justify-content-center border">
          <a class="col"href="livrosCnt4PgAutores.php">
          <img class="brdr"src="img/livros/1984.webp" alt="Imagem da capa do livro '1984'">
          <h3 class="br"> 1984 </h3>
          </a>
        </section>
        <section class="mud principais brd col-xl-3 col-md-5 col-sm-12 justify-content-center border">
          <a class="col" href="livrosCnt5PgAutores.php">
          <img class="brdr" src="img/livros/revolu.webp" alt="Imagem da capa do livro 'A Revolução dos Bichos'">
          <h3 class="br">Revolução dos Bichos </h3>
          </a>
        </section>
        <section class="mud principais brd col-xl-3 col-md-5 col-sm-12 justify-content-center border">
          <a class="col" href="livrosCnt6PgAutores.php">
          <img class="brdr" src="img/livros/planta.webp" alt="Imagem do livro 'Flor da Inglaterra'">
          <h3 class="br"> Flor da Inglaterra </h3>
          </a>
        </section>
    </div>

    <div>
      <h3 class="titulos">Outro Autor</h3>
    </div>
    <div class="d-flex justify-content-xl-around flex-md-wrap flex-xl-nowrap flex-lg-nowrap flex-sm-wrap flex-wrap justify-content-md-center justify-content-sm-center mt-4 noticiaContainer">
        <section class="noticia rounded-3  border d-flex align-items-center">
          <div class="noticiaSeila d-flex flex-column">
            <small>sobre o autor</small>
            <h2>Arthur C. Clark</h2>
            <p>Arthur Charles Clark foi um escritor no universo da ficção científica muito renomado, sendo autor de várias obras icônicas relacionadas à ficção. Suas histórias eram tão interessantes que...</p>
            <a href="livrosPgAutores.php"> Continuar lendo...</a>
          </div>
          <img src="img/livros/arthur2.webp" alt="Imagem do autor Arthur c.Ckark">
        </section>
    </div>
</div>



<div class='config bg-secondary mt-5 mb-5 '>
      <h2 class='py-5 titulo'>Notícias</h2>
</div>


<div class="d-flex justify-content-xl-around flex-md-wrap flex-xl-nowrap flex-lg-nowrap flex-sm-wrap flex-wrap justify-content-md-center justify-content-sm-center mt-4 noticiaContainer">
    <?php include 'include/noticiaAnimacao1.php';?>
    <?php include 'include/noticiaFilme2.php';?>
      </div>
      <div class="d-flex justify-content-xl-around flex-md-wrap flex-xl-nowrap flex-lg-nowrap flex-sm-wrap flex-wrap justify-content-md-center justify-content-sm-center mt-4 noticiaContainer">
        <?php include 'include/livrosNoticia1.php';?>
        <?php include 'include/noticiaAnimacao3.php';?>
      </div>
    </div>
    </div>
    <?php include 'include/footer.php';?>
  </main>

  <script src="js/script.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>