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


        $id = $_GET['id']; // get id through query string

        $del ="DELETE FROM `coupon` WHERE `coupon`.`id` = $id"; // delete query

      
          $conn->exec($del);

        ?>