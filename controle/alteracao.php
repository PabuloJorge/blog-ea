<?php


include_once('../../../bd/conectar.php');

$id = $_GET['id'];
$titulo = $_POST['titulo'];
$conteudo = $_POST['conteudo'];
$status = $_POST['status'];

if (trim($titulo) && trim($conteudo) && trim($status)) {
    $sql = "UPDATE tb_artigo
            SET titulo = '$titulo', 
            conteudo = '$conteudo',
            status = '$status'
            WHERE id = '$id' ";

    $resultado = mysqli_query($strcon, $sql);

    header("Location: listar.php");
    exit();
} else {
    header("Location: form_alteracao.php?id=$id");
    exit();
}
