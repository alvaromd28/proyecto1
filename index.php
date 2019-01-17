<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="style/main.css">
        
    </head>
    <body>
        <div class="jumbotron text-center">
            <h1>Ayúdenos a mejorar</h1>
            <p>¿Cómo ha sido su experiencia en nuestro centro?</p> 
        </div>
     
        <div class="container">
            <form action="main.php" method="POST">
                <div class="row">
                    <div class="col-sm-2 col-md-offset-1">
                        <button name="face1" class="btn btn-lg btn-responsive button"><img src="img/5.png" class="img-responsive"></button>
                    </div>
                    <div class="col-sm-2">
                        <button name="face2" class="btn btn-lg btn-responsive button"><img src="img/4.png" class="img-responsive"></button>
                    </div>
                    <div class="col-sm-2">
                        <button name="face3" class="btn btn-lg btn-responsive button"><img src="img/3.png" class="img-responsive"></button>
                    </div>
                    <div class="col-sm-2">
                        <button name="face4" class="btn btn-lg btn-responsive button"><img src="img/2.png" class="img-responsive"></button>
                    </div>
                    <div class="col-sm-2">
                        <button name="face5" class="btn btn-lg btn-responsive button"><img src="img/1.png" class="img-responsive"></button>
                    </div>
                </div>
            </form>
        </div>
    </body>
</html>