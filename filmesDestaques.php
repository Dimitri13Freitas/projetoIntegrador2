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

      <div class="row filmesdestaques">
        <div class="col-6">
          <article>
            <h2>Título foda</h2>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rem in eveniet molestias molestiae earum vitae, autem, nemo animi iusto nisi consectetur sed velit, quas non. Nostrum, neque! Non, ipsum modi. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fugit, harum sunt. Consectetur autem eligendi mollitia eos facilis similique, assumenda alias possimus reiciendis officiis, nam provident amet, sed dicta esse. Neque.</p>
          </article>
        </div>
        <div class="col-6">
          <aside>
            <img src="img/banner/img1.jpg" alt="fds">
          </aside>
        </div>
      </div>
      <div class="d-flex justify-content-xl-between flex-md-wrap flex-xl-nowrap flex-lg-nowrap flex-sm-wrap flex-wrap justify-content-md-center justify-content-sm-center mt-4 noticiaContainer">
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
      <div class="row filmestextodestaques">
        <a href="filmesSinopse.php">
            <div class="col-12">
              <article>
                <h3>Primeiro destaque</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla ullam quas obcaecati quis tempore earum accusamus vitae quasi, corrupti ex, voluptatibus nemo provident. Beatae recusandae fuga quisquam blanditiis molestiae quas. lorem
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate nam nihil officia ullam praesentium ipsam modi dignissimos hic, ut cumque sunt. Saepe dolorum sunt ab repellendus aliquid tempora, ut aperiam.
                </p>
              </article>
            </div>
          <div class="row filmesbannerdestaques">
            <div class="col-12">
              <img src="img/banner/img1.jpg" alt="uau">
            </div>
          </div>
        </a>
      <div class="row filmestextodestaques">
        <a href="filmesSinopse.php">
          <div class="col-12">
            <article>
              <h3>Primeiro destaque</h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla ullam quas obcaecati quis tempore earum accusamus vitae quasi, corrupti ex, voluptatibus nemo provident. Beatae recusandae fuga quisquam blanditiis molestiae quas. lorem
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate nam nihil officia ullam praesentium ipsam modi dignissimos hic, ut cumque sunt. Saepe dolorum sunt ab repellendus aliquid tempora, ut aperiam.
              </p>
            </article>
          </div>
        <div class="row filmesbannerdestaques">
          <div class="col-12">
            <img src="img/banner/img1.jpg" alt="uau">
          </div>
        </div>
      </a>
      <div class="row filmestextodestaques">
        <a href="filmesSinopse.php">
            <div class="col-12">
              <article>
                <h3>Primeiro destaque</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla ullam quas obcaecati quis tempore earum accusamus vitae quasi, corrupti ex, voluptatibus nemo provident. Beatae recusandae fuga quisquam blanditiis molestiae quas. lorem
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate nam nihil officia ullam praesentium ipsam modi dignissimos hic, ut cumque sunt. Saepe dolorum sunt ab repellendus aliquid tempora, ut aperiam.
                </p>
              </article>
            </div>
          <div class="row filmesbannerdestaques">
            <div class="col-12">
              <img src="img/banner/img1.jpg" alt="uau">
            </div>
          </div>
        </a>
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