<?php 
        include './header.php' ;
        include './consulta_alunos.php';
?>
    <div class="container mt-3">
        <table class="table table-striped table-hover text-center">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nome</th>
                    <th>CPF</th>
                    <th>Telefone</th>
                    <th colspan="2">Editar</th>
                </tr>
            </thead>
            <tbody>              <!-- Estruturas de repetição -->
                <?php foreach (listaAlunos() as $aluno) : ?>
                <tr>
                    <td><?= $aluno['idaluno'] ?></td>
                    <td><?= $aluno['nome'] ?></td>
                    <td><?= $aluno['cpf'] ?></td>
                    <td><?= $aluno['telefone'] ?></td>
                    <td><a href="edit_aluno.php?id=<?= $aluno['idaluno'] ?>"><i class="fas fa-edit"></i></a></td>
                    <td><a href="delete_aluno.php?id=<?= $aluno['idaluno'] ?>" onclick="return confirm('Você tem certeza que gostaria de apagar?')"> <i class="fas fa-trash-alt"></i></a></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
<?php include './footer.php' ?>
