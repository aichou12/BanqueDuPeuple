<?php

require_once '../model/clientdb.php';
$nom='';
$prenom='';
$adresse='';
$telephone='';
//ajout
if(isset($_POST['envoyer']))
{
    extract($_POST);
    $result=addClient($_POST['nom'],$_POST['prenom'],$_POST['adresse'],$_POST['telephone']);
}
//Suppression
if(isset($_GET['id']))
{
    deleteClient($_GET['id']);
}
//Modifier
if(isset($_GET['editer']))
{
    $client=oneClient($_GET['editer']);
    if(count($client)==1)
    {
        $row=$client->fetch_array();
        $nom=$row['nom'];
        $prenom=$row['prenom'];
        $adresse=$row['adresse'];
        $telephone=$row['telephone'];
    }
}
header("location:clients");

?>