<?php include "header.php" ?>

<div class="col-md-12">
  <a href="utilisateurs.php"><strong><i class="glyphicon glyphicon-refresh"></i> Utilisateurs</strong></a>  
  <hr />
</div>
<div class="col-md-12">

<?php
connecte("ogpp");
$sql="SELECT * FROM utilisateurs";
$res=mysql_query($sql) or die("Erreur de requete $sql");
while ($ligne=mysql_fetch_array($res)) {
extract($ligne);
?>

<div>
    <p><?php echo $user_nom; ?></p>
</div>

<!--   <table class="table table-striped">
    <thead>
      <tr>
        <th>#</th>
        <th>Nom</th>
        <th>Prénom</th>
        <th>Login</th>
        <th>Tel</th>
        <th>Email</th>
        <th>Service</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
    <tr>
        <td>1</td>
        <td>Heuzé</td>
        <td>Florent</td>
        <td>heuzef</td>
        <td>0631326654</td>
        <td>contact@heuzef.com</td>
        <td>Informatique</td>
        <td><a href="edit_utilisateurs.php"><i class="glyphicon glyphicon-pencil">&nbsp;</i></a><a href="delete_utilisateurs.php"><i class="glyphicon glyphicon-trash">&nbsp;</i></a></td>
    </tr>
    <tr>
        <td>2</td>
        <td>Bébien</td>
        <td>Cyril</td>
        <td>bebienc</td>
        <td>0600000000</td>
        <td>bebienc@pharaon.com</td>
        <td>Informatique</td>
        <td><a href="edit_utilisateurs.php"><i class="glyphicon glyphicon-pencil">&nbsp;</i></a><a href="delete_utilisateurs.php"><i class="glyphicon glyphicon-trash">&nbsp;</i></a></td>
    </tr>
    </tbody>
  </table>
  <hr />
</div> -->

<?php } ?>
<?php include "footer.php" ?>