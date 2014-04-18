<?php include "header.php" ?>

<div class="col-md-12">
  <a href="locaux.php"><strong><i class="glyphicon glyphicon-refresh"></i> Locaux</strong></a>  
  <hr />
</div>
<div class="col-md-12">
  <table class="table table-striped">
    <thead>
      <tr>
        <th>#</th>
        <th>Numéro</th>
        <th>Bâtiment</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
    <?php
        connecte("ogpp");
        $sql="SELECT * FROM locaux";
        $res=mysql_query($sql) or die("Erreur de requete $sql");
        while ($ligne=mysql_fetch_array($res)) {
        extract($ligne);
    ?>
    <tr>
        <td><?php echo $locaux_id; ?></td>
        <td><?php echo $locaux_num; ?></td>
        <td><?php echo $locaux_batiment; ?></td>
        <td><a href="edit_locaux.php"><i class="glyphicon glyphicon-pencil">&nbsp;</i></a><a href="delete_locaux.php"><i class="glyphicon glyphicon-trash">&nbsp;</i></a></td>
    </tr>
    <?php } ?>
    </tbody>
  </table>
  <hr />
</div>

<?php include "footer.php" ?>