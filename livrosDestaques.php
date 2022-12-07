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
    
      <div class=" sla row justify-content-center ">
        <article class=" col-xl-5 col-md-6 col-sm-12">
          <div class="mud bordas">
            <a href="livrosDst3.php">
          <h2 class="titulos">Última criatura humana</h2>
            <img class="brdr"src="img/livros/humano.webp"  alt="Imagem da capa do livro 'Última criatura humana'">
            <p class="br" >Em um futuro não muito distante, os robôs exterminaram a espécie humana. E XR_935, um robô de doze anos, não vê nisso um problema. Sem humanos, não há guerras... </p>
            </a>
          </div>
        </article>
      <article class="col-xl-5 col-md-6 col-sm-12">     
        <div class="mud bordas">
          <a href="livrosDst2.php">
          <h2 class="titulos">Crônicas Marcianas</h2>
          <img class="brdr" src="img/livros/marcianas.webp" alt="Imagem da capa da obra 'Crônicas Marcianas'">
          <p class="br">As crônicas marcianas foram reunidas num livro por seu autor, no início dos anos 1960, e interligadas por pequenas costuras narrativas... </p>
          </a>
        </div>
      </article>
    </div>
    <div class="sla row justify-content-center ">
      <article class="  col-xl-5 col-md-6 col-sm-12">
        <div class="mud bordas">
          <a href="livrosDst1.php">
        <h2 class="titulos" >A guerra dos Mundos</h2>
          <img class="brdr" src="img/livros/mundos.webp" alt="Imagem da capa da obra' A guerra dos mundos'">
          <p class="br">Eles vieram do espaço. Eles vieram de Marte. Com tripés biomecânicos gigantes, querem conquistar a Terra e manter os humanos como escravos...</p>
          </a>
        </div> 
      </article>

      <article class=" col-xl-5 col-md-6 col-sm-12">     
        <div class="mud bordas">
          <a href="livrosDst.php">
          <h2 class="titulos">Viagem a Alfa Centauri</h2>
          <img class="brdr"src="img/livros/viagem.webp" alt="Imagem da capa do livro 'Alfa Centauri'">
          <p class="br">Ambientado no futuro, a oitenta anos de hoje, este romance do autor bestseller Michael O’Brien trata de uma expedição enviada do planeta...</p>
          </a>
        </div>
      </article>
    </div>
  </div>
</div>
    <div class='config bg-secondary mt-5 mb-5 '>
        <h2 class='py-5 titulo'>Notícias</h2>
    </div>
    <div class="d-flex justify-content-xl-around flex-md-wrap flex-xl-nowrap flex-lg-nowrap flex-sm-wrap flex-wrap justify-content-md-center justify-content-sm-center mt-4 noticiaContainer">
    <?php include 'include/noticiaFilme3.php';?>
    <?php include 'include/noticiaFilme1.php';?>
    </div>
    <div class="d-flex justify-content-xl-around flex-md-wrap flex-xl-nowrap flex-lg-nowrap flex-sm-wrap flex-wrap justify-content-md-center justify-content-sm-center mt-4 noticiaContainer">
    <?php include 'include/noticiaAnimacao3.php';?>
    <?php include 'include/noticiaAnimacao1.php';?>
    </div>
  </div>
  <?php include 'include/footer.php';?>
  </main>

  <script src="js/script.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>