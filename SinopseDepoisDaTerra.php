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
              <h2>Depois da Terra</h2>
              <p>Há 1000 anos, um cataclismo tornou a Terra um lugar hostil e forçou os humanos a se abrigarem no
                planeta Nova Prime, morando em naves espaciais. Depois de uma missão, o general Cypher Raige (Will
                Smith) retorna à sua família e ao filho de treze anos de idade (Jaden Smith). Mas pouco tempo após seu
                retorno, uma chuva de asteroides faz com que a nave onde moram caia na Terra. Com o pai correndo risco
                de morte, o jovem adolescente deverá aprender sozinho a domar este planeta, encontrando água, comida e
                cuidando de seu pai</p>
            </article>
          </div>
      </div>
      <div class="row bannersinopse">
        <div class="col-lg-12 col-md-12 col-sm-12">
          <figure>
            <img class="border border-5" src="img/imgFilmes/imgDepoisDaTerra.jpg"
              alt="Imagem com os rostos do ator Will Smith e seu filho Jaden Smith no plano principal.">
            <figcaption>Imagem do filme Depois da Terra</figcaption>
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
