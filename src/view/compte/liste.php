<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ajout Client</title>
    <link rel="stylesheet" href="bootstrap"/>
    <script src="main.js"></script>
</head>
<body>

<div class="nav navbar-primary">
    <div class="nav navbar-default">
        <div class="container">
        <ul class="nav navbar-nav"> 
        <li><a href="accueil">Accueil</a></li>
            <li><a href="clients">Gestion des clients</a></li>
            <li><a href="comptes">Gestion des comptes</a></li>
        </ul>
        
    </div>
        <div class="container col-md-6">
            <div class="panel panel-primary">
                <div class="panel-heading">Formulaire d'Ajout de Comptes</div>
                <div class="panel-body">
                    <form action="compteController" method="POST">
                    
                        
                        <div class="form-group">
                            <label class="control-label" for="numero">Numéro Compte</label>
                            <input class="form-control" type="text" name="numero" id="numero" placeholder="Entrer le numéro de compte" value="<?php $numero?>"/>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="solde">Solde</label>
                            <input class="form-control"  type="number" name="solde" id="solde" placeholder="Entrer le solde" value="<?php $solde?>"/>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="client">Client</label>
                            <select class="form-control" type="text" name="client" id="client">
                                <option value="0">Faites Votre choix</option>
                                <?php
                                require_once '../../model/clientdb.php';
                                $list = listeClient();
                                foreach ($list as $key => $value) {
                                    echo"<option value=\"$value[0]\">$value[0]  $value[1] $value[2]</option>";
                                 }
                                 ?>
                            </select>
                        </div>
                        <div class="form-group">
                        <input class="btn btn-success" type="submit" name="envoyer" id="envoyer" value="Envoyer"/>
                        <input class="btn btn-danger" type="reset" name="annuler" id="annuler" value="Annuler"/>
                        </div>
                    </form>
                </div>
                <div class="panel-footer"></div>
            </div>
        </div>
        <div class="container col-md-6">
            <div class="panel panel-primary">
                <div class="panel-heading">Liste des Comptes</div>
                <div class="panel-body">
                    <table class="table">
                        <tr>
                            <td>ID</td>
                            <td>Client</td>
                            <td>Numero</td>
                            <td>Solde</td>
                            <td>Action</td>
                            <td>Action</td>
                        </tr>
                        <?php
                        require_once '../../model/db.php';
                        require_once '../../model/comptedb.php';
                        $list = listeCompte();
                        foreach ($list as $key => $value) {
                            echo " <tr>
                                    <td> $value[0] </td>
                                    <td> $value[1] </td>
                                    <td> $value[2] </td>
                                    <td> $value[3] </td>
                                    <td><a class='btn btn-info' href='#' id='edit'' name='editer'>Editer</a></td>
                                    <td><a class='btn btn-danger' href='compteController?id=$value[0]'>Supprimer</a></td>
                                </tr>  
                                ";
                        }
                        ?>
                    </table>


                </div>
                <div class="panel-footer"></div>
            </div>
        </div>
    </div>
</body>
</html>