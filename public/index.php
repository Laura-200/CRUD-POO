<?php

require_once '../repositories/SorveteRepository.php';

$repo = new SorveteRepository();

$sorvetes = $repo->listar();

?>

<h1>🍦 Sorveteria Delícias Geladas</h1>

<a href="criar.php">Cadastrar Sorvete</a>

<table border="1">

    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Sabor</th>
        <th>Preço</th>
        <th>Ações</th>
    </tr>

    <?php foreach ($sorvetes as $s): ?>

        <tr>

            <td><?= htmlspecialchars($s['id']) ?></td>

            <td><?= htmlspecialchars($s['nome']) ?></td>

            <td><?= htmlspecialchars($s['sabor']) ?></td>

            <td>R$ <?= number_format($s['preco'], 2, ',', '.') ?></td>

            <td>

                <a href="editar.php?id=<?= $s['id'] ?>">Editar</a>

                |

                <a href="excluir.php?id=<?= $s['id'] ?>"
                   onclick="return confirm('Deseja excluir este sorvete?')">
                    Excluir
                </a>

            </td>

        </tr>

    <?php endforeach; ?>

</table>