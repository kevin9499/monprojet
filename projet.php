<h3> Formulaire d'ajout d'un projet</h3>
    <form method="post" action="">
        <table border ="0">
            <tr><td> Libelle : </td> <td><div class="form-group"><input class="form-control" type ="text" name="libelle" value="libelle"></td></tr></div>
            <tr><td> Date de début : </td> <td><div class="form-group"><input class="form-control" type ="date" name="date_debut"></td></tr></div>
            <tr><td> Date de fin : </td> <td><div class="form-group"><input class="form-control" type ="date" name="date_fin"></td></tr></div>
            <tr><td> Equipe : </td> <td><div class="form-group"><select class="form-control" name="idequipe">
                                        <option value ="1"> Developement</option>
                                        <option value ="2">Reseau</option>
                                        </select></td></tr></div>
            <tr><td> Priorité : </td> <td><div class="form-group"><select class="form-control" name="idpriorite">
                                        <option value ="1"> Basse</option>
                                        <option value ="2"> Moyenne</option>
                                        <option value ="3"> Haute</option>
                                        </select></td></tr></div>
        </table>
        <div class="bouton col-sm-12">
          <?php
    if (isset($_GET['idprojet']) && !empty($_GET['idprojet']) && is_numeric($_GET['idprojet']))
    {      
          
    }
    else
    {
        echo" <input  class='btp btn btn-primary' type='submit' name='Enregistrer' value='Enregistrer'>";            
    }
         ?>
         <?php 
    if (isset($_GET['idprojet']) && !empty($_GET['idprojet']) && is_numeric($_GET['idprojet']))
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
        insert_projet($_POST);
        echo '<div class="col-sm-12"><p> Projet ajouté !</p></div>';             
    }
    if (isset ($_POST['Modifier']))
    {
        update_projet($_POST);
        echo '<div class="col-sm-12"><p> Projet modifié !</p></div>';
    }
    if (isset($_GET['idprojet']) and isset ($_GET['action'])  and $_GET['action'] =="sup")
    {
        $idprojet = $_GET['idprojet'];
        delete_projet($idprojet);
        echo '<div class="col-sm-12"><p> Projet supprimé !</p></div>';             
         
    }
?>
    <div class="tab1 col-sm-7">
    <?php
    affiche_projet();
    echo"<a href='index2.php?page=4'><input  class='btp3 btn btn-primary' type='submit' name='Inserer Projet' value='Inserer projet'></a>";

    ?>
    </div>