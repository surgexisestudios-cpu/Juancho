<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BULLYING-JUAN EVANGELISTA GOMEZ</title>

    
    <link rel="stylesheet" href="./Css/inicio2.css">
    <link rel="stylesheet" href="./Css/inicio3.css">
    <link rel="stylesheet" href="./Css/inicio.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Georgia', 'Times New Roman', serif;
            line-height: 1.6;
            color: #2c2c2c;
            overflow-x: hidden;
        }

        /* Mantener tu header existente */
        .hero {
            height: 100vh;
            background: linear-gradient(rgba(0,0,0,0.3), rgba(0,0,0,0.3)), url('./Imagenes/cole_fondo.jpeg');
            background-size: cover;
            background-position: center;
            display: flex;
            align-items: center;
            justify-content: flex-start;
            padding-left: 5%;
            color: white;
            position: relative;
        }

        .hero-content h2 {
            font-size: 4rem;
            font-weight: 300;
            letter-spacing: 3px;
            margin-bottom: 20px;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
        }
        a{
            text-decoration: none;
        }
        .hero-content p {
            font-size: 1.3rem;
            max-width: 500px;
            font-weight: 300;
            line-height: 1.8;
            text-shadow: 1px 1px 2px rgba(0,0,0,0.5);
        }

        
        .brand-philosophy {
            background: #f8f6f3;
            padding: 120px 0;
            text-align: center;
            position: relative;
        }

        .brand-philosophy::before {
            content: '';
            position: absolute;
            top: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 2px;
            height: 60px;
            background: linear-gradient(to bottom, transparent, #d4af37);
        }

        .philosophy-content {
            max-width: 800px;
            margin: 0 auto;
            padding: 0 40px;
        }

        .philosophy-title {
            font-size: 3.5rem;
            font-weight: 300;
            color: #2c2c2c;
            margin-bottom: 30px;
            letter-spacing: 2px;
        }

        .philosophy-subtitle {
            font-size: 1.4rem;
            color: #8b7355;
            font-style: italic;
            margin-bottom: 40px;
            font-weight: 300;
        }

        .philosophy-text {
            font-size: 1.2rem;
            line-height: 2;
            color: #4a4a4a;
            font-weight: 300;
        }

        /* Sección de Colecciones Destacadas */
        .featured-collections {
            background: white;
            padding: 120px 0;
        }

        .collections-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            max-width: 1400px;
            margin: 0 auto;
            gap: 0;
        }

        .collection-item {
            position: relative;
            height: 70vh;
            overflow: hidden;
            cursor: pointer;
            transition: all 0.8s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        }

        .collection-item:hover {
            transform: scale(1.02);
        }

        .collection-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.8s ease;
        }

        .collection-item:hover .collection-image {
            transform: scale(1.1);
        }

        .collection-overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(135deg, rgba(0,0,0,0.6), rgba(0,0,0,0.3));
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 0;
            transition: opacity 0.5s ease;
        }

        .collection-item:hover .collection-overlay {
            opacity: 1;
        }

        .collection-text {
            text-align: center;
            color: white;
            transform: translateY(30px);
            transition: transform 0.5s ease;
        }

        .collection-item:hover .collection-text {
            transform: translateY(0);
        }

        .collection-title {
            text-decoration: none;
            font-size: 2.5rem;
            font-weight: 300;
            margin-bottom: 15px;
            letter-spacing: 2px;
        }

        .collection-description {
            font-size: 1.1rem;
            font-weight: 300;
            max-width: 300px;
            line-height: 1.6;
        }

        

       

        /* Sección CTA Elegante */
        .cta-section {
            background: #f8f6f3;
            padding: 100px 0;
            text-align: center;
        }

        .cta-content {
            max-width: 600px;
            margin: 0 auto;
            padding: 0 40px;
        }

        .cta-title {
            font-size: 2.8rem;
            color: #2c2c2c;
            margin-bottom: 25px;
            font-weight: 300;
            letter-spacing: 1px;
        }

        .cta-text {
            font-size: 1.2rem;
            color: #6a6a6a;
            margin-bottom: 50px;
            line-height: 1.8;
            font-weight: 300;
        }

        .cta-button {
            display: inline-block;
            padding: 18px 50px;
            background: linear-gradient(135deg, #d4af37, #f4e4bc);
            color: #2c2c2c;
            text-decoration: none;
            font-size: 1.1rem;
            font-weight: 500;
            letter-spacing: 1px;
            border-radius: 50px;
            transition: all 0.4s ease;
            box-shadow: 0 8px 25px rgba(212,175,55,0.3);
            position: relative;
            overflow: hidden;
        }

        .cta-button::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.3), transparent);
            transition: left 0.6s;
        }

        .cta-button:hover::before {
            left: 100%;
        }

        .cta-button:hover {
            transform: translateY(-3px);
            box-shadow: 0 12px 35px rgba(212,175,55,0.4);
            text-decoration: none;
            color: #2c2c2c;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .hero-content h2 {
                font-size: 2.5rem;
            }

            .philosophy-title,
            .premium-title {
                font-size: 2.5rem;
            }

            .collections-grid {
                grid-template-columns: 1fr;
            }

            .collection-item {
                height: 50vh;
            }

            .premium-features {
                grid-template-columns: 1fr;
                gap: 40px;
            }

            .philosophy-content,
            .premium-content,
            .cta-content {
                padding: 0 20px;
            }
        }

        /* Efectos de scroll suave */
        .scroll-reveal {
            opacity: 0;
            transform: translateY(50px);
            transition: all 1s ease;
        }

        .scroll-reveal.revealed {
            opacity: 1;
            transform: translateY(0);
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
    
    <li><a href="./Paginas/nuestra_empresa.php">Información y estadisticas</a></li>
    <li><a href="./Paginas/mi_juego.html">Juego interactivo</a></li>
    <li><a href="./Paginas/Contacto.php">Contacto</a></li>
  </ul>
</nav>


    </div>
<div class="logo-container">
    <a href="https://www.juanevangelistagomez.edu.co/"><h1 class="brand-logo">Juan Evangelista Gomez</h1></a>
</div>

</header>
    
    <!-- Tu sección hero existente -->
    <section class="hero">
        <div class="hero-content">
            <h2>BULLYING acciones contra este</h2>
            <p>El bullying es una forma de maltrato entre personas, que se repite con el tiempo y causa daño físico o emocional.</p>
        </div>
    </section>

  
    <section class="brand-philosophy scroll-reveal">
        <div class="philosophy-content">
            <h2 class="philosophy-title">Definición </h2>

            <p class="philosophy-text">
           El bullying es una forma de violencia física,
            verbal, psicológica o social que se produce de manera intencional,
             repetida y con desequilibrio de poder entre quien agrede y quien es agredido.
              Su objetivo es humillar, intimidar o excluir a la víctima, 
              generándole daño emocional o físico.
Puede manifestarse en diferentes formas, como golpes,
 insultos, burlas, amenazas, difusión de rumores,
  exclusión social o acoso en línea (ciberbullying).
  el bullying no es un simple conflicto entre personas, sino un comportamiento sistemático de abuso de poder que afecta la autoestima,
   el bienestar y el desarrollo de quien lo sufre.
            </p>
        </div>
    </section>
    

    <section class="featured-collections scroll-reveal">
       <center> <h1>TIPOS</h1></center>
        <div class="collections-grid">
           <a href="https://youtu.be/ia24zheUzG0?si=ITJ23jsN4CAqk_rV"> <div class="collection-item">
                <img src="./Imagenes/fisico2.png" alt="Colección Formal" class="collection-image">
                <div class="collection-overlay">
                    <div class="collection-text">
                        <h3 class="collection-title">Bullying fisico</h3>
                        <p class="collection-description">Golpes, empujones, patadas o cualquier forma de agresión corporal.</p>
                    </div>
                </div>
            </div>
          </a>
           <a href="https://youtu.be/XxY9aE48uTw?si=gI8KN9JCkqWIGjex"> <div class="collection-item">
                <img src="./Imagenes/verbal2.jpg" alt="Colección Casual" class="collection-image">
                <div class="collection-overlay">
                    <div class="collection-text">
                       <h3 class="collection-title">Bullying verbal</h3>
                        <p class="collection-description">Insultos, apodos ofensivos, burlas o amenazas.</p>
                    </div>
                </div>
            </div></a>

              <a href="https://youtu.be/wSpXcXKFb8Y?si=dh7UUVasNuFB1bcF"><div class="collection-item">
                <img src="./Imagenes/psicologico2.png" alt="Colección Casual" class="collection-image">
                <div class="collection-overlay">
                    <div class="collection-text">
                       <h3 class="collection-title">Bullying psicologico</h3>
                        <p class="collection-description">Intimidación, manipulación, aislamiento, hacer sentir miedo o inseguridad.</p>
                    </div>
                </div>
            </div></a>

              <a href="https://youtu.be/JYdl0LO4HAE?si=_zPiyjFY3ofYCfLj"><div class="collection-item">
                <img src="./Imagenes/ciber1.png" alt="Colección Casual" class="collection-image">
                <div class="collection-overlay">
                    <div class="collection-text">
                        <h3 class="collection-title">Ciberbullying</h3>
                        <p class="collection-description">Acoso a través de redes sociales, mensajes o internet.</p>
                    </div>
                </div>
            </div></a>
        </div>
    </section>

    
    <!-- Sección 4: Call to Action -->
    <section class="cta-section scroll-reveal">
     <center>   <div class="cta-content">
            <h2 class="cta-title">ASI SE SIENTE EL BULLYING... </h2>
          <video width="600" controls poster="">
  <source src="./videos/video_mike.mp4" type="video/mp4">
  <source src="./videos/video_mike.mp4" type="video/webm">
  
</video>
            
        </div>
    </section>
<footer class="footer">
  <div class="footer-container">

  
   

    <div class="footer-column">
      <h3>Recursos</h3>
      <ul>
        <li>Bogotá<br>
      San Cristobal <br>
      La Victoria <br>
      <a href="https://www.juanevangelistagomez.edu.co/">Juan Evangelista Gomez</a><br>
      Diagonal 39 sur 2 - 10 este</li>
     
      </ul>
    </div>

    <div class="footer-column">
      <h3>Empresa</h3>
      <ul>
        <li>Surgexis Studio <br>
        contenidos digitales <br>
        3209681694</li>
    
      </ul>
    </div>

    <div class="footer-column">
      <h3>Social</h3>
      <div class="social-icons">
        <a href="https://www.facebook.com/share/1Ec7vXvGvV/"><img src="./Imagenes/facebook.svg" alt="Facebook" /></a>
        <a href="https://www.instagram.com/juanevangelistagomezied?igsh=bThyMmtsamU5aTZw"><img src="./Imagenes/instagram.svg" alt="Instagram" /></a>
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

  // Cerrar al hacer clic fuera del menú
  document.addEventListener("click", function (e) {
    if (!menu.contains(e.target) && !toggleBtn.contains(e.target)) {
      menu.classList.remove("visible");
      document.body.classList.remove("menu-open");
    }
  });
</script>
    <script>
        // Animaciones de scroll
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('revealed');
                }
            });
        }, observerOptions);

        // Observar elementos con animación
        document.querySelectorAll('.scroll-reveal').forEach(el => {
            observer.observe(el);
        });

        // Efecto parallax sutil para el hero
        window.addEventListener('scroll', () => {
            const scrolled = window.pageYOffset;
            const hero = document.querySelector('.hero');
            if (hero) {
                hero.style.transform = `translateY(${scrolled * 0.5}px)`;
            }
        });
    </script>
    
</body>
</html>