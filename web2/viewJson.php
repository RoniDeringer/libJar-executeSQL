<?php

namespace Controller;

require_once "Controller.php";


$json = convertJson($_SESSION['database']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>ViewJson</title>
</head>

<body>
    <div class="container-md">
        <div class="card text-dark bg-light" style="max-width: 40rem;">
            <div class="card-header">JSON</div>
            <div class="card-body">
                <div id="demo"></div>
            </div>
        </div>
    
        <form action="Controller.php" method="POST">
            <button class="btn btn-dark" name="button" value="exportJsonByViewJson" type="submit">Exportar JSON</button>
        </form>
    </div>

</body>

<script>

    document.getElementById("demo").innerHTML = "<pre>"+JSON.stringify(<?php echo $json; ?>,undefined, 2) +"</pre>"

</script>
</html>
