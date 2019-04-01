<h3> Formulaire d'ajout d'un client</h3>
    <form method="post" action="">
        <table border ="0">
            <tr><td> Entreprise : </td> <td><div class="form-group"><input class="form-control" type ="text" name="orange" value="entreprise"></td></tr></div>
            <tr><td> Email : </td> <td><div class="form-group"><input class="form-control" type ="text" name="nom" value="email"></td></tr></div>
            <tr><td> Nom : </td> <td><div class="form-group"><input class="form-control" type ="text" name="prenom" value="nom"></td></tr></div>
            <tr><td> Prenom: </td> <td><div class="form-group"><input class="form-control" type ="text" name="email" value="prenom"></td></tr></div>
            <tr><td> Mot de passe : </td> <td><div class="form-group"><input class="form-control" type ="text" name="mdp" value="mdp"></td></tr></div>
        </table>
        <div class="bouton col-sm-12">
          <?php
    if (isset($_GET['idclient']) && !empty($_GET['idclient']) && is_numeric($_GET['idclient']))
    {      
          
    }
    else
    {
        echo" <input  class='btp btn btn-primary' type='submit' name='Enregistrer' value='Enregistrer'>";            
    }
         ?>
         <?php 
    if (isset($_GET['idclient']) && !empty($_GET['idclient']) && is_numeric($_GET['idclient']))
    {      
        echo"<input class='btp btn btn-primary' type='submit' name='Modifier' value='Modifier' >"; 
    }
    ?>
           <input class="btp btn btn-primary" type="hidden" name="hidden" value="<?php  echo $idupdate; ?>">
           <input class="btp btn btn-primary" type="reset" name="Annuler" value="Annuler">
           </div>
    </form>
<?php
    if (isset($_POST['Enregistrer']))
    {
        insert_client($_POST);
        echo '<div class="col-sm-12"><p> Client ajouté !</p></div>';
    }
    if (isset ($_POST['Modifier']))
    {
        update_client($_POST);
        echo '<div class="col-sm-12"><p> Client modifié !</p></div>';
    }
    if (isset($_GET['idclient']) and isset ($_GET['action'])  and $_GET['action'] =="sup")
    {
        $idclient = $_GET['idclient'];
        delete_client($idclient);
        echo '<div class="col-sm-12"><p> Client supprimer !</p></div>';
    }
?>
    <div class="tab1 col-sm-offset-2 col-sm-8">
    <?php
    affiche_client();
    echo"<a href='index2.php?page=2'><input  class='btp1 btn btn-primary col-sm-offset-4 col-sm-3' type='submit' name='Inserer Client' value='Inserer client'></a>";
    ?>
    </div>