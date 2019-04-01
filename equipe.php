<h3> Formulaire d'ajout d'une equipe</h3>
    <form method="post" action="">
        <table border ="0">
        <p id="e1"><tr><td> Designation : </td> <td><div class="form-group"><input class="form-control" type ="text" name="designation" value="Designation"></td></tr></div></p>
            <tr><td> Date de creation : </td> <td><div class="form-group"><input  class="form-control" type ="date" name="date_creation"></td></tr></div>
        </table>
        <div class="bouton col-sm-12">
          <?php
    if (isset($_GET['idequipe']) && !empty($_GET['idequipe']) && is_numeric($_GET['idequipe']))
    {      
          
    }
    else
    {
        echo"<a href='#e1'><input  class='btp btn btn-primary' type='submit' name='Enregistrer' value='Enregistrer'></a>";            
    }
         ?>
         <?php 
    if (isset($_GET['idequipe']) && !empty($_GET['idequipe']) && is_numeric($_GET['idequipe']))
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
        insert_equipe($_POST);
        echo '<div class="col-sm-12"><p> Equipe ajouté !</p></div>';                     
    }
    if (isset ($_POST['Modifier']))
    {
        update_equipe($_POST);
        echo '<div class="col-sm-12"><p> Equipe modifié !</p></div>';
    }
    if (isset($_GET['idequipe']) and isset ($_GET['action'])  and $_GET['action'] =="sup")
    {
        $idequipe = $_GET['idequipe'];
        delete_equipe($idequipe);
        echo '<div class="col-sm-12"><p> Equipe supprimé !</p></div>';                        
    }

?>
    <div class="tab1 col-sm-offset-2 col-sm-8">
    <?php
    affiche_equipe();
    echo"<a href='index2.php?page=3'><input  class='btp1 btn btn-primary col-sm-offset-4 col-sm-3' type='submit' name='Inserer Equipe' value='Inserer equipe'></a>";

    ?>
    </div>