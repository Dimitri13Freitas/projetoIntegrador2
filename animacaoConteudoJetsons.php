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

<!-- RETIRAR TAMANHO DAS IMAGENS NO CSS -->

<body>
  <div class='container'>
    <?php include 'include/nav.php';?>
    <?php include 'include/bannerAnimacoes.php';?>
    <main>
      <article>
        <div class='row mt-5'>
          <div class='col-xl-8 col-md-12 col-sm-12'>
            <article>
              <h2 class="h1 mb-1">Os Jetsons</h2>
              <small class='mb-3 d-block small pb-2 border-bottom border-2'>Novembro 23, 2022 by <cite><a href="http://www.autobahn.com.br/desenhos/jetsons.html">www.autobahn.com.br</a></cite></small>
              <p>Desenho criado em 1962 por Joe Barbera e Bill Hanna, nos estudios da HB Produtions, contava em seus episódios como seria o cotidiano da raça humana no futuro tomando como referência uma família muito simpática: Os Jetsons.</p>
              <p>Imagine-se num ambiente repleto de recursos inovadores que só facilitariam o dia-a-dia, como por exemplo: a partir de uma pílula, fazer uma refeição ou ter como transporte uma nave espacial veloz. Imaginou?</p>
              <p>Os Jetsons vivem assim, pois no futuro tudo é diferente, rápido e dinâmico. Composta por: George Jetson, sua esposa Jane, seus filhos Elroy e Judy, o cãozinho de estimação Astro e Rose a robô empregada.</p>
            </article>
          </div>
        </div>
        <figure class='row my-3'>
          <div class='col-xl-7 col-md-12  col-sm-12 conteudo'>
            <img class='rounded' src="img/imgAnimacao/classicos/img4Conteudo.webp" alt="Faxineira Robô da familia dos jetsons dando um aviso para todos da familia que estão no sofá">
          </div>
          <figcaption class='col-xl-5 col-md-12 col-sm-12 sobreImg'>
            <h4>Sobre a Imagem:</h4>
            <p>Faxineira Robô da familia dos jetsons dando um aviso para todos da familia que estão no sofá</p>
          </figcaption>
        </figure>
        <div class='row mb-5'>
          <div class='col-xl-8 col-md-12 col-sm-12'>
            <p>Na animação, George e sua família passam mensagens otimistas aos seus espectadores, mesmo vivendo situações engraçadas de maneira bem humorada. Por isso a fórmula, cedida à trama por parte de seus criadores, deu certo.</p>
            <p>Em sua estreia, o programa contava com apenas 24 episódios. No entanto, devido ao sucesso, a série foi relançada com novos capítulos, que foram produzidos entre 1984 e 1987. O grande marco atingido pelos Jetsons é que essa foi a primeira transmissão colorida da ABC em um tempo em que poucas empresas tinham investido nessa tecnologia.</p>
          </div>
        </div>
      </article>
    </main>
    <div class="d-flex justify-content-xl-between flex-md-wrap flex-xl-nowrap flex-lg-nowrap flex-sm-wrap flex-wrap justify-content-md-center justify-content-sm-center mt-4 noticiaContainer">
      <?php include 'include/noticiaAnimacao1.php';?>
      <?php include 'include/noticiaAnimacao2.php';?>
    </div>
  </div>

  <?php include 'include/footer.php';?>


  <script src="js/script.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>