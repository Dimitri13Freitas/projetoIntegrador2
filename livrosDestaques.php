<!DOCTYPE html>
<html lang='pt-br'>

<head>
  <meta charset="UTF-8">
  <link rel="shortcut icon" href="img/assets/icon.svg" type="image/x-icon">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Ficção cientifica</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <main>
    <div class='container'>
      <?php include 'include/nav.php';?>
      <?php include 'include/bannerLivros.php';?>
      
    <div class=" sla row justify-content-center ">
      <article class="  col-xl-5 col-md-5 col-sm-12">
        <h1>Livro 1</h1>
        <img src="img/banner/img2.jpg" style="width: 100% ;" alt="">
        <p >Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente, repellendus ut saepe itaque quidem sequi quasi odio libero modi porro mollitia </p>
        <h1>Livro 2</h1>
        <img src="img/banner/img2.jpg" style="width: 100% ;" alt="">
        <p >Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente, repellendus ut saepe itaque quidem sequi quasi odio libero modi porro mollitia  <p>   
      </article>

    <article class=" col-xl-5 col-md-5 col-sm-12 ">
        <h1>Livro 3</h1>
          <img src="img/banner/img2.jpg" style="width: 100% ;" alt="">
          <p >Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente, repellendus ut saepe itaque quidem sequi quasi odio libero modi porro mollitia </p>
        <h1>Livro 4</h1>
          <img src="img/banner/img2.jpg" style="width: 100% ;" alt="">
          <p >Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente, repellendus ut saepe itaque quidem sequi quasi odio libero modi porro mollitia  </p>      
    </article>
  </div>
  

    <div>
      <h3 class="titulo2">Vistos Também</h3>
    </div>
    <div class="d-flex justify-content-xl-around flex-md-wrap flex-xl-nowrap flex-lg-nowrap flex-sm-wrap flex-wrap justify-content-md-center justify-content-sm-center mt-4 noticiaContainer">
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

      <div class="d-flex justify-content-xl-around flex-md-wrap flex-xl-nowrap flex-lg-nowrap flex-sm-wrap flex-wrap justify-content-md-center justify-content-sm-center mt-4 noticiaContainer">
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