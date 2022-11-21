<!DOCTYPE html>
<html lang="en">

<?php
session_start();
// var_dump($_SESSION['database']);
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>parte2</title>
</head>
<body>
        <div class="container" id="principal">

            <form action="Controller.php" method="POST">

                <div class="card text-white bg-success mb-3" >
                    <div class="card-header">Tabela</div>
                    <div class="card-body">

                        <div class="form-group">
                            <label for="nomeTabela">Nome da Tabela</label>
                            <input type="text" class="form-control" name="nomeTabela" id="nomeTabela" placeholder="Nome"required>
                        </div>
                    </div>
                </div>
                <!--div tabela -->
                <br>

                <div id="coluna">
                    <div class="card text-white bg-primary mb-3" name="formColuna[]">
                        <div class="card-header">Coluna</div>
                        <div class="card-body">
                        
                            <div class="form-group">
                                <input type="text" class="form-control" name="nomeColuna[]" id="nomeColuna"  placeholder="Nome da Coluna"required>
                            </div>
                            <br>

                            <div class="form-group">
                            <label for="nomeTabela">Tipo:</label>
                                <select class="form-select" name="tipo[]" aria-label="Default select example">
                                    <option selected value="varchar">VarChar</option>
                                    <option value="int">Int</option>
                                    <option value="date">Date</option>
                                    <option value="bool">Boolean</option>
                                </select>
                            </div>

                            <div class="form-group">
                            <label for="nomeTabela">NotNull:</label>
                                <select class="form-select" name="notnull[]" aria-label="Default select example">
                                    <option selected value="false">Não</option>
                                    <option value="true">Sim</option>
                                </select>
                            </div>

                            <div class="form-group">
                            <label for="nomeTabela">Primary Key:</label>
                                <select class="form-select" name="pk[]" aria-label="Default select example">
                                    <option selected value="false">Não</option>
                                    <option value="true">Sim</option>
                                </select>
                            </div>

                        </div><br>
                    </div>
                    <br>
                </div>    
                
            
                <div class="d-grid gap-3 d-md-block">
                    <button class="btn btn-primary" type="button" id="addColumn">Nova Coluna</button>
                    <button class="btn btn-success" name="button" value="newTable" type="submit">Nova Tabela</button>
                    <button class="btn btn-dark" name="button" value="exportJson" type="submit">Exportar JSON</button>
                    <button class="btn btn-danger" name="button" value="viewJson" type="submit">Visualizar JSON</button>
                </div>

            </form>
        </div>

</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    var stringHTML = $("#coluna").html()
    var cont = 0
    $(document).ready(function(){
        $("#addColumn").click(function(){
            $(stringHTML).appendTo("#coluna");
        });
    });
</script>
</html>
