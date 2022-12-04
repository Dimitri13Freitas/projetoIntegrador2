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

      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 sinopse">
          <article>
            <h2>Venom</h2>
            <p>Em Venom, Eddie Brock (Tom Hardy) é um jornalista investigativo, que tem um quadro próprio em uma emissora local. Um dia, ele é escalado para entrevistar Carlton Drake (Riz Ahmed), o criador da Fundação Vida, que tem investido bastante em missões espaciais de forma a encontrar possíveis usos medicinais para a humanidade. Após acessar um documento sigiloso enviado à sua namorada, a advogada Anne Weying (Michelle Williams), Brock descobre que Drake tem feito experimentos científicos em humanos. Ele resolve denunciar esta situação durante a entrevista, o que faz com que seja demitido. Seis meses depois, ainda com a carreira arruinada, o ainda desempregado Brock é procurado pela Dra. Dora Skirth (Jenny Slate) com uma denúncia: Drake estaria usando simbiontes alienígenas em testes com humanos, muitos deles mortos como cobaias. Ao se deparar com a Fundação Vida novamente, ele acaba entrando em contato com o simbionte alienígena e se torna Venom, um anti-herói parasita.</p>
            <!-- Fonte:https://www.adorocinema.com/filmes/filme-138473/-->
          </article>
        </div>
      </div>
      <div class="row bannersinopse">
        <div class="col-lg-12 col-md-12 col-sm-12">
          <img class="border border-5" src="img/imgFilmes/imgVenom.webp" alt="Imagem do banner do filme Morbius">
        </div>
      </div>
    </div>
    <?php include 'include/footer.php';?>
  </main>



  <script src="js/script.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>