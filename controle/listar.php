<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="../../../dist/img/img/favicon.png" rel="icon">
    <script src="https://kit.fontawesome.com/26a3a5c400.js" crossorigin="anonymous"></script>
    <style>
        main {
            margin: auto;
            width: 60%;
        }

        #novaPostagem {
            border-radius: 50px 50px 50px 50px;
        }

        .artigo {
            background-color: white;
            margin: auto;
            border-radius: 10px 0px;
        }

        .artigo:hover {
            transform: scale(1.1);
        }
    </style>
    <title>Blog EA</title>
</head>

<body class="bg-light">
    <div class="fundo"></div>
    <h1 class="text-center mt-5 mb-5">ARTIGOS PUBLICADOS</h1>
    <main>

        <a id="novaPostagem" class="btn btn-success btn-sm mb-5" href="./form_cadastro.php"><i class="fas fa-plus mr-2"></i>Nova Postagem</a>
        <a id="novaPostagem" target="_blank" class="btn btn-primary btn-sm mb-5" href="../index.php"><i class="fas fa-external-link-alt mr-2"></i>Blog</a>
        <?php
        include_once('../../../bd/conectar.php');
        $sql = "SELECT * FROM tb_artigo ORDER BY id DESC";

        $resultado = mysqli_query($strcon, $sql);

        setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
        date_default_timezone_set('America/Sao_Paulo');

        while ($dados = mysqli_fetch_assoc($resultado)) {
            if ($dados['status'] == "ativo") {
                $corTexto = "text-success";
            } else {
                $corTexto = "text-danger";
            }

        ?>
            <div class="artigo mb-2 p-3 shadow-lg text-justify">
                <div class="container">
                    <div class="row text-center">
                        <div class="col-sm">
                            <?php echo $dados['titulo'] ?>
                        </div>
                        <div class="col-sm text-muted">
                            <?php echo utf8_encode(strftime('%A, %d de %B de %Y', strtotime($dados['data_inclusao']))) ?>
                        </div>
                        <div class="col-sm text-uppercase <?php echo $corTexto ?>">
                            <?php echo $dados['status'] ?>
                        </div>
                        <div class="col-sm">
                            <a class="btn btn-primary btn-sm" href="./form_alteracao.php?id=<?php echo $dados['id'] ?>">Editar</a>
                            <a class="btn btn-danger btn-sm" href="#modalExcluir?id=<?php echo $dados['id'] ?>" data-toggle="modal" data-target="#modalExcluir<?php echo $dados['id'] ?>">Excluir</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal  Excluir-->
            <div class="modal fade" id="modalExcluir<?php echo $dados['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header  text-center">
                            <h5 class="modal-title" id="exampleModalLabel">Realmente deseja excluir?</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body text-center">
                            <a href="./excluir.php?id=<?php echo $dados['id'] ?>" class="btn btn-danger mr-4">Sim</a>
                            <button type="button" class="btn btn-success" data-dismiss="modal">Não</button>

                        </div>
                        <div class="modal-footer">

                        </div>
                    </div>
                </div>
            </div>
        <?php
        }
        ?>

    </main>

    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>