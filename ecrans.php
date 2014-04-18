<?php include "header.php" ?>

<div class="col-md-12">
  <a href="ecrans.php"><strong><i class="glyphicon glyphicon-refresh"></i> Écrans</strong></a>  
  <hr />
</div>
<div class="col-md-12">
  <table class="table table-striped">
    <thead>
      <tr>
        <th>#</th>
        <th>Nom</th>
        <th>Modèle</th>
        <th>Taille</th>
        <th>Ordinateurs</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
    <?php
        connecte("ogpp");
        $sql="SELECT * FROM ecrans";
        $res=mysql_query($sql) or die("Erreur de requete $sql");
        while ($ligne=mysql_fetch_array($res)) {
        extract($ligne);
    ?>
    <tr>
        <td><?php echo $ecran_id; ?></td>
        <td><?php echo $ecran_nom; ?></td>
        <td><?php echo $ecran_model; ?></td>
        <td><?php echo $ecran_taille; ?></td>
        <td><?php echo $uc_id; ?></td>
        <td><a href="edit_ecrans.php"><i class="glyphicon glyphicon-pencil">&nbsp;</i></a><a href="delete_ecrans.php"><i class="glyphicon glyphicon-trash">&nbsp;</i></a></td>
    </tr>
    <?php } ?>
    </tbody>
  </table>
  <hr />
</div>

<?php include "footer.php" ?>