<!DOCTYPE html>
<html lang='pt-br'>

<head>
   <meta charset="UTF-8">
  <link rel="shortcut icon" href="img/assets/icon.svg" type="image/x-icon">
  <link rel="shortcut icon" href="img/icon.svg" type="image/x-icon">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Ficção cientifica</title>
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css"> -->
</head>

<body>
<main>
  <div class='container'>
    <?php include 'include/nav.php';?>
    <?php include 'include/bannerLivros.php';?>
    
    <article class="row cntr">
      <div class=" sla col-12">
        <h2 class="titulos">Encontro com Rama</h2>
        <small class='titulos mb-3 d-block small pb-2 border-bottom border-2'>Dezembro 01, 2022 by <a href="https://aodisseia.com/encontro-com-rama-resenha-livro-arthur-clarke/#:~:text=Sinopse%20de%20Encontro%20com%20Rama,-Ap%C3%B3s%20a%20terr%C3%ADvel&text=Uma%20expedi%C3%A7%C3%A3o%20%C3%A9%20enviada%20para,mente%20e%20os%20conceitos%20humanos.">Aodisseia.com</a></small>
      </div>
      <figure class="col-xl-2 col-md-3 col-sm-5">
        <img class="brdr" src="img/livros/livro2.webp"  alt="Imagem da capa do livro 'Encontro com Rama'">
        <figcaption>Encontro com Rama, 1980</figcaption>
      </figure>
      <div class="col-xl-5 col-md-9 col-sm-12">
      <h3> Sinopse </h3>
        <p> Após a terrível colisão de um meteorito contra o continente europeu, líderes mundiais e cientistas criaram um sistema de monitoramento para evitar que essas catástrofes voltassem a acontecer.Quase cinquenta anos depois, a humanidade acompanha, alarmada, a chegada de um novo objeto de proporções inimagináveis que avança na direção de nosso Sol. Uma expedição é enviada para explorar o que se imagina ser um meteoro colossal, mas que se revela uma sofisticada construção, repleta de enigmas que desafiam a mente e os conceitos humanos.</p>
      </div>
  
    </div>
      <div class=" row justify-content-center"> 
        <aside class="principais xl-col-7 md-col-11 sm-col-12">
          <h3   > Crítica </h3>
          <p>A obra foi escrita em terceira pessoa, e os capítulos se passam não só dentro de Rama, mas também em cenas de reuniões online entre os líderes planetários e cientistas, que tomam decisões a partir das descobertas da Endeavor, assim como a partir dos dados da tripulação tentam entender melhor a função desse objeto aqui. Essas reuniões abrem uma brecha para o autor fazer críticas a um sistema burocrático para tomada de decisões que parece mesmo não ter fim.</p>
        </aside>
      </div>   

  <section>
    <div>
      <h2 class="titulos">Outros lidos</h2>
    </div>
    <div class="d-flex justify-content-xl-around flex-md-wrap flex-xl-nowrap flex-lg-nowrap flex-sm-wrap flex-wrap justify-content-md-center justify-content-sm-center mt-4 noticiaContainer">
        <article class="noticia rounded-3  border d-flex align-items-center">
          <div class="noticiaSeila d-flex flex-column">
            <small>Sinopse</small>
            <h3>Uma Odisseia no Espaço</h3>
            <p>No começo reina a selvageria. Homens pré-históricos dão os primeiros passos rumo à evolução fundada na dominação do mais fraco e na conquista territorial, ambas tão caras à nossa espécie...</p>
            <a href="livrosCnt1PgAutores.php">Continuar lendo...</a>
          </div>
          <figure>
            <img src="img/livros/odisseia.webp" alt="Imagem da capa do livro 'Uma Odisseia no Espaço'">
            <figcaption> Uma Odissei no Espaço, 1990</figcaption>
          </figure>
        </article>
        <article class="noticia rounded-3 border d-flex align-items-center">
          <div class="noticiaSeila d-flex flex-column">
            <small>Sinopse</small>
            <h3>Fim da Infância</h3>
            <p>Um dia comum, uma “horda” de extraterrestres pairam sobre as principais cidades do mundo, oferecendo uma mão amiga. Oferecendo o nirvana em vida, o paraíso perdido há tempos. A erradicação da fome, o fim das guerras...</p>
            <a href="livrosCnt3PgAutores.php">Continuar lendo...</a>
          </div>
          <figure>
            <img src="img/livros/fim.webp" alt="Imagem da capa do livro 'Fim da Infância'">
            <figcaption>Fim da Infância, 1980</figcaption>
          </figure>
        </article>
    </div>
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
    <?php include 'include/footer.php';?>
  </main>

  <script src="js/script.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>