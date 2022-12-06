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
    
    <div class="row cntr">
      <div class=" sla col-12">
        <h2 class="titulos">Flor da Inglaterra</h2>
        <small class='titulos mb-3 d-block small pb-2 border-bottom border-2'>Dezembro 01, 2022 by <a href="https://guiadoestudante.abril.com.br/dica-cultural/a-revolucao-dos-bichos-conheca-o-classico-que-critica-o-totalitarismo/#:~:text=A%20cl%C3%A1ssica%20obra%20do%20autor,pela%20Revolu%C3%A7%C3%A3o%20Russa%2C%20de%201917.">Guiadoestudante.com</a></small>
      </div>
     
      <article class="col-xl-2 col-md-3 col-sm-5">
        <img class="brdr" src="img/livros/planta.webp"  alt="">
      </article>
      <section class="col-xl-5 col-md-9 col-sm-12">
      <h2> Sinopse </h2>
        <p> Gordon Comstock chega aos trinta anos, sendo um poeta frustado que largou um bom emprego e vive revoltado contra o capitalismo e a falta de dinheiro, podendo ser um autorretrato do autor. Nos quartos de pensão horríveis que habita, e a classe desesperadora que se encontra, para ele, a aspidistra é o símbolo da classe média inglesa, a flor da Inglaterra, uma planta que se adapta em ambiente poluído, sem luz natural, e cresce desenfreadamente.</p>
      </section>
    </div>
      <div class=" row justify-content-center"> 
        <article class="principais xl-col-7 md-col-11 sm-col-12">
          <h2   > Crítica </h2>
          <p>O livro mostra através de metáforas a falta de dinheiro. Praticamente só foca nisso. A maldita falta de dinheiro!E por isso, talvez a insistente vontade de matar sua aspidistra seria, na verdade, uma forma de demonstrar que precisava que sua condição financeira mudasse. Uma crítica muito bem escrita, recomendada para quem gosta de grandes obras e histórias que falem de livros..<p>
        </article>
      </div>      
  <div>
      <h3 class="titulos">Outros lidos</h3>
  </div>
    <div class="d-flex justify-content-xl-around flex-md-wrap flex-xl-nowrap flex-lg-nowrap flex-sm-wrap flex-wrap justify-content-md-center justify-content-sm-center mt-4 noticiaContainer">
        <section class="noticia rounded-3  border d-flex align-items-center">
          <div class="noticiaSeila d-flex flex-column">
            <small>Sinopse</small>
            <h2>1984</h2>
            <p>Após uma guerra global, semelhante à segunda grande guerra, porém com mais bombas atômicas, o mundo foi dividido em três continentes: Lestásia, Eurásia e Oceania, onde fica a cidade de Londres. Esse último é comandado pelo...</p>
            <a href="livrosCnt4PgAutores.php">Continuar lendo...</a>
          </div>
          <img src="img/livros/1984.webp" alt="Imagem da acapa do livro  '1984'">
        </section>
        <section class="noticia rounded-3 border d-flex align-items-center">
          <div class="noticiaSeila d-flex flex-column">
            <small>Sinopse</small>
            <h2>A revolução dos bichos</h2>
            <p>A clássica obra do autor inglês George Orwell narra a jornada de um grupo de animais que decide se rebelar contra o dono da fazenda, o Sr. Jones, e com a exploração dos humanos, o totalitarismo...</p>
            <a href="livrosCnt5PgAutores.php">Continuar lendo...</a>
          </div>
          <img src="img/livros/revolu.webp" alt="Imagem da capa do livro 'A revolução dos bichos'">
        </section>
      </div>
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