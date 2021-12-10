<?php

include_once('../../../bd/conectar.php');

$titulo = $_POST['titulo'];
$conteudo = $_POST['conteudo'];
$status = $_POST['status'];

if (trim($titulo) && trim($conteudo)) {
    $sql = "INSERT INTO tb_artigo (titulo, conteudo, status)
                VALUES ('$titulo', '$conteudo', '$status')";

    $resultado = mysqli_query($strcon, $sql);

    header("Location: listar.php");
    exit();
} else {
    header("Location: form_cadastro.php");
    exit();
}
