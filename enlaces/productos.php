<?php

include ("php-modules/swicher.php");

try {
    
    $id = $_GET["id"];
    
    $pdo = new PDO("sqlite:sql/pro.db");
    
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $stmt = $pdo->query("SELECT * FROM defaul");
    
    $stmtprod = $pdo->query("SELECT * FROM html where id = ?");
    $stmtprod->execute([$id]);

    $product = $stmtprod->fetch(PDO::FETCH_ASSOC);
    
    $htmle = producto($id,$product);

    if ($id == "" | $id == "0") {
        foreach ($stmt as $row) { echo $row['htmldf'] . "<br>"; }}
    else{
            echo $htmle;
        }
    }

catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>
