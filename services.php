<?php include "header.php" ?>

<div class="col-md-12">
  <a href="services.php"><strong><i class="glyphicon glyphicon-refresh"></i> Services</strong></a>  
  <hr />
</div>
<div class="col-md-12">
  <table class="table table-striped">
    <thead>
      <tr>
        <th>#</th>
        <th>Nom du service</th>
      </tr>
    </thead>
    <tbody>
    <?php
        connecte("ogpp");
        $sql="SELECT * FROM services";
        $res=mysql_query($sql) or die("Erreur de requete $sql");
        while ($ligne=mysql_fetch_array($res)) {
        extract($ligne);
    ?>
    <tr>
        <td><?php echo $service_id; ?></td>
        <td><?php echo $service_nom; ?></td>
    </tr>
    <?php } ?>
    </tbody>
  </table>
  <hr />
</div>

<?php include "footer.php" ?>