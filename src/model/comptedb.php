<?php
require_once 'db.php';
function addCompte($client_id,$numero,$solde)
{
    $sql ="INSERT INTO compte VALUES(Null,'$client_id','$numero','$solde')";
    $conn = getConnection();
    $conn->exec($sql);
}

function updateCompte($id,$client_id,$numero,$solde){
    $sql ="UPDATE  compte SET client_id =$client_id, numero =$numero,solde=$solde WHERE id=$id)";
    $conn = getConnection();
    return $conn->exec($sql);
}
function deleteCompte($id){
    $sql="DELETE FROM compte where id=$id";
    $conn = getConnection();
    return $conn->exec($sql);
}
function listeCompte(){
    $sql ="SELECT * from compte";
    $conn = getConnection();
    return $conn->query($sql);
}
function oneCompte($id){
    $sql ="SELECT * from compte where id=$id";
    $conn = getConnection();
    return $conn->query($sql);
}
?>
