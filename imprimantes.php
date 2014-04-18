<?php include "header.php" ?>

<div class="col-md-12">
  <a href="imprimantes.php"><strong><i class="glyphicon glyphicon-refresh"></i> Imprimantes</strong></a>  
  <hr />
</div>
<div class="col-md-12">
  <table class="table table-striped">
    <thead>
      <tr>
        <th>#</th>
        <th>Nom</th>
        <th>Modèle</th>
        <th>Service</th>
        <th>Localisation</th>
        <!-- <th>Étage</th> -->
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
    <?php
        connecte("ogpp");
        $sql="SELECT * FROM imprimantes";
        $res=mysql_query($sql) or die("Erreur de requete $sql");
        while ($ligne=mysql_fetch_array($res)) {
        extract($ligne);
    ?>
    <tr>
        <td><?php echo $print_id; ?></td>
        <td><?php echo $print_nom; ?></td>
        <td><?php echo $print_model; ?></td>
        <td><?php echo $print_service; ?></td>
        <!-- <td><?php echo $print_etage; ?></td> -->
        <td><?php echo $locaux_id; ?></td>
        <td><a href="edit_imprimantes.php"><i class="glyphicon glyphicon-pencil">&nbsp;</i></a><a href="delete_imprimantes.php"><i class="glyphicon glyphicon-trash">&nbsp;</i></a></td>
    </tr>
    <?php } ?>
    </tbody>
  </table>
  <hr />
</div>

<?php include "footer.php" ?>