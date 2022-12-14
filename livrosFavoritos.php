<!DOCTYPE html>
<html lang='pt-br'>

<head>
   <meta charset="UTF-8">
  <link rel="shortcut icon" href="img/assets/icon.svg" type="image/x-icon">
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
    <div class="container">
    <div class="d-flex justify-content-xl-around flex-md-wrap flex-xl-nowrap flex-lg-nowrap flex-sm-wrap flex-wrap justify-content-md-center justify-content-sm-center mt-4 noticiaContainer">
        <section class="noticia rounded-3  border d-flex align-items-center">
          <div class="noticiaSeila d-flex flex-column">
            <small>Análise da obra</small>
            <h2>Frankstein</h2>
            <p>Victor é um cientista que dedica a juventude e a saúde para descobrir como reanimar tecidos mortos e gerar vida artificialmente. O resultado de sua experiência, um monstro que o próprio Frankenstein considera uma aberração...</p>
            <a href="livrosPgFAV.php">Continuar lendo...</a>
          </div>
          <img src="img/livros/frankstein3.webp" alt="Imagem da capa da obra 'Frankstein'">
        </section>
        <section class="noticia rounded-3 border d-flex align-items-center">
          <div class="noticiaSeila d-flex flex-column">
          <small>Análise da obra</small>
            <h2>Nós</h2>
            <p>Nós é um romance distópico escrito entre 1920 e 1921 pelo escritor russo Yevgeny Zamyatin. A história narra as impressões de um cientista sobre o mundo em que vive, uma sociedade aparentemente perfeita mas opressora...</p>
            <a href="livrosPgFAV2.php">Continuar lendo...</a>
          </div>
          <img src="img/livros/zamia.webp" alt="Imagem da capa da obra 'Zamiátin'">
        </section>
      </div>

      <div class="d-flex justify-content-xl-around flex-md-wrap flex-xl-nowrap flex-lg-nowrap flex-sm-wrap flex-wrap justify-content-md-center justify-content-sm-center mt-4 noticiaContainer">
        <section class="noticia rounded-3  border d-flex align-items-center">
          <div class="noticiaSeila d-flex flex-column">
          <small>Análise da obra</small>
            <h2>Mochileiro das Galáxias</h2>
            <p>O Céu sobre o porto tinha cor de televisão num canal fora do ar. Considerada a obra precursora do movimento cyberpunk e um clássico da ficção científica...</p>
            <a href="livrosPgFAV3.php">Continuar lendo...</a>
          </div>
          <img src="img/livros/mochileiro.webp" alt="Imagem da capa da Obra 'Mochileiros da Galáxia'">
        </section>
        <section class="noticia rounded-3 border d-flex align-items-center">
          <div class="noticiaSeila d-flex flex-column">
          <small>Análise da obra</small>
            <h2>A mão esquerda da escuridão</h2>
            <p>Genly Ai foi enviado a Gethen com a missão de convencer seus governantes a se unirem a uma grande comunidade universal. Ao chegar ali, o experiente emissário...</p>
            <a href="livrosPgFAV4.php">Continuar lendo...</a>
          </div>
          <img src="img/livros/im0(8).webp" alt="Imagem da capa da Obra 'A mão esquerda da escuridão'">
        </section>
      </div>
</div>
  </div>
<div class='config bg-secondary mt-5 mb-5 '>
      <h2 class='py-5 titulo'>Vistos Também</h2>
</div>
<div class="container">
    <div class="d-flex justify-content-xl-around flex-md-wrap flex-xl-nowrap flex-lg-nowrap flex-sm-wrap flex-wrap justify-content-md-center justify-content-sm-center mt-4 noticiaContainer">
      <?php include 'include/livrosNoticia2.php';?>
      <?php include 'include/livrosNoticia1.php';?>
    </div>
  </div>
  <?php include 'include/footer.php';?>
  </main>

  <script src="js/script.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>