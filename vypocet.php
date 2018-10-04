


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>Starter Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="starter-template.css" rel="stylesheet">
  </head>
  <body>
    <nav class="navbar navbar-expand-md navbar-light fixed-top" style="background-color: #e3f2fd;">
      <a class="navbar-brand" href="/lekce-2/pythagoras.php">SpoctiTo!</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      
      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="/lekce-2/pythagoras.php">Spocti obsah trojuhelniku<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/lekce-2/pythagoras2.php">Spocti obsah obdelniku</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="/lekce-2/delkazivota.php">Spocti svou delku zivota</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Zjisti vice</a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
              <a class="dropdown-item" href="#">Jak se to spocte?</a>
              <a class="dropdown-item" href="#">Kdo jste?</a>
              <a class="dropdown-item" href="#">Jak se vam muzu odvdecit za spocteni?</a>
            </div>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
    </nav>

    <main role="main" class="container">

      <div class="starter-template">
        <h1>Spocetls obsah trojuhelniku!</h1>
        <p class="lead">Bravo!</p>
      </div>

<?php
$vyska = sin(deg2rad($_POST['uhel'])) * $_REQUEST['delka'];
$trojuhelnikObsah = round(($vyska * $_REQUEST['delka'])/2,1) ;
?>
<hr></hr>
<p>Tve zadani:</p>
<hr></hr>
<div class="container">
  <div class="row">
    <div class="col">
 
<?php
echo "<h2>Delka: " . $_POST['delka'] . " cm</h2>";
?>

    </div>
    <div class="col">
<?php
echo "<h2>Uhel: " . $_POST['uhel'] . "°</h2>";
?>
    </div>
    <div class="col">
<?php
echo "<h2>Vyska: " . round($vyska,2) . " cm</h2>";
?>
    </div>
  </div>
</div>
<hr></hr>
<p>Vysledek:</p>
<hr></hr>
<div class="container">
  <div class="row">
      <div class="col">
<?php
echo "<br>";

echo "<h1>Rovnostranný trojúhelník o straně délky " . $_POST['delka'] . " cm a úhlu " . $_POST['uhel'] . " stupňů má obsah " . round($trojuhelnikObsah) . " cm2.</h1>";
?>

      </div>
      </div>
      </div>
<hr></hr>
<img src="/lekce-1/wohoo.jpg" class="img-fluid" alt="Responsive image">

    </main><!-- /.container -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="js/jquery-slim.min.js"><\/script>')</script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
