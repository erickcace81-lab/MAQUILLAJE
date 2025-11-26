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
    <!-- Bootstrap CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>
<body class="bg-light">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card shadow border-0">
                    <div class="card-body p-5">
                        <!-- Header de éxito -->
                        <div class="text-center mb-4">
                            <i class="bi bi-check-circle-fill text-success display-1"></i>
                            <h2 class="text-danger mt-3">¡Registro Exitoso!</h2>
                            <p class="lead">Gracias <strong class="text-danger"><?php echo htmlspecialchars($nombre); ?></strong> por contactarnos. Hemos recibido tu información y nos pondremos en contacto contigo pronto.</p>
                        </div>
                        
                        <!-- Resumen de datos -->
                        <div class="bg-warning bg-opacity-10 rounded p-4 mb-4">
                            <h3 class="text-danger mb-3">Resumen de tu consulta:</h3>
                            <div class="row">
                                <div class="col-md-6">
                                    <p><strong>Nombre:</strong><br><?php echo htmlspecialchars($nombre); ?></p>
                                    <p><strong>Email:</strong><br><?php echo htmlspecialchars($email); ?></p>
                                    <p><strong>Teléfono:</strong><br><?php echo htmlspecialchars($telefono); ?></p>
                                    
                                    <?php if (!empty($edad)): ?>
                                    <p><strong>Edad:</strong><br><?php echo htmlspecialchars($edad); ?></p>
                                    <?php endif; ?>
                                    
                                    <p><strong>Tipo de piel:</strong><br><?php echo htmlspecialchars($tipo_piel); ?></p>
                                </div>
                                <div class="col-md-6">
                                    <p><strong>Preocupación principal:</strong><br><?php echo htmlspecialchars($preocupacion); ?></p>
                                    <p><strong>Productos de interés:</strong><br><?php echo htmlspecialchars($intereses_texto); ?></p>
                                    
                                    <?php if (!empty($presupuesto)): ?>
                                    <p><strong>Presupuesto:</strong><br><?php echo htmlspecialchars($presupuesto); ?></p>
                                    <?php endif; ?>
                                    
                                    <p><strong>Suscripción a newsletter:</strong><br><?php echo htmlspecialchars($newsletter); ?></p>
                                </div>
                            </div>
                            
                            <?php if (!empty($experiencia)): ?>
                            <div class="mt-3">
                                <p><strong>Experiencia previa:</strong><br><?php echo htmlspecialchars($experiencia); ?></p>
                            </div>
                            <?php endif; ?>
                            
                            <div class="mt-3">
                                <p><strong>Consulta:</strong><br><?php echo htmlspecialchars($consulta); ?></p>
                            </div>
                        </div>
                        
                        <!-- Mensaje final -->
                        <div class="text-center mb-4">
                            <p class="text-muted">Te contactaremos en un plazo máximo de 24 horas.</p>
                        </div>
                        
                        <!-- Botones de acción -->
                        <div class="text-center">
                            <a href='javascript:window.close()' class='btn btn-danger me-3'>
                                <i class="bi bi-x-circle me-2"></i>Cerrar ventana
                            </a>
                            <a href='index.html' class='btn btn-outline-danger'>
                                <i class="bi bi-arrow-left me-2"></i>Volver al sitio web
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Bootstrap JS CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
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
    <!-- Bootstrap CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>
<body class="bg-light">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="card shadow border-0">
                    <div class="card-body p-5 text-center">
                        <i class="bi bi-exclamation-triangle-fill text-warning display-1"></i>
                        <h2 class="text-danger mt-3">Error: Acceso no permitido</h2>
                        <p class="lead mb-4">Esta página solo puede accederse mediante el envío del formulario.</p>
                        <a href='index.html' class='btn btn-danger'>
                            <i class="bi bi-arrow-left me-2"></i>Volver al sitio web
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Bootstrap JS CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php
}
?>