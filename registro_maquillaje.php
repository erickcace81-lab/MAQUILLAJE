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
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-pink-50 py-12 px-4">
    <div class="max-w-2xl mx-auto bg-white rounded-xl shadow-lg p-8 md:p-12">
        <h2 class="text-3xl font-bold text-pink-600 mb-6 text-center">¡Registro Exitoso!</h2>
        <p class="text-lg mb-6 text-center">Gracias <strong class="text-pink-700"><?php echo htmlspecialchars($nombre); ?></strong> por contactarnos. Hemos recibido tu información y nos pondremos en contacto contigo pronto.</p>
        
        <div class="bg-pink-100 rounded-lg p-6 mb-8">
            <h3 class="text-xl font-bold text-pink-700 mb-4">Resumen de tu consulta:</h3>
            <div class="space-y-3">
                <p><strong class="text-pink-700">Nombre:</strong> <?php echo htmlspecialchars($nombre); ?></p>
                <p><strong class="text-pink-700">Email:</strong> <?php echo htmlspecialchars($email); ?></p>
                <p><strong class="text-pink-700">Teléfono:</strong> <?php echo htmlspecialchars($telefono); ?></p>
                
                <?php if (!empty($edad)): ?>
                <p><strong class="text-pink-700">Edad:</strong> <?php echo htmlspecialchars($edad); ?></p>
                <?php endif; ?>
                
                <p><strong class="text-pink-700">Tipo de piel:</strong> <?php echo htmlspecialchars($tipo_piel); ?></p>
                <p><strong class="text-pink-700">Preocupación principal:</strong> <?php echo htmlspecialchars($preocupacion); ?></p>
                <p><strong class="text-pink-700">Productos de interés:</strong> <?php echo htmlspecialchars($intereses_texto); ?></p>
                
                <?php if (!empty($presupuesto)): ?>
                <p><strong class="text-pink-700">Presupuesto:</strong> <?php echo htmlspecialchars($presupuesto); ?></p>
                <?php endif; ?>
                
                <?php if (!empty($experiencia)): ?>
                <p><strong class="text-pink-700">Experiencia previa:</strong> <?php echo htmlspecialchars($experiencia); ?></p>
                <?php endif; ?>
                
                <p><strong class="text-pink-700">Consulta:</strong> <?php echo htmlspecialchars($consulta); ?></p>
                <p><strong class="text-pink-700">Suscripción a newsletter:</strong> <?php echo htmlspecialchars($newsletter); ?></p>
            </div>
        </div>
        
        <p class="text-center mb-6">Te contactaremos en un plazo máximo de 24 horas.</p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href='javascript:window.close()' class='bg-pink-500 text-white px-6 py-3 rounded-lg font-bold hover:bg-pink-600 transition text-center'>Cerrar ventana</a>
            <a href='index.html' class='bg-pink-500 text-white px-6 py-3 rounded-lg font-bold hover:bg-pink-600 transition text-center'>Volver al sitio web</a>
        </div>
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
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-pink-50 py-12 px-4">
    <div class="max-w-lg mx-auto bg-white rounded-xl shadow-lg p-8 text-center">
        <h2 class="text-2xl font-bold text-pink-600 mb-4">Error: Acceso no permitido</h2>
        <p class="mb-6">Esta página solo puede accederse mediante el envío del formulario.</p>
        <a href='index.html' class='bg-pink-500 text-white px-6 py-3 rounded-lg font-bold hover:bg-pink-600 transition inline-block'>Volver al sitio web</a>
    </div>
</body>
</html>
<?php
}
?>