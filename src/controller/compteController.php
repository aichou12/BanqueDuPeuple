<?php

require_once '../model/comptedb.php';
$client='';
$numero='';
$solde='';
//ajout
if(isset($_POST['envoyer']))
{
    extract($_POST);
    $result=addCompte($_POST['client'],$_POST['numero'],$_POST['solde']);
}
//Suppression
if(isset($_GET['id']))
{
    deleteCompte($_GET['id']);
}
//Modifier
if(isset($_GET['editer']))
{
    $compte=oneCompte($_GET['editer']);
    if(count($compte)==1)
    {
        $row=$compte->fetch_array();
        $client=$row['client'];
        $numero=$row['numero'];
        $solde=$row['solde'];
    }
}
header("location:comptes");

?>