<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ajout Client</title>
    <link rel="stylesheet" href="bootstrap"/>
    <script src="main.js"></script>
</head>
<body >

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
                <div class="panel-heading">Formulaire d'Ajout des clients</div>
                <div class="panel-body">
                    <form action="clientController" method="POST">
                        <div class="form-group">
                            <label class="control-label" for="nom">Nom</label>
                            <input class="form-control" type="text" name="nom" id="nom" placeholder="Entrer un nom" value="<?php $nom?>"/>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="prenom">Prénom</label>
                            <input class="form-control" type="text" name="prenom" id="prenom" placeholder="Entrer un prénom" value="<?php $prenom?>"/>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="adresse">Adresse</label>
                            <input class="form-control"  type="text" name="adresse" id="adresse" placeholder="Entrer une adresse" value="<?php $adresse?>"/>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="telephone">Téléphone</label>
                            <input class="form-control" type="text" name="telephone" id="telephone" placeholder="Entrer le téléphone" value="<?php $telephone?>"/>
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
                <div class="panel-heading">Liste des clients</div>
                <div class="panel-body">
                    <table class="table">
                        <tr>
                            <td>ID</td>
                            <td>Nom Client</td>
                            <td>Prenom Client</td>
                            <td>Adresse</td>
                            <td>Telephone</td>
                            <td>Action</td>
                            <td>Action</td>

                        </tr>
                        <?php
                        require_once '../../model/db.php';
                        require_once '../../model/clientdb.php';
                        $list = listeClient();
                        foreach ($list as $key => $value) {
                            echo " <tr>
                                    <td> $value[0] </td>
                                    <td> $value[1] </td>
                                    <td> $value[2] </td>
                                    <td> $value[3] </td>
                                    <td> $value[4] </td>
                                    <td><a class='btn btn-info' href='clientController&id=$value[0]' name='editer'>Editer</a></td>
                                    <td><a class='btn btn-danger' href='clientController?id=$value[0]'>Supprimer</a></td>
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