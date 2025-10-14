<?php
require_once __DIR__ . '/classes/FiguraGeometrica.php';
require_once __DIR__ . '/classes/Triangulo.php';
require_once __DIR__ . '/classes/Rectangulo.php';
require_once __DIR__ . '/classes/Cuadrado.php';
require_once __DIR__ . '/classes/Circulo.php';

session_start();

if (!isset($_SESSION['figura']) || !isset($_SESSION['from_datos']) || $_SESSION['from_datos'] !== true) {
    header('Location: index.php');
    exit;
}

$figura = $_SESSION['figura'];
$l1 = isset($_SESSION['lado1']) ? floatval($_SESSION['lado1']) : 0;
$l2 = isset($_SESSION['lado2']) ? floatval($_SESSION['lado2']) : 0;
$l3 = isset($_SESSION['lado3']) ? floatval($_SESSION['lado3']) : 0;

// Si faltan datos según la figura, volver a datos.php
if ($figura === 'triangulo' && ($l1 <= 0 || $l2 <= 0 || $l3 <= 0)) {
    header('Location: datos.php');
    exit;
}
if ($figura === 'rectangulo' && ($l1 <= 0 || $l2 <= 0)) {
    header('Location: datos.php');
    exit;
}
if (($figura === 'cuadrado' || $figura === 'circulo') && $l1 <= 0) {
    header('Location: datos.php');
    exit;
}

switch ($figura) {
    case 'triangulo':
        $obj = new Triangulo($l1, $l2, $l3);
        break;
    case 'rectangulo':
        $obj = new Rectangulo($l1, $l2);
        break;
    case 'cuadrado':
        $obj = new Cuadrado($l1);
        break;
    case 'circulo':
        $obj = new Circulo($l1);
        break;
    default:
        header('Location: index.php');
        exit;
}

$area = $obj->calcularArea();
$perimetro = $obj->calcularPerimetro();

include 'header.php';
?>
<h2 class="mb-4">Resultados</h2>
<div class="card mb-3">
    <div class="card-body">
        <h5 class="card-title"><?php echo htmlspecialchars($obj->getTipoFigura()); ?></h5>
        <p class="card-text"><strong>Lado(s):</strong>
        <?php if ($figura === 'triangulo'): ?>
            <?php echo htmlspecialchars($l1); ?>, <?php echo htmlspecialchars($l2); ?>, <?php echo htmlspecialchars($l3); ?>
        <?php elseif ($figura === 'rectangulo'): ?>
            <?php echo htmlspecialchars($l1); ?>, <?php echo htmlspecialchars($l2); ?>
        <?php else: ?>
            <?php echo htmlspecialchars($l1); ?>
        <?php endif; ?>
        </p>
        <p class="card-text"><strong>Área:</strong> <?php echo htmlspecialchars(number_format($area, 2)); ?></p>
        <p class="card-text"><strong>Perímetro:</strong> <?php echo htmlspecialchars(number_format($perimetro, 2)); ?></p>
        <a class="btn btn-secondary" href="datos.php">Volver y editar datos</a>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</main>
</body>
</html>
