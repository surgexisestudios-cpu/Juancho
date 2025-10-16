<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>BULLYING - JUAN EVANGELISTA GOMEZ</title>
  <link rel="shortcut icon" href="./Imagenes/logo.png" type="image/x-icon">
  <link rel="stylesheet" href="../Css/nuestra_empresa4.css">
  <link rel="stylesheet" href="../Css/nuestra_empresa3.css">
 
  <link rel="stylesheet" href="../Css/nuestra_empresa.css">

  <style>
    /* --- NUEVO ESTILO DE SECCIÓN EMPRESA --- */
    #seccion2 {
      background: linear-gradient(180deg, #ffffff, #e8fff3);
      padding: 60px 20px;
    }

    .container-empresa {
      max-width: 1100px;
      margin: auto;
      background: #ffffff;
      border-radius: 20px;
      padding: 50px;
      box-shadow: 0 10px 30px rgba(0, 128, 64, 0.15);
      position: relative;
      overflow: hidden;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .container-empresa::before {
      content: "";
      position: absolute;
      top: -100px;
      left: -100px;
      width: 250px;
      height: 250px;
      background: rgba(0, 168, 107, 0.2);
      border-radius: 50%;
      z-index: 0;
      filter: blur(50px);
    }

    .container-empresa:hover {
      transform: scale(1.01);
      box-shadow: 0 15px 40px rgba(0, 168, 107, 0.25);
    }

    .container-empresa h1 {
      text-align: center;
      color: #008f5a;
      font-size: 36px;
      margin-bottom: 40px;
      font-weight: 800;
      letter-spacing: 1px;
      position: relative;
      z-index: 2;
    }

    .mision-vision, .sobre-valores {
      position: relative;
      z-index: 2;
    }

    .mision-vision h3,
    .sobre-valores h3 {
      color: #00a86b;
      font-size: 22px;
      margin-top: 30px;
      margin-bottom: 10px;
      font-weight: 700;
    }

    .mision-vision p,
    .sobre-valores p {
      line-height: 1.7;
      color: #2e3d33;
      background: #f6fff9;
      padding: 15px 20px;
      border-left: 5px solid #00a86b;
      border-radius: 10px;
      box-shadow: 0 3px 10px rgba(0, 128, 64, 0.05);
    }

    .sobre-valores ul {
      background: #f0fff7;
      padding: 20px 30px;
      border-radius: 10px;
      list-style: none;
      box-shadow: 0 3px 10px rgba(0, 128, 64, 0.05);
    }

    .sobre-valores li {
      margin-bottom: 10px;
      color: #333;
      padding-left: 10px;
      border-left: 3px solid #00a86b;
    }

    .sobre-valores strong {
      color: #007c4a;
    }

    /* --- ESTILO DE ESTADÍSTICAS --- */
    .stats-section {
      background: linear-gradient(135deg, #00a86b, #00955f);
      color: #fff;
      text-align: center;
      padding: 60px 20px;
      position: relative;
      overflow: hidden;
    }

    .stats-section h2 {
      font-size: 32px;
      margin-bottom: 40px;
      text-transform: uppercase;
      font-weight: 700;
      letter-spacing: 1px;
    }

    .stats-container {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 40px;
      max-width: 1000px;
      margin: 0 auto;
    }

    .stat-box {
      background: rgba(255, 255, 255, 0.1);
      border-radius: 15px;
      padding: 25px;
      width: 220px;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .stat-box:hover {
      transform: translateY(-8px);
      box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
    }

    .stat-number {
      font-size: 50px;
      font-weight: bold;
      color: #fff;
    }

    .stat-label {
      font-size: 16px;
      margin-top: 10px;
      color: #e0ffe9;
    }

    .bar-container {
      background: rgba(255, 255, 255, 0.2);
      height: 10px;
      border-radius: 5px;
      margin-top: 15px;
      overflow: hidden;
    }

    .bar {
      height: 10px;
      border-radius: 5px;
      background: #ffffff;
      width: 0;
      transition: width 1.5s ease;
    }

    @media (max-width: 768px) {
      .stat-box {
        width: 90%;
      }

      .container-empresa {
        padding: 30px 20px;
      }
    }

    /* --- NUEVA SECCIÓN CON IMAGEN Y TEXTO AJUSTADA --- */
.contenido-flex {
  display: flex;
  align-items: center;
  justify-content: space-between;
  gap: 40px;
  margin-top: 30px;
  margin-bottom: 40px;
  flex-wrap: wrap;
}

.contenido-flex .texto {
  flex: 1 1 55%;
  background: #f6fff9;
  padding: 20px;
  border-left: 5px solid #00a86b;
  border-radius: 10px;
  color: #2e3d33;
  box-shadow: 0 3px 10px rgba(0, 128, 64, 0.05);
  line-height: 1.6;
}

.contenido-flex .imagen {
  flex: 1 1 40%;
  text-align: center;
}

/* 🔹 TAMAÑO MODERADO DE LA IMAGEN */
.contenido-flex .imagen img {
  width: 85%;
  max-width: 350px;  /* Tamaño moderado */
  height: auto;
  border-radius: 15px;
  box-shadow: 0 8px 20px rgba(0, 128, 64, 0.2);
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.contenido-flex .imagen img:hover {
  transform: scale(1.03);
  box-shadow: 0 10px 25px rgba(0, 168, 107, 0.3);
}

/* 🔹 Responsivo (para celulares) */
@media (max-width: 768px) {
  .contenido-flex {
    flex-direction: column;
    text-align: center;
  }

  .contenido-flex .imagen img {
    width: 70%;
    max-width: 280px;
    margin-top: 20px;
  }

  .contenido-flex .texto {
    border-left: none;
    border-top: 5px solid #00a86b;
  }
}

  </style>
</head>

<body>
  <!-- 💬 Burbuja flotante WhatsApp -->
<div class="chat-bubble-chat" onclick="toggleChat()">
  <img src="https://cdn-icons-png.flaticon.com/512/733/733585.png" alt="Chat" />
  <span class="tooltip">Enviar mensaje por WhatsApp</span>
</div>

<!-- Caja de chat flotante -->
<div class="chat-box" id="chatBox">
  <textarea id="mensajeInput" placeholder="Escribe tu mensaje..."></textarea>
  <button onclick="enviarMensajeWhatsApp()">Enviar</button>
</div>



<!-- 🤖 Burbuja flotante para IA -->
<div class="chat-bubble-ia" onclick="abrirIA()">
  <img src="https://cdn-icons-png.flaticon.com/512/4712/4712035.png" alt="IA" />
  <span class="tooltip">Hablar con la IA</span>
</div>



<!-- 🎨 ESTILOS -->
<style>
  .chat-bubble-chat,
  .chat-bubble-game,
  .chat-bubble-ia {
    position: fixed;
    width: 60px;
    height: 60px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    cursor: pointer;
    z-index: 10000;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
  }

  .chat-bubble-chat {
    bottom: 20px;
    right: 20px;
    background-color: #25D366;
  }

  

  .chat-bubble-ia {
    bottom: 100px;
    right: 20px;
    background-color: #007bff;
  }

  .chat-bubble-chat img,
    .chat-bubble-ia img {
    width: 30px;
    height: 30px;
  }

  /* 💬 Tooltip general */
  .tooltip {
    position: absolute;
    left: -10px;
    transform: translateX(-100%);
    bottom: 18px;
    visibility: hidden;
    opacity: 0;
    color: #fff;
    font-size: 12px;
    padding: 6px 10px;
    border-radius: 10px;
    white-space: nowrap;
    transition: all 0.3s ease;
  }

  /* Mismo color que la burbuja */
  .chat-bubble-chat .tooltip {
    background-color: #25D366;
  }


  .chat-bubble-ia .tooltip {
    background-color: #007bff;
  }

  /* Mostrar al pasar el mouse */
  .chat-bubble-chat:hover .tooltip,
  .chat-bubble-ia:hover .tooltip {
    visibility: visible;
    opacity: 1;
    transform: translateX(-110%);
  }

  .chat-box {
    position: fixed;
    bottom: 90px;
    right: 20px;
    width: 280px;
    background-color: white;
    border: 1px solid #ccc;
    border-radius: 12px;
    padding: 10px;
    display: none;
    z-index: 10001;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
  }

  .chat-box textarea {
    width: 100%;
    height: 60px;
    resize: none;
    padding: 5px;
    font-size: 14px;
    margin-bottom: 10px;
  }

  .chat-box button {
    background-color: #25D366;
    color: white;
    border: none;
    width: 100%;
    padding: 10px;
    cursor: pointer;
    font-size: 14px;
    border-radius: 8px;
  }

  .chat-box button:hover {
    background-color: #1ebc59;
  }
  
</style>

<!-- ⚙️ SCRIPT -->
<script>
 
  function toggleChat() {
    const chatBox = document.getElementById("chatBox");
    chatBox.style.display = (chatBox.style.display === "none" || chatBox.style.display === "") ? "block" : "none";
  }

  function enviarMensajeWhatsApp() {
    const input = document.getElementById("mensajeInput");
    const mensaje = input.value.trim();
    if (mensaje === "") {
      alert("Por favor escribe un mensaje.");
      return;
    }

    const numero = "573227846255"; 
    const url = `https://wa.me/${numero}?text=${encodeURIComponent(mensaje)}`;
    window.open(url, "_blank");
    input.value = ""; 
  }

  // 🔹 Abrir IA en WhatsApp
  function abrirIA() {
    const enlaceIA = "https://wa.me/ais/765360689724661?s=5"; // 🔁 Reemplaza con el link de tu IA
    window.open(enlaceIA, "_blank");
  }
</script>
  
  <header class="header">
    <div class="header-left">
      <button class="menu-btn" id="menu-toggle">
        <span>≡</span> Menu
      </button>
      <nav id="menu" class="hidden">
        <button class="close-btn" id="close-menu">✕</button>
        <ul>
          <li><a href="../index.php">Inicio</a></li>
          <li><a href="./mi_juego.html">Juego interactivo</a></li>
          
          <li><a href="./Contacto.php">Contacto</a></li>
        </ul>
      </nav>
    </div>
    <div class="logo-container">
      <h1 class="brand-logo">Juan Evangelista Gomez</h1>
    </div>
  </header>

  <section class="hero">
    
    <img class="hero-image" src="../Imagenes/colegio_noche.webp" alt="" />
    <div class="hero-overlay"></div>
    <div class="hero-content">
      <h2 class="hero-title">Detén el bullying, fomenta el respeto</h2>
      <p class="hero-text">Cada palabra y cada acción cuentan. Construyamos un ambiente escolar donde todos se sientan seguros y valorados.</p>
    </div>
  </section>

  <section id="seccion2">
  <div class="container-empresa">
    <h1>Formas en que se manifiestan</h1>

    <!-- 🔹 NUEVA SECCIÓN CON IMAGEN AL LADO -->
    <div class="contenido-flex">
      <div class="texto">
        <p>
          Se trata de conductas agresivas y repetitivas que buscan dañar,
          intimidar o excluir a una persona dentro de un grupo. 
          Conocer las diferentes formas en que se manifiesta el bullying es
          fundamental para detectarlo a tiempo y tomar acciones efectivas que 
          lo prevengan. Algunas de las maneras más comunes incluyen el acoso verbal,
          físico, social y cibernético. Cada una de estas formas puede afectar 
          profundamente la autoestima y el bienestar emocional de quienes lo sufren.
        </p>
      </div>

      <div class="imagen">
        <img src="../Imagenes/niñora.jpg" alt="Formas de bullying">
      </div>
    </div>
    <!-- 🔹 FIN NUEVA SECCIÓN -->

   <div class="contenido-flex">
  <div class="texto">
    <p>
      El bullying no solo afecta momentáneamente a quienes lo sufren, sino que puede tener un impacto profundo y duradero
      en su salud emocional, social y académica. Entre las consecuencias más comunes se encuentran la baja autoestima,
      la depresión, la ansiedad y el aislamiento social. Es fundamental detectar estas señales temprano y actuar de
      manera oportuna para brindar apoyo y protección.
    </p>
  </div>

  <div class="imagen">
    <img src="../Imagenes/niñotr.webp" alt="Consecuencias del bullying">
  </div>
</div>
  </div>
</section>


  <!-- 🔹 SECCIÓN DE ESTADÍSTICAS -->
  <section class="stats-section" id="estadisticas">
    <h2>Estadísticas sobre el Bullying</h2>
    <div class="stats-container">
      <div class="stat-box">
        <h4>En el mundo</h4>
        <div class="stat-number" data-target="32">0%</div>
        <div class="stat-label">Alrededor de 1 de cada 3 estudiantes, es decir, unos 246 millones en todo el mundo, sufren bullying, lo que refleja la gran magnitud y el impacto global de este problema en la vida escolar.</div>
        <div class="bar-container"><div class="bar" data-width="32%"></div></div>
      </div>

      <div class="stat-box">
        <h4>En Colombia</h4>
        <div class="stat-number" data-target="23">0%</div>
        <div class="stat-label">El 23% de los estudiantes sufre acoso, principalmente físico y verbal, sobre todo en grados 6º a 8º y con mayor afectación en niñas.</div>
        <div class="bar-container"><div class="bar" data-width="23%"></div></div>
      </div>

      <div class="stat-box">
        <H4>Bogotá</H4>
        <div class="stat-number" data-target="20">0%</div>
        <div class="stat-label">los casos de acoso escolar aumentaron un 674% entre 2020 y 2023. Solo en 2023 se reportaron 3.124 casos, principalmente en secundaria.</div>
        <div class="bar-container"><div class="bar" data-width="20%"></div></div>
      </div>

      <div class="stat-box">
        <h4>Prevenir</h4>
        <div class="stat-number" data-target="80">0%</div>
        <div class="stat-label">Son casos que podrían evitarse con mayor acompañamiento, orientación y apoyo por parte de la comunidad escolar.</div>
        <div class="bar-container"><div class="bar" data-width="80%"></div></div>
      </div>
    </div>
  </section>

  <footer class="footer">
    <div class="footer-container">
      <div class="footer-column">
        <h3>Recursos</h3>
        <ul>
          <li>Bogotá<br>San Cristobal<br>La Victoria<br>
          <a href="https://www.juanevangelistagomez.edu.co/">Juan Evangelista Gomez</a><br>
          Diagonal 39 sur 2 - 10 este</li>
        </ul>
      </div>

      <div class="footer-column">
        <h3>Empresa</h3>
        <ul>
          <li>Surgexis Studio<br>contenidos digitales<br>3209681694</li>
        </ul>
      </div>

      <div class="footer-column">
        <h3>Social</h3>
        <div class="social-icons">
          <a href="https://www.facebook.com/share/1Ec7vXvGvV/"><img src="../Imagenes/facebook.svg" alt="Facebook" /></a>
          <a href="https://www.instagram.com/juanevangelistagomezied?igsh=bThyMmtsamU5aTZw"><img src="../Imagenes/instagram.svg" alt="Instagram" /></a>
        </div>
      </div>
    </div>
  </footer>

  <script>
    const toggleBtn = document.getElementById("menu-toggle");
    const menu = document.getElementById("menu");
    const closeBtn = document.getElementById("close-menu");

    toggleBtn.addEventListener("click", () => {
      menu.classList.add("visible");
      document.body.classList.add("menu-open");
    });

    closeBtn.addEventListener("click", () => {
      menu.classList.remove("visible");
      document.body.classList.remove("menu-open");
    });

    document.addEventListener("click", function (e) {
      if (!menu.contains(e.target) && !toggleBtn.contains(e.target)) {
        menu.classList.remove("visible");
        document.body.classList.remove("menu-open");
      }
    });

    // --- Animación de estadísticas ---
    const numbers = document.querySelectorAll(".stat-number");
    const bars = document.querySelectorAll(".bar");
    let animated = false;

    function animateStats() {
      if (animated) return;
      const section = document.querySelector("#estadisticas");
      const rect = section.getBoundingClientRect();
      if (rect.top < window.innerHeight - 100) {
        animated = true;
        numbers.forEach(num => {
          let target = +num.getAttribute("data-target");
          let count = 0;
          const update = setInterval(() => {
            count++;
            num.textContent = count + "%";
            if (count >= target) clearInterval(update);
          }, 25);
        });
        bars.forEach(bar => {
          bar.style.width = bar.getAttribute("data-width");
        });
      }
    }

    window.addEventListener("scroll", animateStats);
  </script>
</body>
</html>
