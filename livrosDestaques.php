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
    
      <section class=" sla row justify-content-center " style="text-align:center">
        <h2>Destaques</h2>
        <a aria-label='Seguir para Livros' class=" col-xl-5 col-md-6 col-sm-12"href="livrosDst3.php ">
        <article >
          <div class="mud bordas">
          <h3 class="titulos">Última criatura humana</h3>
          <figure>
            <img class="brdr"src="img/livros/humano.webp"  alt="Imagem da capa do livro 'Última criatura humana'">
            <figcaption> Última Criatura, 2005</figcaption>
          </figure>
            <p class="br" >Em um futuro não muito distante, os robôs exterminaram a espécie humana. E XR_935, um robô de doze anos, não vê nisso um problema. Sem humanos, não há guerras... </p> 
          </div>
        </article>
        </a>
        <a aria-label='Seguir para Livros' class="col-xl-5 col-md-6 col-sm-12"href="livrosDst2.php">
      <article >     
        <div class="mud bordas">
          <h3 class="titulos">Crônicas Marcianas</h3>
          <figure>
            <img class="brdr" src="img/livros/marcianas.webp" alt="Imagem da capa da obra 'Crônicas Marcianas'">
            <figcaption> Crônicas Marcianas, 2000</figcaption>
          </figure>
          <p class="br">As crônicas marcianas foram reunidas num livro por seu autor, no início dos anos 1960, e interligadas por pequenas costuras narrativas... </p>
         
        </div>
      </article>
      </a>
      <!-- </section >
    <div class="sla row justify-content-center "> -->
    <a aria-label='Seguir para livros' class="  col-xl-5 col-md-6 col-sm-12"href="livrosDst1.php">
      <article >
        <div class="mud bordas">
         
        <h3 class="titulos" >A guerra dos Mundos</h3>
        <figure>
          <img class="brdr" src="img/livros/mundos.webp" alt="Imagem da capa da obra' A guerra dos mundos'">
          <figcaption>A guerras dos mundos, 2007</figcaption>
        </figure>
          <p class="br">Eles vieram do espaço. Eles vieram de Marte. Com tripés biomecânicos gigantes, querem conquistar a Terra e manter os humanos como escravos...</p>
         
        </div> 
      </article>
      </a>

      <a aria-label='Seguir para Livros' class=" col-xl-5 col-md-6 col-sm-12" href="livrosDst.php">
      <article >     
        <div class="mud bordas">
         
          <h3 class="titulos">Viagem a Alfa Centauri</h3>
          <figure>
            <img class="brdr"src="img/livros/viagem.webp" alt="Imagem da capa do livro 'Alfa Centauri'">
            <figcaption>Viagem a Alfa, 2009</figcaption>
          </figure>
          <p class="br">Ambientado no futuro, a oitenta anos de hoje, este romance do autor bestseller Michael O’Brien trata de uma expedição enviada do planeta...</p>
         
        </div>
      </article>
      </a>
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

    <!-- <script src="js/script.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script> -->
</body>

</html>