<?php include "header.php" ?>

<div class="col-md-12">
  <a href="ordinateurs.php"><strong><i class="glyphicon glyphicon-refresh"></i> Ordinateurs</strong></a>  
  <hr />
</div>
<div class="col-md-12">
  <table class="table table-striped">
    <thead>
      <tr>
        <th>#</th>
        <th>Nom</th>
        <th>Modèle</th>
        <th>Processeur</th>
        <th>RAM (Go)</th>
        <th>Disque Dur (Go)</th>
        <th>Utilisateur</th>
        <th>Local</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
    <?php
        connecte("ogpp");
        $sql="SELECT * FROM uc";
        $res=mysql_query($sql) or die("Erreur de requete $sql");
        while ($ligne=mysql_fetch_array($res)) {
        extract($ligne);
    ?>
    <tr>
        <td><?php echo $uc_id; ?></td>
        <td><?php echo $uc_nom; ?></td>
        <td><?php echo $uc_model; ?></td>
        <td><?php echo $uc_processeur; ?></td>
        <td><?php echo $uc_ram; ?></td>
        <td><?php echo $uc_dd; ?></td>
        <td><?php echo $user_id; ?></td>
        <td><?php echo $locaux_id; ?></td>
        <td><a href="edit_ordinateurs.php"><i class="glyphicon glyphicon-pencil">&nbsp;</i></a><a href="delete_ordinateurs.php"><i class="glyphicon glyphicon-trash">&nbsp;</i></a></td>
    </tr>
    <?php } ?>
    </tbody>
  </table>
  <hr />
</div>

<?php include "footer.php" ?>