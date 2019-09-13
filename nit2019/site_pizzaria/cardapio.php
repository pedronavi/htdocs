<?php include './header.php'?>

<div class="container">
        <!-- <table class="table-dark table table-striped table-hover text-center"> -->
            <table class="table text-center table-striped table-hover">
            <thead class="thead-dark">
                 <tr>
                    <th>#</th>
                    <th>Sabor</th>
                    <th>Descrição</th>
                    <th>Preço</th>
                    <th>Imagem</th>
                </tr>
            </thead>
            <tbody class="bg-white">
                <?php
                    $lista = array(
                        array(
                            "id" => 1,
                            "sabor" => "Mussarela",
                            "descricao" => "pizza com mussarela e tomates.",
                            "preco" => "R$29,99",
                            "imagem" => "prod1"

                        ),
                    array(
                        "id" => 2,
                        "sabor" => "Calabresa",
                        "descricao" => "pizza de calabresa com cebola.",
                        "preco" => "R$29,99",
                        "imagem" => "prod2"
                        ),
                    array(
                        "id" => 3,
                        "sabor" => "Vegetariana",
                        "descricao" => "pizza de mussarela, abobrinha e azeitonas.",
                        "preco" => "R$29,99",
                        "imagem" => "prod3"
                        ),
                        array(
                            "id" => 5,
                            "sabor" => "Portuguesa",
                            "descricao" => "pizza de mussarela, tomate, cebola, calabresa e azeitonas.",
                            "preco" => "R$29,99",
                            "imagem" => "prod5"
                            ),
                    );

                    $array = array(
                        "id" => 4,
                        "sabor" => "Parma",
                        "descricao" => "pizza de presunto de parma com cogumelo.",
                        "preco" => "R$29,99",
                        "imagem" => "Imagens/pizza700x4001.jpg"
                    );
                    
                    # insere o elemento em uma posição do array
                    array_push($lista, $array);
                ?>
                <!-- Estruturas de repetição !-->
                <?php for ($i = 0; $i < sizeof($lista); $i++) : ?>
                <tr>
                    <td><?= $i + 1 ?></td>
                    <td><?= $lista[$i]['sabor']?> </td>
                    <td><?= $lista[$i]['descricao'] ?></td>
                    <td><?= $lista[$i]['preco'] ?></td>
                    <td><a href="<?= $lista[$i]['imagem'] ?>"><i class="fa fa-file-image-o" aria-hidden="true"></a></td></i>
                </tr>
                <?php endfor; ?>
            </tbody>
        </table>
</div>

<?php include './footer.php'?>