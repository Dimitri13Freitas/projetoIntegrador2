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
    
    <article class="row cntr">
      <div class=" sla col-12">
        <h2 class="titulos">Viagem a Alfa Centauri</h2>
        <small class='titulos mb-3 d-block small pb-2 border-bottom border-2'>Dezembro 01, 2022 by <a href="https://unasp.br/blog/viagem-a-alfa-centauri/">Unasp.com</a></small>
      </div>
      <figure class="col-xl-2 col-md-4 col-sm-5">
        <img class="brdr" src="img/livros/vgm.webp"  alt="Imagem da capa da obra 'Viagem a Alfa Centauri'">
        <figcaption> Viagem a Alfa Centauri, 1990</figcaption>
      </figure>
      <div class="col-xl-5 col-md-7 col-sm-12">
      <h3> Sinopse </h3>
        <p> Ambientado no futuro, a oitenta anos de hoje, este romance do autor bestseller Michael O’Brien trata de uma expedição enviada do planeta Terra a Alfa Centauri, a estrela mais próxima do nosso sistema solar. A Kosmos, uma grande nave espacial que o protagonista Neil de Hoyos descreve como uma “cidade voadora”, é imensa no tamanho e capaz de atingir mais da metade da velocidade da luz.</p>
      </div>
    </article>
  
    <div class="row justify-content-center"> 
      <aside class="col-xl-10 col-md-10 col-sm-12">
        <h3 class="titulos"> Análise Crítica, by Ronaldo Pascoal </h3>
        <p>Olha, eu vou me esforçar ao máximo para não entregar nenhum spoiler. Porém, para entendermos melhor a história contada em Viagem a Alfa Centauri, é preciso compreender o cenário como um todo. O livro é ambientado há mais de 80 anos no futuro e nesse contexto, a Terra entrou em colapso devido às más administrações dos recursos naturais. Sendo considerado um planeta impróprio para a continuidade da vida. Cientistas do mundo todo se empenharam na construção de uma cidade espacial a qual nomearam de Kosmos. </p>
        <p>Diante disso, a missão da Kosmos, é chegar a Alfa Centauri, a estrela mais próxima do nosso Sistema Solar, localizada à 4,5 anos-luz daqui. A viagem com duração de 18 anos no total, promete conforto e hospitalidade a seus tripulantes, sendo completamente equipada para atender às necessidades dos passageiros. A nave é dividida em classes, tendo um capitão, uma equipe de comando e um departamento de vigilância, responsável por manter a “ordem e a normalidade” entre os viajantes, além da classe operária.</p>
      </aside>
  </div>
      
    <article class="row justify-content-center">
      <div class="col-xl-10 col-md-10 col-sm-12">
        <h3>Michael D O'Brien</h3>
      </div>
      <figure class="col-xl-4 col-md-6 col-sm-12 justify-content-center">
          <img class="brdr"src= "img/livros/michael.webp"   alt="Imagem do autor da obra, Michael">
      </figure>
      <div class=" col-xl-6 col-md-6 col-sm-12">
        <p >Nasceu em Ottawa, no Canadá, em 1948. É auto-didata e há mais de trinta anos é pintor. Sua primeira obra como escritor, Padre Elias, tornou-se rapidamente um best-seller com mais de 250 mil cópias vendidas, traduzido posteriormente para mais de dez línguas. É o primeiro de sua série de sete romances apocalípticos, Children of the Last Days. Além da série, seu trabalho como escritor se estende também a artigos e ensaios sobre fé e cultura. Foi editor da revista Nazareth Journal e escreveu também livros não ficcionais nesse mesmo segmento, o mais famoso deles talvez sendo A Landscape with Dragons – The Battle for your Child’s Mind, no qual discute a paganização da cultura e da literatura infantis.</p>
     </div>
    </article>
</div>

  <div class='config bg-secondary mt-5 mb-5 '>
        <h2 class='py-5 titulo'>Notícias</h2>
  </div>
  <div class="container">
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