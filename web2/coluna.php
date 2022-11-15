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

            <div class="card text-white bg-primary mb-3">
                <div class="card-header">Tabela</div>
                <div class="card-body">

                    <div class="form-group">
                        <label for="nomeTabela">Nome da Tabela</label>
                        <input type="text" class="form-control" name="nomeTabela" id="nomeTabela" aria-describedby="emailHelp" placeholder="Nome"required>
                    </div>
                </div>
            </div>
            <!--div tabela -->
            <br>

            <div class="card text-dark bg-info mb-3" id="coluna">
                <div class="card-header">Coluna</div>
                <div class="card-body">
                
                    <div class="form-group">
                        <input type="text" class="form-control" name="nomeColuna" id="nomeColuna" aria-describedby="emailHelp" placeholder="Nome da Coluna"required>
                    </div>

                    <div class="form-group">
                        <select class="form-select" name="tipo" aria-label="Default select example">
                            <option selected value="varchar">VarChar</option>
                            <option value="int">Int</option>
                        </select>
                    </div>
                    <div class="form-check mb-3" >
                        <input class="form-check-input" type="checkbox"  id="flexCheckDefault" name="notnull">
                        <label class="form-check-label" for="flexCheckDefault">
                            Not Null
                        </label>
                    </div>

                    <div class="form-check mb-3" >
                        <input class="form-check-input" type="checkbox"  id="flexCheckDefault" name="pk">
                        <label class="form-check-label" for="flexCheckDefault">
                            Primary Key
                        </label>
                    </div>
                </div>
            </div>
            <br><br> 
           
            <div class="d-grid gap-2 d-md-block">
                <button class="btn btn-success" type="submit">Enviar</button>
                <button class="btn btn-primary" type="button" id="addColumn">AddColumn</button>
            </div>

        </form>
            <!--form coluna -->

        </div>

</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    $(document).ready(function(){
        $("#addColumn").click(function(){
            $("#coluna" ).clone().appendTo("#coluna" );
        });
    });
</script>
</html>
