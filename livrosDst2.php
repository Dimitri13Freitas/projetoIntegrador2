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
    
    <div class="row cntr">
      <div class=" sla col-12">
        <h2 class="titulos">Crônicas Marcianas</h2>
        <small class='titulos mb-3 d-block small pb-2 border-bottom border-2'>Dezembro 01, 2022 by <a href="https://www.universodosleitores.com/2014/05/as-cronicas-marcianas-de-ray-bradbury.html">UniversoLeitores.com</a></small>
      </div>

      <article class="col-xl-2 col-md-4 col-sm-5">
        <img class="brdr" src="img/livros/cronic.webp"  alt="Imagem da capa do livro 'Crônicas Marcianas'">
      </article>
      <section class="col-xl-5 col-md-7 col-sm-12">
      <h2> Sinopse </h2>
        <p> As crônicas marcianas foram reunidas num livro por seu autor, no início dos anos 1960, e interligadas por pequenas costuras narrativas. As crônicas acabaram formando emocionante panorama imaginário da chegada do homem a Marte e da colonização do planeta pela espécie humana. Livro que pode ser visto como um romance fragmentado ou uma seqüência conceitual de contos. </p>
      </section>
    </div>

    <div class="row justify-content-center">
      <aside class="col-xl-10 col-md-12 col-sm-12">
      <h1 class="titulos"> Análise Crítica, by Isabela Lapa </h1>
      <p>Para começar esta resenha preciso dizer o quanto sou fã dos trabalhos de Ray Bradbury! Primeiro me apaixonei por Fahrenheit 451, uma distopia alucinante e completamente crítica, que aborda uma época em que os livros eram queimados pelo Governo e considerados objetos proibidos. Em seguida, li A Cidade Inteira Dorme e outros contos e descobri a capacidade de Ray para criar contos que nos transportam a outros mundos e permitem sensações únicas e diferentes. Com isso, imaginava que o escritor já havia revelado todo o seu talento e que nada mais me surpreenderia, mas estava enganada. “As Crônicas Marcianas” me mostraram um Ray ainda mais ousado e extremamente criativo. A verdade é que o livro superou todas as minhas expectativas e se tornou um dos queridinhos da minha estante, pois os contos deste livro, que foram escritos no ano de 1950, nos transportam para o universo tão misterioso do planeta Marte. Apesar de independentes, é interessante que a leitura seja feita em ordem, já que a cada conto mergulhamos com mais profundidade na mente do escritor e conseguimos construir claramente a sua ideia de como seria Marte desde o primeiro foguete da Terra que pousou por lá (1999).</p>
      </aside> 
    </div>
      
    <div class="row justify-content-center">
      <div class="col-xl-10 col-md-12 col-sm-12">
        <h1>Douglas Bradbury </h1>
      </div>
      <article class="col-xl-4 col-md-6 col-sm-12 justify-content-center">
          <img class="brdr"src= "img/livros/ray.webp"   alt="Imagem do autor Ray Bradbury">
      </article>
      <section class=" col-xl-6 col-md-6 col-sm-12">
        <p >Ray Douglas Bradbury nasceu na pequena cidade de Waukegan, a 66 quilômetros ao norte de Chicago, às margens do lago Michigan, no estado americano de Illinois, no dia 22 de agosto de 1920, vindo a falecer aos 92 anos, em 6 de junho de 2012, na cidade de Los Angeles, Califórnia.Um dado bastante curioso é que mesmo vivendo na terra do automóvel, Ray Bradbury nunca tirou uma carteira de motorista, deslocando-se sempre a pé, com sua bicicleta ou de carona com amigos ou parentes.Narrativas de ficção científica futurista, horror e suspense eram o estilo de literatura apreciado por  Ray Bradbury.Ray Bradbury, crítico dos costumes, ficou famoso ao ter seu livro Fahrenheit 451 publicado, pela primeira vez, em 1953.O livro Fahrenheit 451 foi adaptado para o cinema que, em 1956, lançou o filme com o mesmo nome, dirigido por François Truffaut. </p>
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