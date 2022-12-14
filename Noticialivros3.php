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
  <main>
    <div class='container'>
      <?php include 'include/nav.php';?>
      <?php include 'include/bannerLivros.php';?>
      <div class='row mt-5'>
        <div class='col-xl-8 col-md-12 col-sm-12'>
          <article>
            <h2 class="h1 mb-1">Lipe Diaz lança novo selo de quadrinhos: 'Cavalo de Pau' </h2>
            <small class='mb-3 d-block small pb-2 border-bottom border-2'>Novembro 14, 2022 by <a href="https://universohq.com/noticias/autor-lipe-diaz-lanca-novo-selo-de-quadrinhos-com-a-obra-cavalo-de-pau/">universoHQ.com</a></small>
            <p>A revista Cavalo de Pau (formato 17 x 26 cm, 64 páginas) é o mais novo lançamento do autor Lipe Diaz, e marca a estreia de seu próprio selo de quadrinhos, a LDZ Editora, um braço da LDZ Escola de Artes Visuais. O objetivo da revista é levar ao grande público, anualmente, novos conceitos para graphic novels, propriedades industriais que serão lançadas no futuro.</p>
            <p>Cavalo de Pau é uma coletânea de histórias inéditas desenhadas ou escritas por Lipe Diaz, apresentando uma nova safra de quadrinhos que desvendarão mistérios em uma expedição na Amazônia, desafiarão o apocalipse entre demônios e anjos, viajarão no tempo, enfrentarão medos em novas dimensões, farão o leitor voltarem a ser criança.</p>
          </article>
        </div>
      </div>
      <div class='row my-3'>
        <div class='col-xl-7 col-md-12  col-sm-12 conteudo'>
          <aside>
            <img class='rounded' src="img/livros/cavalo.webp" alt="Banner dos novos personagens do selo de Lipe Diaz">
          </aside>
        </div>
        <div class='col-xl-5 col-md-12 col-sm-12 sobreImg'>
          <article class='d-inline-block p-3 border rounded'>
            <h4>Sobre a Imagem:</h4>
            <p>Banner dos novos personagens do selo de Lipe Diaz</p>
          </article>
        </div>
      </div>
      <div class='row mb-5'>
        <div class='col-xl-8 col-md-12 col-sm-12'>
          <article>
            <h6 class="remove">.</h6>
            <h2>Aparição de novos personagens</h2>
            <p>David 7k: Surge o universo 7k, uma realidade pós apocalíptica, influenciada pelo movimento armorial. Neste cenário, um jovem pastor em um campo de batalha derruba um poderoso guerreiro com apenas uma pedra e uma funda, o fraco vence o gigante. Ele deveria ter vencido?</p>
            <p>Pinóquio Aventureiro: Primeira aparição do personagem. Gepeto, o lendário guerreiro, vivia sozinho. Como hobby esculpiu um lindo boneco com sua aparência quando jovem. Uma obra de arte, um jovem aventureiro. Em outro plano, um idoso feiticeiro, assiste a cena através de sua orbe mágica e dá vida à escultura. Ele gargalha assustadoramente sobre as sombras de uma idosa misteriosa.</p>
          </article>
        </div>
      </div>
    </div>
    <?php include 'include/footer.php';?>
  </main>


  <script src="js/script.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>