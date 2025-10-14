<?php
require_once __DIR__ . '/classes/FiguraGeometrica.php';
require_once __DIR__ . '/classes/Triangulo.php';
require_once __DIR__ . '/classes/Rectangulo.php';
require_once __DIR__ . '/classes/Cuadrado.php';
require_once __DIR__ . '/classes/Circulo.php';

session_start();
if (!isset($_SESSION['figura']) || !isset($_SESSION['from_index']) || $_SESSION['from_index'] !== true) {
    header('Location: index.php');
    exit;
}

$figura = $_SESSION['figura'];
$l1 = isset($_SESSION['lado1']) ? $_SESSION['lado1'] : '';
$l2 = isset($_SESSION['lado2']) ? $_SESSION['lado2'] : '';
$l3 = isset($_SESSION['lado3']) ? $_SESSION['lado3'] : '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $_SESSION['lado1'] = isset($_POST['lado1']) ? trim($_POST['lado1']) : '';
    $_SESSION['lado2'] = isset($_POST['lado2']) ? trim($_POST['lado2']) : '';
    $_SESSION['lado3'] = isset($_POST['lado3']) ? trim($_POST['lado3']) : '';
    $_SESSION['from_datos'] = true;
    header('Location: resultados.php');
    exit;
}

include 'header.php';
?>
<h2 class="mb-4">Introduzca los lados para: <?php echo htmlspecialchars($figura); ?></h2>
<form method="post" id="formLados" action="datos.php" class="row g-3">
    <?php if ($figura === 'triangulo'): ?>
        <div class="col-md-4">
            <label class="form-label">Lado 1</label>
            <input class="form-control" type="number" step="any" min="0.01" required name="lado1" value="<?php echo htmlspecialchars($l1); ?>">
            <div class="error" id="err-lado1"></div>
        </div>
        <div class="col-md-4">
            <label class="form-label">Lado 2</label>
            <input class="form-control" type="number" step="any" min="0.01" required name="lado2" value="<?php echo htmlspecialchars($l2); ?>">
            <div class="error" id="err-lado2"></div>
        </div>
        <div class="col-md-4">
            <label class="form-label">Lado 3</label>
            <input class="form-control" type="number" step="any" min="0.01" required name="lado3" value="<?php echo htmlspecialchars($l3); ?>">
            <div class="error" id="err-lado3"></div>
        </div>
    <?php elseif ($figura === 'rectangulo'): ?>
        <div class="col-md-6">
            <label class="form-label">Base</label>
            <input class="form-control" type="number" step="any" min="0.01" required name="lado1" value="<?php echo htmlspecialchars($l1); ?>">
            <div class="error" id="err-lado1"></div>
        </div>
        <div class="col-md-6">
            <label class="form-label">Altura</label>
            <input class="form-control" type="number" step="any" min="0.01" required name="lado2" value="<?php echo htmlspecialchars($l2); ?>">
            <div class="error" id="err-lado2"></div>
        </div>
    <?php elseif ($figura === 'cuadrado'): ?>
        <div class="col-md-6">
            <label class="form-label">Lado</label>
            <input class="form-control" type="number" step="any" min="0.01" required name="lado1" value="<?php echo htmlspecialchars($l1); ?>">
            <div class="error" id="err-lado1"></div>
        </div>
    <?php elseif ($figura === 'circulo'): ?>
        <div class="col-md-6">
            <label class="form-label">Radio</label>
            <input class="form-control" type="number" step="any" min="0.01" required name="lado1" value="<?php echo htmlspecialchars($l1); ?>">
            <div class="error" id="err-lado1"></div>
        </div>
    <?php endif; ?>
    <div class="col-12 mt-3">
        <button class="btn btn-primary" type="submit">Calcular</button>
    <a class="btn btn-secondary ms-2" href="logout.php">Cancelar</a>
    </div>
</form>

<script src="js/validation.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</main>
</body>
</html>
