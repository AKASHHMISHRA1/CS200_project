<!DOCTYPE html>
<html lang="en">
<head>
  <title>Ingenuity</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>


  
</head>
<body>


    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">SCi-TEch</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-item nav-link " href="/Home.php">Home</a> <span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link " href="/Epsilon.php">Epsilon</a>
            <a class="nav-item nav-link " href="/Electromos.php">Electromos</a>
            <a class="nav-item nav-link active" href="#">Ingenuity</a>
            <a class="nav-item nav-link" href="/GDSC.php">GDSC</a>
            <a class="nav-item nav-link" href="/Motorsports.php">Motorsports</a>
          </div>
        </div>
      </nav>

      <div class="container">
        <div class="row justify-content-center">
          <h1>List of Available Components</h1>
        </div>
      </div>

<?php 
  include 'connect_mysql.php';
  $sql = "SELECT * FROM Ingenuity";
  $result = $conn->query($sql);
  
  if ($result->num_rows > 0) {
      // output data of each row
    
    <table class="table">
        <thead>
          <tr>
            <th>Components</th>
            <th>Components Left</th>
            <th>Total Number of Comp.  </th>
          </tr>
        </thead>
      <tbody>
        <tr>
            while($row = $result->fetch_assoc()) {
              <td>$row["Components"]</td> 
              <td>$row["Left"]</td>
              <td>$row["Total"]</td>
            }
        </tr>
      </tbody>
    </table>
      
  }else {
      echo "No components available";
}
?>
</body>
</html>
