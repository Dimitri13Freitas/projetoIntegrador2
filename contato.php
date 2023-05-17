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



<body>
  <main>
    <div class='container'>
      <?php include 'include/nav.php'; ?>
      <?php include 'include/bannerHome.php'; ?>

      <fieldset class='formulario rounded rounded-3 my-5 d-flex border'>
        <figure>
          <figcaption class='sumir'>Imagem meramente ilustrativa</figcaption>
          <img src="img/assets/imgContato.webp" alt="Nave espacial em outro planeta">
        </figure>
        <form class='d-flex flex-column'>
          <label class='h5' for="nome">Nome</label>
          <input type="text" id='nome'>
          <label class='h5 mt-3' for="email">E-mail</label>
          <input type="text" id='email'>
          <label class='h5 mt-3' for="msg">Mensagem</label>
          <textarea class='d-block' id="msg"></textarea>
          <button aria-label='Envia Formulario' class='btn-primary my-3 btn'>Enviar</button>
        </form>
      </fieldset>
    </div>
    <?php include 'include/footer.php'; ?>
  </main>



  <script src="js/script.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>