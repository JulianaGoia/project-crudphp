<?php
include_once('../header-internal.php');
require_once('../database/connection.php');
?>

<div class="container">
    
    <div class="d-flex align-items-center justify-content-between mb-4">
        <h4>Clientes</h4>
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
                                    <a>
                                      
                                    </a>
                                </td>
                            </tr>";
                        }
                    }
                }
            ?>


            <!-- <tr>
                <td class="table-w-40">Nome</td>
                <td>CPF</td>
                <td>E-mail</td>
                <td class="table-w-10">
                    <a href=""><img src="../assets/icons/edit.svg" alt=""></a>
                    <a href=""><img src="../assets/icons/delete.svg" alt=""></a>
                </td>
            </tr> -->

        </tbody>
    </table>

    <nav aria-label="Page navigation example">
        <ul class="pagination pagination-sm justify-content-center mt-4">
            <li class="page-item">
              <a class="page-link" href="#" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
              </a>
            </li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
                <a class="page-link" href="#" aria-label="Next">
                  <span aria-hidden="true">&raquo;</span>
                </a>
            </li>
        </ul>
</nav>

    <!-- Modal Cadastrar Novo Cliente -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Novo Cliente</h5>
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
    <!-- Modal Editar Cliente -->
    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Editar Cliente</h5>
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

<script>
 function deleteClient() {
     return 
     console.log('clicou') 
     Swal.fire({
        title: 'Error!',
        text: 'Do you want to continue',
        icon: 'error',
        confirmButtonText: 'Cool'
    })
 }
</script>

<style>
    <?php
        include_once('../style/style.css');
        include_once('../style/style-internal.css');
    ?>
</style>

<?php
include_once('../footer-internal.php');
?>