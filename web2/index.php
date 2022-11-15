<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database</title>
</head>
<style>
    .focoAtual {
        background: #fdecb2;
    }
</style>

<body>
    <section>
        <div class="container">
            <form action="Controller.php" method="post" name="database" id="database">
                <div class="database">
                    <h2>Database</h2>
                    <div class="input-container">
                        <input type="text" name="nome" id="nome" placeholder="Nome" required>
                    </div>
                    <div class="input-container">
                        <input type="text" name="url" id="url" placeholder="URL" required>
                    </div>
                    <div class="input-container">
                        <input type="number" name="porta" id="porta" placeholder="Porta" required>
                    </div>
                    <div class="input-container">
                        <input type="text" name="usuario" id="usuario"placeholder="Usuário" required>
                    </div>
                    <div class="input-container">
                        <input type="text" name="senha" id="senha" placeholder="Senha" required>
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