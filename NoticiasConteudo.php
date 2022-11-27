<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <link rel="shortcut icon" href="img/icon.svg" type="image/x-icon">
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
      <?php include 'include/bannerHome.php';?>

      <div class='row mt-5'>
        <div class='col-xl-8 col-md-12 col-sm-12'>
          <article>
            <h2 class="h1 mb-1">Titulo Super Foda</h2>
            <small class='mb-3 d-block small pb-2 border-bottom border-2'>January 1, 2014 by Dimitri</small>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos quaerat at quasi porro dignissimos! Deleniti optio recusandae, tempora, minus veritatis laboriosam dolorum a, nobis fuga ad minima in enim eos.</p>
            <p>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus sint totam ab suscipit adipisci et quisquam reprehenderit ratione corporis earum illum accusantium deleniti quaerat rem voluptatibus quidem, placeat impedit qui. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reprehenderit corporis, deleniti pariatur illum commodi itaque iusto, numquam, iste unde quisquam ea odit sunt possimus quo. Adipisci consequatur enim illum saepe. "</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum perferendis cum id eos tempora aut repellendus laborum soluta doloremque. Voluptatem esse expedita consectetur? Nostrum alias incidunt, necessitatibus cum facere fuga!</p>
          </article>
        </div>
      </div>
      <div class='row my-3'>
        <div class='col-xl-7 col-md-12  col-sm-12 conteudo'>
          <aside>
            <img class='border rounded' src="img/banner/img3.jpg" alt="">
          </aside>
        </div>
        <div class='col-xl-5 col-md-12 col-sm-12 sobreImg'>
          <article class='d-inline-block p-3 rounded'>
            <h4>Sobre a Imagem</h4>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Accusamus fugit assumenda quas aliquam?</p>
          </article>
        </div>
      </div>
      <div class='row mb-5'>
        <div class='col-xl-8 col-md-12 col-sm-12'>
          <article>
            <h6 class="remove">.</h6>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam voluptatibus commodi a debitis corrupti facere eos sed blanditiis vel quae soluta aut itaque perspiciatis possimus praesentium, ratione quaerat voluptatem pariatur. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Atque magni obcaecati animi consequuntur possimus quasi molestiae hic eos explicabo, iusto quia ea laboriosam fugiat nam molestias voluptate sapiente nemo neque. Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto delectus doloremque deserunt odit facere deleniti necessitatibus consectetur consequatur qui libero. Laborum ratione vero numquam rem nam! Sit quasi nobis optio?</p>
          </article>
        </div>
      </div>
      <div class="d-flex justify-content-xl-between flex-md-wrap flex-xl-nowrap flex-lg-nowrap flex-sm-wrap flex-wrap justify-content-md-center justify-content-sm-center my-5 noticiaContainer">
        <section class="noticia rounded-3  border d-flex align-items-center">
          <div class="noticiaSeila d-flex flex-column">
            <small>Filmes</small>
            <h2>Seila</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. At nam molestias ipsa praesentium tenetur ea fugiat unde impedit, assumenda itaque deleniti quam facilis totam doloremque. Soluta quia omnis cupiditate minima.</p>
            <a href="NoticiasConteudo.php">Continuar lendo...</a>
          </div>
          <img src="img/banner/img2.jpg" alt="">
        </section>
        <section class="noticia rounded-3 border d-flex align-items-center">
          <div class="noticiaSeila d-flex flex-column">
            <small>Filmes</small>
            <h2>Seila</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. At nam molestias ipsa praesentium tenetur ea fugiat unde impedit, assumenda itaque deleniti quam facilis totam doloremque. Soluta quia omnis cupiditate minima.</p>
            <a href="NoticiasConteudo.php">Continuar lendo...</a>
          </div>
          <img src="img/banner/img2.jpg" alt="">
        </section>
      </div>
    </div>
    <?php include 'include/footer.php';?>
  </main>


  <script src="js/script.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>