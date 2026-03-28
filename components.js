class MainHeader extends HTMLElement {
    connectedCallback() {
        const isNoticias = window.location.pathname.includes('/noticias/');
        const prefix = isNoticias ? '../' : '';
        const page = window.location.pathname.split('/').pop();

        this.innerHTML = `
        <nav class="navbar">
            <a href="${prefix}index.html" class="nav-brand"><img src="${prefix}icone.ico" alt="Logo The Winners"> The Winner's</a>
            <button class="menu-toggle" aria-label="Abrir menu" onclick="document.querySelector('.nav-links').classList.toggle('show-mobile')">☰</button>
            <ul class="nav-links">
                <li><a href="${prefix}index.html" class="${(page === 'index.html' || page === '') && !isNoticias ? 'active' : ''}">Início</a></li>
                <li><a href="${prefix}sorteios.html" class="${page === 'sorteios.html' ? 'active' : ''}">Sorteios</a></li>
                <li><a href="${prefix}itensGratis.html" class="${page === 'itensGratis.html' ? 'active' : ''}">Grátis</a></li>
                <li><a href="${prefix}noticias.html" class="${isNoticias || page === 'noticias.html' ? 'active' : ''}">Notícias</a></li>
            </ul>
        </nav>
        `;
    }
}

class MainFooter extends HTMLElement {
    connectedCallback() {
        const isNoticias = window.location.pathname.includes('/noticias/');
        const prefix = isNoticias ? '../' : '';
        const page = window.location.pathname.split('/').pop();

        this.innerHTML = `
        <footer>
            <div class="social-links">
                <a href="https://www.instagram.com/thewinners_23/" target="_blank"><img src="${prefix}imagensRedesSociais/redeInstagram.png" alt="Instagram"></a>
                <a href="https://www.youtube.com/@the_winners23" target="_blank"><img src="https://static.vecteezy.com/system/resources/thumbnails/023/986/480/small_2x/youtube-logo-youtube-logo-transparent-youtube-icon-transparent-free-free-png.png" alt="YouTube"></a>
                <a href="https://discord.gg/K28fDYbXun" target="_blank"><img src="https://logodownload.org/wp-content/uploads/2017/11/discord-logo-1-1.png" alt="Discord"></a>
            </div>
            <div class="footer-info">
                <p><strong>Novos Vídeos:</strong> Todo domingo | <strong>Shorts:</strong> Todo dia!</p>
            </div>
            <div class="footer-links">
                <a href="${prefix}contato.html" ${page === 'contato.html' ? 'style="color: white; text-decoration: underline;"' : ''}>Contato</a>
                <a href="${prefix}sobre.html" ${page === 'sobre.html' ? 'style="color: white; text-decoration: underline;"' : ''}>Sobre</a>
                <a href="${prefix}politicaPrivacidade.html" ${page === 'politicaPrivacidade.html' ? 'style="color: white; text-decoration: underline;"' : ''}>Política de Privacidade</a>
            </div>
            <div style="margin-top: 30px; font-size: 0.85rem; color: #888; max-width: 800px; margin-left: auto; margin-right: auto; line-height: 1.5; padding: 0 20px;">
                <p>Este material não é oficial e não é endossado pela Supercell. Para mais informações, consulte a <a href="https://supercell.com/en/fan-content-policy/pt/" target="_blank" rel="noopener noreferrer" style="color: #aaa; text-decoration: underline;">Política de Conteúdo para Fãs da Supercell</a>.</p>
            </div>
        </footer>
        `;
    }
}

customElements.define('main-header', MainHeader);
customElements.define('main-footer', MainFooter);