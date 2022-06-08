<?php
include "conexion.php";

$sql = 'SELECT * FROM Organos';

$res = $con->query($sql)

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Venta de organos </title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</head>
<body>
      <nav class="navbar navbar-expand-sm navbar-light bg-primary">
          <div class="container-fluid">
              <a class="navbar-brand" href="#">primary</a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarID"
                  aria-controls="navbarID" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarID">
                  <div class="navbar-nav">
                      <a class="nav-link active" aria-current="page" href="#">Home</a>
                      
                  </div>

                  <div class="navbar-nav">
                      <a class="nav-link active" aria-current="page" href="#">Home</a>
                      
                  </div>
              </div>
          </div>
      </nav>
<h1>Catalogo</h1>

<div class="container-fluid !direction !spacing">
  <div class="row ">

  <?php
  while ($dato = $res->fetch_assoc()){
    echo '<div class="col-sm-6 col-md-3 col-lg-2">'; 
    echo "<img width='100' src='". $dato['foto'] ."'>";
    echo "<h4>". $dato['organo'] ."<h4>";
    echo '</div>'; 
  }

  ?>
  </div>
</div>


</body>
</html>