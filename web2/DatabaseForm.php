<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Database</title>
</head>

<body>
    <section>
        <div class="container">
            <form action="Controller.php" method="post" name="database" id="database">
                <div class="database">
                    <h2>Database</h2>
                  <br>
                    <div class="mb-3">
                        <label for="nome">Nome do database</label>
                        <input type="text" class="form-control" name="nome" id="nome" aria-describedby="emailHelp" placeholder="Nome"required>
                        <div id="emailHelp" class="form-text">Esse database será criado!</div>
                    </div>
                  
                    <div class="mb-3">
                        <label for="url">URL da conexão</label>
                        <input type="text" class="form-control"name="url" id="url" placeholder="URL" aria-describedby="emailHelp"required>
                            <div id="emailHelp" class="form-text">jdbc:mysql://localhost:</div>
                    </div>
                  
                    <div class="mb-3">
                        <label for="porta">Porta da conexão</label>
                        <input type="number" class="form-control" name="porta" id="porta" aria-describedby="emailHelp" placeholder="Porta"required>
                        <div id="emailHelp" class="form-text">Padrão é a porta: <strong>3306</strong></div>
                    </div>
                  
                    <div class="mb-3">
                        <label for="usuario">Usuário</label>
                        <input type="text" class="form-control" name="usuario" id="usuario" placeholder="Usuário" aria-describedby="emailHelp"required>
                        <div id="emailHelp" class="form-text">Padrão é o: <strong>root</strong></div>
                    </div>
                  
                    <div class="mb-3">
                        <label for="senha">Senha do usuário</label>
                        <input type="password" class="form-control" name="senha" id="senha" placeholder="Senha" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text">Se não tiver senha deixe vazio</div>
                    </div>
                    <div class="mb-3">
                        <select class="form-select" aria-label="Default select example">
                            <option selected value="mysql">MySQL</option>
                            <option value="postgresql">PostgreSQL</option>
                            <option value="mongodb">MongoDB</option>
                            <option value="oracle">Oracle</option>
                            <option value="sqlserver">SQL Server</option>
                            <option value="sqllite">SQL Lite</option>
                            <option value="mariadb">MariaDB</option>
                        </select>
                    </div>
                    <br>
                    <div class="button-position">
                    <button class="btn btn-success" name="button"value="database" type="submit">Próxima Tela</button>
                    </div>
                </div>
                <!--div database -->
            </form>
            <!--form database -->
        </div>
    </section>

</body>

</html>