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
              <h2>Capitã Marvel</h2>
              <p>Em Capitã Marvel, Carol Danvers (Brie Larson) é uma ex-agente da Força Aérea norte-americana, que, sem
                se lembrar de sua vida na Terra, é recrutada pelos Kree para fazer parte de seu exército de elite.
                Inimiga declarada dos Skrull, ela acaba voltando ao seu planeta de origem para impedir uma invasão dos
                metaformos, e assim vai acabar descobrindo a verdade sobre si, com a ajuda do agente Nick Fury (Samuel
                L. Jackson) e da gata Goose</p>
            </article>
          </div>
      </div>
      <div class="row bannersinopse">
        <div class="col-lg-12 col-md-12 col-sm-12">
          <figure>
            <img class="border border-5" src="img/imgFilmes/imgCapitaMarvel.jpg"
              alt="Imagem da atriz Brie Larson vestida de Capitã Marvel com logotipo do filme e da Marvel a frente.">
            <figcaption>Imagem do filme Capitã Marvel</figcaption>
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
