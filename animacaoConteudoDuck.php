<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <link rel="shortcut icon" href="img/assets/icon.svg" type="image/x-icon">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Ficção cientifica</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
</head>

<!-- RETIRAR TAMANHO DAS IMAGENS NO CSS -->

<body>
  <div class='container'>
    <?php include 'include/nav.php';?>
    <?php include 'include/bannerAnimacoes.php';?>
    <main>
      <article>
        <div class='row mt-5'>
          <div class='col-xl-8 col-md-12 col-sm-12'>
            <h2 class="h1 mb-1">Duck Dodgers</h2>
            <small class='mb-3 d-block small pb-2 border-bottom border-2'>Novembro 23, 2022 by <cite><a href="https://pt.wikipedia.org/wiki/Duck_Dodgers">duckdogers.fandom.com</a></cite></small>
            <p>Se tem algo que faz parte da infância de todos nós (e espero que ainda faça das crianças de hoje e sempre) é a série de desenhos Looney Tunes>. São vários personagens únicos e um mais engraçado que o outro, sendo um dos meus favoritos (talvez o número 1) ele, o pato mais ignorante, arrogante, insuportável e babão de todos: Patolino. Patolino é o terceiro personagem dos Looney Tunes com mais aparições em desenhos, ficando atrás somente do Gaguinho e Pernalonga.</p>
            <p>Ele foi introduzido no desenho “Gaguinho e a caça ao pato” e por muito tempo foi coadjuvante dos desenhos do mesmo. Mais pra frente, em 1953, ele representou um heroi espacial no desenho Duck Dodgers no século 24½, sendo que Gaguinho era o seu coadjuvante. É engraçado que aquele pato tinha conseguido passar o porquinho para o segundo plano, mas é um fato que o Patolino talvez só não consiga ser mais famoso que o Pernalonga.</p>
            <p>Congelado por 351 anos, Duck Dodgers acorda no século 24 e meio. Para provar que é o maior herói da Terra, ele terá de defender o planeta contra os ataques do Comandante Marciano.</p>
          </div>
        </div>
        <figure class='row my-3'>
          <div class='col-xl-7 col-md-12  col-sm-12 conteudo'>
            <img class='rounded' src="img/imgAnimacao/classicos/img2Conteudo.webp" alt="patolino em sua versão espacial chamada duck dogers correndo do marciano junto de gaguinho">
          </div>
          <figcaption class='col-xl-5 col-md-12 col-sm-12 sobreImg'>
            <h4>Sobre a Imagem:</h4>
            <p>Personagens respectivamente: Patolino Gaguinho e Marciano.</p>
          </figcaption>
        </figure>
        <div class='row mb-5'>
          <div class='col-xl-8 col-md-12 col-sm-12'>
            <p>Duck Edgar Dumas Aloysius Dodgers é um personagem fictício, o metaficcional protagonista da série de desenho animado da Warner Bros. Ele é realmente o famoso (mas fictício) Patolino, que interpreta um herói intergalático do futuro. É um tipo de alter ego do Patolino. O personagem é uma paródia ao herói das tiras de jornal Buck Rogers in the 25th Century, que também fez sucesso em um seriado cinematográfico de 1939, estrelado por Buster Crabbe, que também havia interpretado outro herói dos quadrinhos no cinema, Flash Gordon Duck Dodgers fez sua primeira aparição em 1953, no curta de animação Duck Dodgers no século 24 ½, dirigido por Chuck Jones. Jones criou uma paródia dos seriados de ficção científica: Buck Rogers e Flash Gordon.</p>
          </div>
        </div>
      </article>
    </main>
    <div class="d-flex justify-content-xl-between flex-md-wrap flex-xl-nowrap flex-lg-nowrap flex-sm-wrap flex-wrap justify-content-md-center justify-content-sm-center mt-4 noticiaContainer">
      <?php include 'include/noticiaAnimacao1.php';?>
      <?php include 'include/noticiaAnimacao2.php';?>
    </div>
  </div>
  <?php include 'include/footer.php';?>


  <script src="js/script.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>