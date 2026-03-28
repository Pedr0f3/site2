<?php 
// Sistema de Contador de Visitas
$arquivo_contador = 'contador_caixa_najia.txt';
if (!file_exists($arquivo_contador)) {
    file_put_contents($arquivo_contador, '0'); 
}
$visitas = (int)file_get_contents($arquivo_contador);
$visitas++;
file_put_contents($arquivo_contador, $visitas);
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ganhe uma Caixa da Najia de graça no Brawl Stars! Resgate agora seu brinde por tempo limitado e acelere sua progressão para desbloquear a nova brawler.">
    <meta name="author" content="The Winner's">
    <meta name="keywords" content="brawl stars, the winners, najia, supercell, caixa da najia, caixa gratis, recompensa, link de resgate">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../icone.ico" type="image/x-icon">
    <link rel="stylesheet" href="../style.css">
    <title>Ganhe uma Caixa da Najia de Graça no Brawl Stars! - The Winner's</title>
    <link rel="canonical" href="https://www.thewinners.site/noticias/caixa-najia-gratis" />

    <style>
        /* Estilos copiados de tudo-sobre-a-najia.html para consistência */
        body { background-color: #f4f6f9; }
        .container-noticia { display: flex; flex-wrap: wrap; gap: 40px; padding: 40px 20px; max-width: 1300px; margin: 0 auto; }
        main { flex: 3; min-width: 65%; }
        aside { flex: 1; min-width: 320px; }
        .card-conteudo { background: #fff; border-radius: 15px; box-shadow: 0 4px 20px rgba(0,0,0,0.05); padding: 40px; }
        
        .btn-resgate {
            display: block;
            background: linear-gradient(135deg, #6ab04c, #badc58);
            color: white;
            text-align: center;
            padding: 20px;
            border-radius: 12px;
            text-decoration: none;
            font-size: 1.5rem;
            font-weight: bold;
            margin: 30px 0;
            transition: transform 0.2s, box-shadow 0.2s;
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
            text-shadow: 1px 1px 2px rgba(0,0,0,0.3);
        }
        .btn-resgate:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(0,0,0,0.25);
        }

        .aviso-bug {
            background-color: #fffbe6;
            border-left: 4px solid #f1c40f;
            padding: 15px;
            margin: 20px 0;
            border-radius: 4px;
            font-size: 0.95rem;
            line-height: 1.6;
        }

        /* Responsividade Mobile Extrema */
        @media (max-width: 768px) {
            .container-noticia { padding: 0 !important; gap: 0 !important; }
            main, aside { min-width: 100% !important; }
            .card-conteudo { border-radius: 0 !important; border: none !important; box-shadow: none !important; padding: 20px 15px !important; }
            aside .card { border-radius: 0; box-shadow: none; border-top: 5px solid #eee; }
        }
    </style>
</head>
<body>
    <?php include '../header.php'; ?>

    <div class="container-noticia">
        <main>
            <article class="card-conteudo">
                <span class="badge news" style="background: #6ab04c; color: white; padding: 5px 10px; border-radius: 5px; font-weight: bold; font-size: 0.8rem;">Recompensa Grátis</span>
                <h1 style="font-size: 2.5rem; color: var(--brawl-dark); margin-top: 15px; margin-bottom: 10px; line-height: 1.2;">Ganhe uma Caixa da Najia de Graça no Brawl Stars!</h1>
                <p style="color: #666; margin-bottom: 25px; font-size: 0.95rem;">Por <strong>The Winner's</strong> | Atualizado em 28 Mar, 2026</p>
                
                <img src="https://media.discordapp.net/attachments/843613946501136424/1487242176202014891/Untitled_project_-_2026-03-27T210911.294.jpg?ex=69c86db6&is=69c71c36&hm=a3d44d4b8d1fda1bf08c98b4c739ad30c47565790d94f8800a56a5643f949104&=&format=webp&width=1240&height=698" alt="Caixa da Najia Grátis no Brawl Stars" style="width: 100%; border-radius: 15px; border: 4px solid var(--brawl-dark); margin-bottom: 30px;">
                
                <p style="font-size: 1.1rem; color: #444; margin-bottom: 20px; line-height: 1.8;">Em comemoração à chegada da Najia, a 101ª personagem do jogo, a Supercell se uniu aos Criadores de Conteúdo para presentear a comunidade com uma <strong>Caixa da Najia totalmente grátis!</strong></p>
                
                <p style="font-size: 1.1rem; color: #444; margin-bottom: 30px; line-height: 1.8;">Para quem está na correria do evento de acesso antecipado (que fica disponível até o dia 30 de março), essa caixa extra é aquela ajuda que faltava para tentar desbloquear a nova brawler venenosa sem colocar a mão no bolso. E caso a sorte não sorria de primeira e você não pegue a personagem, a caixa ainda rende ótimos prêmios de consolação, como Moedas, Pontos de Poder, Vales, Blings ou até novas skins.</p>

                <h2 style="color: var(--brawl-blue); margin-bottom: 15px;">🎁 Como resgatar seu brinde</h2>
                <p style="color: #444; margin-bottom: 20px; line-height: 1.8;">O resgate é instantâneo e 100% seguro. Por se tratar de um link oficial da Supercell, a recompensa cai direto na sua conta. Siga os passos:</p>
                <ol style="margin-left: 20px; margin-bottom: 20px; color: #444; line-height: 1.8; font-weight: 500;">
                    <li>Clique no link de resgate disponibilizado abaixo.</li>
                    <li>O aplicativo do Brawl Stars vai se abrir sozinho no seu celular.</li>
                    <li>Confirme o recebimento na tela inicial e pronto! Sua caixa estará liberada.</li>
                </ol>

                <a href="https://link.brawlstars.com/voucher/cd78d402-62f3-45b9-82a0-f8ae805d6c5d" target="_blank" class="btn-resgate">🐍✨ RESGATE SUA CAIXA AQUI</a>

                <div class="aviso-bug">
                    <strong>Aviso para evitar bugs:</strong> Links de recompensa costumam dar problema quando abertos pelos navegadores internos das redes sociais (como Instagram, Facebook ou X). Se o jogo não abrir direto, <strong>copie o link acima</strong> e cole no navegador principal do seu celular, como o Google Chrome ou Safari.
                </div>

                <h2 style="color: var(--brawl-blue); margin-top: 35px; margin-bottom: 15px;">🤔 O que tem dentro da caixa?</h2>
                <p style="color: #444; margin-bottom: 20px; line-height: 1.8;">A probabilidade de você tirar a Najia logo de cara em uma dessas caixas é de <strong>2,38%</strong>. Mas não se preocupe: as caixas são focadas em acelerar a sua progressão. Dá uma olhada nas chances de cada item:</p>
                
                <ul style="margin-left: 20px; margin-bottom: 30px; color: #444; line-height: 1.8; font-weight: 600;">
                    <li><strong>94,24%</strong> de chance de vir 50 Moedas</li>
                    <li><strong>70,90%</strong> de chance de vir 100 Duplicadores de XP</li>
                    <li><strong>64,04%</strong> de chance de vir 25 Pontos de Poder</li>
                    <li><strong>56,95%</strong> de chance de vir 30 Vales</li>
                </ul>
                <p style="color: #444; margin-bottom: 20px; line-height: 1.8;">Além de chances reais de dropar skins raras, super-raras e até lendárias!</p>

                <p style="font-size: 1.1rem; color: #444; margin-bottom: 30px; line-height: 1.8; background: #f1f2f6; padding: 15px; border-left: 5px solid var(--brawl-blue); border-radius: 5px;">Não se esqueça: para ter a Najia garantida sem gastar gemas, é preciso abrir 14 caixas durante o período do evento utilizando os ingressos diários (são 12 logo de cara e mais 2 por dia). Ou seja, esse brinde de hoje já encurta bastante o seu caminho! Quando o evento terminar na próxima semana, a brawler irá para a Trilha Estelar, onde poderá ser desbloqueada usando Vales.</p>

                <hr style="border: 0; border-top: 2px solid #eee; margin-bottom: 30px;">
                <h3 style="color: var(--brawl-dark); margin-bottom: 20px;">💬 Deixe sua opinião</h3>
                <div id="disqus_thread"></div>
            </article>
        </main>

        <aside>
            <div class="card" style="padding: 20px; background: #fff; border-radius: 15px; position: sticky; top: 20px;">
                
                <div style="background: linear-gradient(90deg, #ff7675 0%, #d63031 100%); color: white; padding: 15px; border-radius: 8px; text-align: center; margin-bottom: 25px; font-weight: bold; box-shadow: 0 4px 6px rgba(0,0,0,0.1);">
                    🔥 Em alta! +<?php echo number_format($visitas, 0, ',', '.'); ?> Brawlers já leram
                </div>

                <h3 style="color: var(--brawl-blue); margin-top: 0; margin-bottom: 15px; border-bottom: 2px solid #eee; padding-bottom: 10px;">Compartilhe</h3>
                <div style="display: flex; gap: 10px; margin-bottom: 25px;">
                    <a href="https://api.whatsapp.com/send?text=Caixa%20da%20Najia%20Grátis%20no%20Brawl%20Stars!%20Resgate%20aqui:%20https://www.thewinners.site/noticias/caixa-najia-gratis" target="_blank" style="flex: 1; background-color: #25D366; color: white; padding: 10px 5px; font-size: 14px; text-align: center; border-radius: 5px; text-decoration: none; font-weight: bold;">WhatsApp</a>
                    <a href="https://twitter.com/intent/tweet?url=https://www.thewinners.site/noticias/caixa-najia-gratis&text=Caixa%20da%20Najia%20Grátis%20no%20Brawl%20Stars!" target="_blank" style="flex: 1; background-color: #1DA1F2; color: white; padding: 10px 5px; font-size: 14px; text-align: center; border-radius: 5px; text-decoration: none; font-weight: bold;">Twitter</a>
                </div>

                <h3 style="color: var(--brawl-blue); margin-top: 0; margin-bottom: 15px; border-bottom: 2px solid #eee; padding-bottom: 10px;">Leia Também</h3>
                
                <ul style="list-style: none; padding: 0; margin: 0; display: flex; flex-direction: column; gap: 15px;">
                    <li>
                        <a href="tudo-sobre-a-najia.php" style="display: flex; align-items: center; gap: 12px; color: #333; text-decoration: none; padding: 8px; border-radius: 8px; transition: background 0.2s;" onmouseover="this.style.background='#f0f2f5'" onmouseout="this.style.background='transparent'">
                            <img src="https://i.ytimg.com/vi/AQw27lFqNEM/maxresdefault.jpg" alt="Brawler Najia" style="width: 70px; height: 50px; object-fit: cover; border-radius: 5px;">
                            <span style="font-weight: 600; font-size: 0.9rem; line-height: 1.3;">Tudo Sobre a Nova Brawler Najia</span>
                        </a>
                    </li>
                    <li>
                        <a href="novo-brawler-shade.php" style="display: flex; align-items: center; gap: 12px; color: #333; text-decoration: none; padding: 8px; border-radius: 8px; transition: background 0.2s;" onmouseover="this.style.background='#f0f2f5'" onmouseout="this.style.background='transparent'">
                            <img src="../imagensNoticias/lancamentoShade.jpg" alt="Brawler Shade" style="width: 70px; height: 50px; object-fit: cover; border-radius: 5px;">
                            <span style="font-weight: 600; font-size: 0.9rem; line-height: 1.3;">Tudo sobre o Novo Brawler Shade</span>
                        </a>
                    </li>
                    <li>
                        <a href="presentesGratis.php" style="display: flex; align-items: center; gap: 12px; color: #333; text-decoration: none; padding: 8px; border-radius: 8px; transition: background 0.2s;" onmouseover="this.style.background='#f0f2f5'" onmouseout="this.style.background='transparent'">
                            <img src="../imagensNoticias/presents.avif" alt="Presentes Grátis" style="width: 70px; height: 50px; object-fit: cover; border-radius: 5px;">
                            <span style="font-weight: 600; font-size: 0.9rem; line-height: 1.3;">Resgate Presentes e Recompensas</span>
                        </a>
                    </li>
                </ul>
            </div>
        </aside>
    </div>

    <?php include '../footer.php'; ?>
</body>
</html>