<?php
include_once('../../bd/conectar.php');
setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set('America/Sao_Paulo');
$id = $_GET['id'];
$sql = "SELECT * FROM tb_artigo WHERE id ='$id'";
$resultado = mysqli_query($strcon, $sql);
$dados = mysqli_fetch_assoc($resultado);
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="../../dist/img/img/favicon.png" rel="icon">
    <style>
        body {
            background-image: url("fundo-blog.png");
            height: 50vh;
            background-size: 100% 100%;
            background-position: 50% 0;
            background-repeat: no-repeat;


        }

        .artigo {
            background-color: white;
            margin: auto;
            width: 60%;
            border-radius: 10px 0px;
        }

        pre {
            white-space: pre-wrap;
            font-family: Arial;
            font-size: 16px;
        }
    </style>
    <title>Blog EA</title>
</head>

<body class="bg-light">
    <div class="fundo"></div>
    <h1 class="text-center mt-5 mb-5 text-white">BLOG EA</h1>
    <main>
        <div class="artigo mb-5 p-3 shadow-lg text-justify">
            <h2><?php echo $dados['titulo'] ?></h2>
            <p class="text-muted"><?php echo utf8_encode(strftime('%A, %d de %B de %Y', strtotime($dados['data_inclusao']))) ?></p>
            <pre><?php echo $dados['conteudo'] ?></pre>
            <a class="btn btn-primary" href="./index.php">Voltar</a>
        </div>

    </main>

    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>