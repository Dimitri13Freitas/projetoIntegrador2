<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <link rel="shortcut icon" href="img/assets/icon.svg" type="image/x-icon">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Ficção cientifica</title>
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css"> -->
</head>

<!-- RETIRAR TAMANHO DAS IMAGENS NO CSS -->

<body>
  <main>
    <div class='container'>
      <?php include 'include/nav.php';?>
      <?php include 'include/bannerFilmes.php';?>
      <div class="row">
        <div class="lado1 col-lg-8 col-md-12 col-sm-12">
          <a href="SinopseStarWars.html">
            <section class="row lado1img rounded border  p-3">
              <div class="col-lg-7 col-md-6 col-sm-12">
                <article>
                  <h3>Star Wars IV</h3>
                  <p>A princesa Leia é mantida refém pelas forças imperiais comandadas por Darth Vader. Luke Skywalker
                    e o capitão Han Solo precisam libertá-la e restaurar a liberdade e a justiça na galáxia.</p>
                </article>
              </div>
              <div class="col-lg-5 col-md-6 col-sm-12 m-0 p-0">
                <aside>
                  <figure>
                    <img class="rounded " src="img/imgFilmes/imgPrincipaisStarWars.jpg"
                      alt="Capa do Filme Star Wars IV, mostrando 4 personagens ao fundo e uma nave espacial a frente com o logotipo do filme logo abaixo.">
                    <figcaption>Capa do filme Star Wars IV</figcaption>
                  </figure>
                </aside>
              </div>
            </section>
          </a>
          <a href="SinopsePlanetaDosMacacos.html">
            <section class="row lado1img rounded border  p-3">
              <div class="col-lg-7 col-md-6 col-sm-12">
                <article>
                  <h3>Planeta Dos Macacos-A Origem</h3>
                  <p>Um chimpanzé de laboratório desenvolve inteligência e emoções humanas e uma batalha épica surge
                    para determinar qual espécie será dominante no planeta Terra.</p>
                </article>
              </div>
              <div class="col-lg-5 col-md-6 col-sm-12 m-0 p-0">
                <aside>
                  <figure>
                    <img class="rounded " src="img/imgFilmes/imgPrincipaisPlanetaDosMacacos.jpg" alt="Capa do filme Planeta dos macacos. No plano principal está um macaco com uma mão para cima fazendo um sinal de conquista. Ponte Golden Gate ao fundo.">
                    <figcaption>Capa do filme Planeta dos Macacos - A Origem </figcaption>
                  </figure>
                </aside>
              </div>
            </section>
          </a>
          <a href="SinopseDepoisDaTerra.html">
            <section class="row lado1img rounded border  p-3">
              <div class="col-lg-7 col-md-6 col-sm-12">
                <article>
                  <h3>Depois da Terra</h3>
                  <p>Cypher embarca em uma viagem espacial ao lado do filho Kitai, mas uma chuva de asteroides força a
                    dupla a pousar na Terra, que há mil anos não é habitada por humanos. Cypher é gravemente ferido e
                    Kitai precisa enfrentar grandes perigos na busca do sinalizador, o único objeto que pode ajudá-los
                    a voltar para casa</p>
                </article>
              </div>
              <div class="col-lg-5 col-md-6 col-sm-12 m-0 p-0">
                <aside>
                  <figure>
                    <img class="rounded " src="img/imgFilmes/imgPrincipaisDepoisDaTerra.jpg"
                      alt="Capa do Filme Depois da Terra, com o ator Will Smith e seu filho Jaden Smith no plano principal.">
                    <figcaption>Capa do filme Depois da Terra</figcaption>
                  </figure>
                </aside>
              </div>
            </section>
          </a>
        </div>
        <div class="col-lg-4 col-md-12 col-sm-12 sugestao">
          <section>
            <ul class="border border-4 rounded p-0 p-2">
              <li class="li">Sugestões</li>
              <li>
                <h4>Venom</h4>
                <p>O jornalista Eddie Brock desenvolve força e poder sobre-humanos quando seu corpo se funde com o
                  alienígena Venom. Dominado pela raiva, Venom tenta controlar as novas e perigosas habilidades de
                  Eddie.</p>
                <a href="SinopseVenom.html" class="btn-primary btn">Clique aqui</a>
              </li>
              <li>
                <h4>Morbius</h4>
                <p>O bioquímico Michael Morbius tenta curar-se de uma doença rara no sangue mas, sem perceber, ele
                  fica infectado com uma forma de vampirismo</p>
                <a href="SinopseMorbius.html" class="btn-primary btn">Clique aqui</a>
              </li>
              <li>
                <h4>Liga da Justiça</h4>
                <p>Impulsionado pela restauração de sua fé na humanidade e inspirado pelo ato altruísta do Superman,
                  Bruce Wayne convoca sua nova aliada Diana Prince para o combate contra um inimigo ainda maior,
                  recém-despertado. Juntos, Batman e Mulher-Maravilha buscam e recrutam com agilidade um time de
                  meta-humanos, mas mesmo com a formação da liga de heróis sem precedentes, pode ser tarde demais para
                  salvar o planeta.</p>
                <a href="SinopseLigaDaJustica.html" class="btn-primary btn">Clique aqui</a>
              </li>
            </ul>
          </section>
        </div>
      </div>
    </div>
    <?php include 'include/footer.php';?>
  </main>



  <script src="js/script.js"></script>
  <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script> -->
</body>

</html>
