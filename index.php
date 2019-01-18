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
  <link rel="stylesheet" type="text/css" href="style/style.css">

</head>

<body>

  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">Portfolio</a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li class="active"><a href="#">Home</a></li>
          <li><a href="#">About</a></li>
          <li><a href="#">Gallery</a></li>
          <li><a href="#">Contact</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="loquesea">

  </div>
  <div class="row">
    <div class="col-sm-1"></div>
    <div class="col-sm-10">
      <div class="panel">
        <div class="panel-heading primary text-center">
          <h1> MESSAGES HERE </h1>
        </div>
        <div class="panel-body text-center scroll">
          <?php
            require_once('util/db_manager.php');
            
            if (isset($_POST['submit'])){
                
                $userName = $_POST['userName'];
                $msg = $_POST['msg'];
                insert ($userName, $msg);
            }
            get_msg();
          ?>
        </div>
      </div>
      <div class="col-sm-1"></div>
    </div>
  </div>

  <form method="POST" action="#">
    <div class="row">
      <div class="col-sm-4"></div>
      <div class="col-sm-4 text-center">
        <input type="text" name="userName" class="form-control" placeholder="Type here your username" id="usr">
        <br>
        <input type="text" name="msg" class="form-control msg" placeholder="Write here your comment" id="usr">
        <br>
        <input type="submit" name="submit" class="btn btn-info" value="Input Button">
      </div>
      <div class="col-sm-4"></div>
    </div>
  </form>
  </div>
</body>

</html>