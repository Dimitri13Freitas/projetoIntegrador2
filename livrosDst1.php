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
        <h2 class="titulos">A Guerra dos Mundos</h2>
        <small class='titulos mb-3 d-block small pb-2 border-bottom border-2'>Dezembro 01, 2022 by <a href="https://www.ficcoeshumanas.com.br/post/resenha-a-guerra-dos-mundos-de-h-g-wells">ficcoeshumanas.com</a></small>
      </div>  
      <figure class="col-xl-2 col-md-4 col-sm-5">
        <img class="brdr" src="img/livros/mund.webp"  alt="Imagem da capa vermelha do livro 'A Guerra dos Mundos'">
        <figcaption> A guerra dos Mundos, 1980</figcaption>
      </figure>
      <div class="col-xl-5 col-md-7 col-sm-12 cntr">
        <h3> Sinopse </h3>
        <p> Eles vieram do espaço. Eles vieram de Marte. Com tripés biomecânicos gigantes, querem conquistar a Terra e manter os humanos como escravos. Nenhuma tecnologia terrestre parece ser capaz de conter a expansão do terror pelo planeta. É o começo da guerra mais importante da história. Como a humanidade poderá resistir à investida de um potencial bélico tão superior?  </p>
      </div>
    </article>
  
    <div class="row justify-content-center">
      <aside class="col-xl-10 col-md-10 col-sm-12 justify-content-center"> 
        <h3 class="titulos"> Análise Crítica, by Paulo Vinícius </h3>
        <p> É com uma primeira frase que fala muito do que vai ser o livro que H.G. Wells inicia este livro que é uma porrada na sociedade europeia da época. Um livro que já vai ser um clássico na época em que foi publicado e só vai ganhar mais vulto com o passar dos anos. Claro que a famosa radiotransmissão de Orson Welles ajudou a eternizar a obra, mas o livro já era (e continua a ser) incrível por si só. Mesmo tendo uma forma de contar histórias diferente da que estamos acostumados, é inegável que os temas abordados ao longo do livro (e digo temas no plural mesmo) ecoam até os dias de hoje. </p>
        <p> Nosso narrador, uma pessoa não identificada que sabemos ser apenas um marido e aparentemente uma pessoa comum, nos guia diante de uma invasão marciana que começa no interior da Inglaterra e rapidamente vai se espalhando por toda a parte. O que começa como estrelas cadentes caindo do céu se transforma em um pandemônio generalizado quando criaturas que se assemelham a lulas começam a disparar raios de calor e névoas corrosivas. Os seres humanos não acreditam inicialmente diante de algo tão absurdo quanto a chegada de vidas inteligentes vindas do espaço. Aos poucos a humanidade vai caindo vítima do poder mortal destes seres, que são impiedosos em seu ritmo de conquista. Mais para a frente a narrativa se divide em dois pontos de vista: a do irmão do protagonista que atravessa o país junto de duas moças e o protagonista que se vê preso em um lugar cercado por marcianos. </p>
      </aside>
    </div>
      
    <article class="row justify-content-center"> 
      <div class="col-xl-10 col-md-10 col-sm-12">
        <h3>H.G. Wells </h3>
      </div>
      <figure class="col-xl-4 col-md-6 col-sm-12 justify-content-center">
          <img class="brdr"src= "img/livros/hg.webp"   alt="Imagem do autor H.G Wells">
          <figcaption>Weels, H.G  1940-2010</figcaption>
      </figure>
      <section class=" col-xl-6 col-md-6 col-sm-12">
        <p >Wells tornou-se conhecido por seus “romances de ficção”, carregados de suas visões políticas e que antecipavam inúmeras situações vividas pela sociedade posteriormente.Mesmo escrevendo sobre outros tempos, lugares, e até mesmo formas de vida, jamais deixou de se referir à própria realidade. Escreveu sobre luta de classes, questionou a ética da ciência, e anteviu bombardeios. Suas narrativas abordavam, com fascínio e desconfiança, a aplicação de tecnologias, sejam elas do futuro real ou ficcional. Alguns estudiosos atribuem a qualidade científica de suas ficções aos oito anos em que foi professor de ciências e zoologia. </p>
    </div>    
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