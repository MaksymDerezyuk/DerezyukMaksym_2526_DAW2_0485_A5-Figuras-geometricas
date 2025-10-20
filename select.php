<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['figura'])) {
    $allowed = ['trianguloEquilatero', 'trianguloIsoceles', 'trianguloEscaleno', 'rectangulo', 'cuadrado', 'circulo'];
    $fig = $_POST['figura'];
    if (!in_array($fig, $allowed, true)) {
        header('Location: index.php');
        exit;
    }
    $_SESSION['figura'] = $fig;
    $_SESSION['from_index'] = true;
    unset($_SESSION['lado1'], $_SESSION['lado2'], $_SESSION['lado3']);
    header('Location: datos.php');
    exit;
}

header('Location: index.php');
exit;
?>
