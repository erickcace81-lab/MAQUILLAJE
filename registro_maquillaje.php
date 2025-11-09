<?php
// Verificar que el formulario fue enviado con método POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Recoger los datos del formulario
    $nombre = $_POST['nombre'] ?? '';
    $email = $_POST['email'] ?? '';
    $telefono = $_POST['telefono'] ?? '';
    $edad = $_POST['edad'] ?? '';
    $tipo_piel = $_POST['tipo_piel'] ?? '';
    $preocupacion = $_POST['preocupacion'] ?? '';
    $presupuesto = $_POST['presupuesto'] ?? '';
    $experiencia = $_POST['experiencia'] ?? '';
    $consulta = $_POST['consulta'] ?? '';
    $newsletter = isset($_POST['newsletter']) ? 'Sí' : 'No';
    
    // Procesar intereses
    $intereses = $_POST['interes'] ?? [];
    $intereses_texto = !empty($intereses) ? implode(", ", $intereses) : "Ninguno seleccionado";
    
?>
<!DOCTYPE html>
<html lang='es'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Registro Exitoso - AuraSkin</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background-color: #fff7f9;
            color: #333;
            padding: 40px;
            text-align: center;
            margin: 0;
        }
        .contenedor-exito {
            max-width: 700px;
            margin: 50px auto;
            background-color: white;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        }
        h2 {
            color: #d16b84;
            margin-bottom: 20px;
        }
        .resumen {
            text-align: left;
            background-color: #fff0f3;
            padding: 20px;
            border-radius: 8px;
            margin: 20px 0;
        }
        .btn {
            display: inline-block;
            background-color: #d16b84;
            color: white;
            padding: 12px 25px;
            border-radius: 6px;
            text-decoration: none;
            font-weight: bold;
            margin-top: 20px;
            border: none;
            cursor: pointer;
            font-size: 16px;
        }
        .btn:hover {
            background-color: #b44b63;
        }
    </style>
</head>
<body>
    <div class='contenedor-exito'>
        <h2>¡Registro Exitoso!</h2>
        <p>Gracias <strong><?php echo htmlspecialchars($nombre); ?></strong> por contactarnos. Hemos recibido tu información y nos pondremos en contacto contigo pronto.</p>
        
        <div class='resumen'>
            <h3>Resumen de tu consulta:</h3>
            <p><strong>Nombre:</strong> <?php echo htmlspecialchars($nombre); ?></p>
            <p><strong>Email:</strong> <?php echo htmlspecialchars($email); ?></p>
            <p><strong>Teléfono:</strong> <?php echo htmlspecialchars($telefono); ?></p>
            
            <?php if (!empty($edad)): ?>
            <p><strong>Edad:</strong> <?php echo htmlspecialchars($edad); ?></p>
            <?php endif; ?>
            
            <p><strong>Tipo de piel:</strong> <?php echo htmlspecialchars($tipo_piel); ?></p>
            <p><strong>Preocupación principal:</strong> <?php echo htmlspecialchars($preocupacion); ?></p>
            <p><strong>Productos de interés:</strong> <?php echo htmlspecialchars($intereses_texto); ?></p>
            
            <?php if (!empty($presupuesto)): ?>
            <p><strong>Presupuesto:</strong> <?php echo htmlspecialchars($presupuesto); ?></p>
            <?php endif; ?>
            
            <?php if (!empty($experiencia)): ?>
            <p><strong>Experiencia previa:</strong> <?php echo htmlspecialchars($experiencia); ?></p>
            <?php endif; ?>
            
            <p><strong>Consulta:</strong> <?php echo htmlspecialchars($consulta); ?></p>
            <p><strong>Suscripción a newsletter:</strong> <?php echo htmlspecialchars($newsletter); ?></p>
        </div>
        
        <p>Te contactaremos en un plazo máximo de 24 horas.</p>
        <a href='javascript:window.close()' class='btn'>Cerrar ventana</a>
        <a href='index.html' class='btn'>Volver al sitio web</a>
    </div>
</body>
</html>
<?php
} else {
    // Si alguien intenta acceder directamente a este archivo sin enviar el formulario
?>
<!DOCTYPE html>
<html lang='es'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Error - AuraSkin</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background-color: #fff7f9;
            color: #333;
            padding: 40px;
            text-align: center;
        }
        .contenedor-error {
            max-width: 600px;
            margin: 0 auto;
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        }
        h2 {
            color: #d16b84;
            margin-bottom: 20px;
        }
        .btn {
            display: inline-block;
            background-color: #d16b84;
            color: white;
            padding: 12px 25px;
            border-radius: 6px;
            text-decoration: none;
            font-weight: bold;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class='contenedor-error'>
        <h2>Error: Acceso no permitido</h2>
        <p>Esta página solo puede accederse mediante el envío del formulario.</p>
        <a href='index.html' class='btn'>Volver al sitio web</a>
    </div>
</body>
</html>
<?php
}
?>