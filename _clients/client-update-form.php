<?php
include_once('../header-internal.php');
require_once('../database/connection.php');

$results = $banco->query("SELECT * from clients");
$row = mysqli_fetch_array($results);
// $busca = $banco->query($q);
// $registro = $busca->fetch_object();
?>

<div class="container">
    <div class="form-content">
        <div class="mb-3">
            <h4 class="form-title mb-0">Novo Cliente</h4>
        </div>
        <div class="form-body">
        
            <form class="row" action="./client-update.php" method="POST" id="createNewClient">
                <div class="mb-4">
                    <label for="nome" class="form-label">Nome</label>
                    <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome" value="<?php echo $row['nome_cliente']?>">
                </div>
                <div class="mb-4 col-4">
                    <label for="cpf" class="form-label">CPF</label>
                    <input type="text" class="form-control" id="cpf" name="cpf" placeholder="CPF" value="<?php echo $row['cpf']?>">
                </div>
                <div class="mb-4 col-8">
                    <label for="email" class="form-label">E-mail</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="E-mail" value="<?php echo $row['email']?>">
                </div>
            
        </div>
        <div class="form-footer text-end mt-3">
            <a href="./client-read.php" class="btn">Voltar</a>
            <button type="submit" class="btn" id="registerNewClient">Cadastrar</button>
        </div>
        </form>
        
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