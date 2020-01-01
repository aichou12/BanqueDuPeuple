<?php
require_once 'db.php';
    function addClient($nom,$prenom,$adresse,$telephone)
    {
        $sql ="INSERT INTO client VALUES(Null,'$nom','$prenom','$adresse','$telephone')";
        $conn = getConnection();
        $conn->exec($sql);
    }
    
    function updateClient($id,$nom,$prenom,$adresse,$telephone){
        $sql ="UPDATE  client SET nom =$nom, prenom =$prenom,adresse=$adresse,telephone=$telephone WHERE id=$id)";
        $conn = getConnection();
        return $conn->exec($sql);
    }
    function deleteClient($id){
        $sql="DELETE FROM client where id=$id";
        $conn = getConnection();
        return $conn->exec($sql);
    }
    function listeClient(){
        $sql ="SELECT * from client";
        $conn = getConnection();
        return $conn->query($sql);
    }
    function oneClient($id){
        $sql ="SELECT * from client where id=$id";
        $conn = getConnection();
        return $conn->query($sql);
    }
?>

