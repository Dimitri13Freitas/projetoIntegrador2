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



<body>
  <div class='container'>
    <?php include 'include/nav.php'; ?>
    <?php include 'include/bannerAnimacoes.php'; ?>
    <main>
      <div class='row'>
        <div class='col-xl-8 col-md-12 col-sm-12'>
          <article class='pt-3'>
            <h2 class='h1 pt-5 m-0'>Classicos do Gênero</h2>
            <small>january 1, 2022 by <cite><a aria-label="Link do criador do texto que vem a seguir" href="https://github.com/Dimitri13Freitas">Dimitri</a></cite></small>
            <p class='border-top border-2 pt-2 mt-2'>Aqui você vai poder relembrar as animações classicas e a frente do seu tempo que foram lançadas antes e depois dos anos 2000, e perceber que algumas obras listadas aqui, ainda sim são bastante atuais idependente de sua data de lançamento.</p>
          </article>
        </div>
      </div>
      <section class='border destaques mt-3 p-0 p-3 rounded d-flex justfy-content-center align-items-center'>
        <aside>
          <figure class='destaquesImg'>
            <figcaption class='sumir'>Imagem da animação Futurama</figcaption>
            <img class='rounded' src="img/imgAnimacao/classicos/img1.webp" alt="Futurama Fry, Bender e leela abraçados">
          </figure>
        </aside>
        <article class='destaquesInf'>
          <h2 class='h1 mb-3 mt-2'>Futurama</h2>
          <p class='mb-3'>Foi ao ar de 28 de março de 1999 a 10 de agosto de 2003 na Fox. No Brasil ia ao ar também pela Fox, no bloco Não Perturbe!, de segunda a sexta às 20 horas, e em janeiro de 2008 saiu da programação para dar lugar a mais um episódio...</p>
          <a aria-label='Seguir lendo sobre Futurama' href="animacaoConteudoFuturama.php">Continuar Lendo...</a>
        </article>
      </section>
      <section class='border mt-5 destaques p-0 p-3 mb-5 rounded d-flex justfy-content-between align-items-center'>
        <aside class='destaquesImg'>
          <figure>
            <figcaption class='sumir'>Imagem do Desenho Duck Dogers</figcaption>
            <img class='rounded' src="img/imgAnimacao/classicos/img2.webp" alt="Patolino Gaguinho e marciano olhando para a tela">
          </figure>
        </aside>
        <article class='destaquesInf'>
          <h2 class='h1 mb-3 mt-2'>Duck Dodgers</h2>
          <p class='mb-3'>Se tem algo que faz parte da infância de todos nós (e espero que ainda faça das crianças de hoje e sempre) é a série de desenhos Looney Tunes. São vários personagens únicos e um mais engraçado que o outro, sendo um...</p>
          <a aria-label='Seguir lendo sobre Duck Dogers' href="animacaoConteudoDuck.php">Continuar Lendo...</a>
        </article>
      </section>
      <div class="d-flex justify-content-xl-between flex-md-wrap flex-xl-nowrap flex-lg-nowrap flex-sm-wrap flex-wrap justify-content-md-center justify-content-sm-center mt-4 noticiaContainer">
        <?php include 'include/noticiaAnimacao1.php'; ?>
        <?php include 'include/noticiaAnimacao2.php'; ?>
      </div>
      <section class='border mt-5 destaques p-0 p-3 mb-5 rounded d-flex justfy-content-between align-items-center'>
        <aside>
          <figure class='destaquesImg'>
            <figcaption class='sumir'>Imagem do Desenho Zeta</figcaption>
            <img class='rounded' src="img/imgAnimacao/classicos/img3.webp" alt="Robô zeta, vulgo, personagem principal">
          </figure>
        </aside>
        <article class='destaquesInf'>
          <h2 class='h1 mb-3 mt-2'>Projeto Zeta</h2>
          <p class='mb-3'>The Zeta Project (no Brasil Projeto Zeta) é uma série animada americana de ficção científica produzida pela Warner Bros.. Estreou na Kids' WB em janeiro de 2001. É uma série baseada no personagem Zeta de Batman do Futuro...</p>
          <a aria-label='Seguir lendo sobre Projeto Zeta' href="animacaoConteudoZeta.php">Continuar Lendo...</a>
        </article>
      </section>
      <section class='border mt-5 destaques p-0 p-3 mb-5 rounded d-flex justfy-content-between align-items-center'>
        <aside>
          <figure class='destaquesImg'>
            <figcaption class='sumir'>Imagem do Desenho da familia do futuro "Os jetsons".</figcaption>
            <img class='rounded' src="img/imgAnimacao/classicos/img4.webp" alt="A familia jetsons andando em seu carro voador">
          </figure>
        </aside>
        <article class='destaquesInf'>
          <h2 class='h1 mb-3 mt-2'>Os Jetsons</h2>
          <p class='mb-3'>Desenho criado em 1962 por Joe Barbera e Bill Hanna, nos estudios da HB Produtions, contava em seus episódios como seria o cotidiano da raça humana no futuro tomando como referência uma família muito simpática: Os Jetsons....</p>
          <a aria-label='Seguir lendo sobre Os jetsons' href="animacaoConteudoJetsons.php">Continuar Lendo...</a>
        </article>
      </section>
    </main>
  </div>


  <?php include 'include/footer.php'; ?>


  <script src="js/script.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>