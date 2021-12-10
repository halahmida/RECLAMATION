<?php


function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

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
$idreclamation = $_GET['id'];
$useremail = "hale@gmail.com";
$prix = 20; 
$random = generateRandomString();
try{
$stmt = $conn->prepare("INSERT INTO coupon (codecoupon, emailuser, prix) VALUES (:codecoupon, :emailuser, :prix)");
$stmt->bindParam(':codecoupon', $random);
$stmt->bindParam(':emailuser', $useremail);
$stmt->bindParam(':prix', $prix);

$stmt->execute();
}catch(Exception $e ){
    echo 'Exception reçue : ',  $e->getMessage(), "\n";}

?>