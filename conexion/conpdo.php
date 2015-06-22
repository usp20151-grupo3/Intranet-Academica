<?php
function conpdo(){
    try{
        $pdo = new PDO("mysql: host=localhost; dbname=intranet","root","");
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    return $pdo;
}
?>