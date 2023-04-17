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
        <h2 class="titulos">A Revolução dos Bichos</h2>
        <small class='titulos mb-3 d-block small pb-2 border-bottom border-2'>Dezembro 01, 2022 by <a href="https://guiadoestudante.abril.com.br/dica-cultural/a-revolucao-dos-bichos-conheca-o-classico-que-critica-o-totalitarismo/#:~:text=A%20cl%C3%A1ssica%20obra%20do%20autor,pela%20Revolu%C3%A7%C3%A3o%20Russa%2C%20de%201917.">Guiadoestudante.com</a></small>
      </div>
     
      <figure class="col-xl-2 col-md-3 col-sm-5">
        <img class="brdr" src="img/livros/revolu.webp"  alt="Imagem da capa do livro 'A revolução dos bichos', com um porco de capa, simbolo do livro.">
        <figcaption> A revolução dos bichos, 1990</figcaption>
      </figure>
      <div class="col-xl-5 col-md-9 col-sm-12">
      <h3> Sinopse </h3>
        <p> A clássica obra do autor inglês George Orwell narra a jornada de um grupo de animais que decide se rebelar contra o dono da fazenda, o Sr. Jones, e com a exploração dos humanos. É uma alegoria e uma e uma sátira sobre o totalitarismo, mais especificamente com os rumos que tomados pela Revolução Russa, de 1917.</p>
      </div>
    </article>

      <div class=" row justify-content-center"> 
        <aside class="principais xl-col-7 md-col-11 sm-col-12">
          <h3>Crítica </h3>
          <p>George Orwell pertencia a um grupo de socialistas ocidentais que acreditava nos ideais de Karl Marx. “Ele faz parte de uma linha de intelectuais europeus que acreditavam no socialismo como uma utopia  democrática igualitária; em um governo proletário, com sindicatos, assembleias e representantes populares no poder”, diz Duique. “É uma geração influenciada ainda pelo pensamento utópico marxista, , que sonhava com uma revolução socialista que trouxesse, além da igualdade, a liberdade”.<p>
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
            <h3>1984</h3>
            <p>Após uma guerra global, semelhante à segunda grande guerra, porém com mais bombas atômicas, o mundo foi dividido em três continentes: Lestásia, Eurásia e Oceania, onde fica a cidade de Londres. Esse último é comandado pelo...</p>
            <a href="livrosCnt4PgAutores.php">Continuar lendo...</a>
          </div>
          <figure>
            <img src="img/livros/1984.webp" alt="Imagem da capa do livro '1984'">
            <figcaption>1984, ano tal</figcaption>
          </figure>
        </article>
        <article class="noticia rounded-3 border d-flex align-items-center">
          <div class="noticiaSeila d-flex flex-column">
            <small>Sinopse</small>
            <h3>Flor da Inglaterra</h3>
            <p>Após a terrível colisão de um meteorito contra o continente europeu, líderes mundiais e cientistas criaram um sistema de monitoramento para evitar que uma catástrofe voltasse...</p>
            <a href="livrosCnt6PgAutores.php">Continuar lendo...</a>
          </div>
          <figure>
            <img src="img/livros/planta.webp" alt="Imagem da capa do livro 'Flor da Inglaterra'">
            <figcaption> Flor da Inglaterra, 1970</figcaption>
          </figure>
      </article>
    </div>
  </section>   
</div>

<div class='config bg-secondary mt-5 mb-5 '>
      <h2 class='py-5 titulo'>Notícias</h2>
</div>

  <div class="container">

        <div class="d-flex justify-content-xl-around flex-md-wrap flex-xl-nowrap flex-lg-nowrap flex-sm-wrap flex-wrap justify-content-md-center justify-content-sm-center mt-4 noticiaContainer">
    <?php include 'include/noticiaAnimacao1.php';?>
    <?php include 'include/noticiaFilme2.php';?>
      </div>
      <div class="d-flex justify-content-xl-around flex-md-wrap flex-xl-nowrap flex-lg-nowrap flex-sm-wrap flex-wrap justify-content-md-center justify-content-sm-center mt-4 noticiaContainer">
        <?php include 'include/livrosNoticia1.php';?>
        <?php include 'include/noticiaAnimacao3.php';?>
      </div>
</div>
    <?php include 'include/footer.php';?>
  </main>

    <!-- <script src="js/script.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script> -->
</body>

</html>