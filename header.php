<?php
if (session_status() === PHP_SESSION_NONE) session_start();
$fig = isset($_SESSION['figura']) ? $_SESSION['figura'] : null;
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Figuras Geométricas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <header class="bg-light py-3 mb-4">
        <div class="container d-flex flex-column flex-md-row justify-content-between align-items-center">
            <h1 class="h4 mb-2 mb-md-0">Figuras Geométricas</h1>
            <div>
                <?php if ($fig): ?>
                    <span class="me-3">Figura seleccionada: <strong><?php echo htmlspecialchars($fig); ?></strong></span>
                <?php endif; ?>
                <a class="btn btn-outline-secondary btn-sm" href="logout.php">Seleccionar otra figura</a>
            </div>
        </div>
    </header>
    <main class="container">
