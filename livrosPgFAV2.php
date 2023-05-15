<!DOCTYPE html>
<html lang='pt-br'>

<head>
   <meta charset="UTF-8">
  <link rel="shortcut icon" href="img/assets/icon.svg" type="image/x-icon">
  <link rel="shortcut icon" href="img/icon.svg" type="image/x-icon">
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

    <article class="espaço row">
      <div class=" col-12">
        <h2 >Nós</h2>
        <small class=' mb-3 d-block small pb-2 border-bottom border-2'>Dezembro 01, 2022 by <a href="https://www.ficcoeshumanas.com.br/post/resenha-nos-de-ievgueni-zamiatin">ficcoeshumanas.com</a></small>
      </div>
      <figure class=" col-xl-2 col-md-4 col-sm-5">
        <img class="brdr" src="img/livros/zamia.webp"  alt="Imagem da capa do livro 'Zamiátin'">
      </figure>
      <div class=" col-xl-6 col-md-6 col-sm-12 justify-content-center">
      <h3 > Sinopse </h3>
        <p>Nós é um romance distópico escrito entre 1920 e 1921 pelo escritor russo Yevgeny Zamyatin. A história narra as impressões de um cientista sobre o mundo em que vive, uma sociedade aparentemente perfeita mas opressora, e seus conflitos ao perceber as imperfeições dele, ao travar contato com um grupo opositor que luta contra o "Benfeitor", regente supremo da nação. O livro só adentrou legalmente a pátria-mãe do autor em 1988, com as políticas de abertura do regime soviético, devido à censura imperante no país.</p>
      </div>
    </article>

    <aside class="espaço row">
      <div class=" col-xl-10 col-md-12 col-sm-12 row justify-content-center"> 
        <h3>Análise Crítica, by Amanda Barreiro </h3>
        <p>A história se passa no futuro, num mundo onde a matemática é a linguagem oficial. Neste século todas as ações requerem lógica como explicação. Tudo é designado por números, inclusive as pessoas, embora ainda exista a diferenciação biológica.</p>
        <p>D-503, o personagem principal, é um entre os muitos matemáticos do Estado Único. O caos de D-503 começa quando ele percebe que uma desconhecida, I-330, não se comporta conforme o previsto. As diferenças enxergadas na mulher o incomoda profundamente e ele a compara à “uma componente irracional que se introduz numa equação e não pode ser analisada”.</p>
        <p>As trivialidades da vida não passam de programações feitas pelo Benfeitor. Privacidade não existe e todos vivem cercados de paredes de vidro que só são fechadas, e por alguns minutos, nos Dias Sexuais. Não há casamento nem família e sexo é feito sob permissão e com tempo cronometrado. Não existe mais eu, só existe nós.</p>
        <p>Perceber a ilusão a qual estava submetido tira o sono e coloca a vida do matemático em risco. No livro vemos que essa nova percepção do personagem significa que ele desenvolveu uma alma e para o Estado isso é um perigo que precisa ser dizimado. D-503 conhece as intenções de I-330 o que, de acordo com as suas emoções, torna a leitura, propositalmente, mais confusa..</p>
      </div>
    </aside>
  </div>

<section>
  <div class='config bg-secondary mt-5 mb-5 '>
    <h2 class='py-5 titulo'>Vistos Também</h2>
  </div>
    <div class="container">
      <div class="d-flex justify-content-xl-around flex-md-wrap flex-xl-nowrap flex-lg-nowrap flex-sm-wrap flex-wrap justify-content-md-center justify-content-sm-center mt-4 noticiaContainer">
        <article class="noticia rounded-3  border d-flex align-items-center">
          <div class="noticiaSeila d-flex flex-column">
            <small>Análise da obra</small>
            <h3>Frankstein</h3>
            <p>Victor é um cientista que dedica a juventude e a saúde para descobrir como reanimar tecidos mortos e gerar vida artificialmente. O resultado de sua experiência, um monstro que o...</p>
            <a href="livrosPgFAV.php">Continuar lendo...</a>
          </div>
          <img src="img/livros/frankstein3.webp" alt="Imagem da capa da obra 'Frankstein'">
        </article>
        <article class="noticia rounded-3  border d-flex align-items-center">
          <div class="noticiaSeila d-flex flex-column">
          <small>Análise da obra</small>
            <h3>Mochileiro das Galáxias</h3>
            <p>O Céu sobre o porto tinha cor de televisão num canal fora do ar. Considerada a obra precursora do movimento cyberpunk e um clássico da ficção científica moderna...</p>
            <a href="livrosPgFAV3.php">Continuar lendo...</a>
          </div>
          <img src="img/livros/mochileiro.webp" alt="Imagem da capa da Obra 'Mochileiros da Galáxia'">
        </article>
      </div>
    </div>
  </div>
</section>

    <?php include 'include/footer.php';?>
  </main>

    <script src="js/script.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>