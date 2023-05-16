<?php
try {
    $db=new PDO("mysql:host=localhost;dbname=pemrogramanweb","root","");
}catch (PDOException $e){
    echo $e->getMessage();
}
?>
