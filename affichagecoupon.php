<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js">
    <link rel="stylesheet" href="https://bootswatch.com/5/lux/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">

  
    <title>Document</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Nom de librerie</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
      
          <div class="collapse navbar-collapse" id="navbarColor01">
            <ul class="navbar-nav me-auto">
              <li class="nav-item">
                <a class="nav-link active" href="#">Accueil
                  <span class="visually-hidden">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Hale</a>
              </li>
            
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <a class="dropdown-item" href="#">Something else here</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">Separated link</a>
                </div>
              </li>
            </ul>
            <form class="d-flex">
              <input class="form-control me-sm-2" type="text" placeholder="Search">
              <button class="btn btn-success my-2 my-sm-0" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>




   <?php
        $servername = 'localhost';
        $username = 'root';
        $password = '';

        //On essaie de se connecter
        try {
            $conn = new PDO("mysql:host=$servername;dbname=librerie", $username, $password);
            //On définit le mode d'erreur de PDO sur Exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Erreur : " . $e->getMessage();
        }
      
        if (isset($_POST['supprimer'])){
          $delete = "DELETE FROM reclamations where id like{$rows['id']}";
          $conn->exec($delete);
        }


        $sql =  "SELECT * FROM coupon where emailuser ='hale@gmail.com'";
        print "<form action ='supprimer.php' >";
            print "<table class=table border=2, width=800>";
            print "<th class=col> reclamation </th>";
            print "<th class=col> codecoupon </th>";
            print "<th class=col> prix </th>";


        foreach  ($conn->query($sql) as $row) {
        
            print "<tr>";
            print "<td>". $row['emailuser'] . "</td>";
            print "<td>". $row['codecoupon'] . "</td>";
            print "<td>". $row['prix'] . " dt" ."</td>";




            print "</tr>";
        }
        print "<table>";
       
        print "</form>";

        ?>
    
</body>
</html>

