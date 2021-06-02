<?php
    try{
        $dbcon = new PDO("mysql:dbhost=localhost,dbname=alphaware","root","");
    }catch(PDOException $errorMessage){
        echo $errorMessage->getMessage();
    }
?>