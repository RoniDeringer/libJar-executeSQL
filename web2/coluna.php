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
    <title>parte2</title>
</head>
<style>
    .focoAtual {
        background: #fdecb2;
    }
</style>

<body>
    <section>
        <div class="container" id="principal">

        <form action="Controller.php" method="POST" id="coluna">
            <fieldset>
                <legend>Tabela:</legend>
                <div class="tabela">
                    <h2>Tabela</h2>
                    <div class="input-container">
                        <input type="text" name="nome" id="nome" placeholder="Nome" required>
                    </div>
                    <h1></h1>
                </div>
                <!--div tabela -->
                <fieldset>
                    <legend>Coluna:</legend>
                    <div class="endereco">
                        <h2>Coluna</h2>
                        <div class="input-container">
                            <input type="text" name="nome" id="nome"  placeholder="Nome"  required>
                        </div>

                        <div class="input-container">
                            <label class="container">Tipo
                                <select name="tipo">
                                    <option value="varchar">Varchar</option>
                                    <option value="int">Int</option>
                                </select>
                            </label>    
                        </div>

                        <div class="input-container col-md-8">
                            <label class="container">Not Null
                                <input type="checkbox" name="notnull">
                            </label>
                        </div>

                        <div class="input-container col-md-8">
                            <label class="container">PK
                                <input type="checkbox" name="pk">
                            </label>
                        </div>

                        <div class="button-position">
                            <button type="submit">Enviar</button>
                        </div>
                    </div>
                    <!--div coluna -->
                </fieldset> 
                <!-- fieldset Coluna -->

            </fieldset>
            <!-- fieldset Tabela -->
        </form>
            <!--form coluna -->

        </div>
    </section>

</body>
<script src="https://code.jquery.com/jquery-2.2.4.min.js"
    integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous">
    </script>


<script>

    var $collectionHolder;
    $(document).ready(function () {
        $collectionHolder = $('#principal');
        $collectionHolder.data('index', $collectionHolder.find('.panel').length)
        $collectionHolder.find('.panel').each(function () {
            footerBtns($(this));
        });
    });
    function footerBtns($this) {
        var $panelFooter = $('<div class="panel-footer"></div>');
        var $btnRemoveColumn = $('<a href="#" class="btn btn-danger">Remove</a>');
        var $btnAddColumn = $('<a href="#" class="btn btn-success">Nova Coluna</a>');
        var $espaçoBtn = $('<a href="#"> </a>');
        $panelFooter.append($btnRemoveColumn)
        $panelFooter.append($espaçoBtn)
        $panelFooter.append($btnAddColumn)
        $btnAddColumn.click(function (e) {
            newColumn()
        });
        $btnRemoveColumn.click(function (e) {
            deleteColumn($(this), e)
        });
        $this.append($panelFooter)
    }
    function newColumn() {
        $("#principal").clone().appendTo(principal)
    }

</script>

</html>
