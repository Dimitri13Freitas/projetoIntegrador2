<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Ficção cientifica</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <link rel="stylesheet" href="css/seila.css">
</head>

<!-- RETIRAR TAMANHO DAS IMAGENS NO CSS -->

<body>
  <main>
    <div class='container'>
      <?php include 'include/nav.php';?>
      <?php include 'include/bannerHome.php';?>

      <div class='row my-5'>
        <div class='col-8'>
          <article>
            <h2 class="h1 mb-1">Titulo Super Foda</h2>
            <small class='mb-3 d-block pb-2 border-bottom border-2'>January 1, 2014 by Dimitri</small>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos quaerat at quasi porro dignissimos! Deleniti optio recusandae, tempora, minus veritatis laboriosam dolorum a, nobis fuga ad minima in enim eos.</p>
            <p class='cite'>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus sint totam ab suscipit adipisci et quisquam reprehenderit ratione corporis earum illum accusantium deleniti quaerat rem voluptatibus quidem, placeat impedit qui. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reprehenderit corporis, deleniti pariatur illum commodi itaque iusto, numquam, iste unde quisquam ea odit sunt possimus quo. Adipisci consequatur enim illum saepe. "</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum perferendis cum id eos tempora aut repellendus laborum soluta doloremque. Voluptatem esse expedita consectetur? Nostrum alias incidunt, necessitatibus cum facere fuga!</p>
          </article>
        </div>
      </div>
      <div class='row'>
        <div class='col-7 conteudo'>
          <aside>
            <img class='border' src="img/banner/img3.jpg" alt="">
          </aside>
        </div>
        <div class='col-5'>
          <article>
            <h4>Sobre a Imagem</h4>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Accusamus fugit assumenda quas aliquam?</p>
          </article>  
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