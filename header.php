<?php 
$pagina_atual = basename($_SERVER['PHP_SELF']); 

// Detecta se a página atual está dentro da pasta /noticias/
$is_in_noticias_folder = strpos($_SERVER['REQUEST_URI'], '/noticias/') !== false;

// Define o prefixo do caminho para corrigir os links (sobe um nível se estiver na pasta de notícias)
$path_prefix = $is_in_noticias_folder ? '../' : '';
?>
<nav class="navbar">
    <a href="<?= $path_prefix ?>index.html" class="nav-brand"><img src="<?= $path_prefix ?>icone.ico" alt="Logo The Winners"> The Winner's</a>
    <button class="menu-toggle" aria-label="Abrir menu" onclick="document.querySelector('.nav-links').classList.toggle('show-mobile')">☰</button>
    <ul class="nav-links">
        <li><a href="<?= $path_prefix ?>index.html" class="<?= (($pagina_atual == 'index.html' || $pagina_atual == '') && !$is_in_noticias_folder) ? 'active' : '' ?>">Início</a></li>
        <li><a href="<?= $path_prefix ?>sorteios.html" class="<?= ($pagina_atual == 'sorteios.html') ? 'active' : '' ?>">Sorteios</a></li>
        <li><a href="<?= $path_prefix ?>itensGratis.html" class="<?= ($pagina_atual == 'itensGratis.html') ? 'active' : '' ?>">Grátis</a></li>
        <li><a href="<?= $path_prefix ?>noticias/" class="<?= ($is_in_noticias_folder) ? 'active' : '' ?>">Notícias</a></li>
    </ul>
</nav>