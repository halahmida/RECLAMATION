
<?php
//connexion db
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
echo"bonjourr" ;

//Recuparation du variable de reclamation par son nom et la méthode GET
$reclamation = $_GET["reclamation"];
//$usermail = $_GET["useremail"];
$useremail = "hale@gmail.com";





$stmt = $conn->prepare("INSERT INTO reclamations (reclamation, emailuser) VALUES (:reclamation, :useremail)");
$stmt->bindParam(':reclamation', $reclamation);
$stmt->bindParam(':useremail', $useremail);

//$stmt->bindParam(':usermail', $useremail);
$stmt->execute();


?>