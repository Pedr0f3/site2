<?php
$pagina_atual = basename($_SERVER['PHP_SELF']);

// Detecta se a página atual está dentro da pasta /noticias/
$is_in_noticias_folder = strpos($_SERVER['REQUEST_URI'], '/noticias/') !== false;

// Define o prefixo do caminho para corrigir os links (sobe um nível se estiver na pasta de notícias)
$path_prefix = $is_in_noticias_folder ? '../' : '';
?>
<footer>
    <div class="social-links">
        <a href="https://www.instagram.com/thewinners_23/" target="_blank"><img src="<?= $path_prefix ?>imagensRedesSociais/redeInstagram.png" alt="Instagram"></a>
        <a href="https://www.youtube.com/@the_winners23" target="_blank"><img src="https://static.vecteezy.com/system/resources/thumbnails/023/986/480/small_2x/youtube-logo-youtube-logo-transparent-youtube-icon-transparent-free-free-png.png" alt="YouTube"></a>
        <a href="https://discord.gg/K28fDYbXun" target="_blank"><img src="https://logodownload.org/wp-content/uploads/2017/11/discord-logo-1-1.png" alt="Discord"></a>
    </div>
    <div class="footer-info">
        <p><strong>Novos Vídeos:</strong> Todo domingo | <strong>Shorts:</strong> Todo dia!</p>
    </div>
    <div class="footer-links">
        <a href="<?= $path_prefix ?>contato.html" <?= ($pagina_atual == 'contato.html') ? 'style="color: white; text-decoration: underline;"' : '' ?>>Contato</a>
        <a href="<?= $path_prefix ?>sobre.html" <?= ($pagina_atual == 'sobre.html') ? 'style="color: white; text-decoration: underline;"' : '' ?>>Sobre</a>
        <a href="<?= $path_prefix ?>politicaPrivacidade.html" <?= ($pagina_atual == 'politicaPrivacidade.html') ? 'style="color: white; text-decoration: underline;"' : '' ?>>Política de Privacidade</a>
    </div>
    <div style="margin-top: 30px; font-size: 0.85rem; color: #888; max-width: 800px; margin-left: auto; margin-right: auto; line-height: 1.5; padding: 0 20px;">
        <p>Este material não é oficial e não é endossado pela Supercell. Para mais informações, consulte a <a href="https://supercell.com/en/fan-content-policy/pt/" target="_blank" rel="noopener noreferrer" style="color: #aaa; text-decoration: underline;">Política de Conteúdo para Fãs da Supercell</a>.</p>
    </div>
</footer>