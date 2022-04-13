<?php
include_once('../header-internal.php');
require_once('../database/connection.php');
?>

<div class="container">
    
    <div class="d-flex align-items-center justify-content-between mb-4">
        <h4>Produtos</h4>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
          Cadastrar
        </button>
    </div>

    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">Produto</th>
                <th scope="col">Valor Unitário</th>
                <th scope="col">Código de Barras</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php
                    $busca = $banco->query("select * from products order by nome_produto");
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
                                    <td>$registro->nome_produto</td>
                                    <td>$registro->valor_unitario</td>
                                    <td>$registro->cod_barras</td>
                                    <td>ações</td>
                                </tr>";
                            }
                        }
                    }
                ?>

            <!-- <tr>
                <td class="table-w-40">produto xxx</td>
                <td>R$ 10,00</td>
                <td>4793743743539</td>
                <td class="table-w-10">
                    <a href=""><img src="../assets/icons/edit.svg" alt=""></a>
                    <a href=""><img src="../assets/icons/delete.svg" alt=""></a>
                </td>
            </tr> -->
        </tbody>
    </table>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Novo Produto</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="row">
                        <div class="mb-3">
                            <label for="nome" class="form-label">Nome</label>
                            <input type="text" class="form-control" id="nome" placeholder="Nome">
                        </div>
                        <div class="mb-3 col-6">
                            <label for="cpf" class="form-label">CPF</label>
                            <input type="cpf" class="form-control" id="cpf" placeholder="CPF">
                        </div>
                        <div class="mb-3 col-6">
                            <label for="email" class="form-label">E-mail</label>
                            <input type="email" class="form-control" id="email" placeholder="E-mail">
                        </div>
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                    <button type="submit" class="btn btn-primary">Cadastrar</button>
                </div>
                </form>
            </div>
        </div>
    </div>
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