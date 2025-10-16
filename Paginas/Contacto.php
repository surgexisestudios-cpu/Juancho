<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Simula el envío del correo (no lo envía realmente)
    echo "<script>
            alert('✅ Tu mensaje ha sido enviado correctamente. Gracias por contactarnos.');
            window.location.href = '../index.php';
          </script>";
    exit;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>BULLYING-JUAN EVANGELISTA GOMEZ-CONTACTO</title>
  <link rel="shortcut icon" href="../Imagenes/logo.png" type="image/x-icon">
  <style>
    body {
      background-image: url(../Imagenes/colegio_noche.webp);
      background-size: cover;
      backdrop-filter: blur(8px);
      font-family: 'Poppins', sans-serif;
      color: #2e3d33;
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      margin: 0;
    }

    .main-container {
      display: flex;
      background: #ffffff;
      border-radius: 20px;
      box-shadow: 0 10px 30px rgba(0, 128, 64, 0.1);
      overflow: hidden;
      max-width: 950px;
      width: 90%;
      transition: all 0.3s ease;
    }

    .main-container:hover {
      box-shadow: 0 12px 40px rgba(0, 128, 64, 0.2);
    }

    .container {
      padding: 40px;
      flex: 1;
      background-color: #ffffff;
    }

    h2 {
      text-align: center;
      margin-bottom: 25px;
      color: #008f5a;
      font-size: 28px;
      font-weight: 700;
    }

    .form-group {
      margin-bottom: 18px;
    }

    label {
      display: block;
      margin-bottom: 6px;
      color: #00663f;
      font-weight: 600;
    }

    input,
    textarea {
      width: 100%;
      padding: 12px;
      background-color: #f7fff9;
      border: 2px solid #cde8d3;
      border-radius: 10px;
      font-size: 15px;
      color: #333;
      box-sizing: border-box;
      transition: all 0.3s ease;
    }

    input:focus,
    textarea:focus {
      outline: none;
      border-color: #00a86b;
      background-color: #ffffff;
      box-shadow: 0 0 6px rgba(0, 168, 107, 0.3);
    }

    textarea {
      height: 120px;
      resize: none;
    }

    button {
      background: linear-gradient(135deg, #00a86b, #00955f);
      color: #ffffff;
      padding: 14px 20px;
      border: none;
      border-radius: 10px;
      cursor: pointer;
      width: 100%;
      font-size: 16px;
      font-weight: 600;
      transition: all 0.3s ease;
    }

    button:hover {
      background: linear-gradient(135deg, #00955f, #00a86b);
      transform: scale(1.05);
      box-shadow: 0 5px 15px rgba(0, 168, 107, 0.3);
    }

    .image-container {
      flex: 1;
      background: linear-gradient(135deg, #00a86b, #00955f);
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .image-container img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      opacity: 0.9;
    }

    #volver {
      display: inline-block;
      background: #00a86b;
      color: #fff;
      padding: 12px 24px;
      font-size: 16px;
      border-radius: 10px;
      cursor: pointer;
      transition: all 0.3s ease;
      text-align: center;
      text-decoration: none;
      margin-top: 10px;
    }

    #volver:hover {
      background: #00955f;
      transform: scale(1.05);
      box-shadow: 0 5px 10px rgba(0, 168, 107, 0.3);
    }

    @media (max-width: 768px) {
      .main-container {
        flex-direction: column;
        width: 95%;
      }

      .container, .image-container {
        width: 100%;
        padding: 25px;
      }

      .image-container img {
        height: auto;
      }
    }
  </style>
</head>
<body>
  <div class="main-container">
    <form method="post" action="">
      <div class="container">
        <h2>Déjanos tus Datos</h2>

        <div class="form-group">
          <label for="nombre">Nombre:</label>
          <input type="text" id="nombre" name="nombre" required>
        </div>

        <div class="form-group">
          <label for="apellido">Apellido:</label>
          <input type="text" id="apellido" name="apellido" required>
        </div>

        <div class="form-group">
          <label for="telefono">Teléfono:</label>
          <input type="tel" id="telefono" name="telefono" required>
        </div>

        <div class="form-group">
          <label for="email">Correo Electrónico:</label>
          <input type="email" id="email" name="email" required>
        </div>

        <div class="form-group">
          <label for="direccion">Dirección:</label>
          <input type="text" id="direccion" name="direccion" required>
        </div>

        <div class="form-group">
          <label for="mensaje">Mensaje:</label>
          <textarea id="mensaje" name="mensaje" required></textarea>
        </div>

        <button type="submit">Enviar</button>
        <br><br>
        <a href="../index.php" id="volver">Volver</a>
      </div>
    </form>

    <div class="image-container">
      <img src="../Imagenes/llc.png" alt="Imagen de contacto">
    </div>
  </div>
</body>
</html>
