<?php

require_once '../repositories/SorveteRepository.php';

if ($_POST) {

    $sorvete = new Sorvete(
        $_POST['nome'],
        $_POST['sabor'],
        $_POST['preco']
    );

    (new SorveteRepository())->criar($sorvete);

    header("Location: index.php");
    exit;
}

?>

<h1>Cadastrar Sorvete 🍦</h1>

<form method="post">

    <input name="nome" placeholder="Nome do sorvete" required>
    <br><br>

    <input name="sabor" placeholder="Sabor" required>
    <br><br>

    <input type="number" step="0.01" name="preco" placeholder="Preço" required>
    <br><br>

    <button type="submit">Salvar</button>

</form>