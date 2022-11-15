<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <title>Database</title>
</head>

<body>
    <section>
        <div class="container">
            <form action="Controller.php" method="post" name="database" id="database">
                <div class="database">
                    <h2>Database</h2>
                  
                    <div class="form-group">
                        <label for="nome">Nome do database</label>
                        <input type="text" class="form-control" name="nome" id="nome" aria-describedby="emailHelp" placeholder="Nome"required>
                        <small id="emailHelp" class="form-text text-muted">Esse database será criado!</small>
                    </div>
                  
                    <div class="form-group">
                        <label for="url">URL da conexão</label>
                        <input type="text" class="form-control"name="url" id="url" placeholder="URL" aria-describedby="emailHelp"required>
                        <small id="emailHelp" class="form-text text-muted">jdbc:mysql://localhost:</small>
                    </div>
                  
                    <div class="form-group">
                        <label for="porta">Porta da conexão</label>
                        <input type="number" class="form-control" name="porta" id="porta" aria-describedby="emailHelp" placeholder="Porta"required>
                    </div>
                  
                    <div class="form-group">
                        <label for="usuario">Usuário</label>
                        <input type="text" class="form-control" name="usuario" id="usuario" placeholder="Usuário" aria-describedby="emailHelp"required>
                        <small id="emailHelp" class="form-text text-muted">Padrão é o: root</small>
                    </div>
                  
                    <div class="form-group">
                        <label for="senha">Senha do usuário</label>
                        <input type="password" class="form-control" name="senha" id="senha" placeholder="Senha" aria-describedby="emailHelp">
                        <small id="emailHelp" class="form-text text-muted">Se não tiver senha deixe vazio</small>
                    </div>

                    <div class="input-container">
                        <label class="container">SGBD
                            <select required name="sgbd">
                                <option value="mysql">MySQL</option>
                                <option value="postgresql">PostgreSQL</option>
                                <option value="mongodb">MongoDB</option>
                            </select>
                        </label> 
                    </div>
                    <div class="button-position">
                        <button type="submit">Enviar</button>
                    </div>
                </div>
                <!--div database -->
            </form>
            <!--form database -->
        </div>
    </section>

</body>

</html>