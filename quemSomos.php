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
      <?php include 'include/bannerHome.php';?>
      <div class="row integrantes">
        <div class="col-lg-5 col-md-12 quemsomos">
          <aside>
            <img class="rounded" src="img/imgQuemsomos/imgDimitri.webp" alt="Foto do dimitri">
          </aside>
        </div>
        <div class="col-lg-7 col-md-12 textoquemsomos">
          <article>
            <h2> Dimitri Freitas Gomes da Silva</h2>
            <p>RA:2650832213028</p>
            <p>Tenho 18 anos e moro na cidade de São Roque, com meus pais. Atualmente estou focado em estudar muito a área de programação e UI/UX Design , pois meu objetivo é me tornar desenvolvedor front-end.</p>
            <p>Responsável pelo desenvolvimento da identidade visual e também pelo html, css, javascript e conteúdo de todas as paginas relacionadas ao tema de Animação:</p>
            <div class='pags'>
              <a href="animacoesDestaques.php" class="btn-primary btn">Animações (Destaques)</a>
              <a href="animacoesClassicos.php" class="btn-primary btn">Animações (Clássicos)</a>
              <a href="animacoesLancamentos.php" class="btn-primary btn">Animações(Lançamentos)</a>
              <a href="animacoesPremiados.php" class="btn-primary btn">Animações(Preimiados)</a>
              <a href="animacaoNoticia1.php" class="btn-primary btn">Notícia Kid Cudi...</a>
              <a href="animacaoNoticia2.php" class="btn-primary btn">Notícia ‘Final Space’ deixará...</a>
              <a href="animacaoNoticia3.php" class="btn-primary btn">Notícia STAR TREK: LOWER DECKS...</a>
              <a href="index.php" class="btn-primary btn">Home</a>
              <a href="contato.php" class="btn-primary btn">Contato</a>
            </div>
          </article>
        </div>
      </div>
      <div class="row integrantes">
        <div class="col-lg-5 col-md-12 quemsomos">
          <aside>
            <img class="rounded" src="img/imgQuemSomos/imgLucasPereira.webp" alt="Foto do Lucas Pereira">
          </aside>
        </div>
        <div class="col-lg-7 col-md-12 textoquemsomos">
          <article>
          <h2> Lucas Pereira de Oliveira</h2>
            <p>RA:2650832213022</p>
            <p>Tenho 18 anos e estou no primeiro semestre de Sistemas para Internet, na Fatec São Roque. Tenho 1,96 de altura e impressionantemente calço 47/48. Estudei na escola adventista de São Roque.Isso só foi possível pois eu era bolsista. Estou gostando muito da faculdade e das matérias, acho que vou me dar bem na área.</p>
            <p>Responsável pelo html, css e conteúdo das páginas:</p>
            <div class='pags'>
              <a href="filmesCosplay.php" class="btn-primary btn">Filmes (Cosplay)</a>
              <a href="filmesPrincipais.php" class="btn-primary btn">Filmes (Principais Obras)</a>
              <a href="filmesDestaques.php" class="btn-primary btn">Fimes(Destaques)</a>
              <a href="filmesLancamentos.php" class="btn-primary btn">Filmes(Lançamentos)</a>
              <a href="filmesNoticia1.php" class="btn-primary btn">Notícia ficção científica pós-apocalíptica...</a>
              <a href="filmesNoticia2.php" class="btn-primary btn">Notícia A Guerra do Amanhã...</a>
              <a href="filmesNoticia3.php" class="btn-primary btn">Notícia do filme de ficção científica mais assustador...</a>
              <a href="quemSomos.php" class="btn-primary btn">Quem Somos</a>
            </div>
          </article>
        </div>
      </div>
      <div class="row integrantes">
        <div class="col-lg-5 col-md-12 quemsomos">
          <aside>
            <img class="rounded" src="img/imgQuemSomos/imgLucasVieira.webp" alt="Foto do Lucas Vieira">
          </aside>
        </div>
        <div class="col-lg-7 col-md-12 textoquemsomos">
          <article>
            <h2>Lucas Vieira Pinto</h2>
            <p>RA: 2650832213021</p>
            <p>Tenho 18 anos e moro em Ibiúna. Fiz o ensino técnico integrado ao médio no curso de administração do IFSP. No final do curso, comecei a me interessar por tecnologia, pois fiz um programa de aprendizagem no lassu da USP. Atualmente curso Sistemas para Internet na Fatec e pretendo seguir nessa área.</p>
            <p>Responsável pelo html,css e conteúdo das páginas:</p>
            <div class='pags'>
              <a href="livrosPrincipais.php" class="btn-primary btn">Livros (Principais Autores)</a>
              <a href="livrosFavoritos.php" class="btn-primary btn">Livros (Favoritos da Critica)</a>
              <a href="livrosClassicos.php" class="btn-primary btn">Livros(Clássicos)</a>
              <a href="livrosDestaques.php" class="btn-primary btn">Livros(Destaques)</a>
              <a href="livrosNoticia1.php" class="btn-primary btn">Notícia Tal...</a>
              <a href="livrosNoticia2.php" class="btn-primary btn">Notícia Tal...</a>
              <a href="livrosNoticia3.php" class="btn-primary btn">Notícia Tal...</a>
              <a href="normas.php" class="btn-primary btn">Normas de Uso</a>
            </div>
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