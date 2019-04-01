
<h3> Formulaire d'ajout d'un ingenieur</h3>
    <form class="col-sm-12" method="post" action="">
        <table  " border ="0">
            <tr><td> Nom : </td> <td><div class="form-group"><input class="form-control" type ="text" name="nom" value="nom"></td></tr></div>
            <tr><td> Prenom : </td> <td><div class="form-group"><input class="form-control" type ="text" name="prenom" value="prenom"></td></tr></div>
            <tr><td> Email : </td> <td><div class="form-group"><input class="form-control" type ="text" name="email" value="email"></td></tr></div>
            <tr><td> Mot de passe : </td> <td><div class="form-group"><input class="form-control" type ="text" name="mdp"value="mdp"></td></tr></div>
            <tr><td> Diplome : </td> <td><div class="form-group"><input class="form-control" type ="text" name="diplome" value="diplome"></td></tr></div>
            <tr><td> Date de naissance : </td> <td><div class="form-group"><input  class="form-control" type ="date" name="date_nais"></td></tr></div>
            <tr><td> Equipe : </td> <td><div class="form-group"><select class="form-control" name="idequipe">
                                        
                                        <?php
                                        select_libelle_equipes (); 
                                        ?>
                                       </select> </td></tr></div>
        </table>
          <div class="bouton col-sm-12">
          <?php
    if (isset($_GET['idinge']) && !empty($_GET['idinge']) && is_numeric($_GET['idinge']))
    {      
          
    }
    else
    {
        echo" <input  class='btp btn btn-primary' type='submit' name='Enregistrer' value='Enregistrer'>";            
    }
         ?>
         <?php 
    if (isset($_GET['idinge']) && !empty($_GET['idinge']) && is_numeric($_GET['idinge']))
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
        insert_ingenieur($_POST);
        echo '<div class="col-sm-12"><p> Ingenieur ajouté !</p></div>';
    }
    if (isset ($_POST['Modifier']))
    {
        update_ingenieur($_POST);
        echo '<div class="col-sm-12"><p> Ingenieur modifié !</p></div>';
    }
    if (isset($_GET['idinge']) and isset ($_GET['action'])  and $_GET['action'] =="sup")
    {
        $idinge = $_GET['idinge'];
        delete_ingenieur($idinge);
        echo '<div class="col-sm-12"><p> Ingenieur supprimé !</p></div>';

    }
    ?>
    <div class="tab1 col-sm-offset-3 col-sm-9">
    <?php
    affiche_ingenieurr();
    ?>
       </div>

    <?php
    echo"<a href='index2.php?page=1'><input  class='btp2 btn btn-primary' type='submit' name='Inserer Ingenieur' value='Inserer ingenieur'></a>";    
    ?>

    
