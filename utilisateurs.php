<?php include "header.php" ?>

<div class="col-md-12">
  <a href="utilisateurs.php"><strong><i class="glyphicon glyphicon-refresh"></i> Utilisateurs</strong></a>  
  <hr />
</div>
<div class="col-md-12">

  <table class="table table-striped">
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
    <?php
        connecte("ogpp");
        $sql="SELECT * FROM utilisateurs";
        $res=mysql_query($sql) or die("Erreur de requete $sql");
        while ($ligne=mysql_fetch_array($res)) {
        extract($ligne);
    ?>
    <tr>
        <td><?php echo $user_id; ?></td>
        <td><?php echo $user_nom; ?></td>
        <td><?php echo $user_prenom; ?></td>
        <td><?php echo $user_login; ?></td>
        <td><?php echo $user_tel; ?></td>
        <td><?php echo $user_mail; ?></td>
        <td><?php echo $service_id; ?></td>
        <td><a href="edit_utilisateurs.php"><i class="glyphicon glyphicon-pencil">&nbsp;</i></a><a href="delete_utilisateurs.php"><i class="glyphicon glyphicon-trash">&nbsp;</i></a></td>
    </tr>
    <?php } ?>
    </tbody>
  </table>
  <hr />
</div>

<?php include "footer.php" ?>