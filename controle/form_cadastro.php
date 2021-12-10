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
            border-radius: 10px;
            padding: 10px;
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

        form {
            margin: auto;
        }
    </style>
    <title>Blog EA</title>
</head>

<body class="bg-light">
    <div class="fundo"></div>
    <h1 class="text-center mt-5 mb-5">PUBLICAR ARTIGO</h1>
    <main class="shadow-lg mb-5">
        <form class="form-horizontal was-validated" method="POST" action="cadastro.php">

            <div class="form-group">
                <label>Título</label>
                <input type="text" name="titulo" class="form-control w-100" placeholder="Título do artigo" required minlength="5">
            </div>
            <div class="form-group  ">
                <label>Conteúdo</label>
                <textarea class="form-control" name="conteudo" rows="25" minlength="15" maxlength="8000" required></textarea>
            </div>
            <div class="form-group">
                <label class="col control-label">Status</label>
                <div class="col-sm-10">
                    <select name="status" class="form-control w-25" required>
                        <option value="ativo" selected>Ativo</option>
                        <option value="inativo">Inativo</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-success  mr-3">Publicar</button>
                    <a href="./listar.php" class="btn btn-primary">Voltar</a>

                </div>
            </div>
        </form>
    </main>

    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>