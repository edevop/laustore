<?php
// require_once('Routes.php');

// # Loading classses from classes directory to our index
// /**
//  * 
//  * @__autoload function
//  * @check if the consulted class exist
//  * @check if the controller for the class exist
//  * 
//  */
// function __autoload($class_name) {
//     if ( file_exists('./classes/'.$class_name.'.php') ):
//         require_once './classes/'.$class_name.'.php';
//     elseif ( file_exists('./controllers/'.$class_name.'.php') ):
//         require_once './controllers/'.$class_name.'.php';
//     endif;
// }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?=$title?></title>

    <link href="https://fonts.googleapis.com/css?family=Anton|Yanone+Kaffeesatz" rel="stylesheet">

    <link rel="stylesheet" href="public/assets/css/master.css">
    <link rel="stylesheet" href="public/assets/css/master-mobile.css">

</head>
<body>

    <div id="app" class="">
        <div id="promo--tooling"></div>
        <div id="app--header" class="">

        </div>
        <div id="app--showcase" class="">
            <div class="showcase-banner--model-1" role="banner">

            </div>
        </div>

        <div class="banner-info--transparent">
            <h4>Los articulos mostrados en este sitio no pertenecen al mismo <a href="#">Saber mas</a> </h4>
        </div>

        <div class="showcase--model-2 zltr">
            <div class="active model-1 a" style="background-image: url('public/assets/images/showcase/model-1.jpg');">

            </div>
            <div class="active b">
                <div class="box-sections blur">
                    <h3>Encuentra toda la vestimenta playera que necesitas para tus vacasiones.</h3>
                    <h1>Las olas esperan</h1>
                    <h3>Adquiere tu prenda en linea</h3>
                    <div class="btn-secuense">
                        <button>ver chicas</button>
                        <button>ver chicos</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="showcase--model-2">
            <div class="active">
                <div class="box-sections">
                    <h3>Encuentra toda la vestimenta playera que necesitas para tus vacasiones.</h3>
                    <h1>Las olas esperan</h1>
                    <h3>Adquiere tu prenda en linea</h3>
                    <div class="btn-secuense">
                        <button>ver chicas</button>
                        <button>ver chicos</button>
                    </div>
                </div>
            </div>
            <div class="active model-1" style="background-image: url('public/assets/images/showcase/model-2.jpg');">

            </div>
        </div>

        <footer>


        </footer>
    </div>

    <script src="" charset="utf-8"></script>
    <script src="" charset="utf-8"></script>
    <script src="" charset="utf-8"></script>
    <script type="text/javascript">

    </script>

</body>
</html>
