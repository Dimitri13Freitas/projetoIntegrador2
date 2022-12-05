<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Ficção cientifica</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
</head>

<!-- RETIRAR TAMANHO DAS IMAGENS NO CSS -->

<body>
  <main>
    <div class='container'>
      <?php include 'include/nav.php';?>
      <?php include 'include/bannerFilmes.php';?>

      <div class="row cosplay">
        <div class="col-lg-7 col-md-5 col-sm-12">
          <article>
            <h2>O que é cosplay?</h2>
            <p>Cosplay é uma atividade que consiste em fantasiar de forma correta, com acessórios e outros artigos, representando um determinado personagem. Esta atividade se originou nos Estados Unidos, em 1970, quando uma determinada convenção promoveu a entrada gratuita de pessoas fantasiadas de super-heróis.Normalmente os cosplayers se fantasiam a partir de personagens japoneses contidos em animes, mangás e videogames, produzindo sua própria fantasia (réplica), sua apresentação e até mesmo o desenvolvimento do cenário. Essa atividade permite que adultos, adolescentes e crianças participem juntas deste processo, criando vínculos entre diferentes idades.</p> <!-- Fonte:https://brasilescola.uol.com.br/artes/cosplay.htm -->
          </article>
        </div>
        <div class="col-lg-5 col-md-7 col-sm-12 imgcosplay">
          <aside>
            <img class="border" src="img/imgFilmes/exemplo-cosplay.webp" alt="Exemplo de cosplay">
          </aside>
        </div>
      </div>
      <div class="row cosplaybanner">
        <div class="col-12">
          <img src="img/imgFilmes/banner-cosplay.webp" alt="Cosplayers reunidos">
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <article>
            <h2 class="text-center">Thor</h2>
            <p>Thor é um personagem fictício que aparece nas histórias em quadrinhos, publicadas pela Marvel Comics, baseadas no deus Thor da Mitologia Nórdica, ele foi criado por Stan Lee e Jack Kirby. Sua principal arma é o martelo Mjonir. Ele ficou muito conhecido quando teve participação em diversos filmes dos Vingadores.</p>
          </article>
        </div>
      </div>
      <div class="row imagenscosplay">
        <div class="col-lg-6 col-md-6 col-sm-12">
          <img src="img/imgFilmes/cosplaythor.webp" alt="Imagem do cosplay do thor">
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 personagem">
          <img src="img/imgFilmes/personagemthor.webp" alt="Imagem do personagem fictício thor criado pela marvel">
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <article>
            <h2 class="text-center">Doutor Estranho</h2>
            <p>O doutor Stephen Vincent Strange, mais conhecido como Doutor Estranho, é um super-herói que aparece nos quadrinhos publicados pela Marvel Comics. Criado pelo desenhista Steve Ditko e pelo roteirista Stan Lee, o personagem apareceu pela primeira vez em Strange Tales #110</p>
          </article>
        </div>
      </div>
      <div class="row imagenscosplay">
        <div class="col-lg-6 col-md-6 col-sm-12">
          <img src="img/imgFilmes/cosplaydrestranho.webp" alt="Cosplay do personagem fictício Dr.Estranho">
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 personagem">
          <img src="img/imgFilmes/personagemdrestranho.webp" alt="Personagem fictício Dr.Estranho">
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <article>
            <h2 class="text-center">Buzz Lightyear</h2>
            <p>história de origem definitiva de Buzz Lightyear, o herói que inspirou o brinquedo em Toy Story (1995). Lightyear segue o lendário Patrulheiro Espacial depois que em um teste de voo da nave espacial faz com que ele vá para um planeta hostil e fique abandonado a 4,2 milhões de anos-luz da Terra ao lado de seu comandante e sua tripulação.</p>
          </article>
        </div>
      </div>
      <div class="row imagenscosplay">
        <div class="col-lg-6 col-md-6 col-sm-12">
          <img src="img/imgFilmes/cosplaybuzz.webp" alt="Cosplay do personagem fictício buzz lightyear">
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 personagem">
          <img src="img/imgFilmes/personagembuzz.webp" alt="Personagem Fictício Buzz Lightyear">
        </div>
      </div>
      <div class="d-flex justify-content-xl-between flex-md-wrap flex-xl-nowrap flex-lg-nowrap flex-sm-wrap flex-wrap justify-content-md-center justify-content-sm-center mt-4 noticiaContainer">
      <?php include 'include/noticiaFilme1.php';?>
      <?php include 'include/noticiaFilme2.php';?>
      </div>
    </div>
    <?php include 'include/footer.php';?>
  </main>



  <script src="js/script.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>