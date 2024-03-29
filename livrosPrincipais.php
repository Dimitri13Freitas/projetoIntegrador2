<!DOCTYPE html>
<html lang='pt-br'>

<head>
   <meta charset="UTF-8">
  <link rel="shortcut icon" href="img/assets/icon.svg" type="image/x-icon">
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

    <div class=" fundo row justify-content-center ">
        <article class=" sla col-xl-6 col-md-6 col-sm-12">
          <div class="mud pgAuto">
            <h2>Arthur C.Clark</h2>
              <img class="brdr" src="img/livros/Arthur.webp" alt="Autorretrato de um dos autores mais conhecidos de ficcção científica, Arthur C.Clark">
              <p> Arthur Charles Clark foi um escritor no universo da ficção científica muito renomado, sendo autor de várias obras icônicas relacionadas à ficção. Suas histórias eram tão interessantes...</p>
              <a aria-label='Continuar lendo sobre Arthur C. Clark' class="verde" href="livrosPgAutores.php">Continue lendo... </a>
              <!-- <hr> -->
          </div>
        
        <div class="mud pgAuto">
            <h2>George Orwell</h2>
            <img class="brdr" src="img/livros/George.webp"  alt="Autorretrato de um dos autores mais conhecidos de ficcção científica, George Orwell">
            <p> George Orwell foi considerado o maior cronista do século xx, já devem imaginar o porquê, né? É muita criatividade, critica social e ficção científica misturada em suas obras, o que as deixam...  </p></a>
          <!-- <hr>  -->
          <a aria-label='Continuar lendo sobre George Orwell' class='verde' href="livrosPgAutores2.php">Continue lendo...</a>
        </div>  
      </article>
    
      <section class="not col-xl-3 col-md-4 col-sm-12 noticia">
        <div>
          <h2 class="titulos">Notícias</h2>
        </div>
        <div class="d-flex justify-content-xl-around flex-md-wrap flex-xl-nowrap flex-lg-nowrap flex-sm-wrap flex-wrap justify-content-md-center justify-content-sm-center mt-4 noticiaContainer">
            <?php include 'include/noticiaAnimacao1P.php';?>
        </div>
        <div class="d-flex justify-content-xl-around flex-md-wrap flex-xl-nowrap flex-lg-nowrap flex-sm-wrap flex-wrap justify-content-md-center justify-content-sm-center mt-4 noticiaContainer">
          <?php include 'include/livrosNoticia3P.php';?>
        </div>
        <div class="d-flex justify-content-xl-around flex-md-wrap flex-xl-nowrap flex-lg-nowrap flex-sm-wrap flex-wrap justify-content-md-center justify-content-sm-center mt-4 noticiaContainer">
        <?php include 'include/noticiaFilme2P.php';?>
        </div>
      <div class="d-flex justify-content-xl-around flex-md-wrap flex-xl-nowrap flex-lg-nowrap flex-sm-wrap flex-wrap justify-content-md-center justify-content-sm-center mt-4 noticiaContainer">
      <?php include 'include/livrosNoticia2P.php';?>
      </div>
</section>
  </div>
</div>
    <?php include 'include/footer.php';?>
  </main>

    <script src="js/script.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>