<?php
include_once('header.php');
?>

<section class="">
    <div class="action-buttons d-flex flex-wrap">
        <a href="./_clients/client-read.php">
            <lord-icon
                src="https://cdn.lordicon.com/dklbhvrt.json"
                trigger="hover"
                colors="primary:#584ea8"
                state="hover"
                style="width:100px;height:100px">
            </lord-icon>
            <p>CLIENTES</p>
        </a>
        <a href="./_orders/order-list.php">
            <lord-icon
                src="https://cdn.lordicon.com/ofqzcdla.json"
                trigger="hover"
                colors="primary:#584ea8"
                style="width:100px;height:100px">
            </lord-icon>
            <p>PEDIDOS</p>
        </a>
        <a href="./_products/product-list.php">
            <lord-icon
                src="https://cdn.lordicon.com/zwixqnmk.json"
                trigger="hover"
                colors="primary:#584ea8"
                style="width:100px;height:100px">
            </lord-icon>
            <p>PRODUTOS</p>
        </a>
        <a href="./migration/migration.php">
            <lord-icon
                src="https://cdn.lordicon.com/kzwbetjp.json"
                trigger="hover"
                colors="primary:#584ea8"
                style="width:100px;height:100px">
            </lord-icon>
            <p>MIGRATION</p>
        </a>
    </div>
</section>

<?php
include_once('footer.php');
?>
