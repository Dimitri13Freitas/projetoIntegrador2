<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <link rel="shortcut icon" href="img/icon.svg" type="image/x-icon">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Ficção cientifica</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <link rel="stylesheet" href="css/estilo.css">
</head>

<!-- RETIRAR TAMANHO DAS IMAGENS NO CSS -->

<body>
  <main>
    <div class='container'>
      <?php include 'include/nav.php';?>
      <?php include 'include/bannerAnimacoes.php';?>

      <div class='row mt-5'>
        <div class='col-xl-8 col-md-12 col-sm-12'>
          <article>
            <h2 class="h1 mb-1">Futurama</h2>
            <small class='mb-3 d-block small pb-2 border-bottom border-2'>Novembro 23, 2022 by <a href="https://futurama.fandom/pt-br/wiki/Hist%C3%B3ria_de_Futurama">futurama.fandom.com</a></small>
            <p>Foi ao ar de 28 de março de 1999 a 10 de agosto de 2003 na Fox. No Brasil ia ao ar também pela Fox, no bloco Não Perturbe!, de segunda a sexta às 20 horas, e em janeiro de 2008 saiu da programação para dar lugar a mais um episódio de Os Simpsons. A série retornou no final de 2007, com 4 filmes divididos em 4 episódios de 30 minutos, agora a ser exibido pelo Comedy Central, responsável por, dentre outras obras, o polêmico South Park.</p>
            <p>A série tem 4 temporadas, e um filme lançado nos USA, Bender Big Score. está previsto o lançamento de mais um filme, The Beast with a Billion Backs, e depois de lançados em DVD, serão feitos mais quatro filmes que serão repartidos e exibidos na TV em 16 episódios.</p>
            <p>Futurama é uma série de desenho animado americana criada por dois produtores de magia, o cartunista Matt Groening e o roteirista David X. Cohen. Situada na Nova Nova York do ano 3000, é uma mistura inteligente e divertida de humor com ficção científica protagonizada por um entregador de pizza que fica congelado por mil anos, um robô alcoólatra e uma ciclope sexy de cabelos roxos, trazendo também outros personagens menores e não por isso menos complexos, como um cientista louco de 160 anos, um médico lagosta de sandália, uma patricinha relaxada de Marte, um capitão espacial narcisista e um burcrata de rastafári.</p>
          </article>
        </div>
      </div>
      <div class='row my-3'>
        <div class='col-xl-7 col-md-12  col-sm-12 conteudo'>
          <aside>
            <img class='rounded' src="img/imgAnimacao/classicos/img1Conteudo.jpg" alt="Personagens principais de futurama olhando para cima.">
          </aside>
        </div>
        <div class='col-xl-5 col-md-12 col-sm-12 sobreImg'>
          <article class='d-inline-block p-3 border rounded'>
            <h4>Sobre a Imagem:</h4>
            <p>Personagens respectivamente: Hermes Conrad, Turanga Leela, Amy Wong, Fry, Bender, Farnsworth, Doctor Zoidberg</p>
          </article>
        </div>
      </div>
      <div class='row mb-5'>
        <div class='col-xl-8 col-md-12 col-sm-12'>
          <article>
            <h6 class="remove">.</h6>
            <p>"Futurama" foi a primeira animação de temática sci-fi a fazer sucesso com humor adulto, antecipando a febre de desenhos do gênero, que nos últimos anos rendeu de "Ricky & Morty" a "Star Trek: Lower Decks". A trama é centrada no entregador de pizza Philip Fry, que é acidentalmente congelado e acorda mil anos depois, aprendendo a viver num futuro bizarro, com alienígenas, robôs e uma civilização que não compreende.</p>
            <p>Durante sua quarta temporada, Futurama continuou a ser transmitida de forma errática.Por deixar de ser exibida regularmente em razão de eventos esportivos, ficou difícil para os espectadores saberem quando um novo episódio da série iria ao ar. Esta grade instável fez com que a Fox deixasse de transmitir diversos episódios que foram produzidos para as temporadas três e quatro, e o excedente acabou sendo guardado para a utilização em uma quinta temporada.</p>
          </article>
        </div>
      </div>
      <div class="d-flex justify-content-xl-between flex-md-wrap flex-xl-nowrap flex-lg-nowrap flex-sm-wrap flex-wrap justify-content-md-center justify-content-sm-center my-5 noticiaContainer">
        <section class="noticia rounded-3  border d-flex align-items-center">
          <div class="noticiaSeila d-flex flex-column">
            <small>Filmes</small>
            <h2>Seila</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. At nam molestias ipsa praesentium tenetur ea fugiat unde impedit, assumenda itaque deleniti quam facilis totam doloremque. Soluta quia omnis cupiditate minima.</p>
            <a href="NoticiasConteudo.php">Continuar lendo...</a>
          </div>
          <img src="img/banner/img2.jpg" alt="">
        </section>
        <section class="noticia rounded-3 border d-flex align-items-center">
          <div class="noticiaSeila d-flex flex-column">
            <small>Filmes</small>
            <h2>Seila</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. At nam molestias ipsa praesentium tenetur ea fugiat unde impedit, assumenda itaque deleniti quam facilis totam doloremque. Soluta quia omnis cupiditate minima.</p>
            <a href="NoticiasConteudo.php">Continuar lendo...</a>
          </div>
          <img src="img/banner/img2.jpg" alt="">
        </section>
      </div>
    </div>
    <?php include 'include/footer.php';?>
  </main>


  <script src="js/script.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>