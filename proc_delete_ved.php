<?php
    session_start();
    include_once("conexao.php");

         $cod = $_GET['id'];

        $sql = "DELETE FROM vendedores WHERE ved_id = $cod";

        mysqli_query($conn,$sql);

        header("Location: vendedores.php");
?>