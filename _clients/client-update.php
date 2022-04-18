<?php
include_once('../header-internal.php');
require_once('../database/connection.php');
?>

<?php
if ($_POST) {
        $nome = $_POST['nome'] ?? null;
        $cpf = $_POST['cpf'] ?? null;
        $email = $_POST['email'] ?? null;
      
        $q = "INSERT INTO clients (nome_cliente, cpf, email) VALUES('$nome', '$cpf', '$email')";
        if($banco->query($q)) {
            echo "<div class='container alert alert-success'>
                    <h5 class='success mb-0'>$nome foi inserido com sucesso!</h5>
                </div>
                <div class='col-12 text-end'>
                    <a href='./client-read.php' class='btn'>voltar</a>
                </div>";
        } else {
            echo "<div class='container alert alert-danger'>
                    <h5 class='danger mb-0'>Não foi possível criar o usuário $nome!</h5>
                </div>";
        }
    }
?>

<style>
    <?php
        include_once('../style/style.css');
        include_once('../style/style-internal.css');
    ?>
</style>

<?php
include_once('../footer-internal.php');
?>