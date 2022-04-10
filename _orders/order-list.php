<?php
include_once('../header-internal.php');
?>

<div class="container">
    
    <div class="d-flex align-items-center justify-content-between mb-4">
        <h4>Pedidos</h4>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
          Cadastrar
        </button>
    </div>

    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">Nome</th>
                <th scope="col">CPF</th>
                <th scope="col">E-mail</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="table-w-40">Nome</td>
                <td>CPF</td>
                <td>E-mail</td>
                <td class="table-w-10">
                    <a href=""><img src="../assets/icons/edit.svg" alt=""></a>
                    <a href=""><img src="../assets/icons/delete.svg" alt=""></a>
                </td>
            </tr>
        </tbody>
    </table>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Novo Pedido</h5>
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