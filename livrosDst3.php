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
        <h2 class="titulos">Última Criatura Humana</h2>
        <small class='titulos mb-3 d-block small pb-2 border-bottom border-2'>Dezembro 01, 2022 by <a href="https://www.topleituras.com/livros/criatura-humana-29b2">Topleituras.com</a></small>
      </div>
     
      <article class="col-xl-2 col-md-4 col-sm-5">
        <img class="brdr" src="img/livros/ult.webp"  alt="Imagem da capa da obra 'Última criatura humana'">
      </article>
      <section class="col-xl-5 col-md-7 col-sm-12">
      <h2  > Sinopse </h2>
        <p>Em um futuro não muito distante, os robôs exterminaram a espécie humana. E XR_935, um robô de doze anos, não vê nisso um problema. Sem humanos, não há guerras, não há poluição, não há crime. Cada membro da sociedade tem um objetivo e tudo funciona com eficiência. Até que um dia, XR descobre algo impossível: uma garota chamada Emma. Estava assustada e precisando de ajuda. Agora, XR vai embarcar numa perigosa viagem com Emma e dois outros robôs para levá-la em segurança a um ponto misterioso do mapa. Mas como vão sobreviver num lugar onde as regras nunca podem ser quebradas e no qual a espécie humana era considerada extinta?
        </p>
      </section>
    </div>
  

    <div class="row cntr"> 
      <aside class="col-xl-10 col-md-12 col-sm-12">
        <h1 class="titulos"> Análise Crítica, by Yasmin Braga </h1>
        <p>A melhor forma de descrever o que acontece em "A última criatura humana" seria: três amigos robôs, uma garota de 12 anos e uma aventura. A escrita é realmente fácil de fluir, a trama é envolvente e os personagens são, em sua maioria, adoráveis. Se você realmente parar pra pensar, a premissa é até bem sombria. Mas no geral tudo foi abordado de forma leve. Gostei também que esse livro introduz as crianças aos conceitos básicos da linguagem/logaritmos de máquinas. É inteligente, fofo, divertido, leve e conseguiu aquecer meu coração! Eu adorei como ele me fez pensar sobre essa situação.É uma distopia infanto-juvenil com muita tecnologia e robôs porém com sua própria personalidade e mundo. Um sci-fi que recomendo para todos, especialmente para o público jovem.</p>
      </aside> 
    </div>
      
    <div class="row justify-content-center">
      <div class=" col-10">
        <h1>Lee Bacon</h1>
      </div>
      <article class=" col-xl-4 col-md-6 col-sm-12 justify-content-center">
          <img class="brdr"src= "img/livros/lee.webp"   alt="Imagem do autor dessa obra, Lee Bacon.">
      </article>
      <section class=" col-xl-6 col-md-6 col-sm-12">
        <p >Por mais contraditório que possa parecer, a leitura acabou atrapalhando o desempenho escolar de Gibson. Com seus 12 anos, William já alimentava o sonho de se tornar um escritor de ficção científica. Tornou-se um jovem recluso, apegado às leituras do gênero, não dava devida atenção aos estudos.Com 13 anos, teve seu primeiro contato com grandes autores como  Allen Ginsberg, Jack Kerouac e William S. Burroughs. O último, segundo Gibson, foi um dos principais responsáveis pela percepção da importância da literatura e da ficção. Alguns o chamam de O Profeta Noir do Cyberpunk, afinal, não é para menos. A sua obra de estreia é nada menos que Neuromancer, de 1984. O seu primeiro livro deu origem à consagrada trilogia de ficção científica Sprawl. Essa obra prima da ficção científica e cyberpunk é composta, também, pelos livros Count Zero e Mona Lisa Overdriver.</p>
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