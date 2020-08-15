 <!-- 
    Autor: dow99999
    
    Pagina con informacion sobre el bot de Discord Jaskier
 -->

 <!DOCTYPE html>
 <html>

 <head>
     <meta charset="UTF-8">
     <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@1,200&display=swap" rel="stylesheet">
     <link rel="stylesheet" type="text/css" href="style/style.css" />
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
     <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
     <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
     <title>Jaskier el Bot</title>
     <link rel="icon" href="./img/jaskier.png">
 </head>

 <body>

     <?php


        //si hay algo escrito en los parametros del get lo intentamos recojer
        if ($_GET) {
            if (array_key_exists('page', $_GET)) { //si el parametro 'page' existe recojemos el valor
                $page = $_GET['page'];
            }
        }


        //en el caso de que tengamos la pagina correcta la mostramos, si no la tenemos mostramos la pagina principal
        if (isset($page) && file_exists("views/$page.php")) {
            include_once("views/header.php");
            include_once("views/$page.php");
        } else {
            include_once("views/header.php");
            include_once("views/home.php");
        }

        include_once("views/footer.php");
        ?>

 </body>

 </html>