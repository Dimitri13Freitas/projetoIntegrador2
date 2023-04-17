<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <link rel="shortcut icon" href="img/assets/icon.svg" type="image/x-icon">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Ficção cientifica</title>
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous"> -->
  <!-- <link rel="stylesheet" href="css/style.css"> -->
</head>

<!-- RETIRAR TAMANHO DAS IMAGENS NO CSS -->

<body>
  <main>
    <div class='container'>
      <?php include 'include/nav.php';?>
      <?php include 'include/bannerFilmes.php';?>
      <div class="row">
        <section>
          <div class="col-lg-12 col-md-12 col-sm-12 sinopse">
            <article>
              <h2>Star Wars IV </h2>
              <p>Em Star Wars - Episódio IV, o jovem Luke Skywalker (Mark Hamill) sonha ir para a Academia como seus
                amigos, mas se vê envolvido em uma guerra intergalática quando seu tio compra dois robôs e com eles
                encontra uma mensagem da princesa Leia Organa (Carrie Fisher) para o Jedi Obi-Wan Kenobi (Alec Guinness)
                sobre os planos da construção da Estrela da Morte, uma gigantesca estação espacial com capacidade para
                destruir um planeta. Luke então se junta aos cavaleiros Jedi e a Han Solo (Harrison Ford), um
                mercenário, para tentar destruir esta terrível ameaça ao lado dos membros da resistência.</p>
            </article>
          </div>
      </div>
      <div class="row bannersinopse">
        <div class="col-lg-12 col-md-12 col-sm-12">
          <figure>
            <img class="border border-5" src="img/imgFilmes/imgStarWars.jpg"
              alt="Quatro personagens do filme ao lado esquerdo da imagem com duas naves sobrevoando, com o titulo star wars uma nova esperança Episódio 4 em destaque ao lado direito.">
            <figcaption>Imagem do filme Star Wars IV </figcaption>
          </figure>
        </div>
      </div>
      </section>
    </div>
    <?php include 'include/footer.php';?>
  </main>



  <script src="js/script.js"></script>
  <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script> -->
</body>

</html>
