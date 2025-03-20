<!doctype html>
<html lang="pt-br">
  <head>
    <!-- seo essentials -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="format-detection" content="telephone=no">
    <meta name="robots" content="index, follow">
    <title>Reggaeroots - O melhor do Reggae para Você</title>
    <meta name="description" content="ouça e descubra a melhor seleção de músicas reggae! dos clássicos jamaicanos às novas tendências, tudo em um só lugar.">
    <meta name="author" content="reggaeroots">
    <!-- open graph meta tags -->
    <meta property="og:title" content="reggaeroots - o melhor do reggae para você">
    <meta property="og:description" content="descubra uma vasta seleção de músicas reggae, desde clássicos jamaicanos até as novas tendências do reggae. ouça agora!">
    <meta property="og:image" content="https://reggaeroots.com.br/images/bg-1-1920x1000.jpg">
    <meta property="og:url" content="https://reggaeroots.com.br">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="reggaeroots">
    <!-- twitter meta tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="reggaeroots - o melhor do reggae para você">
    <meta name="twitter:description" content="ouça e curta as melhores músicas reggae em um só lugar. explore músicas clássicas e novas tendências do gênero reggae.">
    <meta name="twitter:image" content="https://reggaeroots.com.br/images/bg-1-1920x1000.jpg">
    <!-- favicon and icons -->
    <link rel="apple-touch-icon" href="/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" type="image/png" href="/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="/favicon-16x16.png" sizes="16x16">
    <link rel="shortcut icon" href="/favicon.ico">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="theme-color" content="#2196f3">
    <!-- melhorar o carregamento das fontes -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <!-- icon fonts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <!-- stylesheets -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/style.css" id="main-styles-link">
    <link rel="stylesheet" href="css/radio.css">
    <!-- libraries stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
    <style>
      .ie-panel {
      display: none;
      background: #212121;
      padding: 10px 0;
      box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3);
      clear: both;
      text-align: center;
      position: relative;
      z-index: 1;
      }
      html.ie-10 .ie-panel, html.lt-ie-10 .ie-panel {
      display: block;
      }
      .button-container {
      display: flex;
      justify-content: center;
      margin-top: 15px; /* distância entre a box e o botão */
      }
      .button {
      /* estilo do botão */
      background-color: #008cba;
      color: white;
      padding: 10px 20px;
      border: none;
      border-radius: 5px;
      font-size: 16px;
      cursor: pointer;
      display: flex;
      align-items: center;
      justify-content: center;
      }
      .button svg {
      margin-right: 8px;
      }
      /* garantir que o botão não quebre o layout */
      .button-container a {
      display: inline-block;
      }
      .button {
      width: fit-content;
      display: flex;
      padding: 1.2em 1rem;
      cursor: pointer;
      gap: 0.4rem;
      font-weight: bold;
      border-radius: 30px;
      text-shadow: 2px 2px 3px rgb(136 0 136 / 50%);
      background: linear-gradient(15deg, #880088, #aa2068, #cc3f47, #de6f3d, #f09f33, #de6f3d, #cc3f47, #aa2068, #880088) no-repeat;
      background-size: 300%;
      color: #fff;
      border: none;
      background-position: left center;
      box-shadow: 0 30px 10px -20px rgba(0,0,0,.2);
      transition: background .3s ease;
      }
      .button:hover {
      background-size: 320%;
      background-position: right center;
      }
      .button:hover svg {
      fill: #fff;
      }
      .button svg {
      width: 23px;
      fill: #f09f33;
      transition: .3s ease;
      }
      /* estilos do botão */
      .btn-container {
      display: flex;
      width: 220px; /* aumentei a largura do botão */
      height: fit-content;
      background-color: #1d2129;
      border-radius: 40px;
      box-shadow: 0px 5px 10px #bebebe;
      justify-content: space-between;
      align-items: center;
      border: none;
      cursor: pointer;
      padding: 12px; /* aumentei um pouco o padding */
      }
      .icon-container {
      width: 50px; /* ajustei um pouco o tamanho do ícone */
      height: 50px;
      background-color: #f59aff;
      display: flex;
      align-items: center;
      justify-content: center;
      border-radius: 50%;
      border: 3px solid #1d2129;
      }
      .text {
      width: calc(220px - 60px); /* ajustei o espaço do texto */
      height: 100%;
      display: flex;
      align-items: center;
      justify-content: center;
      color: white;
      font-size: 1.1em;
      letter-spacing: 1.2px;
      font-weight: bold;
      }
      .icon-container svg {
      transition-duration: 1.5s;
      }
      .btn-container:hover .icon-container svg {
      transition-duration: 1.5s;
      animation: arrow 1s linear infinite;
      }
      @keyframes arrow {
      0% {
      opacity: 0;
      margin-left: 0px;
      }
      100% {
      opacity: 1;
      margin-left: 10px;
      }
      }
      .video-container {
      position: relative;
      width: 100%;
      max-width: 1140px; /* largura máxima para desktops */
      margin: auto; /* centraliza */
      aspect-ratio: 16 / 9; /* mantém a proporção correta do vídeo */
      }
      .video-container iframe {
      width: 100%;
      height: 100%;
      position: absolute;
      }
      .rd-navbar-nav .rd-nav-link {
  color: white !important; /* Define a cor do texto para branco */
  transition: color 0.3s ease; /* Adiciona uma transição suave */
}

.rd-navbar-nav .rd-nav-link:hover {
  color: #90ee90 !important; /* Muda a cor para verde claro ao passar o mouse */
}

    </style>
  </head>
<!-- Anúncio com vídeo local -->
<div id="ad-popup" class="ad-popup">
    <div class="ad-popup-content">
        <video id="ad-video" autoplay>
            <source src="https://social.x10.mx/video/anuncio.mp4" type="video/mp4">
            Seu navegador não suporta o formato de vídeo.
        </video>
        <!-- Botão de mutar/desmutar -->
        <button id="btn-mute-button" class="btn-mute-button">🔇</button>
        <br>
        <br>
        <!-- Botão "Ajudar Manobrista" (inicialmente oculto) -->
        <button id="help-manobrista-btn" class="help-manobrista-btn" style="display: none;">Ajudar Manobrista</button>
        <!-- Botão de play -->
        <button id="play-btn" class="play-btn">▶️</button>
        <!-- Botão de fechar -->
        <button id="close-btn" class="close-btn">X</button>
    </div>
</div>

<style>
    .ad-popup {
        display: none; /* Inicialmente escondido */
        position: fixed;
        top: 0;
        right: 0; /* Alinha o pop-up à direita da tela */
        width: auto;
        height: auto;
        z-index: 1000;
        justify-content: center;
        align-items: center;
    }

    .ad-popup-content {
        position: relative;
        width: 100%;
        max-width: 400px; /* Para vídeo no tamanho do TikTok */
        background: none;
        text-align: center;
        border-radius: 16px; /* Bordas arredondadas */
        border: 2px solid blue; /* Bordas azuis fininhas */
        padding: 10px;
    }

    /* Botão "Ajude o Manobrista" */
    .help-btn {
        display: none; /* Inicialmente escondido */
        background-color: green; /* Cor de fundo verde */
        color: white; /* Texto branco */
        border: none;
        padding: 10px 20px;
        font-size: 20px;
        cursor: pointer;
        border-radius: 25px;
        opacity: 0; /* Inicialmente invisível */
        transition: opacity 1s ease-in-out; /* Efeito de fade-in */
        margin-top: 20px;
    }

    /* Botão "Ajudar Manobrista" */
    .help-manobrista-btn {
        position: absolute;
        bottom: 100px; /* Coloca abaixo do vídeo */
        left: 50%;
        transform: translateX(-50%);
        background-color: green;
        color: white; /* Texto branco */
        border: none;
        padding: 12px 50px; /* Botão alongado */
        font-size: 20px;
        cursor: pointer;
        border-radius: 25px;
        z-index: 1000;
    }

    /* Estilo de botão de Mute */
    .btn-mute-button {
        position: absolute;
        top: 10px;
        left: 10px;
        background-color: rgba(0, 0, 0, 0.5);
        color: white;
        border: none;
        padding: 10px 10px;
        font-size: 20px;
        cursor: pointer;
        border-radius: 50%;
        z-index: 1000; /* Coloca o botão acima do vídeo */
    }

    /* Estilo do botão Play */
    .play-btn {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background-color: rgba(0, 0, 0, 0.5);
        color: white;
        border: none;
        padding: 20px;
        font-size: 40px;
        cursor: pointer;
        border-radius: 50%;
        z-index: 1000;
    }

    .close-btn {
        position: absolute;
        top: 10px;
        right: 10px;
        background-color: red;
        color: white;
        border-radius: 50%;
        width: 40px;
        height: 40px;
        font-size: 24px;
        text-align: center;
        line-height: 40px;
        cursor: pointer;
        z-index: 1000;
    }

    /* Estilo de sobreposição para centralizar o vídeo */
    #ad-video {
        width: 100%;
        height: auto;
        max-height: 100vh; /* Limita a altura do vídeo a 100% da altura da tela */
        object-fit: cover; /* Para manter as proporções e não distorcer */
        border-radius: 8px; /* Bordas arredondadas no vídeo */
    }

    .rd-nav-link {
        color: black !important;
    }

    /* Estilo para o pop-up */
    #popup {
        display: none;
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background-color: white;
        padding: 20px;
        border-radius: 12px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        z-index: 9999;
    }

    /* Botão de fechar */
    #close-btn {
        background-color: #ff4d4d;
        color: white;
        border: none;
        padding: 10px;
        border-radius: 5px;
        cursor: pointer;
        position: absolute;
        top: 10px;
        right: 10px;
    }

    /* Sombras do fundo para destacar o pop-up */
    #overlay {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5);
        z-index: 9998;
    }
</style>
<!-- Botão de escolha para visualizar o anúncio -->
<div id="ad-choice" class="ad-choice" style="display: none; position: fixed; bottom: 20px; left: 50%; transform: translateX(-50%); background: #00008B; color: white; padding: 10px 20px; border-radius: 10px; z-index: 9999; width: 250px;">
    <!-- Campo de mensagem -->
    <div style="margin-bottom: 10px; text-align: center; font-size: 16px;">
        Temos um anúncio, você pode ver?
    </div>
    
    <!-- Botões -->
    <div style="display: flex; justify-content: space-between; width: 100%; text-align: center;">
        <button id="yes-btn" style="background: white; color: blue; border: none; padding: 5px 10px; border-radius: 5px; cursor: pointer; width: 45%;">Sim</button>
        <button id="no-btn" style="background: white; color: blue; border: none; padding: 5px 10px; border-radius: 5px; cursor: pointer; width: 45%;">Não</button>
    </div>
</div>


<left>
    <div id="ad-popup" class="ad-popup" style="display: none;">
        <div class="ad-popup-content">
            <video id="ad-video">
                <source src="https://social.x10.mx/videos/anuncio.mp4" type="video/mp4">
                Seu navegador não suporta o formato de vídeo.
            </video>
            <!-- Botão de mutar/desmutar -->
            <button id="btn-mute-button" class="btn-mute-button">🔇</button>
            <br>
            <br>
            <!-- Botão "Ajudar Manobrista" (inicialmente oculto) -->
            <button id="help-manobrista-btn" class="help-manobrista-btn" style="display: none;">Ajudar Manobrista</button>
            <!-- Botão de play -->
            <button id="play-btn" class="play-btn">▶️</button>
            <!-- Botão de fechar -->
            <button id="close-btn" class="close-btn">X</button>
        </div>
    </div>
</left>

<script>
const video = document.getElementById("ad-video");
const closeBtn = document.getElementById("close-btn");
const muteBtn = document.getElementById("btn-mute-button");
const playBtn = document.getElementById("play-btn");
const helpManobristaBtn = document.getElementById("help-manobrista-btn");
const adPopup = document.getElementById("ad-popup");
const adChoice = document.getElementById("ad-choice");
const yesBtn = document.getElementById("yes-btn");
const noBtn = document.getElementById("no-btn");

// Garantir que o vídeo não comece automaticamente
video.removeAttribute("autoplay");
video.pause();

// Exibir a mensagem de escolha após 30 segundos
setTimeout(() => {
    adChoice.style.display = "block";
}, 30000);

// Exibir o pop-up do anúncio se o usuário aceitar
yesBtn.addEventListener("click", () => {
    adChoice.style.display = "none";
    adPopup.style.display = "flex";
});


// Fechar a mensagem de escolha se o usuário recusar
noBtn.addEventListener("click", () => {
    adChoice.style.display = "none";
});

// Exibir o botão "Ajudar Manobrista" após 60 segundos
setTimeout(() => {
    helpManobristaBtn.style.display = "inline-block";
}, 60000);

// Fechar o pop-up após 120 segundos de exibição
setTimeout(() => {
    adPopup.style.display = "none";
    video.pause();
    playBtn.textContent = "▶️";
}, 240000);

// Função para mutar e desmutar o vídeo
muteBtn.addEventListener("click", () => {
    video.muted = !video.muted;
    muteBtn.textContent = video.muted ? "🔇" : "🔊";
});

// Função para dar play ou pause no vídeo ao clicar no botão "Play"
playBtn.addEventListener("click", () => {
    if (video.paused) {
        video.play();
        playBtn.textContent = "⏸️";
    } else {
        video.pause();
        playBtn.textContent = "▶️";
    }
});

// Botão "Fechar" fecha o pop-up
closeBtn.addEventListener("click", () => {
    adPopup.style.display = "none";
    video.pause();
    playBtn.textContent = "▶️";
});

// Redirecionar para a página de doação ao clicar no botão "Ajudar Manobrista"
helpManobristaBtn.addEventListener("click", () => {
    window.location.href = "https://social.x10.mx/donate.html";
});

// Manter o pop-up centralizado e sobrepondo o site
adPopup.style.position = "fixed";
adPopup.style.top = "50%";
adPopup.style.left = "50%";
adPopup.style.transform = "translate(-50%, -50%)";
adPopup.style.zIndex = "10000";
adPopup.style.width = "100vw";
adPopup.style.height = "100vh";
adPopup.style.background = "rgba(0, 0, 0, 0.8)";
adPopup.style.display = "none";
adPopup.style.justifyContent = "center";
adPopup.style.alignItems = "center";

// Adicionar as áreas clicáveis ao redor do vídeo
const clickableArea = document.createElement('div');
clickableArea.style.position = "absolute";
clickableArea.style.top = "0";
clickableArea.style.left = "0";
clickableArea.style.right = "0";
clickableArea.style.bottom = "0";
clickableArea.style.zIndex = "999"; // Colocar sobre o vídeo, mas abaixo dos botões
clickableArea.style.cursor = "pointer";

// Adicionar a área clicável ao redor do vídeo
adPopup.appendChild(clickableArea);

// Quando clicado, redirecionar para o link desejado
clickableArea.addEventListener('click', () => {
    window.location.href = "https://social.x10.mx/donate.html";
});

// Adicionar um evento clicável no próprio vídeo, além das bordas
video.addEventListener('click', () => {
    window.location.href = "https://social.x10.mx/donate.html";
});
</script>


  <body>
    <div class="preloader">
      <div class="preloader-body">
        <div class="cssload-container">
          <div class="cssload-speeding-wheel"></div>
        </div>
      </div>
    </div>
    <div class="page">
      <!-- page header--><a class="banner banner-top" href="https://www.facebook.com/reggaerootsart" target="_blank"><img src="images/monstroid_02.jpg" alt="" height="0"/></a>
      <header class="section page-header">
        <!-- rd navbar-->
        <div class="rd-navbar-wrap rd-navbar-absolute">
          <nav class="rd-navbar rd-navbar-creative" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-static" data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-lg-stick-up-offset="20px" data-xl-stick-up-offset="20px" data-xxl-stick-up-offset="20px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
            <div class="rd-navbar-main-outer">
              <div class="rd-navbar-main">
                <!-- rd navbar panel-->
                <div class="rd-navbar-panel">
                  <!-- rd navbar toggle-->
                  <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                  <!-- rd navbar brand-->
                  <div class="rd-navbar-brand"><a class="brand" href="index.html"><img src="images/logo-302x44.png" alt="" width="151" height="22"/></a>
                  </div>
                </div>
                <div class="rd-navbar-main-element">
                  <div class="rd-navbar-nav-wrap">
                    <!-- rd navbar nav-->
                    <ul class="rd-navbar-nav">
                      <li class="rd-nav-item active"><a class="rd-nav-link" href="index.html">início</a>
                      </li>
                      <li class="rd-nav-item"><a class="rd-nav-link" href="about.html">sobre</a>
                      </li>
                      <li class="rd-nav-item"><a class="rd-nav-link" href="typography.html">tipografia</a>
                      </li>
                      <li class="rd-nav-item"><a class="rd-nav-link" href="contacts.html">contato</a>
                      </li>
                    </ul>
                  </div>
                  <!-- rd navbar search-->
                  <div class="rd-navbar-search">
                    <button class="rd-navbar-search-toggle rd-navbar-fixed-element-1" data-rd-navbar-toggle=".rd-navbar-search"><span></span></button>
                    <form class="rd-search" action="#" method="get">
                      <div class="form-wrap">
                        <label class="form-label" for="rd-navbar-search-form-input">busca</label>
                        <input class="rd-navbar-search-form-input form-input" id="rd-navbar-search-form-input" type="text" name="s" autocomplete="off">
                        <div class="rd-search-results-live" id="rd-search-results-live"></div>
                      </div>
                      <button class="rd-search-form-submit mdi mdi-magnify" type="submit"></button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </nav>
        </div>
      </header>
      <!-- swiper-->
      <section class="section swiper-container swiper-slider swiper-slider-2" data-loop="false" data-autoplay="false" data-simulate-touch="false" data-slide-effect="fade">
        <div class="swiper-wrapper">
          <div class="swiper-slide context-dark" data-slide-bg="images/bg-1-1920x1000.jpg">
            <div class="swiper-slide-caption">
              <div class="container">
                <div class="row justify-content-lg-left">
                  <div class="col-md-12 col-xl-10">
                    <h1 data-caption-animate="fadeinup" data-caption-delay="100">oferecendo a melhor
                      música para lojas, estabelecimentos comerciais e entretenimento
                    </h1>
                    <a class="button button-lg button-primary" href="apk/android/app-release.apk" data-caption-animate="fadeinup" data-caption-delay="450">baixe app</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-meta">
          <ul class="links">
            <li><a class="icon icon-meta mdi mdi-facebook" href="https://www.facebook.com/reggaerootsart"></a></li>
            <li><a class="icon icon-meta mdi mdi-instagram" href="https://instagram.com/alemaodacapa"></a></li>
            <li><a class="icon icon-meta mdi mdi-facebook-messenger" href="m.me/608528772343121"></a></li>
            <li><a class="icon icon-meta mdi mdi-youtube" href="https://youtube.com/@reggaerootsart"></a></li>
            <li><a class="icon icon-meta mdi mdi-whatsapp" href="https://wa.me/5511948793902?text=olá,%20gostaria%20de%20mais%20informações!"></a></li>
          </ul>
        </div>
      </section>

      <!-- spotify embed -->
      <iframe style="border-radius:0px" src="https://open.spotify.com/embed/artist/1WilWzr4bR77Z317TJ4tE7?utm_source=generator&theme=0" width="100%" height="250" frameborder="1" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
      <div><iframe src="https://d1csarkz8obe9u.cloudfront.net/index.php/posterbuilder/view/520180e7d53fa65e1eb861714ab725b2/1" style="height: 59px; width:100%; border:none;"></iframe></div>
      <!-- marcar presença button -->
      <a href="https://www.facebook.com/share/p/15nrjn4ess/" target="_blank" class="button-link">
        <center>
          <button class="button">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" viewbox="0 0 24 24" height="24" fill="none" class="svg-icon">
              <g stroke-width="2" stroke-linecap="round" stroke="#fff">
                <rect y="5" x="4" width="16" rx="2" height="16"></rect>
                <path d="m8 3v4"></path>
                <path d="m16 3v4"></path>
                <path d="m4 11h16"></path>
              </g>
            </svg>
            <span class="label">Marcar presença</span>
          </button>
        </center>
      </a>
    </div>
    <!-- variety of music genres-->
    <section class="section section-lg">
      <div class="container">
        <div class="block-lg text-center">
          <h2>uma variedade de gêneros musicais</h2>
          <p>oferecemos aos nossos clientes uma ampla variedade de gêneros musicais, desde reggae e dance até sertanejo e outros. explore a música que temos a oferecer abaixo, e atraia mais clientes para sua loja com músicas exclusivas jamais ouvidas antes em rádios públicas.</p>
        </div>
        <div class="row row-30 justify-content-center">
          <!-- gênero 1: reggae -->
          <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3 wow fadeinleft">
            <a class="variety-box-wrapper" href="https://pay.kiwify.com.br/2g3pxok">
              <figure class="variety-box">
                <div class="variety-media"><img src="images/music-style-7-25x63.png" alt="" width="25" height="63"/>
                </div>
                <figcaption>
                  <span>reggae</span>
                  <p>shows semanais e exclusividades do rock - só na reggae roots.</p>
                </figcaption>
              </figure>
            </a>
            </a>
            <!-- botão comprar com link -->
            <div class="button-container text-center">
              <a href="https://pay.kiwify.com.br/2g3PxOK" target="_blank">
                <button class="button">
                  <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 36 24">
                    <path d="m18 0 8 12 10-8-4 20h4l0 4l10 8 8-12z"></path>
                  </svg>
                  comprar
                </button>
              </a>
            </div>
          </div>
          <!-- gênero 2: new-wave -->
          <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3 wow fadeinleft">
            <a class="variety-box-wrapper" href="https://open.spotify.com/intl-pt/track/3unmbb5oyjt5nifegkenx4?si=0be9c0f6eac94ae5">
              <figure class="variety-box">
                <div class="variety-media">
                  <img src="images/music-style-1-49x49.png" alt="" width="49" height="49"/>
                </div>
                <figcaption>
                  <span>new-wave</span>
                  <p>selecionamos o melhor da new-wave para nossos ouvintes.</p>
                </figcaption>
              </figure>
            </a>
            <!-- botão ouvir com link -->
            <div class="button-container text-center">
              <a href="https://open.spotify.com/intl-pt/track/3unmbb5oyjt5nifegkenx4?si=0be9c0f6eac94ae5" target="_blank">
                <button class="button">
                  <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 36 24">
                    <path d="m18 0 8 12 10-8-4 20h4l0 4l10 8 8-12z"></path>
                  </svg>
                  ouvir
                </button>
              </a>
            </div>
          </div>
          <!-- gênero 3: pop & music -->
          <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3 wow fadeinleft">
            <a class="variety-box-wrapper" href="https://open.spotify.com/intl-pt/track/0qwyryfdbgcyowaj5rmtal?si=5c44bbd016ad4d7a">
              <figure class="variety-box">
                <div class="variety-media">
                  <img src="images/music-style-2-47x56.png" alt="" width="47" height="56"/>
                </div>
                <figcaption>
                  <span>ouvir</span>
                  <p>aproveite a melhor música pop, d&b e newwave na nossa rádio.</p>
                </figcaption>
              </figure>
            </a>
            <!-- botão ouvir com link -->
            <div class="button-container text-center">
              <a href="https://open.spotify.com/intl-pt/track/0qwyryfdbgcyowaj5rmtal?si=5c44bbd016ad4d7a" target="_blank">
                <button class="button">
                  <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 36 24">
                    <path d="m18 0 8 12 10-8-4 20h4l0 4l10 8 8-12z"></path>
                  </svg>
                  ouvir
                </button>
              </a>
            </div>
          </div>
          <!-- gênero 4: sertanejo -->
          <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3 wow fadeinleft">
            <a class="variety-box-wrapper" href="https://open.spotify.com/intl-pt/album/4j8p5z1ljawvhdgzaekvbo?si=jizyabm1q_axhinvs8mynw">
              <figure class="variety-box">
                <div class="variety-media">
                  <img src="images/music-style-3-37x46.png" alt="" width="37" height="46"/>
                </div>
                <figcaption>
                  <span>sertanejo</span>
                  <p>dezenas de novas faixas de sertanejo são transmitidas regularmente na reggae roots.</p>
                </figcaption>
              </figure>
            </a>
            <!-- botão ouvir com link -->
            <div class="button-container text-center">
              <a href="https://open.spotify.com/intl-pt/album/4j8p5z1ljawvhdgzaekvbo?si=jizyabm1q_axhinvs8mynw" target="_blank">
                <button class="button">
                  <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 36 24">
                    <path d="m18 0 8 12 10-8-4 20h4l0 4l10 8 8-12z"></path>
                  </svg>
                  ouvir
                </button>
              </a>
            </div>
          </div>
          <!-- gênero 5: dance -->
          <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3 wow fadeinleft">
            <a class="variety-box-wrapper" href="https://sndo.ffm.to/obbkkqo">
              <figure class="variety-box">
                <div class="variety-media">
                  <img src="images/music-style-4-53x45.png" alt="" width="53" height="45"/>
                </div>
                <figcaption>
                  <span>dance</span>
                  <p>nossos djs transmitem várias faixas de euro dance online.</p>
                </figcaption>
              </figure>
            </a>
            <!-- botão ouvir com link -->
            <div class="button-container text-center">
              <a href="https://sndo.ffm.to/obbkkqo" target="_blank">
                <button class="button">
                  <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 36 24">
                    <path d="m18 0 8 12 10-8-4 20h4l0 4l10 8 8-12z"></path>
                  </svg>
                  ouvir
                </button>
              </a>
            </div>
          </div>
          <!-- gênero 6: rap -->
          <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3 wow fadeinleft">
            <a class="variety-box-wrapper" href="https://open.spotify.com/intl-pt/album/2rnc62k4su8vdjelzwrf7n?si=go-e_gsjrzyhqolutmju6w">
              <figure class="variety-box">
                <div class="variety-media">
                  <img src="images/music-style-5-51x48.png" alt="" width="51" height="48"/>
                </div>
                <figcaption>
                  <span>rap</span>
                  <p>ouça a melhor seleção do rap nacional na reggae roots.</p>
                </figcaption>
              </figure>
            </a>
            <!-- botão ouvir com link -->
            <div class="button-container text-center">
              <a href="https://open.spotify.com/intl-pt/album/2rnc62k4su8vdjelzwrf7n?si=go-e_gsjrzyhqolutmju6w" target="_blank">
                <button class="button">
                  <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 36 24">
                    <path d="m18 0 8 12 10-8-4 20h4l0 4l10 8 8-12z"></path>
                  </svg>
                  ouvir
                </button>
              </a>
            </div>
          </div>
          <!-- gênero 7: pop -->
          <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3 wow fadeinleft">
            <a class="variety-box-wrapper" href="https://sndo.ffm.to/jxrb58y">
              <figure class="variety-box">
                <div class="variety-media">
                  <img src="images/music-style-6-31x50.png" alt="" width="31" height="50"/>
                </div>
                <figcaption>
                  <span>pop</span>
                  <p>o melhor do pop você encontra aqui na reggae roots.</p>
                </figcaption>
              </figure>
            </a>
            <!-- botão ouvir com link -->
            <div class="button-container text-center">
              <a href="https://sndo.ffm.to/jxrb58y" target="_blank">
                <button class="button">
                  <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 36 24">
                    <path d="m18 0 8 12 10-8-4 20h4l0 4l10 8 8-12z"></path>
                  </svg>
                  ouvir
                </button>
              </a>
            </div>
          </div>
          <!-- gênero 80's: anos 80 -->
          <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3 wow fadeinleft">
            <a class="variety-box-wrapper" href="https://sndo.ffm.to/a4vxdx9">
              <figure class="variety-box">
                <div class="variety-media">
                  <img src="images/music-style-7-25x63.png" alt="" width="25" height="63"/>
                </div>
                <figcaption>
                  <span>80's</span>
                  <p>selecionamos o melhor dos anos 80's para nossos ouvintes.</p>
                </figcaption>
              </figure>
            </a>
            <!-- botão ouvir com link -->
            <div class="button-container text-center">
              <a href="https://sndo.ffm.to/a4vxdx9" target="_blank">
                <button class="button">
                  <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 36 24">
                    <path d="m18 0 8 12 10-8-4 20h4l0 4l10 8 8-12z"></path>
                  </svg>
                  ouvir
                </button>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- programação de programas de rádio -->
    <section class="section section-lg bg-gray-100">
      <div class="container text-center">
        <h2>programação de programas de rádio</h2>
        <p>nossa rádio tem mais de 20 albuns de rádio transmitidos semanalmente. eles incluem remixagens
          exclusivas que podem ser tocadas em sua loja,<br class="d-none d-lg-block">estabelecimentos, casas de shows e muito mais, criamos músicas únicas e exclusivas jamais tocada em outras rádios públicas.
        </p>
        <div class="row row-30 row-offset-4 text-left">
          <div class="col-md-6 col-lg-4 wow fadeinright">
            <article class="post-boxed">
              <div class="post-meta">
                <div class="post-meta-item">
                  <div class="post-author"><span>dj</span> <a href="#">leonardo</a>
                  </div>
                </div>
                <div class="post-meta-item">
                  <div class="post-date">07:00am – 10:00am</div>
                </div>
              </div>
              <a class="media-wrapper" href="#"><img src="images/latest-blog-post-1-370x272.jpg" alt="" width="370" height="272"/></a>
              <div class="post-body">
                <ul class="list-tags">
                  <li><a class="tag-1" href="#">produção</a>
                  </li>
                </ul>
                <h6 class="post-title"><a href="https://linkr.bio/reggaeroots">dj leonardo</a></h6>
                <p class="post-exeption">leonardo está pronto para animar sua manhã com um ótimo edm &amp; música reggae! sintonize na reggae roots para obter sua dose de entretenimento musical com sucessos populares e viaje no tempo.</p>
              </div>
            </article>
          </div>
          <div class="col-md-6 col-lg-4 wow fadeinright" data-wow-delay="0.1s">
            <article class="post-boxed">
              <div class="post-meta">
                <div class="post-meta-item">
                  <div class="post-author"><span>por</span> <a href="https://linkr.bio/reggaeroots">ryana</a>
                  </div>
                </div>
                <div class="post-meta-item">
                  <div class="post-date">10:00am – 12:00am</div>
                </div>
              </div>
              <a class="media-wrapper" href="https://open.spotify.com/intl-pt/artist/1wilwzr4br77z317tj4te7?si=0ftsdstcrkui6wvvrf6i-g"><img src="images/latest-blog-post-2-370x272.jpg" alt="" width="370" height="272"/></a>
              <div class="post-body">
                <ul class="list-tags">
                  <li><a class="tag-1" href="https://open.spotify.com/intl-pt/artist/1wilwzr4br77z317tj4te7?si=0ftsdstcrkui6wvvrf6i-g">acompanhe</a>
                  </li>
                </ul>
                <h6 class="post-title"><a href="https://open.spotify.com/intl-pt/artist/1wilwzr4br77z317tj4te7?si=0ftsdstcrkui6wvvrf6i-g">no ar com leonardo (convidado especial: dj stelle)</a></h6>
                <p class="post-exeption">no sábado, dj stelle, um renomado dj e músico fará mixagens do “sampler” reggae roots de leonardo para responder algumas perguntas complicadas sobre sua carreira e vida pessoal dele.</p>
              </div>
            </article>
          </div>
          <div class="col-md-6 col-lg-4 wow fadeinright" data-wow-delay="0.2s">
            <article class="post-boxed">
              <div class="post-meta">
                <div class="post-meta-item">
                  <div class="post-author"><span>dj</span> <a href="https://linkr.bio/reggaeroots">leonardo</a></div>
                </div>
                <div class="post-meta-item">
                  <div class="post-date">12:00am – 03:00pm</div>
                </div>
              </div>
              <a class="media-wrapper" href="#">
              <img src="images/latest-blog-post-3-370x272.jpg" alt="" width="370" height="272"/>
              </a>
              <div class="post-body">
                <ul class="list-tags">
                  <li><a class="tag-1" href="https://open.spotify.com/intl-pt/artist/1wilwzr4br77z317tj4te7?si=0ftsdstcrkui6wvvrf6i-g">album</a></li>
                </ul>
                <h6 class="post-title"><a href="https://linkr.bio/reggaeroots">música de balada com dj leo</a></h6>
                <p class="post-exeption">se você está pronto para dançar, não perca o nosso talk show de balada, transmitido ao vivo, onde dj leo traz as melhores batidas para todos os nossos ouvintes!</p>
              </div>
            </article>
          </div>
        </div>
      </div>
    </section>
    <!-- botão musicas ineditas-->
    <section style="display: flex; justify-content: center; padding: 20px 0;">
      <a href="/marketplace.html" target="_blank">
        <button class="btn-container">
          <span class="text">músicas inéditas</span>
          <span class="icon-container">
            <svg
              width="16"
              height="19"
              viewbox="0 0 16 19"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
              >
              <circle cx="1.61321" cy="1.61321" r="1.5" fill="black"></circle>
              <circle cx="5.73583" cy="1.61321" r="1.5" fill="black"></circle>
              <circle cx="5.73583" cy="5.5566" r="1.5" fill="black"></circle>
              <circle cx="9.85851" cy="5.5566" r="1.5" fill="black"></circle>
              <circle cx="9.85851" cy="9.5" r="1.5" fill="black"></circle>
              <circle cx="13.9811" cy="9.5" r="1.5" fill="black"></circle>
              <circle cx="5.73583" cy="13.4434" r="1.5" fill="black"></circle>
              <circle cx="9.85851" cy="13.4434" r="1.5" fill="black"></circle>
              <circle cx="1.61321" cy="17.3868" r="1.5" fill="black"></circle>
              <circle cx="5.73583" cy="17.3868" r="1.5" fill="black"></circle>
            </svg>
          </span>
        </button>
      </a>
    </section>
    <!-- por que você deve ouvir reggaeroots -->
    <section class="section section-lg">
      <div class="container text-center">
        <h2>por que você deve ouvir reggaeroots</h2>
        <div class="row row-40 justify-content-center number-counter">
          <div class="col-sm-6 col-lg-3 wow fadeinleft">
            <div class="blurb-icon-fill">
              <div class="icon linearicons-star">
                <span class="index-counter"></span>
              </div>
              <h5 class="title">exclusividade</h5>
              <p class="exeption">nossas músicas você não irá ouvir em nenhuma outra rádio.</p>
            </div>
          </div>
          <div class="col-sm-6 col-lg-3 wow fadeinleft" data-wow-delay="0.1s">
            <div class="blurb-icon-fill">
              <div class="icon linearicons-news">
                <span class="index-counter"></span>
              </div>
              <h5 class="title">álbuns recentes</h5>
              <p class="exeption">criamos álbuns com frequência e não para por aí, ainda tem muito mais.</p>
            </div>
          </div>
          <div class="col-sm-6 col-lg-3 wow fadeinleft" data-wow-delay="0.2s">
            <div class="blurb-icon-fill">
              <div class="icon linearicons-sun">
                <span class="index-counter"></span>
              </div>
              <h5 class="title">comodidade</h5>
              <p class="exeption">
                você pode ouvir nossa rádio online ou offline através de qualquer dispositivo, gadget ou rádio, 
                basta comprar nossos álbuns musicais e fazer um download.
              </p>
            </div>
          </div>
          <div class="col-sm-6 col-lg-3 wow fadeinleft" data-wow-delay="0.3s">
            <div class="blurb-icon-fill">
              <div class="icon linearicons-medal-empty">
                <span class="index-counter"></span>
              </div>
              <h5 class="title">ouça nossas músicas inéditas em sua loja!</h5>
              <p class="exeption">
                você pode adotar a estratégia de marketing e atrair novos clientes para sua loja em nosso site, 
                além de publicar seu anúncio também.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- call to action -->
    <section class="section section-xs bg-primary-gradient">
      <div class="container">
        <div class="box-cta">
          <div class="box-cta-inner">
            <h3>disponível em nossa loja!</h3>
          </div>
          <a href="/marketplace.html" target="_blank">
            <button class="button">
              <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 36 24">
                <path d="m18 0 8 12 10-8-4 20h4l0 4l10 8 8-12z"></path>
              </svg>
              saiba mais
            </button>
          </a>
        </div>
      </div>
    </section>
    <!-- seção para agendar visita -->
    <section class="section section-xs bg-primary-gradient">
      <div class="container">
        <div class="box-cta">
          <div class="box-cta-inner">
            <h3>agende sua visita online!</h3>
          </div>
          <a href="/agendaonline.html" target="_blank" class="button-link">
            <button class="button">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" viewbox="0 0 24 24" height="24" fill="none" class="svg-icon">
                <g stroke-width="2" stroke-linecap="round" stroke="#fff">
                  <rect y="5" x="4" width="16" rx="2" height="16"></rect>
                  <path d="m8 3v4"></path>
                  <path d="m16 3v4"></path>
                  <path d="m4 11h16"></path>
                </g>
              </svg>
              <span class="label">agendar visita</span>
            </button>
          </a>
        </div>
      </div>
    </section>
    <br>
    <div class="video-container">
      <iframe src="https://www.youtube.com/embed/FwQfKhGX5IA?si=hXvMrIxtJ_91oQ92" 
        title="youtube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
    </div>
    <br>
    </section>
    <footer class="section footer-2">
      <div class="container">
        <div class="row row-40">
          <div class="col-md-6 col-lg-3">
            <a class="footer-logo" href="index.html"><img src="images/logo-302x44.png" alt="" width="180" height="26"/></a>
            <p>reggae roots é uma das estações de rádio mais populares que transmite as melhores faixas, shows e performances de reggae e diversos outros gêneros musicais em todo o mundo. fomos fundados em 2025 para promover música eletrônica, reggae, newwave, sertanejo, dance, eletrônica, rap, pop e mauito mais com exclusividade...</p>
          </div>
          <div class="col-md-6 col-lg-3">
            <h5 class="text-white title">informações para contato</h5>
            <ul class="contact-box">
              <li>
                <div class="unit unit-horizontal unit-spacing-xxs">
                  <div class="unit-left"><span class="icon mdi mdi-map-marker accent-icon"></span></div>
                  <div class="unit-body"><a href="#">são paulo - sp, <br class="veil reveal-lg-inline">brasil</a></div>
                </div>
              </li>
              <li>
                <div class="unit unit-horizontal unit-spacing-xxs">
                  <div class="unit-left"><span class="icon mdi mdi-phone accent-icon"></span></div>
                  <div class="unit-body">
                    <ul class="list-phones">
                      <li><a href="https://wa.me/5511948793902?text=olá,%20gostaria%20de%20mais%20informações!">(11) 9 4879-3902</a></li>
                    </ul>
                  </div>
                </div>
              </li>
              <li>
                <div class="unit unit-horizontal unit-spacing-xxs">
                  <div class="unit-left"><span class="icon mdi mdi-email-outline accent-icon"></span></div>
                  <div class="unit-body"><a href="mailto:#">sac@reggaeroots.com.br</a></div>
                </div>
              </li>
            </ul>
            <div class="group-md group-middle social-items"><a class="icon icon-md novi-icon mdi mdi-facebook" href="https://www.facebook.com/reggaerootsart/"></a><a class="icon icon-md novi-icon mdi mdi-instagram" href="https://instagram.com/alemaodacapa"></a><a class="icon icon-md novi-icon mdi mdi-facebook-messenger" href="m.me/608528772343121"></a><a class="icon icon-md novi-icon mdi mdi-tiktok" href="https://www.tiktok.com/@reggaerootsart"></a><a class="icon icon-md novi-icon mdi mdi-youtube" href="https://youtube.com/@reggaerootsart"></a></div>
          </div>
          <div class="col-md-6 col-lg-3">
            <h5 class="title">postagens</h5>
            <ul class="instafeed instagram-gallery" data-lightgallery="group">
              <li><a class="instagram-item" data-lightgallery="item" href="images/insta-gallery-1-1200x800-original.jpg"><img src="images/insta-gallery-1-72x72.jpg" alt="" width="72" height="72"/></a>
              </li>
              <li><a class="instagram-item" data-lightgallery="item" href="images/insta-gallery-2-1200x800-original.jpg"><img src="images/insta-gallery-2-72x72.jpg" alt="" width="72" height="72"/></a>
              </li>
              <li><a class="instagram-item" data-lightgallery="item" href="images/insta-gallery-3-1200x800-original.jpg"><img src="images/insta-gallery-3-72x72.jpg" alt="" width="72" height="72"/></a>
              </li>
              <li><a class="instagram-item" data-lightgallery="item" href="images/insta-gallery-4-1200x800-original.jpg"><img src="images/insta-gallery-4-72x72.jpg" alt="" width="72" height="72"/></a>
              </li>
              <li><a class="instagram-item" data-lightgallery="item" href="images/insta-gallery-5-1200x800-original.jpg"><img src="images/insta-gallery-5-72x72.jpg" alt="" width="72" height="72"/></a>
              </li>
              <li><a class="instagram-item" data-lightgallery="item" href="images/insta-gallery-6-1200x800-original.jpg"><img src="images/insta-gallery-6-72x72.jpg" alt="" width="72" height="72"/></a>
              </li>
            </ul>
          </div>
          <div class="col-md-6 col-lg-3">
            <h5 class="text-white title">assinatura</h5>
            <p>fique por dentro de nossas novidades e atualizações sempre. digite seu e-mail e assine nossa newsletter.</p>
            <!-- rd mailform-->
<form class="rd-form form-sm" onsubmit="sendToWhatsApp(event)">
    <div class="form-wrap">
        <input class="form-input" id="newsletter-email" type="email" name="email" required>
        <label class="form-label" for="newsletter-email">Seu e-mail</label>
    </div>
    <button class="button button-primary" type="submit">Cadastrar</button>
</form>

<script>
function sendToWhatsApp(event) {
    event.preventDefault(); // Impede o envio padrão do formulário
    const email = document.getElementById("newsletter-email").value.trim();

    if (email === "" || !email.includes("@")) {
        alert("Por favor, insira um e-mail válido.");
        return;
    }

    const mensagem = encodeURIComponent(`Olá, estou cadastrando meu e-mail (${email}) em sua página para receber e-mails promocionais.`);
    const telefone = "+5511948793902";
    const url = `https://wa.me/${telefone}?text=${mensagem}`;

    window.open(url, "_blank"); // Abre o WhatsApp em uma nova aba
}
</script>

          </div>
        </div>
        <!-- rights-->
        <p class="rights"><span>&copy;&nbsp;</span><span class="copyright-year"></span> <span>reggaeroots</span>. todos os direitos reservados. criado por: <a href="https://painelsummerside.com.br">summerside</a>
        </p>
      </div>
    </footer>
    </div>
    <!-- global mailform output-->
    <div class="snackbars" id="form-output-global"></div>
    <!-- javascript-->
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
    <!-- tiktok pixel code start -->
    
<!-- Script de Anuncio -->
    <script>
      !function (w, d, t) {
        w.tiktokanalyticsobject=t;var ttq=w[t]=w[t]||[];ttq.methods=["page","track","identify","instances","debug","on","off","once","ready","alias","group","enablecookie","disablecookie","holdconsent","revokeconsent","grantconsent"],ttq.setanddefer=function(t,e){t[e]=function(){t.push([e].concat(array.prototype.slice.call(arguments,0)))}};for(var i=0;i<ttq.methods.length;i++)ttq.setanddefer(ttq,ttq.methods[i]);ttq.instance=function(t){for(
      var e=ttq._i[t]||[],n=0;n<ttq.methods.length;n++)ttq.setanddefer(e,ttq.methods[n]);return e},ttq.load=function(e,n){var r="https://analytics.tiktok.com/i18n/pixel/events.js",o=n&&n.partner;ttq._i=ttq._i||{},ttq._i[e]=[],ttq._i[e]._u=r,ttq._t=ttq._t||{},ttq._t[e]=+new date,ttq._o=ttq._o||{},ttq._o[e]=n||{};n=document.createelement("script")
      ;n.type="text/javascript",n.async=!0,n.src=r+"?sdkid="+e+"&lib="+t;e=document.getelementsbytagname("script")[0];e.parentnode.insertbefore(n,e)};
      
      
        ttq.load('cv91r3bc77udl07btu8g');
        ttq.page();
      }(window, document, 'ttq');
    </script>
    <!-- tiktok pixel code end -->
    <script>
    <script>
    document.getElementById("pixButton").addEventListener("click", function() {
        document.getElementById("pixPopup").style.display = "block";
        document.getElementById("overlay").style.display = "block";

        gerarQRCodePix();
    });

    function gerarQRCodePix() {
        let chavePix = "95d5ae1c-c2d0-4ff9-bbac-7690fdc13f3f"; // Sua chave Pix
        let nomeRecebedor = "Leonardo Frederico de Pa";  // Nome do recebedor (máx. 25 caracteres)
        let cidadeRecebedor = "Brasilia"; // Cidade do recebedor

        let payloadPix = gerarPixCopiaECola(chavePix, nomeRecebedor, cidadeRecebedor);

        let qrCodeDiv = document.getElementById("qrcode");
        qrCodeDiv.innerHTML = "";

        new QRCode(qrCodeDiv, {
            text: payloadPix,
            width: 200,
            height: 200
        });
    }

    function calcularCRC16(payload) {
        let polinomio = 0x1021;
        let resultado = 0xFFFF;

        for (let i = 0; i < payload.length; i++) {
            resultado ^= payload.charCodeAt(i) << 8;
            for (let j = 0; j < 8; j++) {
                if ((resultado & 0x8000) !== 0) {
                    resultado = (resultado << 1) ^ polinomio;
                } else {
                    resultado <<= 1;
                }
            }
        }

        resultado &= 0xFFFF;
        return resultado.toString(16).toUpperCase().padStart(4, '0');
    }

    function gerarPixCopiaECola(chave, nome, cidade) {
        let payload = `00020126580014BR.GOV.BCB.PIX0136${chave}5204000053039865802BR5924${nome}6008${cidade}62240520daqr17455370915927106304`;
        let crc16 = calcularCRC16(payload);
        return payload + crc16;
    }

    function fecharPopup() {
        document.getElementById("pixPopup").style.display = "none";
        document.getElementById("overlay").style.display = "none";
    }
</script>
        <script>
    const video = document.getElementById("ad-video");
    const donateBtn = document.getElementById("donate-btn");
    const closeBtn = document.getElementById("close-btn");
    const helpBtn = document.getElementById("help-btn");
    const muteBtn = document.getElementById("btn-mute-button");
    const playBtn = document.getElementById("play-btn");
    const helpManobristaBtn = document.getElementById("help-manobrista-btn");
    const adPopup = document.getElementById("ad-popup");

    // Função para forçar o play do vídeo
    function forcePlayVideo() {
        video.muted = false; // Ativa o áudio
        const playPromise = video.play();

        if (playPromise !== undefined) {
            playPromise.then(() => {
                console.log("Vídeo reproduzido automaticamente");
            }).catch(error => {
                console.log("Erro ao reproduzir vídeo, interação necessária:", error);
            });
        }
    }

    // Exibir o pop-up após 30 segundos de visita
    setTimeout(() => {
        adPopup.style.display = "flex";

        // Tentar dar play no vídeo imediatamente
        forcePlayVideo();

    }, 30000); // 30 segundos

    // Se o usuário interagir com a página, garantir que o vídeo toque
    document.addEventListener("click", forcePlayVideo);
    document.addEventListener("touchstart", forcePlayVideo);

    // Exibir o botão "Ajudar Manobrista" após 60 segundos de visita
    setTimeout(() => {
        helpManobristaBtn.style.display = "inline-block"; // Exibe o botão "Ajudar Manobrista"
    }, 60000); // 60 segundos

    // Função para mutar e desmutar o vídeo
    muteBtn.addEventListener("click", () => {
        video.muted = !video.muted; // Alterna o estado do mudo
        muteBtn.textContent = video.muted ? "🔊" : "🔇"; // Atualiza o ícone conforme o estado
    });

    // Função para iniciar o vídeo ao clicar no botão "Play"
    playBtn.addEventListener("click", () => {
        forcePlayVideo(); // Chama a função para iniciar o vídeo
        playBtn.style.display = "none"; // Esconde o botão de play após clicar
    });

    // Botão "Fechar" fecha o pop-up
    closeBtn.addEventListener("click", () => {
        adPopup.style.display = "none"; // Fecha o pop-up
    });

    // Redirecionar para a página de doação ao clicar no botão "Ajudar Manobrista"
    helpManobristaBtn.addEventListener("click", () => {
        window.location.href = "https://social.x10.mx/donate.html";
    });
</script>

    </body>
    </html>