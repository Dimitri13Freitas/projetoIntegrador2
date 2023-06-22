<?php
echo "<header class='header d-flex align-items-center justify-content-between border-bottom'>
<button aria-label='Clique para trocar o tema do site' class='theme'>
  <img src='./img/assets/sun.svg' alt='SVG Sol'>
</button>
<button class='menuMobile' aria-label='Abrir menu de navegação'>Menu<span class='hamburguer'></span></button>
<a href='index.php' class='logo'><img src='img/assets/logo.png' alt='Logo Escrito Los Fofuritos sem calça'></a>
<div class='d-flex redes'>
<button aria-label='Este botão serve para aumentar a fonte do site, para pessoas que tem dificuldade para ler' id='btnAumentar'>A+</button>
<button aria-label='Este botão serve para diminuir a fonte do site, para pessoas que tem dificuldade para ler' id='btnDiminuir'>A-</button>
  <a aria-label='Seguir para Github Dimitri13Freitas' href='https://github.com/Dimitri13Freitas/projetoIntegrador2'><img src='./img/assets/github.svg' alt='Icon Logo Git-Hub'></a>
  <a aria-label='Seguir para Github Dimitri13Freitas' href='https://github.com/Dimitri13Freitas/projetoIntegrador2'><img src='./img/assets/instagram.svg' alt='Icon Logo Instagram'></a>
  <a aria-label='Seguir para Github Dimitri13Freitas' href='https://github.com/Dimitri13Freitas/projetoIntegrador2'><img src='./img/assets/twitter.svg' alt='Icon Logo Twitter'></a>
</div>
</header>
<nav class='navegacao'>
<ul class='d-flex p-0 flex-row align-items-center justify-content-around'>
  <li class='p-2 dropdown'>
    <button data-toggle='dropdown' aria-label='Mostra menu escondido contendo páginas sobre filmes' class='p-2 button dropdown-toggle' >Filmes</button>
    <ul class='dropdown-menu'>
      <li><a aria-label='Seguir para página filmesCosplay.php' href='filmesCosplay.php'>Cosplays</a></li>
      <li><a aria-label='Seguir para página filmesPrincipais.php' href='filmesPrincipais.php'>Principais Obras</a></li>
      <li><a aria-label='Seguir para página filmesDestaques.php' href='filmesDestaques.php'>Destaques</a></li>
      <li><a aria-label='Seguir para página filmesLancamentos.php' href='filmesLancamentos.php'>Lançamentos</a></li>
    </ul>
  </li>
  <li><a class='p-2' href='#' aria-label='Está em manutenção não é possível usar este link'>Series</a></li>
  <li class='p-2'>
  <button data-toggle='dropdown' aria-label='Mostra menu escondido contendo páginas sobre livros' class='p-2 button dropdown-toggle'>Livros</button>
    <ul class='dropdown-menu'>
      <li><a aria-label='Seguir para página livrosPrincipais.php' href='livrosPrincipais.php'>Principais Autores</a></li>
      <li><a aria-label='Seguir para página livrosFavoritos.php' href='livrosFavoritos.php'>Favoritos da Crítica</a></li>
      <li><a aria-label='Seguir para página livrosClassicos.php' href='livrosClassicos.php'>Clássicos</a></li>
      <li><a aria-label='Seguir para página livrosDestaques.php' href='livrosDestaques.php'>Destaques</a></li>
    </ul>
  </li>
  <li class='p-2'>
  <button data-toggle='dropdown' aria-label='Mostra menu escondido contendo páginas sobre animações' class='p-2  button dropdown-toggle'>Animações</button> 
    <ul class='dropdown-menu'>
      <li><a aria-label='Seguir para página animacoesDestaques.php' href='animacoesDestaques.php'>Destaques</a></li>
      <li><a aria-label='Seguir para página animacoesClassicos.php' href='animacoesClassicos.php'>Clássicos</a></li>
      <li><a aria-label='Seguir para página animacoesLancamentos.php' href='animacoesLancamentos.php'>Lançamentos</a></li>
      <li><a aria-label='Seguir para página animacoesPremiados.php' href='animacoesPremiados.php'>Premiados</a></li>
    </ul>
  </li>
  <li><a aria-label='Seguir para página contato.php' class='p-2' href='contato.php'>Contato</a></li>
  <li><a aria-label='Seguir para página normas.php' class='p-2' href='normas.php'>Normas de uso</a></li>
  <li><a aria-label='Seguir para página quemSomos.php' class='p-2' href='quemSomos.php'>Quem somos</a></li>
</ul>
</nav>";
