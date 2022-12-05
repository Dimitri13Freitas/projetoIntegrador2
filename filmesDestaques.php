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

      <div class="row filmesdestaques">
        <div class="col-lg-7 col-md-7 col-sm-12">
          <article>
            <h2>Ficção Científica</h2>
            <p>A ficção científica cinematográfica é um gênero de filme que utiliza a ficção científica e a ficção especulativa com base científica de fenômenos que não são totalmente aceitos pela ciência moderna, como formas de vida extraterrestre, outros planetas, percepção extra-sensorial e viagem no tempo, juntamente com elementos futuristas tais como naves espaciais, robôs, ciborgues, rebelião das máquinas, viagens interestelares ou outras tecnologias. Filmes de ficção científica têm sido muitas vezes usados para se concentrar em questões políticas ou sociais, e para explorar questões filosóficas como a condição humana.</p>
            <!-- Fonte:https://pt.wikipedia.org/wiki/Filme_de_fic%C3%A7%C3%A3o_cient%C3%ADfica#:~:text=A%20fic%C3%A7%C3%A3o%20cient%C3%ADfica%20cinematogr%C3%A1fica%20%C3%A9,viagem%20no%20tempo%2C%20juntamente%20com -->
          </article>
        </div>
        <div class="col-lg-5 col-md-5 col-sm-12 filmesbannerdestaques">
          <aside>
            <img class='rounded' src="img/imgFilmes/imgDestaques.webp" alt="Imagem de Naves futuristas">
          </aside>
        </div>
      </div>
      <div class="d-flex justify-content-xl-between flex-md-wrap flex-xl-nowrap flex-lg-nowrap flex-sm-wrap flex-wrap justify-content-md-center justify-content-sm-center mt-4 noticiaContainer">
      <?php include 'include/noticiaFilme3.php';?>
      <?php include 'include/noticiaFilme1.php';?>
      </div>
      <div class="row filmestextodestaques">
        <a href="SinopseHomem-Aranha.php">
            <div class="col-lg-12 col-md-12 col-sm-12">
              <article>
                <h3>Homem-Aranha sem volta para casa </h3>
                <p>Peter Parker tem a sua identidade secreta revelada e pede ajuda ao Doutor Estranho. Quando um feitiço para reverter o evento não sai como o esperado, o Homem-Aranha e seu companheiro dos Vingadores precisam enfrentar inimigos de todo o multiverso.
                </p>
              </article>
            </div>
          <div class="row filmesbannerdestaques">
            <div class="col-lg-12 col-md-12 col-sm-12">
              <img class='rounded' src="img/imgFilmes/imgMiranhaDestaques.webp" alt="Banner do filme Homem Aranha sem volta para casa">
            </div>
          </div>
        </a>
      </div>
      <div class="row filmestextodestaques">
        <a href="SinopseJurassicWorld.php">
          <div class="col-lg-12 col-md-12 col-sm-12">
            <article>
              <h3>Jurassic World 3</h3>
              <p>Quatro anos após a destruição da Ilha Nublar, os dinossauros agora vivem e caçam ao lado de humanos em todo o mundo. Esse frágil equilíbrio remodela o futuro e deve determinar de uma vez por todas se os seres humanos continuarão sendo a espécie dominante em um planeta que agora compartilham com as criaturas mais temíveis da história
              </p>
            </article>
          </div>
          <div class="row filmesbannerdestaques">
            <div class="col-lg-12 col-md-12 col-sm-12">
              <img class='rounded' src="img/imgFilmes/imgJurassic.webp" alt="Imagem do filme Jurassic World">
            </div>
          </div>
        </a>
      </div>
      <div class="row filmestextodestaques">
        <a href="SinopseCapitaMarvel.php">
            <div class="col-lg-12 col-md-12 col-sm-12">
              <article>
                <h3>Capitã Marvel</h3>
                <p>Capitã Marvel, parte do exército de elite dos Kree, uma raça alienígena, encontra-se no meio de uma batalha entre seu povo e os Skrulls. Ao tentar impedir uma invasão de larga escala na Terra, em 1995, ela tem memórias recorrentes de uma outra vida, como Carol Danvers, agente da Força Aérea norte-americana. Com a ajuda de Nick Fury, Capitã Marvel precisa descobrir os segredos de seu passado e pôr um fim ao conflito intergalático com os Skrulls.
                </p>
              </article>
            </div>
          <div class="row filmesbannerdestaques">
            <div class="col-lg-12 col-md-12 col-sm-12">
              <img class='rounded' src="img/imgFilmes/imgCapitaMarvel.webp" alt="Banner do filme Capitã Marvel">
            </div>
          </div>
        </a>
    </div>
    </div>
    </div>
    </div>
    <?php include 'include/footer.php';?>
  </main>



  <script src="js/script.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>