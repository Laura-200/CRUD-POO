<?php

require_once '../repositories/SorveteRepository.php';

$repo = new SorveteRepository();

if ($_POST) {

    $sorvete = new Sorvete(
        $_POST['nome'],
        $_POST['sabor'],
        $_POST['preco']
    );

    $repo->atualizar($_POST['id'], $sorvete);

    header("Location: index.php");
    exit;
}

$sorvete = $repo->buscarPorId($_GET['id']);

if (!$sorvete) {
    die("Sorvete não encontrado!");
}

?>

<h1>Editar Sorvete 🍦</h1>

<form method="post">

    <input type="hidden" name="id" value="<?= $sorvete['id'] ?>">

    <input name="nome" value="<?= htmlspecialchars($sorvete['nome']) ?>" required>
    <br><br>

    <input name="sabor" value="<?= htmlspecialchars($sorvete['sabor']) ?>" required>
    <br><br>

    <input type="number" step="0.01" name="preco" value="<?= $sorvete['preco'] ?>" required>
    <br><br>

    <button type="submit">Atualizar</button>

</form>