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
              <h2>Liga da Justiça</h2>
              <p>Em Liga da Justiça, impulsionado pela restauração de sua fé na humanidade e inspirado pelo ato
                altruísta do Superman (Henry Cavill), Bruce Wayne (Ben Affleck) convoca sua nova aliada Diana Prince
                (Gal Gadot) para o combate contra um inimigo ainda maior, recém-despertado. Juntos, Batman e
                Mulher-Maravilha buscam e recrutam com agilidade um time de meta-humanos, mas mesmo com a formação da
                liga de heróis sem precedentes - Batman, Mulher-Maraviha, Aquaman (Jason Momoa), Cyborg (Ray Fisher) e
                Flash (Ezra Miller) -, poderá ser tarde demais para salvar o planeta de um catastrófico ataque.</p>
            </article>
          </div>
      </div>
      <div class="row bannersinopse">
        <div class="col-lg-12 col-md-12 col-sm-12">
          <figure>
            <img class="border border-5" src="img/imgFilmes/imgLigaDaJustica.jpg"
              alt="banner do filme Liga da Justiça com Flash, Superman, Ciborgue, Mulher Maravilha, Batman e Aquaman um ao lado do outro">
            <figcaption>Imagem do filme Liga da Justiça</figcaption>
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
