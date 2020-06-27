<?php
    require("App/dataAccess/Conexion.php")
   
    /* if(isset($_POST["message"])){
        if($_POST["message"] == 1){
            echo "regsitrado";
            $_POST["message"] = 0;
        }
    } */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="App/view/styles.css">
    <link rel="icon" href="images/toothico.png">
    
    <title>DentaPixel</title>
</head>
<body class="bg-secondary">
    
    <?php include ("App/view/login.php"); ?>



    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" ></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" ></script>
</body>
</html>
   
