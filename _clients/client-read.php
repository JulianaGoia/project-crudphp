<?php
include_once('../header-internal.php');
require_once('../database/connection.php');
?>

<div class="container">
    
    <div class="d-flex align-items-center justify-content-between mb-4">
        <h4>Clientes</h4>
        <a href="client-create-form.php" class="btn">Cadastrar</a>
    </div>

    <table class="table table-hover" id="clientTable">
        <thead>
            <tr>
                <th>Nome</th>
                <th>CPF</th>
                <th>E-mail</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php

                $busca = $banco->query("select * from clients order by nome_cliente");
                if(!$busca) {
                    // mensagem de erro ao tentar buscar os registros na tabela
                    echo "<tr><td>Error na busca</td></tr>";
                } else {
                    // mensagem quando não houver registros na tabela
                    if ($busca->num_rows == 0) {
                        echo "<tr><td>Nenhum registro encontrado</td></tr>";
                    } else {
                        // loop para printar todos registros dentro da tabela clients
                        while ($registro = $busca->fetch_object()) {
                            echo "
                            <tr>
                                <td>$registro->nome_cliente</td>
                                <td>$registro->cpf</td>
                                <td>$registro->email</td>
                                <td>
                                    <a href='./client-update-form.php'><img src='../assets/icons/edit.svg'></a>
                                    <a href='./client-delete.php'><img src='../assets/icons/delete.svg'></a>
                                </td>
                            </tr>";
                        }
                    }
                }
            ?>

        </tbody>
    </table>
</div>


<style>
    <?php
        include_once('../style/style.css');
        include_once('../style/style-internal.css');
    ?>
</style>

<?php
include_once('../footer-internal.php');
?>