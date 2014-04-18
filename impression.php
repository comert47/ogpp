<?php include "header.php" ?>

<div class="col-md-12">
  <a href="impression.php"><strong><i class="glyphicon glyphicon-refresh"></i> Impression</strong></a>  
  <hr />
</div>
<div class="col-md-12">
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Imprimante</th>
        <th>Utilisateur</th>
      </tr>
    </thead>
    <tbody>
    <?php
        connecte("ogpp");
        $sql="SELECT * FROM impression";
        $res=mysql_query($sql) or die("Erreur de requete $sql");
        while ($ligne=mysql_fetch_array($res)) {
        extract($ligne);
    ?>
    <tr>
        <td><?php echo $print_id; ?></td>
        <td><?php echo $user_id; ?></td>
    </tr>
    <?php } ?>
    </tbody>
  </table>
  <hr />
</div>

<?php include "footer.php" ?>